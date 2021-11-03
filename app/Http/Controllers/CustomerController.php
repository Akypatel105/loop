<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\RegisterRepository;
use App\Repositories\UserRepository;
use Auth;
use DB;
use Illuminate\Http\Request;
use Log;
use Validator;

class CustomerController extends Controller
{
    protected $registerRepository;
    protected $userRepository;

    public function __construct(RegisterRepository $registerRepository, UserRepository $userRepository)
    {
        $this->registerRepository = $registerRepository;
        $this->userRepository = $userRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function customerLogin(Request $request)
    {
        $this->validate($request,
         [
            'customer_email' => 'required_without:customer_mobile',
            'customer_mobile' => 'required_without:customer_email',
            'customer_password' => 'required',
        ]);

        $email = $request->customer_email;
        $mobile = $request->customer_mobile;
        $credentials = [];

        if (!empty($mobile)) {
            $credentials = ['mobile' => $request->customer_mobile, 'password' => $request->customer_password];
        } else {
            $credentials = ['email' => $request->customer_email, 'password' => $request->customer_password];
        }
        // DB::enableQueryLog();
        if (Auth::attempt($credentials)) {
            return response()->json([
                'status' => 1,
                'data' => Auth::user(),
                'Message' => 'Successflly login!!!',
           ]);
        } else {
            // dd(DB::getQueryLog());

            return response()->json([
                'status' => 0,
                'data' => [],
                'Message' => 'Invalid Credentials!!!',
           ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request,
        [
            'cust_name' => 'required',
            'cust_email' => 'required_without:cust_mobile',
            'cust_mobile' => 'required_without:cust_email',
            'cust_password' => 'required',
       ]);
        $access_token = rand(1000, 9999);
        $user = [];
        $name = $request->cust_name;
        $cust_email = $request->cust_email;
        $cust_mobile = $request->cust_mobile;
        $cust_password = $request->cust_password;
        $gender = $request->gender;
        $isExist = $this->registerRepository->isUserExists($cust_email, '+91', $cust_mobile);

        if ($isExist) {
            return response()->json([
                'status' => 0,
                'data' => [],
                'Message' => 'You are already registered with us!!!',
           ]);
        }

        $user = [
        'name' => $name,
        'gender' => $gender,
        'email' => $cust_email,
        'mobile' => $cust_mobile,
        'password' => bcrypt($cust_password),
        'country_code' => config('constants.DEFAULT_COUNTRY_CODE'),
        'access_token' => 1234, // replace once you configure SMS gateway
        ];
        $res = User::create($user)->toArray();
        if (!empty($res)) {
            return response()->json([
                'status' => 1,
                'data' => $res,
                'Message' => 'We have sent OTP on your mobile/email!!!',
           ]);
        } else {
            return response()->json([
                'status' => 0,
                'data' => [],
                'Message' => 'Something went wrong, Please try again later!!!',
           ]);
        }
    }

    /**
     * verifyOTP.
     */
    public function verifyOTP(Request $request)
    {
        $this->validate($request,
        [
            'user_id' => 'required',
            'access_token' => 'required',
       ]);

        $ac_user_id = $request->user_id;
        $access_token = $request->access_token;

        $user = $this->registerRepository->getUserById($ac_user_id);

        if (!empty($user)) {
            if ($access_token == $user[0]['access_token']) {
                $affected_row = $this->userRepository->verifyUser($user[0]['id']);

                if (!empty($affected_row)) {
                    return response()->json([
                        'status' => 1,
                        'data' => $user,
                        'Message' => 'Customer has been succesfully verified!!!',
                   ]);
                } else {
                    return response()->json([
                        'status' => 0,
                        'data' => [],
                        'Message' => 'Somethig went wrong, please try again later!!!',
                   ]);
                }
            } else {
                return response()->json([
                    'status' => 0,
                    'data' => [],
                    'Message' => 'Verificarion code does not matched!!!',
               ]);
            }
        } else {
            return response()->json([
                'status' => 0,
                'data' => [],
                'Message' => 'User does not exists!!!',
           ]);
        }
    }

    public function forgotPassword(Request $request)
    {
        $this->validate($request,
        [
            'mobile' => 'required_without:email',
            'email' => 'required_without:mobile',
       ]);

        $email = $request->email;
        $mobile = $request->mobile;

        $user = $this->registerRepository->getUserByEmailorMobile($email, $mobile);
        if (!empty($user)) {
            $access_token = rand(1000, 9999);
            $access_token = '1234'; // Remove it once SMS gateway integrated
            $affected_row = $this->userRepository->updateUserToken($user[0]['id'], $access_token);
            if (!empty($affected_row)) {
                return response()->json([
                    'status' => 1,
                    'data' => $user,
                    'Message' => 'Access token successfully updated!!!',
               ]);
            } else {
                return response()->json([
                    'status' => 0,
                    'data' => [],
                    'Message' => 'Something went wrong, please try again later!!!',
               ]);
            }
        } else {
            return response()->json([
                'status' => 0,
                'data' => [],
                'Message' => 'User does not exists!!!',
           ]);
        }
    }

    public function resetPassword(Request $request)
    {
        $this->validate($request,
        [
            'user_id' => 'required',
            'password' => 'required',
       ]);

        $user_id = $request->user_id;
        $password = $request->password;

        $user = $this->registerRepository->getUserById($user_id);
        if (!empty($user)) {
            $affected_row = $this->userRepository->updatePassword($user[0]['id'], $password);
            if (!empty($affected_row)) {
                return response()->json([
                    'status' => 1,
                    'data' => $user,
                    'Message' => 'Password successfully updated!!!',
               ]);
            } else {
                return response()->json([
                    'status' => 0,
                    'data' => [],
                    'Message' => 'Something went wrong, please try again later!!!',
               ]);
            }
        } else {
            return response()->json([
                'status' => 0,
                'data' => [],
                'Message' => 'User does not exists!!!',
           ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // try {
        // Log::info(['api' => 'customer_register', 'params' => $request->all()]);
        $this->validate($request, ['customer_email' => 'required_without:customer_mobile', 'customer_mobile' => 'required_without:customer_email', 'customer_password' => 'required|min:10']);

        // $validator = Validator::make($request->all(), [
        //         'customer_email' => 'required_without:customer_mobile',
        //         'customer_mobile' => 'required_without:customer_email',
        //         'customer_password' => 'required|min:10',
        //         ]);

        return response()->json([
                    'message' => 'Welcome',
               ]);

        // if ($validator->fails()) {
            //     return $this->sendError('Validation Error.', $validator->errors());
            // }
        // } catch (\Throwable $th) {
        //     throw $th;
        // }
        // echo '<pre>';
        // print_r($request->all());
        // echo '</pre>';
        // exit();
        // if (!empty($request)) {
        //     echo 11;
        // } else {
        //     echo 2;
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}

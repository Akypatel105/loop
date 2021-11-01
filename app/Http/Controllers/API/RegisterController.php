<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use App\Repositories\RegisterRepository;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Validator;

class RegisterController extends BaseController
{
    protected $registerRepository;

    public function __construct(RegisterRepository $registerRepository)
    {
        $this->registerRepository = $registerRepository;
    }

    /**
     * Register api.
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'mobile' => 'numeric|digits:10',
            'c_password' => 'required|same:password',
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $email = $request->email;

        if (!empty($email)) {
            $isExist = $this->registerRepository->isUserExists($request->email, $request->country_code, $request->mobile);
            if ($isExist) {
                return $this->sendError('user already register with us!!! please register with different mobile number and email');
            } else {
                $profile_image = $request->file('profile_image');
                $profile_image_name = '';
                if (!empty($profile_image)) {
                    $profile_image_name = 'profile_'.time().'.'.$profile_image->getClientOriginalExtension();
                    $upload_path = 'profile_images/';
                    $profile_image_url = $upload_path.$profile_image_name;
                    $is_uploaded = $profile_image->move($upload_path, $profile_image_name);
                }
                $input = $request->all();
                $input['profile_image'] = $profile_image_name;
                $input['password'] = bcrypt($input['password']);
                $user = User::create($input);
                $user_arr = $user->toArray();
                if (empty($user_arr)) {
                    return $this->sendError('something went wrong.!!! please try again later.');
                }
                $success['token'] = $user->createToken('MyApp')->plainTextToken;
                $success['name'] = $user->name;

                return $this->sendResponse($success, 'User register successfully.');
            }
        }
    }

    /**
     * Login api.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // 'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        // foreach (getallheaders() as $name => $value) {
        //     echo "$name: $value \n";
        // }
        // exit();
        // $header = apache_request_headers();

        // foreach ($header as $headers => $value) {
        //     echo "$headers: $value\n";
        // }

        $email = $request->email;
        $credentials = [];

        if (is_numeric($email)) {
            $credentials = ['mobile' => $request->email, 'password' => $request->password, 'country_code' => $request->country_code];
        } else {
            $credentials = ['email' => $request->email, 'password' => $request->password];
        }

        if (Auth::attempt($credentials)) {
            // if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $user = Auth::user();
            // $success['token'] =  $user->createToken('Loop')->accessToken;
            $success['token'] = $user->createToken('Loop')->plainTextToken;
            $success['name'] = $user->name;
            $success['user'] = $user;

            return $this->sendResponse($success, 'User login successfully.');
        } else {
            return $this->sendError('Invalid Credentials!!!', ['error' => 'Invalid Credentials']);
        }
    }

    /**
     * facebook login.
     *
     * @author akshay patel
     * last modify : 16/09/2021
     */
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleFacebookCallback()
    {
        try {
            $user = Socialite::driver('facebook')->user();
            $finduser = User::where('social_id', $user->id)->first();

            if ($finduser) {
                Auth::login($finduser);

                return redirect()->intended('dashboard');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'social_id' => $user->id,
                    'password' => encrypt('123456dummy'),
                ]);

                Auth::login($newUser);

                return redirect()->intended('dashboard');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();

            $finduser = User::where('google_id', $user->id)->first();

            if ($finduser) {
                Auth::login($finduser);

                return redirect()->intended('dashboard');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => encrypt('123456dummy'),
                ]);

                Auth::login($newUser);

                return redirect()->intended('dashboard');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}

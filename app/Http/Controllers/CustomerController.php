<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use Illuminate\Http\Request;
use Log;
use Validator;

class CustomerController extends Controller
{
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
            'customer_mobile' => 'required_without:customer_email|digits:10',
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
    public function create()
    {
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

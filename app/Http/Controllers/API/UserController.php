<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as BaseController;
use App\Mail\NotifyMail;
use App\Models\Followers;
use App\Models\Followings;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Validator;

class UserController extends BaseController
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param customer_id
     * @param followed_by_id
     *
     * @author Akshay Patel
     *
     * @return \Illuminate\Http\Response
     */
    public function sendFollowerRequest(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
            'customer_id' => 'required',
            'followed_customer_id' => 'required',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $customer_id = $request->customer_id;
            $followed_customer_id = $request->followed_customer_id;
            $is_accept = config('constants.IS_ACCEPT');

            $is_req_sent = $this->userRepository->isFollowerRequestSent($customer_id, $followed_customer_id);

            if ($is_req_sent) {
                return $this->sendError('Request is already sent!!!');
            } else {
                $follower_arr = [
                    'customer_id' => $customer_id,
                    'followed_customer_id' => $followed_customer_id,
                    'is_accept' => $is_accept,
                ];
                $follower = Followers::create($follower_arr)->toArray();
                if (!empty($follower)) {
                    return $this->sendResponse($follower, 'Customer following request sent successfully!!!.');
                } else {
                    return $this->sendError('something went wrong.!!! please try again later.');
                }
            }
        } catch (Throwable $e) {
            \DB::rollback();

            return $this->sendError('something went wrong.!!! please try again later.');
        }
    }

    /**
     * @return \Illuminate\Http\Response
     *
     * @param customer_id
     * @param following_custommer_id
     *
     * @author Akshay Patel
     * last modify : 23 Sep 2021
     */
    public function sendFollowingRequest(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
            'customer_id' => 'required',
            'following_customer_id' => 'required',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $customer_id = $request->customer_id;
            $following_customer_id = $request->following_customer_id;
            $is_accept = config('constants.IS_ACCEPT');

            $is_req_sent = $this->userRepository->isFollowingRequestSent($customer_id, $following_customer_id);
            if ($is_req_sent) {
                return $this->sendError('Request is already sent!!!');
            } else {
                $following_arr = [
                    'customer_id' => $customer_id,
                    'following_customer_id' => $following_customer_id,
                    'is_accept' => $is_accept,
                ];
                $following = Followings::create($following_arr)->toArray();
                if (!empty($following)) {
                    return $this->sendResponse($following, 'Customer following request sent successfully!!!.');
                } else {
                    return $this->sendError('something went wrong.!!! please try again later.');
                }
            }
        } catch (Throwable $e) {
            \DB::rollback();

            return $this->sendError('something went wrong.!!! please try again later.');
        }
    }

    /**
     * Function to get user profile.
     *
     * @author Akshay Patel
     * Date : 01/10/2021
     */
    public function getUserProfile(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
            'customer_id' => 'required',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $customer_id = $request->customer_id;
            $get_user_res = $this->userRepository->getUserProfile($customer_id);

            if (!empty($get_user_res)) {
                return $this->sendResponse($get_user_res, 'User profile get successfully!!!.');
            } else {
                return $this->sendError('something went wrong.!!! please try again later.');
            }
        } catch (Throwable $e) {
            \DB::rollback();

            return $this->sendError('something went wrong.!!! please try again later.');
        }
    }

    /**
     * get All follower list.
     *
     * @author Akshay Patel
     * Date : 01/10/2021
     */
    public function getFollowersByUser(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
            'customer_id' => 'required',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $customer_id = $request->customer_id;
            $get_user_follower = $this->userRepository->getUserFollowers($customer_id);

            if (!empty($get_user_follower)) {
                return $this->sendResponse($get_user_follower, 'User followers retrived successfully!!!.');
            } else {
                return $this->sendError('something went wrong.!!! please try again later.');
            }
        } catch (Throwable $e) {
            \DB::rollback();

            return $this->sendError('something went wrong.!!! please try again later.');
        }
    }

    /**
     * get following users.
     *
     * @author Akshay Patel
     * Date : 01/10/21
     */
    public function getFollowingUser(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
            'customer_id' => 'required',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $customer_id = $request->customer_id;
            $get_following_user = $this->userRepository->getFollowingUser($customer_id);

            if (!empty($get_following_user)) {
                return $this->sendResponse($get_following_user, 'Following users retrived successfully!!!.');
            } else {
                return $this->sendError('something went wrong.!!! please try again later.');
            }
        } catch (Throwable $e) {
            \DB::rollback();

            return $this->sendError('something went wrong.!!! please try again later.');
        }
    }

    /***
     *
     * forgot password
     *
     * @author Akshay Patel
     * Date : 18/10/2021
     *
     *
     */
    public function forgotPassword(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'email' => 'required',
                ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $email = $request->email;
            $user = $this->userRepository->getUser($email);

            $random_number = getRandomNumber();
            if (!empty($user)) {
                $details['email'] = $email;
                //  Mail::to($email)->send(new NotifyMail());

                // dispatch(new App\Jobs\SendEmailJob($details));
                $affected_row = $this->userRepository->updateUserToken($user[0]['id'], $random_number);
                //dd('done');

                return $this->sendResponse($user, 'OTP is sent on same email/mobile');
            } else {
                return $this->sendError('user is not registered with us.');
            }
        } catch (\Throwable $th) {
            return $this->sendError('something went wrong.!!! please try again later.');
        }
    }

    /**
     * Verify OTP.
     *
     * @author Akshay Patel
     * Date : 19/10/2021
     */
    public function verifyOTP(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'otp' => 'required',
                'user_id' => 'required',
                ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $user_id = $request->user_id;
            $otp = $request->otp;
            $user = $this->userRepository->getUserById($user_id);
            if (!empty($user)) {
                $user_otp = $user[0]['access_token'];
                if ($user_otp == $otp) {
                    $affected_row = $this->userRepository->verifyUser($user[0]['id']);
                    if ($affected_row > 0) {
                        return $this->sendResponse($user, 'User verified successfully!!!');
                    } else {
                        return $this->sendError('Something went wrong, please try again later.');
                    }
                }
                if ($user_otp != $otp) {
                    return $this->sendError('Invalid OTP!!!');
                }
            } else {
                return $this->sendError('user is not registered with us.');
            }
        } catch (\Throwable $th) {
            return $this->sendError('Something went wrong, please try again later.');
        }
    }

    /**
     * set password.
     *
     * @author Akshay Patel
     * Date : 19/10/2021
     */
    public function setPassword(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'new_password' => 'required',
                'user_id' => 'required',
                ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $user_id = $request->user_id;
            $new_password = $request->new_password;
            $user = $this->userRepository->getUserById($user_id);
            if (!empty($user)) {
                $affected_row = $this->userRepository->updatePassword($user_id, $new_password);

                return $this->sendResponse($user, 'Password successfully reset!!!');
            } else {
                return $this->sendError('user is not found.');
            }
        } catch (\Throwable $th) {
            return $this->sendError('Something went wrong, please try again later.');
        }
    }

    /**
     * Edit Profile.
     *
     * @author Akshay Patel
     * Date : 22/10/2021
     */
    public function editProfile(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'user_id' => 'required',
                'mobile' => 'digits:10',
                ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $user_id = $request->user_id;
            $user = $this->userRepository->getUserById($user_id);

            if (!empty($user)) {
                $profile_image = $request->file('profile_image');
                $profile_image_name = '';
                if (!empty($profile_image)) {
                    unlink(public_path('/profile_images/'.$user[0]['profile_image']));
                    $profile_image_name = 'profile_'.time().'.'.$profile_image->getClientOriginalExtension();
                    $upload_path = 'profile_images/';
                    $profile_image_url = $upload_path.$profile_image_name;
                    $is_uploaded = $profile_image->move($upload_path, $profile_image_name);
                }

                if (!empty($profile_image_name)) {
                    $data = [
                        'name' => $request->name,
                        'email' => $request->email,
                        'country_code' => $request->country_code,
                        'mobile' => $request->mobile,
                        'gender' => $request->gender,
                        'profile_image' => $profile_image_name,
                    ];
                } else {
                    $data = [
                        'name' => $request->name,
                        'email' => $request->email,
                        'country_code' => $request->country_code,
                        'mobile' => $request->mobile,
                        'gender' => $request->gender,
                    ];
                }

                $affected_row = $this->userRepository->updateUser($user_id, $data);

                if ($affected_row > 0) {
                    return $this->sendResponse($user, 'Profile updates successfully!!!');
                } else {
                    return $this->sendError('User does not exists!!!');
                }
            } else {
                return $this->sendError('User does not exists!!!');
            }
        } catch (\Throwable $th) {
            return $this->sendError('Something went wrong, please try again later.');
        }
    }
}

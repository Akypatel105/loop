<?php

namespace App\Repositories;

use App\Models\Followers;
use App\Models\Followings;
use App\Models\Post;
use App\Models\User;
use DB;

class UserRepository
{
    public function isFollowerRequestSent($customer_id, $followed_customer_id)
    {
        $res = Followers::where('customer_id', '=', $customer_id)->where('followed_customer_id', '=', $followed_customer_id)->exists();

        return $res;
    }

    public function isFollowingRequestSent($customer_id, $following_customer_id)
    {
        $res = Followings::where('customer_id', '=', $customer_id)->where('following_customer_id', '=', $following_customer_id)->exists();

        return $res;
    }

    public function getUserProfile($customer_id)
    {
        $res = [];
        $total_posts_count = Post::where('customer_id', $customer_id)->get()->toArray();
        $total_followers_count = Followers::where('customer_id', $customer_id)->get()->toArray();
        $total_following_count = Followings::where('customer_id', $customer_id)->get()->toArray();

        $res['total_posts'] = !empty($total_posts_count) ? count($total_posts_count) : 0;
        $res['total_followers_count'] = !empty($total_followers_count) ? count($total_followers_count) : 0;
        $res['total_following_count'] = !empty($total_following_count) ? count($total_following_count) : 0;

        return $res;
    }

    public function getUserFollowers($customer_id)
    {
        $post = Followers::where('customer_id', '=', $customer_id)->with(['followedCustomers'])->get();

        return $post->toArray();
    }

    public function getFollowingUser($customer_id)
    {
        $post = Followings::where('customer_id', '=', $customer_id)->with(['followingCustomer'])->get();

        return $post->toArray();
    }

    public function getUser($email)
    {
        if (is_numeric($email)) {
            $user = User::where('mobile', '=', $email)->get();
        } else {
            $user = User::where('email', '=', $email)->get();
        }

        return $user->toArray();
    }

    public function updateUserToken($userid, $access_token)
    {
        $affecred_row = User::where('id', '=', $userid)->update(['access_token' => $access_token]);

        return $affecred_row;
    }

    public function getUserById($user_id)
    {
        $user = User::where('id', '=', $user_id)->get();

        return $user->toArray();
    }

    public function verifyUser($user_id)
    {
        $affecred_row = User::where('id', '=', $user_id)->update(['is_active' => 1, 'access_token' => '']);

        return $affecred_row;
    }

    public function updatePassword($userid, $new_password)
    {
        $affecred_row = User::where('id', '=', $userid)->update(['password' => bcrypt($new_password)]);

        return $affecred_row;
    }

    public function updateUser($userid, $data)
    {
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        // exit();
        // DB::enableQueryLog();
        $affecred_row = User::where('id', '=', $userid)->update($data);
        // dd(DB::getQueryLog());

        return $affecred_row;
    }
}

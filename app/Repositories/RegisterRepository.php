<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterRepository
{
    // protected $model;

    // public function __construct(User $model)
    // {
    //     $this->model = $model;
    // }

    public function isUserExists($email, $countrycode, $mobile)
    {
        // DB::enableQueryLog();

        $query = User::where(function ($q) use ($email, $countrycode, $mobile) {
            $q->where('email', '=', $email)
                    ->orWhere('country_code', '=', $countrycode)
                    ->Where('mobile', '=', $mobile);
        })
                ->exists();
        // dd(DB::getQueryLog());
        return $query;
    }

    public function getUserById($ac_user_id)
    {
        $query = User::where('id', $ac_user_id)->get()->toArray();

        return $query;
    }

    public function getUserByEmailorMobile($email, $mobile)
    {
        if (!empty($email)) {
            $query = User::where('email', $email)->get()->toArray();
        } else {
            $query = User::where('mobile', $mobile)->get()->toArray();
        }

        return $query;
    }

    /*
     * set payload data for posts table.
     *
     * @param Request $request [description]
     * @return array of data for saving.
     */
    // protected function setDataPayload(Request $request)
    // {
    //     return [
    //         'title' => $request->input('title'),
    //         'author_id' => $request->user()->id,
    //         'description' => $request->input('description'),
    //         'status' => $request->input('status'),
    //     ];
    // }
}

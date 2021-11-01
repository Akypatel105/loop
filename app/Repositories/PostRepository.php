<?php

namespace App\Repositories;

use App\Models\Categories;
use App\Models\Followers;
use App\Models\Post;
use App\Models\PostCommentLike;
use App\Models\PostLikes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostRepository
{
    // protected $model;

    // public function __construct(User $model)
    // {
    //     $this->model = $model;
    // }

    public function getPostById($post_id)
    {
        // DB::enableQueryLog();
        $post = Post::where('post_id', '=', $post_id)->with(['postImage', 'postVideo'])->get();
        // dd(DB::getQueryLog());
        return $post->toArray();
    }

    public function isPostLiked($customer_id, $post_id)
    {
        $res = PostLikes::where('customer_id', '=', $customer_id)->where('post_id', '=', $post_id)->where('is_like', config('constants.POST_LIKE'))->exists();

        return $res;
    }

    public function isPostCommentLiked($customer_id, $post_id, $post_comment_id)
    {
        $res = PostCommentLike::where('customer_id', '=', $customer_id)->where('post_id', '=', $post_id)->where('post_comment_id', '=', $post_comment_id)->where('is_like', config('constants.POST_LIKE'))->exists();

        return $res;
    }

    public function isPostDisliked($customer_id, $post_id)
    {
        $res = PostLikes::where('customer_id', '=', $customer_id)->where('post_id', '=', $post_id)->where('is_like', config('constants.POST_DISLIKE'))->exists();

        return $res;
    }

    public function getUserPost($customer_id, $page_index, $category_id)
    {
        $followers_arr = [];
        $followers = Followers::where('customer_id', $customer_id)->get()->toArray();
        if (!empty($followers)) {
            foreach ($followers as $follower) {
                $followers_arr[] = $follower['followed_customer_id'];
            }
        }
        $followers_arr[] = (int) $customer_id;
        if ($category_id == 0) {
            $res = Post::whereIn('customer_id', $followers_arr)->with(['postImage', 'postVideo', 'postLikes', 'postComments', 'user'])->orderBy('created_at', 'desc')->limit(config('constants.PER_PAGE_LIMIT'))->offset(($page_index - 1) * config('constants.PER_PAGE_LIMIT'))->get();
        } else {
            // DB::enableQueryLog();
            $res = Post::where('category_id', (int) $category_id)->whereIn('customer_id', $followers_arr)->with(['postImage', 'postVideo', 'postLikes', 'postComments', 'user'])->orderBy('created_at', 'desc')->limit(config('constants.PER_PAGE_LIMIT'))->offset(($page_index - 1) * config('constants.PER_PAGE_LIMIT'))->get();
            // dd(DB::getQueryLog());
        }

        return $res->toArray();
    }

    public function isDislikeExist($customer_id, $post_id)
    {
        $res = PostLikes::where('customer_id', '=', $customer_id)->where('post_id', '=', $post_id)->where('is_like', config('constants.POST_DISLIKE'))->get();

        return $res->toArray();
    }

    public function getAllCategory()
    {
        $res = Categories::get();

        return $res->toArray();
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

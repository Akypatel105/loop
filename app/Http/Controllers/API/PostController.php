<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Post;
use App\Models\PostCommentLike;
use App\Models\PostCommentReply;
use App\Models\PostComments;
use App\Models\PostImages;
use App\Models\PostLikes;
use App\Models\PostMessages;
use App\Models\PostVideos;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;
use Validator;

class PostController extends BaseController
{
    protected $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postLike(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
            'customer_id' => 'required',
            'post_id' => 'required',
            ]);

            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }

            \DB::beginTransaction();

            $customer_id = $request->customer_id;
            $post_id = $request->post_id;

            $is_liked = $this->postRepository->isPostLiked($customer_id, $post_id);
            if ($is_liked) {
                return $this->sendError('You already liked this post.');
            } else {
                $dislike_arr = $this->postRepository->isDislikeExist($customer_id, $post_id);
                if (!empty($dislike_arr)) {
                    foreach ($dislike_arr as $val) {
                        $res = PostLikes::where('post_likes_id', $val['post_likes_id'])->delete();
                    }
                }
                $like_arr = [
                    'customer_id' => $customer_id,
                    'post_id' => $post_id,
                    'is_like' => config('constants.POST_LIKE'),
                    ];
                $res = PostLikes::create($like_arr)->toArray();
            }
            \DB::commit();
            //$post = $this->postRepository->getPostById($post_id);
            if (!empty($res)) {
                return $this->sendResponse($res, 'You succesfully liked this post!!!');
            } else {
                return $this->sendError('something went wrong.!!! please try again later.');
            }
        } catch (Throwable $e) {
            \DB::rollback();

            return $this->sendError('something went wrong.!!! please try again later.');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postDislike(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
            'post_likes_id' => 'required',
            'customer_id' => 'required',
            'post_id' => 'required',
            ]);

            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }

            $post_likes_id = $request->post_likes_id;
            $customer_id = $request->customer_id;
            $post_id = $request->post_id;

            $is_liked = $this->postRepository->isPostLiked($customer_id, $post_id);
            if ($is_liked) {
                $affecred_row = PostLikes::where('post_likes_id', '=', $post_likes_id)->update(['is_like' => 0]);
                if ($affecred_row > 0) {
                    return $this->sendResponse([], 'You succesfully disliked this post!!!');
                } else {
                    return $this->sendError('something went wrong.!!! please try again later.');
                }
            } else {
                return $this->sendError('Post is not yet like by you !!!');
            }
        } catch (Throwable $e) {
            return $this->sendError('something went wrong.!!! please try again later.');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
            'customer_id' => 'required',
            'post_type' => 'required',
            'category_id' => 'required',
            'post_image.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'post_video.*' => 'mimes:mp4,mov,ogg,qt | max:20000',
            ]);

            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }

            \DB::beginTransaction();

            $customer_id = $request->customer_id;
            $post_type = $request->post_type;
            $post_caption = $request->post_caption;
            $category_id = $request->category_id;

            $post_arr = [
            'customer_id' => $customer_id,
            'category_id' => $category_id,
            'post_type' => $post_type,
            'post_caption' => $post_caption,
            ];
            $res = Post::create($post_arr)->toArray();

            $post_id = $res['post_id'];
            $files = [];

            $date = date('Y-m-d h:m:s');
            // for images = 1
            if (!empty($res) && $post_type == 1 && $request->hasfile('post_image')) {
                $post_img_arr = [];
                foreach ($request->file('post_image') as $file) {
                    $profile_image_name = 'post_img'.uniqid().'.'.$file->getClientOriginalExtension();
                    $upload_path = 'post_assets/image/';
                    $profile_image_url = $upload_path.$profile_image_name;
                    $is_uploaded = $file->move($upload_path, $profile_image_name);
                    // $imgData[] = $profile_image_name;

                    $post_img = [
                    'post_id' => $post_id,
                    'customer_id' => $customer_id,
                    'post_image' => $profile_image_name,
                    'created_at' => $date,
                    'updated_at' => $date,
                ];
                    $post_img_arr[] = $post_img;
                }
                $img_res = PostImages::insert($post_img_arr);
            }
            //for videos = 2
            if (!empty($res) && $post_type == 2 && $request->hasfile('post_video')) {
                $post_video_arr = [];
                foreach ($request->file('post_video') as $file) {
                    $profile_video_name = 'post_vdo'.uniqid().'.'.$file->getClientOriginalExtension();
                    $upload_path = 'post_assets/video/';
                    $profile_video_url = $upload_path.$profile_video_name;
                    $is_uploaded = $file->move($upload_path, $profile_video_name);

                    $post_video = [
                    'post_id' => $post_id,
                    'customer_id' => $customer_id,
                    'post_video' => $profile_video_name,
                    'created_at' => $date,
                    'updated_at' => $date,
                ];
                    $post_video_arr[] = $post_video;
                }
                $video_res = PostVideos::insert($post_video_arr);
            }
            \DB::commit();
            $post = $this->postRepository->getPostById($post_id);
            if (!empty($post)) {
                return $this->sendResponse($post, 'Post created successfully.');
            } else {
                return $this->sendError('something went wrong.!!! please try again later.');
            }
        } catch (Throwable $e) {
            \DB::rollback();

            return $this->sendError('something went wrong.!!! please try again later.');
        }
    }

    /***
     * To add comment on post
     * @author : Akshay Patel
     * Last Modify : 24 Sep 2021
     *
     */

    public function postComment(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
            'customer_id' => 'required',
            'post_id' => 'required',
            'post_comment' => 'required',
            ]);

            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }

            \DB::beginTransaction();

            $customer_id = $request->customer_id;
            $post_id = $request->post_id;
            $post_comment = $request->post_comment;

            $comment_arr = [
            'customer_id' => $customer_id,
            'post_id' => $post_id,
            'post_comment' => $post_comment,
            ];
            $res = PostComments::create($comment_arr)->toArray();

            $post_id = $res['post_id'];

            \DB::commit();
            $comment = $this->postRepository->getPostById($post_id);
            if (!empty($comment)) {
                return $this->sendResponse($comment, 'Successfully commnented on post!!!');
            } else {
                return $this->sendError('something went wrong.!!! please try again later.');
            }
        } catch (Throwable $e) {
            \DB::rollback();

            return $this->sendError('something went wrong.!!! please try again later.');
        }
    }

    /***
     * Function for reply on comment
     * @author Akshay Patel
     * Date : 24 Sep 2021
     */
    public function postCommentReply(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
            'post_comment_id' => 'required',
            'post_id' => 'required',
            'customer_id' => 'required',
            'post_comment_reply' => 'required',
            ]);

            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }

            \DB::beginTransaction();

            $post_comment_id = $request->post_comment_id;
            $post_id = $request->post_id;
            $customer_id = $request->customer_id;
            $post_comment_reply = $request->post_comment_reply;

            $cmt_reply_arr = [
            'post_comment_id' => $post_comment_id,
            'post_id' => $post_id,
            'customer_id' => $customer_id,
            'post_comment_reply' => $post_comment_reply,
            ];
            $res = PostCommentReply::create($cmt_reply_arr)->toArray();

            $post_id = $res['post_id'];

            \DB::commit();
            $comment = $this->postRepository->getPostById($post_id);
            if (!empty($comment)) {
                return $this->sendResponse($comment, 'Successfully commnented on post!!!');
            } else {
                return $this->sendError('something went wrong.!!! please try again later.');
            }
        } catch (Throwable $e) {
            \DB::rollback();

            return $this->sendError('something went wrong.!!! please try again later.');
        }
    }

    /***
     * Function for like post comments
     * @author Akshay Patel
     * Created at : 25 sep 2021
     *
     */
    public function postCommentLike(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
            'post_comment_id' => 'required',
            'post_id' => 'required',
            'customer_id' => 'required',
            ]);

            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }

            // \DB::beginTransaction();

            $post_comment_id = $request->post_comment_id;
            $post_id = $request->post_id;
            $customer_id = $request->customer_id;

            $is_comment_liked = $this->postRepository->isPostCommentLiked($customer_id, $post_id, $post_comment_id);
            if ($is_comment_liked) {
                return $this->sendError('You already liked this comment.');
            } else {
                $like_arr = [
                    'post_comment_id' => $post_comment_id,
                    'post_id' => $post_id,
                    'customer_id' => $customer_id,
                    'is_like' => config('constants.POST_LIKE'),
                    ];
                $res = PostCommentLike::create($like_arr)->toArray();
            }
            // \DB::commit();
            //$post = $this->postRepository->getPostById($post_id);
            if (!empty($res)) {
                return $this->sendResponse($res, 'You succesfully liked this comment!!!');
            } else {
                return $this->sendError('something went wrong.!!! please try again later.');
            }
        } catch (Throwable $e) {
            // \DB::rollback();

            return $this->sendError('something went wrong.!!! please try again later.');
        }
    }

    /**
     * Function is use to dislike the post comment.
     *
     * @author Akshay Patel
     */
    public function postCommentDislike(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
            'post_comment_like_id' => 'required',
            'post_comment_id' => 'required',
            'post_id' => 'required',
            'customer_id' => 'required',
            ]);

            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }

            $post_comment_like_id = $request->post_comment_like_id;
            $post_comment_id = $request->post_comment_id;
            $post_id = $request->post_id;
            $customer_id = $request->customer_id;

            $is_comment_liked = $this->postRepository->isPostCommentLiked($customer_id, $post_id, $post_comment_id);
            if ($is_comment_liked) {
                $affecred_row = PostCommentLike::where('post_comment_like_id', '=', $post_comment_like_id)->update(['is_like' => 0]);
                if ($affecred_row > 0) {
                    return $this->sendResponse([], 'You succesfully disliked this comment!!!');
                } else {
                    return $this->sendError('something went wrong.!!! please try again later.');
                }
            } else {
                return $this->sendError('Comment is not yet like by you !!!');
            }
        } catch (Throwable $e) {
            return $this->sendError('something went wrong.!!! please try again later.');
        }
    }

    /*
     * send post to friends
     * @author Akshay Patel
     * Date : 27 sep 2021
    */
    public function sendPostMessage(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'post_id' => 'required',
                'customer_id' => 'required',
                'receiver_id' => 'required',
                'post_message' => 'required',
                ]);

            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $post_id = $request->post_id;
            $customer_id = $request->customer_id;
            $receiver_id = $request->receiver_id;
            $post_message = $request->post_message;

            $msg_arr = [
                'post_id' => $post_id,
                'customer_id' => $customer_id,
                'receiver_id' => $receiver_id,
                'post_message' => $post_message,
                ];
            $res = PostMessages::create($msg_arr)->toArray();
            if (!empty($res)) {
                return $this->sendResponse($res, 'Post message sent successfully!!!');
            } else {
                return $this->sendError('something went wrong.!!! please try again later.');
            }
        } catch (Throwable $e) {
            return $this->sendError('something went wrong.!!! please try again later.');
        }
    }

    /**
     * @get posts
     * @date 28 Sep 2021
     *
     * @author Akshay Patel
     */
    public function getUserPost(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'customer_id' => 'required',
                'page_index' => 'required',
                'category_id' => 'required',
            ]);

            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $customer_id = $request->customer_id;
            $category_id = $request->category_id;
            $page_index = !empty($request->page_index) ? $request->page_index : 0;
            $res['category'] = $this->postRepository->getAllCategory();
            $res['post'] = $this->postRepository->getUserPost($customer_id, $page_index, $category_id);
            if (!empty($res)) {
                return $this->sendResponse($res, 'Posts retrive successfully!!!');
            } else {
                return $this->sendError('No records found...');
            }
        } catch (Throwable $e) {
            return $this->sendError('something went wrong.!!! please try again later.');
        }
    }
}

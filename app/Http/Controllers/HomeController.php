<?php

namespace App\Http\Controllers;

use App\Repositories\PostRepository;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer_id = Auth::id();
        $category_id = 0;
        $page_index = 0;
        // $res['category'] = $this->postRepository->getAllCategory();
        $res['post'] = $this->postRepository->getUserPost($customer_id, $page_index, $category_id);

        return view('home', $res);
    }

    public function postComment($id)
    {
        $customer_id = Auth::id();
        $category_id = 0;
        $page_index = 0;

        $res['post'] = $this->postRepository->getUserPost($customer_id, $page_index, $category_id);
        $res['postComment'] = $this->postRepository->getpostComments($id);
        $res['postCaption'] = $this->postRepository->getpostcaption($id);
        // echo "<pre> ";
        // print_r($res);
        // exit;
        return view('comment', $res);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect('/');
    }
}

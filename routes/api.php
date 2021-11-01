<?php

use App\Http\Controllers\API\PostController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\TestController;
use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);
Route::post('/forgotPassword', [UserController::class, 'forgotPassword']);
Route::post('/verifyOTP', [UserController::class, 'verifyOTP']);
Route::post('/setPassword', [UserController::class, 'setPassword']);
// Route::get('post', [TestController::class, 'index']);

Route::group(['middleware' => ['web']], function () {
    Route::get('auth/facebook', [RegisterController::class, 'redirectToFacebook']);
    Route::get('auth/facebook/callback', [RegisterController::class, 'handleFacebookCallback']);
    Route::get('auth/google', [RegisterController::class, 'redirectToGoogle']);
    Route::get('auth/google/callback', [RegisterController::class, 'handleGoogleCallback']);
});

Route::group(['prefix' => 'Product', 'middleware' => ['auth:sanctum']], function () {
    Route::post('/products', [ProductController::class, 'store']);
    Route::put('/products/{id}', [ProductController::class, 'update']);
    Route::delete('/products/{id}', [ProductController::class, 'destroy']);
    Route::post('/logout', [AuthController::class, 'logout']);
});
/*
 *
 * Post Routes
 */
Route::group(['prefix' => 'Post', 'middleware' => ['auth:sanctum']], function () {
    Route::post('/post', [PostController::class, 'store']);
    Route::post('/postLike', [PostController::class, 'postLike']);
    Route::post('/postDislike', [PostController::class, 'postDislike']);
    Route::post('/postComment', [PostController::class, 'postComment']);
    Route::post('/postCommentReply', [PostController::class, 'postCommentReply']);
    Route::post('/postCommentLike', [PostController::class, 'postCommentLike']);
    Route::post('/postCommentDislike', [PostController::class, 'postCommentDislike']);
    Route::post('/sendPostMessage', [PostController::class, 'sendPostMessage']);
    Route::post('/getUserPost', [PostController::class, 'getUserPost']);
});
/*
 *
 * Users Routes
 *
 */
Route::group(['prefix' => 'User', 'middleware' => ['auth:sanctum']], function () {
    Route::post('/sendFollowerRequest', [UserController::class, 'sendFollowerRequest']);
    Route::post('/sendFollowingRequest', [UserController::class, 'sendFollowingRequest']);
    Route::post('/getUserProfile', [UserController::class, 'getUserProfile']);
    Route::post('/getFollowersByUser', [UserController::class, 'getFollowersByUser']);
    Route::post('/getFollowingUser', [UserController::class, 'getFollowingUser']);
    Route::post('/editProfile', [UserController::class, 'editProfile']);
});
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\CreatePostRequest;
use App\Http\Requests\Api\UpdatePostRequest;
use App\Repositories\PostRepository;
use Exception;
use Illuminate\Http\Request;

class TestController extends Controller
{
    protected $repository;

    public function __construct(PostRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * get list of all the posts.
     *
     * @param $request: Illuminate\Http\Request
     *
     * @return json response
     */
    public function index(Request $request)
    {
        $items = $this->repository->paginate($request);

        return response()->json(['items' => $items]);
    }

    /**
     * store post data to database table.
     *
     * @param $request: App\Http\Requests\CreatePostRequest
     *
     * @return json response
     */
    public function store(CreatePostRequest $request)
    {
        try {
            $item = $this->repository->store($request);

            return response()->json(['item' => $item]);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], $e->getStatus());
        }
    }

    /**
     * update post data to database table.
     *
     * @param $request: App\Http\Requests\UpdatePostRequest
     *
     * @return json response
     */
    public function update($id, UpdatePostRequest $request)
    {
        try {
            $item = $this->repository->update($id, $request);

            return response()->json(['item' => $item]);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], $e->getStatus());
        }
    }

    /**
     * get single item by id.
     *
     * @param int $id: integer post id
     *
     * @return json response
     */
    public function show($id)
    {
        try {
            $item = $this->repository->show($id);

            return response()->json(['item' => $item]);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], $e->getStatus());
        }
    }

    /**
     * delete post by id.
     *
     * @param int $id: integer post id
     *
     * @return json response
     */
    public function delete($id)
    {
        try {
            $this->repository->delete($id);

            return response()->json([], 204);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], $e->getStatus());
        }
    }
}

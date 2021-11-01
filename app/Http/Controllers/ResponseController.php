<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public static function ResponseSuccess($status, $message = '', $result = [], $totalPages = 0, $currentPages = 0)
    {
        return Response(['Status' => $status,
            'Message' => $message,
            'TotalPage' => $totalPages,
            'CurrentPage' => $currentPages,
            'Data' => $result,
        ]);
    }

    public static function ResponseError($status, $message = '')
    {
        return Response(['Status' => $status,
            'Message' => $message,
        ]);
    }

    public static function ValidationError($status, $errors = [])
    {
        $message = '';
        if (!empty($errors)) {
            $errors = collect($errors);
            $error = $errors->unique()->first();
            foreach ($error as $item) {
                $message = $item;
            }
        }

        return Response(['Status' => $status,
            'Message' => $message,
        ]);
    }
}

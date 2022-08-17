<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function successResponse($data, $message = 'Success')
    {
        return response()->json([
            'status' => true,
            'data' => $data,
            'message' => $message
        ], 200);
    }

    public function failedResponse($data = [], $message = 'Error')
    {
        return response()->json([
            'status' => false,
            'data' => $data,
            'message' => $message
        ], 400);
    }
}

<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CtrlBaseController extends Controller
{
    public function sendResponse($result, $message)
    {
        $response = [
            'success' => $result?true:false,
            'data' => $result,
            'message' => $message
        ];
        return response()->json($response, 200);
    }

    public function sendError()
    { }
}

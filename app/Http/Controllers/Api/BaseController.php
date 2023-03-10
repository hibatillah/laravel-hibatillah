<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function sendResponse($result, $message)
    {
        $response = [
            'success'   => true,
            'data'      => $result,
            'message'   => $message,
        ];
        return response()->json($response, 200);
    }

    public function sendError($message)
    {
        $response = [
           'success'   => false,
           'message'   => $message,
        ];
        if(!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }
        return response()->json($response, $code);
    }
}

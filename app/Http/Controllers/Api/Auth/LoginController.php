<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\JsonResponse;

class LoginController {
    public function login(): JsonResponse
    {
        return response()->json([
            'token' => 'generated_token'
        ]);  
    }
}
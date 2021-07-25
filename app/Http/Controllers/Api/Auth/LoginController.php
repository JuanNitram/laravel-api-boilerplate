<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Requests\LoginRequest;
use App\Services\UserService;
use Illuminate\Http\JsonResponse;

class LoginController {

    /**
     *
     * @var UserService
     */
    public $userService;

    /**
     *
     * @param UserService $userService
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     *
     * @param LoginRequest $request
     * @return JsonResponse
     */
    public function login(LoginRequest $request): JsonResponse
    {
        $token = $this->userService->attemptLogin("test@tes.com", "password");

        return response()->json([
            'token' => $token
        ]);  
    }
}
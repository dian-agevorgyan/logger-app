<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\LogoutRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Services\Actions\Auth\LoginAction;
use App\Services\Actions\Auth\LogoutAction;
use App\Services\Actions\Auth\RegisterAction;
use Illuminate\Http\JsonResponse;

class AuthController extends Controller
{
    public function register(
        RegisterRequest $request,
        RegisterAction $registerAction
    ): JsonResponse {
        $data = $registerAction->run($request);

        return response()->json($data);
    }

    public function login(
        LoginRequest $request,
        LoginAction $loginAction
    ): JsonResponse {
        $data = $loginAction->run($request);

        return response()->json($data);
    }

    public function logout(
        LogoutRequest $request,
        LogoutAction $logoutService
    ): JsonResponse {
        $data = $logoutService->run($request);

        return response()->json($data);
    }
}

<?php

namespace App\Services\Actions\Auth;

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginAction
{
    public function run(LoginRequest $request): array
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return ['message' => 'Invalid login credentials'];
        }

        $user = Auth::user();
        $token = $user->createToken('auth_token')->plainTextToken;

        return ['token' => $token, 'user' => $user];
    }
}

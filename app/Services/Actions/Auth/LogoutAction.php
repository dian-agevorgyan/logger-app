<?php

namespace App\Services\Actions\Auth;

use App\Http\Requests\Auth\LogoutRequest;

class LogoutAction
{
    public function run(LogoutRequest $request): array
    {
        $request->user()->tokens()->delete();

        return ['message' => 'Logged out'];
    }
}

<?php

namespace App\Services\Actions\Auth;

use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterAction
{
    public function run(RegisterRequest $request): array
    {
        $email = $request->getEmail();

        if (User::where('email', $email)->exists()) {
            return ['error' => 'Email already exists'];
        }

        $user = User::query()->create([
            'name' => $request->getName(),
            'surname' => $request->getSurname(),
            'email' => $email,
            'password' => Hash::make($request->getPassword()),
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return ['token' => $token, 'user' => $user];
    }
}

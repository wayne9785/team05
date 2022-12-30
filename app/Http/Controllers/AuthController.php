<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // Controller 端的資料驗證
        $this->validate($request, [
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        // 透過 User Model 到 users 資料表中建立一筆註冊帳號資訊
        /** @var User $user */
        $user = User::query()
            ->firstOrCreate(
                ['email' => $request->get('email'),],
                ['name' => $request->get('name'),
                'password' => Hash::make($request->get('password')),]);

        dd($user);
        if (!$user->wasRecentlyCreated) {
            return response()
                ->json([
                    'status' => 0,
                    'error' => [
                        'code' => 1,
                        'message' => 'This email address has been registered.'
                    ],
                ]);
        }
        
        // Generate new token
        $token = $user->createToken('email');

        return response()
            ->json([
                'status' => 1,
                'data' => [
                    'token' => $token->plainTextToken,
                ],
            ]);
    }
    public function login(Request $request)
    {

        $this->validate($request, [
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        /** @var User $user */
        $user = User::query()
            ->where('email', '=', $request->get('email'))
            ->first();

        if ($user === null || !Hash::check($request->get('password'), $user->password)) {
            return response()
                ->json([
                    'status' => 0,
                    'error' => [
                        'code' => 1,
                        'message' => 'These credentials do not match our records.',
                    ],
                ]);
        }

        // Generate new token
        $token = $user->createToken('email');

        return response()
            ->json([
                'status' => 1,
                'data' => [
                    'token' => $token->plainTextToken,
                ],
            ]);
    }
}

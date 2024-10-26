<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Passport\HasApiTokens;

class AuthController extends Controller
{
    use HasApiTokens;

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        try {
            $user = User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
                'role_id' => 3,
            ]);

            $token = $user->createToken('VeShop')->accessToken;

            return response()->json([
                'message' => 'User successfully registered.',
                'user' => $user,
                'token' => $token,
            ], 201);
        } catch (Exception $e) {
            if (strpos($e->getMessage(), 'users_email_unique') !== false) {
                return response()->json(['error' => 'Email already in use.'], 422);
            }

            return response()->json(['error' => 'Registration failed.'], 500);
        }
    }
    public function login(Request $request)
{
    $request->validate([
        'email' => 'email|required',
        'password' => 'required'
    ]);

    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        $user = Auth::user();
        $token = $user->createToken('VeShop')->accessToken;

        // جلب الصورة المرتبطة بالمستخدم
        $user->load('image');

        return response()->json(['token' => $token, 'user' => $user], 200);
    }

    return response()->json(['error' => 'البريد الإلكتروني أو كلمة المرور غير صحيحة.'], 401);
}
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Laravel\Passport\HasApiTokens;
use Illuminate\Validation\ValidationException;

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

        // $activationCode = Str::random(30); // Generate a random activation code

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'role_id' => 3, // تعيين قيمة role_id الافتراضية كـ 3
        ]);
        

        // Sending activation email
        // Mail::to($user->email)->send(new ActivationEmail($user));

        return response(['message' => 'success']);
    }
    
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $token = $user->createToken('YourAppName')->accessToken;

            return response()->json(['token' => $token, 'user' => $user], 200);
        }

        throw ValidationException::withMessages(['email' => 'Invalid email or password.']);
    }



    public function logout(Request $request)
    {
        // Assuming you're storing tokens in the "personal_access_tokens" table
        $request->user()->token()->revoke();
        return response(['message' => 'You have been successfully logged out!'], 200);
    }
    
    }
<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DemoController extends Controller
{
    public function login(Request $request, string $role): RedirectResponse
    {
        if (! config('app.demo')) {
            abort(404);
        }

        $user = User::where('role', $role)->firstOrFail();
        Auth::login($user);

        return redirect('/')->with('status', 'Logged in as demo ' . $role);
    }
}

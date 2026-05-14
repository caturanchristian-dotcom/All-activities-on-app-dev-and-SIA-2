<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    public function create(): mixed
    {
        return view('auth.register');
    }

    public function store(RegisterRequest $request): RedirectResponse
    {
        $userData = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];

        // ✅ Ensure role is always set
        if ($request->has('role')) {
            $userData['role'] = $request->role;
        } else {
            $userData['role'] = 'user';
        }

        $user = User::create($userData);

        event(new Registered($user));
        Auth::login($user);

        // Role redirect
        $redirectTo = $user->role === 'admin' ? '/admin/dashboard' : '/user/dashboard';
        return redirect($redirectTo);
    }
}
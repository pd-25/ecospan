<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthController extends Controller
{
    // Login page
    public function index() : View
    {
        return view('admin.login');
    }


    public function store(Request $request) : RedirectResponse
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:5',
        ]);

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            return redirect()->intended(route('admin.dashboard'));
        } else {
            session()->flash('alert-danger', 'Invalid Email or Password!');
        }

        return redirect()->intended(route('admin.login'));
    }


    public function destroy(Request $request): RedirectResponse
    {
        Auth::logout();
        session()->flash('alert-success', 'You have successfully logged out!');

        return redirect()->intended(route('admin.login'));
    }
}

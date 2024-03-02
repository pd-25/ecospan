<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index() : view
    {
        return view('admin.dashboard');
    }


    public function profile() : view
    {
        return view('admin.profile.edit', ['user' => Auth::user()]);
    }


    public function update_profile(Request $request) : RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $user = User::find(Auth::user()->id);

        $user->name = $request->name;
        $user->email = $request->email;

        if ($user->save()) {
            session()->flash('alert-success', 'Profile updated successfully!');
        } else {
            session()->flash('alert-danger', 'Something went wrong, try again later!');
        }

        return redirect()->intended(route('admin.profile'));
    }

    public function change_password(): View
    {
        return view('admin.change_password.edit', ['user' => Auth::user()]);
    }


    public function update_password(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'current_password' => 'required|string|min:5|max:20',
            'new_password' => 'required|string|min:5|max:20|confirmed',
        ]);

        try {
            $user = User::find(Auth::user()->id);

            if(!Hash::check($data['current_password'], $user->password)){
                session()->flash('alert-danger', 'Current password does not match!');
            } else {
                $user->password =  Hash::make($data['new_password']);
                $user->save();
                session()->flash('alert-success', 'Password updated successfully!');
            }

        } catch (Exception $e) {
            session()->flash('alert-danger', $e->getMessage());
        }

        return redirect()->intended(route('admin.change-password'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('auth.signup');
    }

    public function store(Request $request)
    {
//        $request->validate([
//            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//            'password' => ['required', 'string', 'min:8', 'confirmed'],
//        ]);
//        $user = User::create([
//            'name' => $request->name,
//            'email' => $request->email,
//            'password' => Hash::make($request->password),
//        ]);
//        event(new Registered($user));
//
//        Auth::login($user);
//
//        return redirect(route('dashboard', absolute: false));
        // $inputs = $request->all();
        $email = $request->email;  // $request['email']
        $password = $request->password;
        $user = new User();
        $user->email = 10;
        $user->password = Hash::make($password);
        $user->save();

        return redirect('/login');

    }

    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'isActive' => '1']))
        {
            return view('homepage');
        }
        else
        {
            return $this->sendFailedLoginResponse($request, 'auth.failed_status');
        }
    }
}

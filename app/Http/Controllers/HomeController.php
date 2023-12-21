<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('login.app');
    }
    public function register()
    {
        return view('login.register');
    }
    public function doregister(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
        ]);
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
        ]);
        return redirect()->route('login.register')->with('success',"Registered Successfully");
    }
    public function login()
    {
        return view('login.login');
    }
    public function dologin(Request $request)
    {
        $credentials=$request->only('email','password');
        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->route('tasks.index');
        }
        return back()->withErrors([
            'email'=>'The provided credentials do not match our records.',
        ]);
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.login');
    }
}

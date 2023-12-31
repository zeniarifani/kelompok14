<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Session;


class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function postRegistration(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6'
        ]);

        $data = $request->all();
        $createUse = $this->create($data);
        return redirect('login')->withSuccess("Registered Successfully!");
    }

    public function create(array $data)
    {
        return User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>$data['password']

        ]);
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);
        $checkLoginCredentials = $request->only('email','password');
        if(Auth::attempt($checkLoginCredentials)){
            return redirect('dashboard')->withSuccess("Logged in!");
        }
        return redirect('login')->withSuccess("Incorrect login data.");
    }


    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }

    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
        return redirect('login')->withSuccess("Login to go further.");
    }
    
}

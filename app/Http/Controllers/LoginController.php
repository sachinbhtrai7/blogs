<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login_page() {
        return view('/login');
        
    }


    public function register_page() {
        return view('/register');
        
    }

    public function register(Request $request) {

        $incomingfields = $request -> validate([
            'name'=> 'required',
            'email'=> 'required',
            'password'=> 'required|same:confirm_password'
        ]);
        $incomingfields['password']=bcrypt($incomingfields['password']);

       $user= User::create([
           'name'=>$request->name,
           'email'=>$request->email,
           'phone'=>$request->phone,
            'password'=>$request->password,

       ] );
       auth()->login($user);
       return view('/post');

    }


    public function login(Request $request)
    { 
    
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return view('post');
        } else {
            return back()->withErrors(['email'=> 'Invalid login details']);
        }
               }

        public function logout()
        {
            auth()->logout();
            return view('login');
        }
    }


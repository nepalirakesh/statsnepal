<?php

namespace App\Http\Controllers;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class CustomAuthController extends Controller
{
    public function show_custom_login_form(){
        return view('custom_auth.custom_login_form');
    }


    public function show_custom_registration_form(){
        return view('custom_auth.custom_registration_form');
    }

    public function custom_registration(Request $request){

        $request->validate([
            'name'=>'required|alpha',
            'email'=>'required|unique:users',
            'password'=>'required|min:6',
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);



        return redirect()->route('posts')->with('success','user registered succesfully');
    }



    public function custom_login(Request $request){

        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        $credentials=$request->only('email','password');

        if(Auth::attempt($credentials)){
            return redirect()->intended('/')->with('success','successfully logged in ');
        }
        return  redirect()->route('show_login')->with('fail','login failed!');

    }

    public function custom_logout(Request $request){

        Session::flush();
        Auth::logout();
        return redirect()->route('posts');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Auth;

Class AdminController extends Controller
{
    Public function dashboard()
    {
        return view('admin.dashboard');
    }
   
public function form()
{
    return view('admin.form');
}

public function login()
{
    return view('admin.login');
}


public function loginCheck(Request $request)
{

    $request -> validate([
        'email'=>'required',
        'password'=>'required'
    ]);

    $credential = $request->only('email','password');


    if(Auth::attempt($credential)){
        return redirect()->intended('dashboard');
    }else{
        return view('admin.login');
    }

}

public function signupCheck(Request $request)
{

    $request -> validate([
        'name'=>'required',
        'email'=>'required',
        'password'=>'required'
    ]);

    $data = $request->all();
    $check = $this->create($data);

    

}


public function signUp()
{
    return view('admin.signup');
}

public function signOut()
{
    Session::flush();
    Auth::logout();
    return redirect('login');
}


}


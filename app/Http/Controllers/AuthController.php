<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        $remember = $request->remember == 'on' ? true : false;
        $credentials =[
           
            'name' => $request->name,
            'merchantcode' => $request->merchantcode,
            'password' => $request->password,
        ];

        // dd($credentials);
       if( Auth::attempt($credentials,$remember)){
        return redirect()->intended('/');
       }else
       toastr()->error('Incorrect code or password');
       return redirect()->back();
           
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}


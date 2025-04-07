<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class loginController extends Controller
{
    public function show (){
        return view("Login.show");
    }
    public function login(Request $request){
        $credentials = ['email'=>$request->email,"password"=>$request->password];
        if(Auth::attempt($credentials)){
            return redirect()->route("HomePage")->with('succes',"Hello my frinds ");
        }else{
            return back()->withErrors([
                "email"=>"email or password not correct"
            ])->onlyInput('email');
        }
    }
    public function logaut(Request $request){
        Session::flush();
        Auth::logout();
        return redirect()->route('login')->with('success',"Déconnexion bien succes");
        
    }
}

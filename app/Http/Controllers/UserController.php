<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function register(Request $request){
        $request->validate([
            'name'=>'required|max:50',
            'email'=>'required|string|email|max:255|unique:users,email',
            'password'=>'required|string|min:8|confirmed'
        ]);
        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);
        return response()->json([
            'message'=>'user regiter success',
            'User' =>$user
        ],201);
    }
    public function login(Request $request){
        $request->validate([
            'email'=>'required|string|email',
            'password'=>'required|string'
        ]);
        $credentials = ['email'=>$request->email,"password"=>$request->password];
        if(Auth::attempt($credentials)){
        $user = User::where('email', $request->email)->firstOrFail();
        $token = $user->createToken("auth_token")->plainTextToken;
    
        return response()->json([
            'message'=>'user Login success',
            'User' =>$user,
            'remember_token' =>$token
        ], 201);}
        else{
            return response()->json(['message' => 'Email or password invalid'], 401);
        }
    }
    














    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

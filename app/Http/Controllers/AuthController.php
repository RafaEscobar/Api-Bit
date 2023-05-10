<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('users.login');
    }
    public function register(){
        return view('users.register');
    }
    public function registerVerify(Request $request){
        request()->validate(User::$rules);

        User::create($request->all());

        return redirect()->route('comics.index');
    }

    public function login(){
        return redirect()->route('comics.index');
    }
    public function loginVerify(Request $request){
        request()->validate(User::$rules);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('comics.index');
        }else{
            return redirect()->route('home');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }

}

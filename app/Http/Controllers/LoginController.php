<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('sesi.login');
    }
    
public function login (request $request){
   //  Login::flash('email',$request->email);
     
    $request->validate ([
        'email' => 'required',
        'password' => 'required',
    ]);

    $infoLogin = [
        'email'=>$request->email,
        'Password'=>$request->password,
    ];
    if (Auth::attempt($infoLogin)) {
        return redirect('siswa'); 
    }
    return back()->with('LoginError');
   
}
public function logout(){
    Auth::logout();   

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/login');
}
}
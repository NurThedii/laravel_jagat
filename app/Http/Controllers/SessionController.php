<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Session\Session;

class SessionController extends Controller
{
    public function index(){
        return view('page/login');
    }

    function login(Request $request){
        $credetials=[
            'email'=>$request->email,
            'password'=>$request->password,
        ];
        if(Auth::attempt($credetials)){
            return redirect('dashboard')->with('success','berhasil login');
        }
        return back()->with('error','Email dan Password tidak sesuai');
    }

    function register(){
        return view('page/register');
    }

    public function create(Request $request){
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return back()->with('success','berhasil registrasi');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('sesi');
    }

}

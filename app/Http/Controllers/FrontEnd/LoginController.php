<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function index(Request $request){
        return view('frontend.login.index');
    }

    function postlogin(Request $request){
        $request->validate([
            'email'=> 'required|email',
            'password' => 'required'
        ]);
        // dd($request->all());
        $loginData = [
            'email' => $request->email,
            'password' => $request->password,

        ];
        if(Auth::attempt($loginData)){
            return redirect()->route('dashboard'); // artinya kl sukses ke dashboard
        }else{
            // return redirect()->route('login'); // artinya kl gagal ke login
            return redirect()->back()->with('error','email atau password salah');
            // return redirect()->back()->with([
            //     'error' => 'email  salah',
            //     'error' => ' password salah',
        // ]);
        }
    }

    function getLogout(Request $request){
        Auth::logout();
        return redirect()->route('login');
    }

}

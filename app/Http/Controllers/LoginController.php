<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Upload;
use App\Models\LoginAth;
use App\Models\RegisAth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UploadFotoController;

class LoginController extends Controller

{
    public function showLoginForm() {

        return view('auth.login') ;
    }

    public function loginPost(Request $request) {
        
      $credentials =  $request->validate([
            // 'email'=>'required|string|email|max:255|',
            // 'password'=>'required|string|max:255|',

            'email' => ['required', 'email'],
            'password' => ['required'],
      ],

      [
        'email.required'=>"Email wajib di isi",
        'password.required'=> "Password wajib di isi",
      ]);

      
     
        // $credentials = $request->only('email', 'password');
        // $remember = $request->filled('remember');    
       
        if (Auth::attempt($credentials)) {
            
          $request->session()->regenerate();

            return redirect()->intended('/dashboard');

            // return redirect()->back()->with('success', 'Login berhasil');
            // return redirect()->back()->withErrors('success', 'Login berhasil di daftarkan oleh kami');
        }else {
            return redirect()->with('loginError', 'loginFailed');
        }
        // return redirect()->withErrors(['email' => 'Email and Passwor do not match to login successfuly'])->onlyInput('email');
        // return redirect()->back()->with(['email' => 'Email and Password do not match']);  
    }

    
  

}

<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Upload;
use App\Models\LoginAth;
use App\Models\RegisAth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UploadFotoController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function register() {

        return view('auth.register');
    }

    public function registerPost(Request $request) {

        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:login',
            'password' => 'required|string|',
        ], 
    
        [
            'username.required' => 'Username wajib di isi',
            'email.required'=>"Email wajib di isi",
            'password.required'=> "Password wajib di isi",
        ]
    
    );


        $credentials = $request->only('username', 'email', 'password');
        $remember = $request->filled('remember');

        $RegisAth  = new RegisAth();
        $RegisAth->username = $request->username;
        $RegisAth->email = $request->email;
        $RegisAth->password = Hash::make($request->password);
        $RegisAth->save();

        return redirect()->back()->with('success', 'Register successfuly');
        // return redirect()->route('/dashboard')->with('success', 'Register successfully');
        // return redirect('/dashboard')->route('register')->with('register', 'Pendaftaran telah berhasil di daftarkan');
    }
}



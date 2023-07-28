<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    function register(Request $request){
        try{
        $request->validate([
            'username' => 'required|string|unique:users',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8'
        ], [
            'username.required' => 'Username harus diisi',
            'username.unique' =>'Username sudah digunakan',
            'email.required' =>'Email harus diisi',
            'email.unique' => 'Email sudah digunakan',
            'password.required' => 'Password harus diisi',
            'password.min' => 'Password minimal 8 karakter'
        ]);

        $user = new User();
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect('/login')->with('success', 'Registrasi berhasil! Silakan login');
    } catch(\Exception $e){
        return redirect('/register')
        ->withErrors(['error', 'Registrasi gagal. Mohon coba lagi'])
        ->withInput();
    }
    }

    function login(Request $request){
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string'
        ]);

        $credentials = $request->only('username', 'password');

        if(Auth::attempt($credentials)){
            return redirect('/');
        }
        else {
            return redirect('/login')->with('error', 'Username atau password salah');
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Trigerlogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request){
        return view('page.register');
    }

    public function registered(Request $request){

        $pesan = [
            'email.required' => 'Email Tidak Boleh Kosong',
            'email.unique' => 'Email Sudah Terpakai',
            'password.required' => 'Password Tidak Boleh Kosong',
            'password.min' => 'Password  Minimal 6 karakter'
        ];

        $request->validate([
            'email'     => 'required|unique:users,email',
            'password'  => 'required',
            'tgl_lahir' => 'required'
        ],$pesan);
        $dataStore = [
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
            'tgl_lahir' => $request->tgl_lahir
        ];

        
        User::create($dataStore);
        return redirect('/register')->with('succes','Data berhasil di simpan');
    }
    public function auth(Request $request){
        $request->validate([
            'email'     =>'required',
            'password'  =>'required',
        ]);
        
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $request->session()->regenerate();
            Trigerlogin::create([
                'user_id' => Auth::user()->id
            ]);
            return redirect('/explore');
        } else {
            return redirect()->back()->with('error', 'Email atau password salah');
        }
    }

    public function logout(Request $request){
        $user =  Auth::user();
        if ($user){
            Trigerlogin::where('user_id', $user->id)->delete();
        }
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/');
    }
}

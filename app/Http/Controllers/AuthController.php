<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use Redirect;
use App\User;

class AuthController extends Controller
{
    //
    public function Index()
    {
        if (Auth::check()) {
            $leveluser = Auth::user()->level;
            if ($leveluser == "Admin") {
                return redirect('/admin');
            }
        } else {
            return view('guest.home');
        }
    }

    public function Login(Request $request)
    {
        if(Auth::attempt(['username' => $request->get('username'), 'password' => $request->get('password')]))
        {
            $user = User::find(Auth::id());
            //cek password harus enskripsi lagi atau tidak
            if(Hash::needsRehash($user->password)){
                $password = Hash::make($request->get('password'));
                $user->password = $password;
                $user->save();
            }
            if($user->level == 'Admin'){
                return Redirect::to('/admin');
            }
        } else {
            return Redirect::to('/')->with('login', 'error');
        }
    }
}

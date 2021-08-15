<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Hash;
use Auth;


class LoginController extends Controller
{
    //
    public function login(){

        return view('auth.login');

    }

    public function loginProceed(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where('email',$email)->first();
        if(!is_null($user)){

            if(Hash::check($password, $user->password)){

                Auth::login($user, true);

                return redirect(route('dashboard'));

            }else{
                // echo "not passed";
                return redirect(route('login'));
            }



        }else{
            return redirect(route('login'));
        }

    }


    public function logout(){

        Auth::logout();
        return redirect(route('login'));

    }
}

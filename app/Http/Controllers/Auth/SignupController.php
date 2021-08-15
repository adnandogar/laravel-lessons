<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Hash;

class SignupController extends Controller
{
    //
    public function signup(){
        return view('auth.signup');

    }

    public function signupProceed(Request $request){


        $data = $request->input();
        unset($data['_token']);

        $data['password'] = Hash::make($data['password']);
        // dd($data);

        $isAlreadyExists = User::where('email', $data['email'])->first();
        if(is_null($isAlreadyExists)){
            $isCreated = User::create($data);
            if($isCreated){

                return redirect(route('login'));

            }else{
                return redirect(route('auth_signup'));

            }
        }else{
            return redirect(route('auth_signup'));
        }


    }



}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

use App\Http\Requests\LoginFormRequest;

use App\Models\User;

class AuthController extends Controller
{

   

    public function login() {
        //  User::create([
        // 'name'=>'john',
        // 'email'=>'john@doe.fr',
        // 'password'=> Hash::make('00000')
        //  ]);

        return view('auth.login');
    }

    public function doLogin(LoginFormRequest $request) {
        $credentials = $request->validated();

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended(route('admin.property.index'));
        }

        return back()->withErrors('email','Identifiant incorect')->onlyInput('email');

    }


    public function logout() {
        Auth::logout();
        return to_route('login')->with('success', 'vous etes maintenent deconnecter');
    }

}

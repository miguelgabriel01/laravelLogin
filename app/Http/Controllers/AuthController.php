<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function dashboard(){

        //Verifica se existe uma sessão e redireciona o usuario para a view de dashboard
        if(Auth::check() === true ){
            return view('admin.dashboard');
        }

        return redirect()->route('admin.login');

    }

    public function showFormLogin(){
        return view('admin.formLogin');
    }
}

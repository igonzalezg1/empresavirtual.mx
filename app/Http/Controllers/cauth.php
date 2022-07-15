<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use Validator;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Session;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class cauth extends Controller
{
    public function getRegister()
    {
        return view("register");
    }

    public function postRegister(Request $request)
    {
        $datos = $request->all();
        Users::create([
            'ap_paterno'=>$datos['ap_paterno'],
            'ap_materno'=>$datos['ap_materno'],
            'nombres'=>$datos['nombres'],
            'edad'=>$datos['edad'],
            'correo'=>$datos['correo'],
            'telefono'=>$datos['telefono'],
            'Linkedln'=>$datos['Linkedln'],
            'username'=>$datos['username'],
            'password'=>Hash::make($datos['password']),
            'status'=>1,
        ]);

        return view("login");
    }
}

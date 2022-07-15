<?php

namespace App\Http\Controllers;
use App\Users;
use App\Servicios;

use Illuminate\Http\Request;

class VerServicios extends Controller
{
    public function index()
    {
        $usuarioactual = \Auth::user();
        $servicios = Servicios::where('status',1)
        ->where('id_usuario','!=',$usuarioactual->id)->get();

        return view('listaservicios')->with('servicios',$servicios)->with('usuarioactual',$usuarioactual);
    }

    public function infoservicios($id)
    {
        $servicio = Servicios::find($id);
        $usuarioactual = \Auth::user();

        return view('detallesservicio')->with('servicio',$servicio)->with('usuarioactual',$usuarioactual);
    }
}

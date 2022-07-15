<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicios;
use App\Users;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarioactual = \Auth::user();
        $servicios = Servicios::where('status',1)
        ->where('id_usuario',$usuarioactual->id)->get();

        return view('servicios.index')->with('usuarioactual',$usuarioactual)->with('servicios',$servicios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servicios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuarioac = \Auth::user();
        $datos = $request->all();

        Servicios::create([
            'nombre'=> $datos['nombre'],
            'descripcion'=>$datos['descripcion'],
            'pagina_web'=>$datos['pagina_web'],
            'id_usuario'=>$usuarioac->id,
            'status'=>$datos['status'],
        ]);

        return redirect('/misservicios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $servicio = Servicios::find($id);
        $usuarioactual = \Auth::user();

        return view('servicios.read')->with('servicio',$servicio)->with('usuarioactual',$usuarioactual);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicio = Servicios::find($id);

        return view('servicios.edit')->with('servicio',$servicio);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuarioac = \Auth::user();
        $datos = $request->all();
        $servicio = Servicios::find($id);
        $servicio->update([
            'nombre'=> $datos['nombre'],
            'descripcion'=>$datos['descripcion'],
            'pagina_web'=>$datos['pagina_web'],
            'id_usuario'=>$usuarioac->id,
            'status'=>$datos['status'],
        ]);

        return redirect('/misservicios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servicio = Servicios::find($id);
        $servicio->status = 0;
        $servicio->save();

        return redirect('/misservicios');
    }
}

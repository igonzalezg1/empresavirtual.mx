@extends('template.master')
@section('contenido_central')

<div class="container">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <h1 class="titulop">Hola {!! $usuarioactual->nombres !!}.</h1>
            <br />
            <h4 align='center'> Esta es la informaion del servicio deseado</h4>
        </div>
        <div class="col-sm-2"></div>
    </div>
    <br />
    <div class="row">
        <div class="col-sm-6">
            <h6>Nombre del servicio: {!! $servicio->nombre !!}</h6>
            <h6>Descripcion del servicio: {!! $servicio->descripcion !!}</h6>
        </div>
        <div class="col-sm-6">
            <h6>Pagina web: {!! $servicio->pagina_web !!}</h6>
            <h6>Usuario que ofrece el servicio: {!! $servicio->users->nombres !!}</h6>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-sm-6">
            <h4 align="center">Mas informacion de quien ofrece el servicio.</h4>
            <br />
            <h6>Nombre completo: {!! $servicio->users->ap_paterno !!} {!! $servicio->users->ap_materno !!} {!! $servicio->users->nombres !!}</h6>
            <h6>Edad: {!! $servicio->users->edad !!}</h6>
            <h6>Correo: {!! $servicio->users->correo !!}</h6>
            <h6>Telefono: {!! $servicio->users->telefono !!}</h6>
            <h6>Usuario de Linkedln: {!! $servicio->users->Linkedln !!}</h6>
            
        </div>
        <div class="col-sm-6">
            <h2>¿Tienes mas dudas sobre el servicio?</h2>
            <h4>Da click en el siguiente boton para tener un chat personalizado.</h4>
            <a href="{!! asset('chatearconpersona/'.$servicio->id) !!}" class="btn btn-secondary w-100">Chatear con el que publico el servicio</a>
        </div>
    </div>
</div>
<br />
<br />

@endsection()
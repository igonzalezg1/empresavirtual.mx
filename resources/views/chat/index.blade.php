@extends('template.master')
@section('contenido_central')

<div class="container">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <h1 class="titulop">Hola {!! $usuario->nombres !!}.</h1>
            <br />
            <h4 align='center'> Este es el chat del servicio {!! $servicio->nombre !!}</h4>
        </div>
        <div class="col-sm-2"></div>
    </div>
    <br />
    <div class="row">
        <div class="col-sm-12" align="center">
            <h2>Emisor: {!! $usuario->nombres !!}</h2>
            <h2>ID de chat: {!! $chat->id !!}</h2>
            <h2>Conversacion:</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            @foreach ($mensajes as $mensaje)
                <div class="card bg-secondary text-white">
                    <div class="card-body">
                        <h6>Emisor: {!! $mensaje->emisor !!}</h6>
                        <h6>Fecha/Hora: {!! $mensaje->updated_at !!}</h6>
                        <h6>Mensaje: {!! $mensaje->mensaje !!}</h6>
                    </div>
                </div>
                <br />
            @endforeach
        </div>
        <div class="col-sm-6">
            <form action="{!! asset('nuevomen/'.$chat->id) !!}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="mensaje">Mensaje a escribir:</label>
                    <textarea placeholder="Ingrese aqui el mensaje" name="mensaje" id="mensaje" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="emisor">Emisor:</label>
                    <input type="text" placeholder="Emisor" name="emisor" id="emisor" class="form-control" value="{!! $usuario->nombres !!}" readonly>
                </div>
                <br />
                <button type="submit" class="btn btn-secondary w-100">Enviar mensaje</button>
            </form>
        </div>
    </div>
</div>
<br />
<br />

@endsection()
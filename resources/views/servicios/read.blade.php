@extends('template.master')
@section('contenido_central')

<div class="container">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <h1 class="titulop">Hola {!! $usuarioactual->nombres !!}.</h1>
        </div>
        <div class="col-sm-2"></div>
    </div>
    <div class="row">
        <h3>Nombre: {!! $servicio->nombres !!}</h3>
		<h3>Descripcion: {!! $servicio->descripcion !!}</h3>
		<h3>Pagina web: {!! $servicio->pagina_web !!}</h3>
		<h4>Usuario: {!! $servicio->users->nombres !!}</h4>
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
    </div>
</div>
<a href="{!! asset('misservicios') !!}" class="btn btn-secondary w-100">Regresar</a>
<br />
<br />

@endsection()

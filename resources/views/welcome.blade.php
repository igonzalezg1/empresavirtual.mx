@extends('template.master')
@section('contenido_central')
<div class="container">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <h1 class="titulop">Bienvenido a empresa virtual MX.</h1>
        </div>
        <div class="col-sm-2"></div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <img src="{!! asset('estilo/img/uno.jpg') !!}" class="imgprincipal" alt="Imagen principal" width="700px">
            <br />
            <p class="textop">Bienvenido a Empresa Virtual MX, donde podras publicar tus servicios de manera mas comoda y segura. <br /> Inicia sesion o da click en el boton de abajo para crear una cuenta.</p>
            <br />
            <a href="registrars" class="btn btn-dark w-100 textop">Click aqui para crear una cuenta</a>
            <br />
            <br />
        </div>
    </div>
</div>
@endsection()
@extends('template.master')
@section('contenido_central')
<div class="container">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <h1 class="titulop">Iniciar sesion.</h1>
        </div>
        <div class="col-sm-2"></div>
    </div>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <img src="{!! asset('estilo/img/dos.png') !!}" class="imgprincipal" alt="Imagen principal" width="200px">
            <br />
            <form action="login" method="post" role="form">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                        </div>
                        <input type="text" name="username" class="form-control" id="username"
                            placeholder="Ingrese el username" data-rule="minlen:4" 
                            data-msg="Capturar mas de 4 caracteres">
                    </div>
                </div>
                <br />
                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="bi bi-key"></i></span>
                        </div>
                        <input type="password" name="password" class="form-control" id="password"
                            placeholder="Ingrese la contraseña">
                    </div>
                </div>
                <br />
                <div class="form-group">
                    <button type="submit" class="btn btn-secondary w-100">Ingresar</button>
                </div>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
<br />
@endsection()
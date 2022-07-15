@extends('template.master')
@section('contenido_central')
<div class="container">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <h1 class="titulop">Editar sevicio: {!! $servicio->nombre !!}.</h1>
        </div>
        <div class="col-sm-2"></div>
    </div>
</div>
<h1 align="center">Crear un nuevo servicio.</h1>
<br />
<div class="container">
<div class="row">
    <div class="col-sm-12">
        <form action="{!! asset('edservicios/'. $servicio->id) !!}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="nombre">Nombre del servicio:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="{Ingrese un nombre de servicio}" value="{!! $servicio->nombre !!}" />
            </div>
            <div class="form-group">
                <label for="descripcion">Descripcion del servicio:</label>
                <textarea id="descripcion" name="descripcion" class="form-control" placeholder="Ingrese una descripcion" value="{!! $servicio->descripcion !!}"></textarea>
            </div>
            <div class="form-group">
                <label for="pagina_web">Pagina web:</label>
                <input type="text" id="pagina_web" name="pagina_web" class="form-control" placeholder="Ingrese la pagina web" value="{!! $servicio->pagina_web !!}" />
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select name="status" id="status" class="form-select">
                    <option value="1">Activo</option>
                    <option value="2">Inactivo</option>
                </select>
            </div>
            <br />
            <button type="submit" class="btn btn-secondary w-100">Guardar datos</button>
            <br />
            <br />  
        </form>
    </div>
</div>
</div>
@endsection()
@extends('template.master')
@section('contenido_central')
<br />
<br />
<br />
<br />
<br />
<br />
<div class="container">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="card" style="width:600px">
                <div class="card-body">
                <h4 class="card-title" align="center">Error: {!! $msj !!}</h4>
                </div>
                <div align="center"><img class="card-img-bottom" src="{!! asset('estilo/img/tres.png') !!}" alt="Card image" style="width:250px"></div>
                <br />
                <a href="inicio" class="btn btn-secondary w-100">Regresar al inicio</a> 
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>
</div>
<br />
<br />
<br />
<br />
<br />
<br />
@endsection()
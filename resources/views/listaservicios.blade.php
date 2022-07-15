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
        <table id="tabla1" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Nombre del servicio</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
            @foreach($servicios as $servicio)
            <tr>
                <td>{!! $servicio->nombre !!}</td>
                <td align="center">
                    <a href="{!! 'vermasinfo/'.$servicio->id !!}" class="btn btn-secondary">Ver mas informacion</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<br />

@endsection()
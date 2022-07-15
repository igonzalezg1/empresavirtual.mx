@extends('template.master')
@section('contenido_central')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <h1 class="titulop">Hola {!! $usuario->nombres !!}.</h1>
            <br />
            <h4 align='center'>En este apartado veras los chats pendientes</h4>
        </div>
        <div class="col-sm-2"></div>
    </div>
    <br />
    <div class="row">
        <div class="col-sm-6">
            <h3>Chats sobre otros servicios.</h3>
            <br />
            <table id="tabla11" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>ID Chat</th>
                        <th>Servicio</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($resp as $re)
                <tr>
                    <td>{!! $re->id !!}</td>
                    <td>{!! $re->servicios->nombre !!}</td>
                    <td>
                        <a href="{!! asset('vermensajesn/'.$re->id) !!}" class="btn btn-secondary">Entrar a la convesasion</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-sm-6">
            <h3>Preguntas de mis servicios.</h3>
            <br />
            <table id="tabla12" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>ID Chat</th>
                        <th>Servicio</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($preg as $pr)
                <tr>
                    <td>{!! $pr->id !!}</td>
                    <td>{!! $pr->servicios->nombre !!}</td>
                    <td>
                        <a href="{!! asset('vermensajesn/'.$pr->id) !!}" class="btn btn-secondary">Entrar a la convesasion</a>
                        <a href="{!! asset('eliminarchat/'.$pr->id) !!}" class="btn btn-danger">Borrar chat</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<br />
<br />
@endsection()
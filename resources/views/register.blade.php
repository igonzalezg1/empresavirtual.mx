@extends('template.master')
@section('contenido_central')
<script>
    function validar()
    {
        var ok = true;
        var color_error = "#F60A0A";
        var color_ok = "#0EF60A";

        var ap_paterno = document.getElementById("ap_paterno");
        if(ap_paterno.value == "" || /^\s+$/.test(ap_paterno.value) || ap_paterno.value.length > 30){
            ap_paterno.style.borderColor = color_error;
            ok = false;
        }else{
        ap_paterno.style.borderColor = color_ok;
        }

        var ap_materno = document.getElementById("ap_materno");
        if(ap_materno.value == "" || /^\s+$/.test(ap_materno.value) || ap_materno.value.length > 30){
            ap_materno.style.borderColor = color_error;
            ok = false;
        }else{
            ap_materno.style.borderColor = color_ok;
        }

        var nombres = document.getElementById("nombres");
        if(nombres.value == "" || /^\s+$/.test(nombres.value) || nombres.value.length > 30){
            nombres.style.borderColor = color_error;
            ok = false;
        }else{
        nombres.style.borderColor = color_ok;
        }

        var edad = document.getElementById("edad");
        if(edad.value == "" || edad.value < 18){
            edad.style.borderColor = color_error;
            ok = false;
        }else{
            edad.style.borderColor = color_ok;
        }

        var correo = document.getElementById("correo");
        var valic =/^[\w]+@{1}[\w]+[a-z]{2,3}$/;
        if (correo.value=="" || /^\s+$/.test(correo.value)) {
            correo.style.borderColor = color_error;
            ok = false;
        }else{
            correo.style.borderColor = color_ok;
        }

        var telefono = document.getElementById("telefono");
        if (telefono.value=="" || telefono.value <0 || telefono.value.length >10) {
            telefono.style.borderColor = color_error;
            ok = false;
        }else{
            telefono.style.borderColor = color_ok;
        }

        var Linkedln = document.getElementById("Linkedln");
        if(Linkedln.value == "" || /^\s+$/.test(Linkedln.value) || Linkedln.value.length > 30){
            Linkedln.style.borderColor = color_error;
            ok = false;
        }else{
            Linkedln.style.borderColor = color_ok;
        }

        var username = document.getElementById("username");
        if(username.value == "" || /^\s+$/.test(username.value) || username.value.length > 30){
            username.style.borderColor = color_error;
            ok = false;
        }else{
        username.style.borderColor = color_ok;
        }

        var password = document.getElementById("password");
        if(password.value == "" || /^\s+$/.test(password.value) || password.value.length > 30){
            password.style.borderColor = color_error;
            ok = false;
        }else{
        password.style.borderColor = color_ok;
        }

        var rpassword = document.getElementById("rpassword");
        if(rpassword.value == "" || /^\s+$/.test(rpassword.value) || rpassword.value.length > 30 || rpassword.value != password.value){
            rpassword.style.borderColor = color_error;
            ok = false;
        }else{
        rpassword.style.borderColor = color_ok;
        }

        if(ok == false){
            alert("Compruebe los campos en rojo");
        }

        return ok;
    }
</script>
<div class="container">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <h1 class="titulop">Crear un nuevo usuario.</h1>
        </div>
        <div class="col-sm-2"></div>
    </div>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <p class="textop">LLena el siguiente formulario para poder crear un nuevo usuario</p>
            <br />
            <form action="registrarss" method="POST" onsubmit="return validar();">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="ap_paterno" class="textop">Apellido paterno:</label>
                    <input type="text" placeholder="Ingresa el apellido paterno" id="ap_paterno" name="ap_paterno" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="ap_materno" class="textop">Apellido materno:</label>
                    <input type="text" placeholder="Ingresa el apellido materno" id="ap_materno" name="ap_materno" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="nombres" class="textop">Nombre (s):</label>
                    <input type="text" placeholder="Ingresa el/los nombre(s)" id="nombres" name="nombres" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="edad" class="textop">Edad:</label>
                    <input type="number" placeholder="Ingresa la edad" id="edad" name="edad" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="correo" class="textop">Correo:</label>
                    <input type="email" placeholder="Ingresa el correo" id="correo" name="correo" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="telefono" class="textop">Telefono:</label>
                    <input type="number" placeholder="Ingresa el telefono" id="telefono" name="telefono" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="Linkedln" class="textop">Linkedln:</label>
                    <input type="text" placeholder="Ingresa el Linkedln (en caso de no tener solo colocar ninguno)" id="Linkedln" name="Linkedln" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="username" class="textop">Username:</label>
                    <input type="text" placeholder="Ingresa el username" id="username" name="username" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="password" class="textop">Password:</label>
                    <input type="password" placeholder="Ingresa el password" id="password" name="password" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="rpassword" class="textop">Repita el password:</label>
                    <input type="password" placeholder="Repita el password" id="rpassword" name="rpassword" class="form-control" />
                </div>
                <br />
                <button type="submit" class="btn btn-secondary w-100">Crear usuario</button>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
<br />
@endsection()
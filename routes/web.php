<?php

use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware'=>'web'], function(){
    Route::get('/', function () {
        return view('welcome');
    });
    
    Route::get('home', function () {
        return view('welcome');
    });

    Route::get('inicio', function(){
        return view('welcome');
    });

    Route::get('login','Auth\LoginController@getLogin');

    Route::post('login', 'Auth\LoginController@postLogin');

    Route::get('register', 'Auth\LoginController@getRegister');

    Route::post('register', 'Auth\LoginController@postRegister');

    Route::get('registrars', 'cauth@getRegister');

    Route::post('registrarss','cauth@postRegister');
});

Route::group(['middleware'=>'auth'], function(){

    Route::get('cerrarsesion', 'Auth\LoginController@getLogout');

});

Route::group(['middleware'=>'usuario'], function(){

    Route::resource('misservicios', 'ServiciosController');

    Route::get('verservicios', 'VerServicios@index');

    Route::get('crearservicio', 'ServiciosController@create');

    Route::get('editarservicio/{id}', 'ServiciosController@edit');

    Route::get('vermiservicio/{id}', 'ServiciosController@show');

    Route::get('vermasinfo/{id}', 'VerServicios@infoservicios');

    Route::get('eliminarservicio/{id}', 'ServiciosController@destroy');

    Route::post('crservicios', 'ServiciosController@store');

    Route::post('edservicios/{id}', 'ServiciosController@update');

    Route::get('chatearconpersona/{id_servicio}', 'ChatController@index');

    Route::post('nuevomen/{id_chat}', 'ChatController@nuevomen');

    route::get('vermensajes', 'ChatController@vermensajes');

    route::get('vermensajesn/{id_chat}', 'ChatController@vermensajesx');

    route::get('eliminarchat/{id_chat}', 'ChatController@eliminarchat');

});


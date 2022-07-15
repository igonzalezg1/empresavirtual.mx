<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    protected $table = 'servicios';

    protected $fillable = ['nombre','descripcion','pagina_web','id_usuario','status'];

    public function users(){

        return $this->belongsTo('App\Users', 'id_usuario','id');
        
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chats extends Model
{
    protected $table = 'chats';

    protected $fillable = ['id_servicio','id_cliente','status'];

    public function servicios(){

        return $this->belongsTo('App\Servicios', 'id_servicio','id');
        
    }

    public function clientes(){

        return $this->belongsTo('App\Users', 'id_cliente','id');
        
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensajes extends Model
{
    protected $table = 'mensajes';

    protected $fillable = ['id_chat','mensaje','emisor','status','updated_at'];

    public function chats(){

        return $this->belongsTo('App\Chats', 'id_chat','id');
        
    }
}

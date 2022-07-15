<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class Users extends Model implements AuthenticatableContract
{
    use Authenticatable;
    protected $table = 'users';

    protected $fillable = ['ap_paterno','ap_materno','nombres','edad','correo','telefono','Linkedln','username','password','status'];

}

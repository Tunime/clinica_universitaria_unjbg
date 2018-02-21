<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Usuario extends Model implements Authenticatable
{
    //
    use AuthenticableTrait;
    protected $table = 'usuarios';
    public $timestamps = false;
    //validamos los camos que seran obligatorios al momento de eviarlos
    protected $fillable = ['nombres', 'apellido', 'contrasena', 'nick', 'tipo_usuario'];
    //definimos el id primario
    protected $primaryKey = 'id_usuario';

    protected $hidden = [
        'contrasena', 'remember_token',
    ];
}

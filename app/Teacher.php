<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use Notifiable;
    

    protected $fillable = [
        'nombres', 'apellidoPaterno', 'apellidoMaterno','dni','sexo','correo','direccion','estado','profesion','documentos'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       'remember_token',
    ];
}

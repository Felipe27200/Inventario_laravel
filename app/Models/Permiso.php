<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Permiso extends Model
{
    use HasFactory;

    protected $primaryKey = "permiso_id";
    public $timestamps = false;

    /*
        Este método es el que crea la relación one to one
        entre users y permisos, se asume que la tabla
        users tiene la llave foránea de permisos.
    */
    public function user()
    {
        return $this->hasOne(User::class);
    }
}

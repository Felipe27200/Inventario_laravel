<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;


use App\Models\Permiso;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */

    /*
        Aquí es donde se definen los datos que deberán ser ingresados
        para realizar el registro de un usuario, es decir, se indican
        las columnas a las que se les insertara información.
    */
    protected $fillable = [
        'permiso_id', 'identificacion', 'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /*
        Aquí se define la relación inversa entre
        permisos y user, de esta forma se permite
        que al usar el modelo de users se pueda
        hacer una busqueda de los permisos que coincidan
        con la llave foránea permiso_id en user.
    */
    public function permiso()
    {
        return $this->belongsTo(Permiso::class);
    }

    /*
        RELACIÓN ONE TO MANY
        
        Se asume que la tabla productos es la que tiene
        la llave foránea de users.
    */
    public function producto()
    {
        return $this->hasMany(Producto::class);
    }
}

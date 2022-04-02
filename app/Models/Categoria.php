<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $primaryKey = 'categoria_id';
    public $timestamps = false;

    protected $fillable = ['nombre_categoria'];

    public function producto()
    {
        return $this->hasMany(Producto::class);
    }
}

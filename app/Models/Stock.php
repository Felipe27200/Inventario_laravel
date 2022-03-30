<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $primaryKey = 'stock_id';
    public $timestamps = false;

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}

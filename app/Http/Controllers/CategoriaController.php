<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function create(){
        $categoria = new Categoria();

        return view('categoria.create');
    }
}

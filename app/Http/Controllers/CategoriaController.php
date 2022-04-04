<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index()
    {
        return view('categoria.index');
    }

    public function create(){
        return view('categoria.create');
    }
}

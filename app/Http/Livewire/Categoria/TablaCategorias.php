<?php

namespace App\Http\Livewire\Categoria;
// Permite traer las librerías para generar la paginación.
use Livewire\WithPagination;

Use App\Models\Categoria;

use Livewire\Component;

class TablaCategorias extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.categoria.tabla-categorias',
        ['categorias' => Categoria::Paginate(5)]);
    }
}

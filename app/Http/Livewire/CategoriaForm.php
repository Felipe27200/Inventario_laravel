<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categoria;
use Exception;
use GuzzleHttp\Psr7\Request;
// use Illuminate\Http\Request;

class CategoriaForm extends Component
{
    // Esta propiedad hace referencia a la entrada del usuario.
    public $nuevaCategoria;

    // Se validan los valores de las propiedades
    protected $rules = ['nuevaCategoria' => 'required'];

    /*
        De esta forma se personalizan los mensajes de error en los 
        comentarios, se necista un array asociativo, en este, 
        la clase es el nombre de la variable que almacena el input con 
        separador punto y el nombre de la restricción y el valor 
        es el mensaje de error para esa restricción.
    */
    protected $messages = [
        'nuevaCategoria.required' => 'Debe ingresar el nombre de la categoría',
    ];

    public function store()
    {
        $this->nuevaCategoria = strtoupper($this->nuevaCategoria);

        // Válida los campos del formulario
        $this->validate();

        try
        {
            Categoria::create(['nombre_categoria' => $this->nuevaCategoria]);
            
            $this->nuevaCategoria = "";
    
            // Asigna un mensaje a la sesión, por lo que este se puede
            // recuperar en una variable en el componente livewire.
            session()->flash('mensaje', 'Categoría Registrada Satisfactoriamente');
        }
        catch (Exception $ex)
        {
            session()->flash('error', 'LA CATEGORÍA YA EXISTE');
        }
    }

    public function render()
    {
        return view('livewire.categoria-form');
    }
}

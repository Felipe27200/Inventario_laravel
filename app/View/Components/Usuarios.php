<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\User;


class Usuarios extends Component
{
    public $usuarios;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->usuario = User::find(1000851126);

        file_put_contents("usuario.json", json_encode($this->usuarios));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.usuarios');
    }
}

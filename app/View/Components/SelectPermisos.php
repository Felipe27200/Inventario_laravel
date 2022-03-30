<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class SelectPermisos extends Component
{
    public $permisosUser;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->permisosUser = DB::table('permisos')->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.select-permisos');
    }
}

<?php

namespace App\View\Components;

use App\Models\Carro;
use Illuminate\View\Component;

class CarroView extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->id = $id;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $carro = Carro::where('id', $this->id)->first();
        if ($carro != null)
            return view('components.carro-view', ["carro" => $carro]);
    }
}

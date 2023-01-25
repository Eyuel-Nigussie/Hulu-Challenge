<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormComponent extends Component
{

    public $toggle = false;

    public function toggleFunc(){
        $this->toggle = !$this->toggle;
    }

    // validation
 
    public function render()
    {
        return view('livewire.form-component');
    }
}

<?php

namespace App\Livewire\NestedComponent;

use Livewire\Component;

class Users extends Component
{

    public $names = ['Ayaan', 'Usman', 'Ahmed', 'Haris'];
    
    public function render()
    {
        return view('livewire.nested-component.users');
    }
}

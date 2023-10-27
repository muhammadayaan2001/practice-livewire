<?php

namespace App\Livewire;

use Livewire\Component;

class UserProfile extends Component
{
    public function render()
    {
        $data = ['name'=>'ayaan', 'email'=>'ayan@gmail.com'];
        return view('livewire.user-profile', ['data' => $data]);
    }
}

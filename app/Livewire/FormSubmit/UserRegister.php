<?php

namespace App\Livewire\FormSubmit;

use Livewire\Component;

class UserRegister extends Component
{

    public $name, $email, $password;

    public function render()
    {
        return view('livewire.form-submit.user-register');
    }


    public function submit(){
        // dd('ok');
        dd($this->name, $this->email, $this->password);
    }

}

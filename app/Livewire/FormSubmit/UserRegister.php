<?php

namespace App\Livewire\FormSubmit;

use Livewire\Attributes\Rule;
use Livewire\Component;

class UserRegister extends Component
{

    // in livewire version 3 you need to write this for real time validation
    #[Rule('required|min:3')]
    public $name;
    #[Rule('required|email')]
    public $email;
    #[Rule('required|min:5|max:8')]
    public $password;

    public function render()
    {
        return view('livewire.form-submit.user-register');
    }


    /* if you to show or hide validate error when user type correct input, you have to create a function like this. 
        The function is pre-defined called livewire lifecyle hook.
        NOTE: If you are using livewire version below 3.
        */
    // public function update($propertyName)
    // {
    //     $this->validateOnly($propertyName, [
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'password' => 'required|min:5|max:8'
    //     ]);
    // }

    public function submit()
    {
        // dd('ok');

        // $this->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'password' => 'required|min:5|max:8'
        // ]);

        dd($this->name, $this->email, $this->password);
    }
}

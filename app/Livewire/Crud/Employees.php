<?php

namespace App\Livewire\Crud;

use App\Models\Employee;
use Livewire\Component;

class Employees extends Component
{
    public $allEmployees;

    public $first_name, $last_name, $email, $age, $salary, $phone, $job_title, $address, $gender, $genders, $employee_id;
    public $updateMode = false;

    public function render()
    {
        $this->allEmployees = Employee::all();
        return view('livewire.crud.employees');
    }

    private function resetInputFields(){
        $this->first_name = '';
        $this->last_name = '';
        $this->email = '';
        $this->age = '';
        $this->salary = '';
        $this->phone = '';
        $this->job_title = '';
        $this->address = '';
        $this->gender = '';
    }

    public function submitEmployee(){
        $validatedDate = $this->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:15',
            'age' => 'required|integer|min:0',
            'salary' => 'required|numeric|min:0',
            'job_title' => 'required|max:255',
            'address' => 'required',
            'gender' => 'required|in:male,female',
        ]);

        Employee::create($validatedDate);

        session()->flash('message', 'Employee Saved Successfully.');
  
        $this->resetInputFields();

    }

    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        // dd($employee);
        $this->employee_id = $id;
        $this->first_name = $employee->first_name;
        $this->last_name = $employee->last_name;
        $this->email = $employee->email;
        $this->age = $employee->age;
        $this->salary = $employee->salary;
        $this->phone = $employee->phone;
        $this->job_title = $employee->job_title;
        $this->address = $employee->address;
        $this->gender = $employee->gender;
  
        $this->genders = ['male', 'female'];

        $this->updateMode = true;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        $validatedDate = $this->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:15',
            'age' => 'required|integer|min:0',
            'salary' => 'required|numeric|min:0',
            'job_title' => 'required|max:255',
            'address' => 'required',
            'gender' => 'required|in:male,female',
        ]);
  
        $update = Employee::find($this->employee_id);
        $update->update([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'age' => $this->age,
            'salary' => $this->salary,
            'job_title' => $this->job_title,
            'address' => $this->address,
            'gender' => $this->gender,
        ]);
  
        $this->updateMode = false;
  
        session()->flash('message', 'Employee Updated Successfully.');
        $this->resetInputFields();
    }


    public function delete($id)
    {
        Employee::find($id)->delete();
        session()->flash('message', 'Employee Deleted Successfully.');
    }
}

<?php

namespace App\Livewire\Crud;

use App\Models\Employee;
use App\Models\ImageUpload;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class ImageUploading extends Component
{
    // public $isOpen = false; // It means that by default the modal will be closed.

    use WithPagination;

    use WithFileUploads;
    #[Rule('image|max:2048')] // 2MB Max
    public $image;

    #[Rule('required')]
    public $emp_id;

    public function render()
    {
        $emp_names = Employee::select("id", DB::raw("CONCAT(first_name, ' ', last_name) as full_name"))
            ->get();

        $images = ImageUpload::paginate(2, ['*'], 'images');
        $allEmployees = Employee::paginate(2, ['*'], 'allEmployees');
        return view('livewire.crud.image-uploading', compact('emp_names', 'images', 'allEmployees'));
    }

    public function uploadImage()
    {
        $this->validate();
        $upload = ImageUpload::create([
            'image' => $this->image->store('public/photos'),
            'emp_id' => $this->emp_id
        ]);
        // dd($upload);
        session()->flash('success', 'Image uploaded successfully.');
    }
    

    // public function create()
    // {
    //     $this->openModal();
    // }

    // public function openModal()
    // {
    //     $this->isOpen = true;
    // }
    // public function closeModal()
    // {
    //     $this->isOpen = false;
    // }


}

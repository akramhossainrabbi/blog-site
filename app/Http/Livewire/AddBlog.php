<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

use LivewireUI\Modal\ModalComponent;

class AddBlog extends ModalComponent
{
    use WithFileUploads;

    public $title;
    public $small_description;
    public $details;
    public $image;
 
    public function save()
    {
        $validatedData = $this->validate([
            'title' => 'required',
            'small_description' => 'required',
            'details' => 'required',
            'image' => 'image|max:1024', // 1MB Max
        ]);
 
        $validatedData['image'] = $this->image->store('photos', 'public');
        $validatedData['user_id'] = Auth::user()->id;

        Blog::create($validatedData);

        $this->closeModal();
        $this->emit('blogAdded');
    }

    public function render()
    {
        return view('livewire.add-blog');
    }
}

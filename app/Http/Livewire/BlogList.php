<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class BlogList extends Component
{

    protected $listeners = ['blogAdded' => 'refreshBlogs'];

    public function refreshBlogs() {
        // pass
    }

    public function render()
    {
        return view('livewire.blog-list',[
            'blogs' => Blog::where('user_id', Auth::user()->id)->get(),
        ]);
    }
}

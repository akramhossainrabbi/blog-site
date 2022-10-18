<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoryBlogs extends Component
{
    public $category;
    public $slug;

    public function mount($slug)
    {
        $this->slug  =  $slug;
    }

    public function render()
    {
        $this->category = Category::with('blogs')->where('slug', $this->slug)->first();
        return view('livewire.category-blogs',[
            'title' => $this->category->title,
            'blogs' => $this->category->blogs
        ])->extends('layouts.guest');
    }
}

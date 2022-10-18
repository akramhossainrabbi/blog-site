<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class Welcome extends Component
{
    public function render()
    {
        return view('livewire.welcome', [
            'categories' => Category::all()
        ])->extends('layouts.guest');
    }
}

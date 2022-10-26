<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use App\Models\Comment;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

use LivewireUI\Modal\ModalComponent;

class BlogShow extends ModalComponent
{
    public $blog;
    public $body;

    protected $rules = [
        'body' => 'required',
    ];

    public function comment()
    {
        if (Auth::check()) {

            $this->validate();

            Comment::create([
                'body'=> $this->body,
                'blog_id'=> $this->blog->id,
                'user_id'=> Auth::user()->id,
            ]);

            $this->body = '';
        }else{
            return redirect('login');
        }
        
    }

    public function mount($id)
    {
        $this->blog = Blog::find($id);
    }


    public function render()
    {
        return view('livewire.blog-show');
    }
}

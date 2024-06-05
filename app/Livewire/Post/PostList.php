<?php

namespace App\Livewire\Post;

use Livewire\Component;
use App\Models\Posts;

class PostList extends Component
{
    public function render()
    {
        return view('livewire.post.post-list',[
            'posts' => Posts::all()
        ]
    );

    }
}

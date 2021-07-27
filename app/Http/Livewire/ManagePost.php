<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class ManagePost extends Component
{
    use HasSlideOver;

    public $title;
    public $description;

    public function render()
    {
        return view('livewire.manage-post');
    }

    public function save()
    {
        $this->validate([
            'title' => 'required',
        ]);

        Post::create([
            'title' => $this->title,
            'description' => $this->description,
        ]);

        $this->reset('title', 'description');
    }
}

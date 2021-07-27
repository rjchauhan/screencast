<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ManageBlog extends Component
{
    use HasSlideOver;

    public function render()
    {
        return view('livewire.manage-blog');
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class ManagePost extends Component
{
    use ManageModel;

    public static $modelName = Post::class;

    protected $rules = [
        'model.title' => 'required|string|min:6',
        'model.description' => 'required|string|max:500',
    ];

    public function render()
    {
        return view('livewire.manage-post');
    }

    public function store()
    {
        $this->validate();

        $this->model->save();
    }

    public function update()
    {
        $this->validate();

        $this->model->save();
    }

    public function destroy()
    {
        $this->model->delete();
    }
}

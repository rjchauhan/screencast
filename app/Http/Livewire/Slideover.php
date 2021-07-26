<?php

namespace App\Http\Livewire;

use Livewire\Component;

abstract class Slideover extends Component
{
    public $show = false;

    protected $name;

    protected function getListeners()
    {
        return [$this->name . '.toggle' => 'toggle'];
    }

    public function toggle()
    {
        $this->show = !$this->show;
    }
}

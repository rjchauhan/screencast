<?php

namespace App\Http\Livewire;

trait HasSlideOver
{
    public $show = false;

    public function hydrateHasSlideOver()
    {
        $className = class_basename(static::class);

        $this->listeners = array_merge($this->listeners, [
            "$className.slideover.toggle" => 'toggle'
        ]);
    }

    public function toggle()
    {
        $this->show = !$this->show;
    }

    public function open()
    {
        $this->show = true;
    }

    public function close()
    {
        $this->show = false;
    }
}

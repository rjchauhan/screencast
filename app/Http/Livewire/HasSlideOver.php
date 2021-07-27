<?php

namespace App\Http\Livewire;

trait HasSlideOver
{
    public $show = false;

    protected function getListeners()
    {
        return array_merge($this->listeners, [
            self::getSlideoverEventName() => 'toggle'
        ]);
    }

    public static function getSlideoverEventName()
    {
        return class_basename(static::class) . '.slideover.toggle';
    }

    public function toggle()
    {
        $this->show = !$this->show;
    }

    public function close()
    {
        $this->show = false;
    }
}

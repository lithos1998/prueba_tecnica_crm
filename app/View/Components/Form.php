<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Form extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $class;
    public $action;
    public $button;
    public $list;

    public function __construct($class, $action, $button, $list)
    {
        $this->class = $class;
        $this->action = $action;
        $this->button = $button;
        $this->list = $list;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form');
    }
}

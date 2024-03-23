<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ShowPerson extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $person;

    public function __construct($person)
    {
        $this->person = $person;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.show-person');
    }
}

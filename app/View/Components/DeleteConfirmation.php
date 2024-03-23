<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DeleteConfirmation extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;
    public $url;

    public function __construct($name, $url)
    {
        $this->name = $name;
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.delete-confirmation');
    }
}

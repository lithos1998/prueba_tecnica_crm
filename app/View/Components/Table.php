<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Table extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $table;
    public $button;
    public $id;
    public $titles;

    public function __construct($table, $button, $id, $titles)
    {
        $this->table = $table;
        $this->button = $button;
        $this->id = $id;
        $this->titles = $titles;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table');
    }
}

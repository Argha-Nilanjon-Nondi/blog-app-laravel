<?php

namespace App\View\Components;

use Illuminate\View\Component;

class header extends Component
{
    public $headtext;
    public $subtext;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($headtext,$subtext="")
    {
        $this->headtext=$headtext;
        $this->subtext=$subtext;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header');
    }
}

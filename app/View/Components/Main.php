<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class main extends Component
{
    public $headerTitle;
    /**
     * Create a new component instance.
     */
    public function __construct($headerTitle)
    {
        $this->headerTitle = $headerTitle;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('template.main');
    }
}

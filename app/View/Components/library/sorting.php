<?php

namespace App\View\Components\library;

use Illuminate\View\Component;

class sorting extends Component
{
    public string $createsorting;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->createsorting = route('create-sorting');

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('library.sorting');
    }
}

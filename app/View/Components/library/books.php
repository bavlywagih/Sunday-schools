<?php

namespace App\View\Components\library;

use Illuminate\View\Component;

class books extends Component
{
    public string $createbook;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->createbook = route('create-books');

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('library.books');
    }
}

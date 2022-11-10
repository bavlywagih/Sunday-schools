<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;


class tinymceEditor extends Component
{
    public string $create;
    public string $AuthUsername;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->create = route('posts.create');
        $this->AuthUsername = Auth::user()->username;
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('forms.tinymce-editor');
    }
}

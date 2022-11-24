<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Post as PostModel;



class tinymceEditor extends Component
{
    public string $create;
    public string $AuthUsername;
    public string $checkadmin;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(postModel $post)
    {
        $this->create = route('posts.create');
        $this->AuthUsername = Auth::user()->username;
        $this->checkadmin =  Auth::user()->role == '1';


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

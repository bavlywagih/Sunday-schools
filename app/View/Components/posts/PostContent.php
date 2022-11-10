<?php

namespace App\View\Components\posts;

use App\Models\Post as PostModel;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;



class PostContent extends Component
{
    public string $author;
    public string $postedOn;
    public int $bodyLength;
    public string $fullBody;
    public string $checkuser;

    public string $subBody;
    public string $edit;
    public string $delete;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(PostModel $post)
    {
        $this->author = $post->user->username;
        $this->postedOn =  $post->created_at->diffForHumans();
        $this->bodyLength = strlen($post->body);
        $this->fullBody = nl2br($post->body);
        $this->subBody = substr($post->body, 0, 400);
        $this->checkuser = $post->user->username == Auth::user()->username && Auth::user()->role == '1';
        $this->edit = route('post.edit' , $post->id);
        $this->delete = route('post.delete', $post->id);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('post.post-content');
    }
}

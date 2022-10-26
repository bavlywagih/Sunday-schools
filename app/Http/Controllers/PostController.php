<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function createPost(Request $request)
    {
        $validated = $request->validate([
            'body' => ['required'],
            'user_id' => ['required']
        ]);

        Post::create($validated);
        return redirect()->back();
    }


    public function form_createPost(){
        return view('pages.post.post');
    }

    public function posts()
    {
        $posts = post::orderBy('id', 'desc')->get();
        return view('pages/post/load-post', compact('posts'));


    }

    public function destroy($id)
    {
        post::findorfail($id)->delete();
        return redirect(route('load.post'));   
    }
    public function edit($id)
    {
        $post = post::findorfail($id);
        return view('pages/post/edit', compact('post'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'body' => ['required'],
        ]);
        DB::table('posts')->where('id', $id)->update(['body'  => $request->body]);
        return redirect(route('load.post'));
    }



}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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

    public function uploadPostImage(Request $request)
    {
        $request->validate(['image' => ['required', 'image']]);

        $file = $request->file('image');
        $fileName = time() . '_' . Str::random(10) . '_' . $file->getClientOriginalExtension() . '.' . $file->guessClientExtension();
        $path = Storage::putFileAs('public/posts-images', $file, $fileName);
        $pathArray = explode('/', $path);
        // $pathArray[1] = "";
        $pathArray[0] = "storage";

        array_unshift($pathArray, env('APP_URL', 'http://127.0.0.1:8000'));
        $path = implode('/', $pathArray);


        return ['image' => $path];
    }


}

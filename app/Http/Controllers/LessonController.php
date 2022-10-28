<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class LessonController extends Controller
{
    public function createPost(Request $request)
    {
        $validated = $request->validate([
            'body' => ['required'],
            'title' => ['required'],
            'user_id' => ['required']
        ]);

        Post::create($validated);
        return redirect()->back();
    }

    public function form_createlesson()
    {
        return view('pages.lesson.lesson');
    }
}

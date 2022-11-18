<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Librarys;
use App\Models\sortings;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function library()
    {
        $sortings = sortings::with('librarys')->get();
        $books = books::all();
        // dd($sortings);
        return view('library.library' , compact('sortings','books'));
    }
    public function show($id)
    {
        $sortings = sortings::findorfail($id);
        // dd($sortings);

        // $books = books::all();
        return view('library.show.showsorting', compact('sortings'));
    }
    public function showbook($id)
    {
        $books = books::findorfail($id);
        // dd($sortings);

        // $books = books::all();
        return view('library.show.books', compact('books'));
    }

    public function Createlibrary(Request $request)
    {
        if ($request->sorting_id == '0') return redirect()->back();
        $validated = $request->validate([
            'book_id' => ['required'],
            'sorting_id' => ['required'],
        ]);

    $books =  $validated['book_id'];

    foreach($books as $book) {
            Librarys::create(['sorting_id' => $validated['sorting_id'], "book_id" => $book ]);
        }
        return redirect()->back();

    }

    public function CreatesSorting(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required'],
        ]);
        sortings::create(['name' =>  $validated['name']]);
        return redirect()->back();
    }

    public function CreateBooks(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required'],
            'url' => ['required'],
        ]);
        Books::create(['name' =>  $validated['name'], 'url' =>  $validated['url']]);
        return redirect()->back();
    }


}

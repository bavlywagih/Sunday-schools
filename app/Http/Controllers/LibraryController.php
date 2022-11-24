<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Librarys;
use App\Models\sortings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LibraryController extends Controller
{

    public function library()
    {
        $sortings = sortings::with('librarys')->get();
        $books = books::all();
        return view('library.library',compact('sortings','books'));
    }

    public function show($id)
    {
        $sortings = sortings::findorfail($id);
        return view('library.show.showsorting', compact('sortings'));
    }

    public function deletesortings($id)
    {
        sortings::findorfail($id)->delete();
        return redirect()->back();
    }

    public function editsortings($id)
    {
        $sortings = sortings::findorfail($id);
        return view('library.show.editsorting' , compact('sortings'));
    }

    public function sortingsedit(Request $request, $id)
    {
        $request->validate([
            'name' => ['required'],
        ]);
        DB::table('sortings')->where('id', $id)->update(['name'  => $request->name]);
        return  redirect()->route('library');
    }

    public function deletebook($id)
    {
        books::findorfail($id)->delete();
        return redirect()->back();
    }

    public function showbook($id)
    {
        $books = books::findorfail($id);
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;
use App\Models\Session;
use App\Models\User;
use App\Models\Attentance;
use DOMDocument;
use Illuminate\Support\Facades\DB;



class attendanceController extends Controller
{
    public function attentance()
    {
        return view('components.attentance.attentance', [
            'grades' => Grade::all(),
            'sessions' => Session::with('attentances')->get(),
            'users' => User::all()
        ]);
    }
    public function session($id)
    {
        $session = Session::findorfail($id);

        return view('components.attentance.session', compact( 'session' ));
    }


    public function grade($id)
    {
        $grade = Grade::findorfail($id);

        return view('components.attentance.grade', compact('grade'));
    }



    public function create_grade(Request $request)
    {
        Grade::create(['title' => $request->title]);
        return redirect('/attentance');
    }



    public function create_session(Request $request)
    {
        if ($request->grade_id == '0') return redirect()->back();
        $validated = $request->validate([
            'title' => ['required'],
            'body' => ['required'],
            'grade_id' => ['required']
        ]);
        // $document = new DOMDocument();
        // $document->loadHTML($validated['body']);
        // $imgs = $document->getElementsByTagName('img');


        // foreach ($imgs as $img) {
        //     $modifiedSrc = 'http://127.0.0.1:8000/' . $img->getAttribute('src');
        //     $img->setAttribute('src', $modifiedSrc);
        // }

        // $body = $document->getElementsByTagName('body');



        // if ($body && 0 < $body->length) {
        //     $body = $body->item(0);
        // }

        Session::create([
            'title' => $request->title,
            // 'body' => $document->saveHTML($body),
            'body' => $request->body,
              'grade_id' => $request->grade_id
            ]);



        return redirect('/attentance');
    }
    public function delete ($id)
    {
        Session::findorfail($id)->delete();
        return redirect('/attentance');
        }


    public function collect_attendance(Request $request)
    {
        if ($request->session_id == '0') return redirect()->back();

        foreach ($request->users as $user) {
            Attentance::create(['session_id' => $request->session_id, 'user_id' => $user]);
        }

        return redirect('/attentance');
    }



}

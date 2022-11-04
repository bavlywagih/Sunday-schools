<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;
use App\Models\Session;
use App\Models\User;
use App\Models\Attentance;
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
        Session::create(['title' => $request->title,'body' => $request->body, 'grade_id' => $request->grade_id]);
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

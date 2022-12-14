<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;
use App\Models\Session;
use App\Models\User;
use App\Models\Attentance;




class attendanceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function attendance()
    {
        return view('attendance.attendance', [
            'grades' => Grade::all(),
            'sessions' => Session::with('attentances', 'grade', 'grade.users')->get(),
            'users' => User::all()
        ]);
    }
    public function Grade($id)
    {
        // dd($id);
        return view('attendance.ShowPage.grade', ['grades' => grade::findorfail($id)]);
    }

    public function Session($id)
    {
        // dd($id);
        return view('attendance.ShowPage.session', ['sessions' => session::findorfail($id)]);
    }

    public function CreateGrade(Request $request)
    {
        Grade::create(['title' => $request->title]);
        return redirect('/attendance');
    }

    public function CreateSession(Request $request  )
    {
        // dd($request->body);
        if ($request->grade_id == '0') return redirect()->back();
        Session::create(['title' => $request->title, 'grade_id' => $request->grade_id, 'body' => $request->body,]);
        return redirect('/attendance');
    }
    public function CollectAttendance(Request $request)
    {
        if ($request->session_id == '0') return redirect()->back();

        $allowedUsers = Session::find($request->session_id)->grade->users;

        foreach ($request->users as $userId) {
            foreach ($allowedUsers as $user) {
                if ($userId == $user->id) Attentance::create(['session_id' => $request->session_id, 'user_id' => $userId]);
            }
        }

        return redirect('/attendance');
    }
}

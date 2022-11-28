<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use Auth;
class HomeController extends Controller
{
    
public function teacherlogin()
{
    
  return view('Teacherlogin');
}

public function teachershow()
{
    $data['teachers'] = Teacher::where('emailID',Auth::user()->email)->get();
    return view('teacher_dashboard',$data);

    
}


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}

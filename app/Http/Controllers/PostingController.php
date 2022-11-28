<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Posting;
use Auth;
class PostingController extends Controller
{
//

	public function show_posting_page($id)
	{

		$data['tecaher']=Teacher::find($id);
		$data['tecaher_posting']=Posting::where('user_id',$id)->get();
		return view('posting.posting_page',$data);
	}


	public function posting_teacher(Request $req)
	{
		$last_posting = Posting::where('user_id',$req->user_id)->latest()->first();
		if (!empty($last_posting)) {
			$last_posting->posting_till = $req->posting_on;
			$last_posting->save();

		}

		$posting = new Posting;
		$posting->user_id = $req->user_id;
		$posting->school_id = $req->school_id;
		$posting->posting_on = $req->posting_on;
		$posting->designation = $req->designation;
		$posting->save();

		return redirect('/posting/'.$req->user_id);
	}


	public function teacherPosting()
	{
		$teacher = Teacher::where('emailID',Auth::user()->email)->first();
		$data['tecaher_posting']=Posting::where('user_id',$teacher->id)->get();
		return view('Teacher.teacher_posting',$data);
	}
}

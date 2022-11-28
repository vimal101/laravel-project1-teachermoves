<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\salary;


class SalaryController extends Controller
{

	public function transfer(Request $req)
    {


    $teacher  = new salary;
    $teacher->emp_email	 = $req->email;
    $teacher->name = $req->name;
    $teacher->department = $req->department;
    $teacher->pf_ac_no = $req->pf_ac_no;
    $teacher->bank_acc = $req->bank_acc;
    $teacher->designation = $req->designation;
      $teacher->Current_salary = $req->Current_salary;
   }
    //
}

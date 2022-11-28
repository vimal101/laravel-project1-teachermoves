<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transfer;

class TransferController extends Controller
{
    //
    public function transfer(Request $req)
    {
    	 if ($req->hasFile('proof')) {
            $proof=$req->file('proof');
            $filename='proof'.time().'.jpg';
            $destination_path=public_path('/uploads/');
            $proof->move($destination_path, $filename);
        }
        else{
            $filename='';  
        }


    $teacher  = new transfer;
    $teacher->proof = $filename;
    $teacher->email = $req->email;
    $teacher->name_of_school = $req->name_of_school;
    $teacher->transfer_reason = $req->transfer_reason;
    $teacher->district_for_whuch_apply = $req->district_for_whuch_apply;
   }
}

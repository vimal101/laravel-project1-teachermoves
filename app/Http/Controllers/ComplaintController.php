<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\complaint;



class ComplaintController extends Controller
{


  /*-----------------------------------------complaint -------------------------*/
          
/*--------------------search date filter----------------------------*/
public function search(Request $req)
{

 
$data['complaint']= complaint::where('email', 'like', '%'.$req->input('query').'%')->orwhere('current_status','like',"%".$req->input('current_status')."%" )->whereBetween('created_at',[ $req->input('start_date'),$req->input('end_date')])->get();
   
    if($data){
    return view('complaint.complaint_date_filter',$data);
}else{
  return "data not found:";
}

//->whereBetween('created_at',[ $req->start_date,$req->end_date])

}




   public function save_complaintupdatepage(Request $req)
   {
        
 
       $complaint  = complaint::find($req->id);
       $complaint->current_status= $req->current_status;
       $complaint->save();
       return "success update ::";

   }
   



     public function showcomplaintupdatepage($id)
     {   

       
        $data['complaint'] = complaint::find($id);
         return view('complaint.complaintupdate',$data);
         return "success::";
     }
 
 
 

    public function show_complaint_rised()
     {
         $data['complaint'] = complaint::all();
    return view('complaint.showcomplainttoadmin',$data);
     } 
  


     public function showcomplaintpage()
     {
         return view('complaint.risecomplaint');
     }
 
 



    public function risecomplaint(Request $req)
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


    $complaint  = new complaint;
    $complaint->proof = $filename;

    $complaint->department = $req->department;
    $complaint->current_status= "raised";
    $complaint->email = $req->email;
    $complaint->phone_no = $req->phone_no;
    $complaint->type_of_complaint = $req->type_of_complaint;
    $complaint->complaint_description = $req->complaint_description;
    $complaint->save();
    
    return "Complaint raised";




    }
}

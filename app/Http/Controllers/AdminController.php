<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use App\Models\school;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    

 /*-------------------------- school-------------------*/
   public function deleteschool($id)
   {
       $data = school::find($id);
       $data->delete();    
 
        }

 public function addschool()
 {
     return view('Admin.add_school');
 }


public function addschoolform(Request $req)
{
      $school = new school;
      $school->school_name = $req->school_name;
       $school->School_type = $req->School_type;
       $school->email = $req->email;
       $school->address = $req->address;
         $school->city = $req->city;
       $school->state = $req->state;
       $school->pincode = $req->pincode;
       $school->save();
       return redirect('/admin-dashboard');

}


public function show_update_page( $id)
{
  
    $data['school'] = school::find($id); 


  return view('Admin.update_school',$data);
}




  public function update_school_form(Request $req)
  {
          $school =  school::find($req->school_id); 
          $school->school_name  = $req->school_name;
          $school->School_type  = $req->School_type;
          $school->email  = $req->email;
          $school->address  = $req->address;
          $school->city  = $req->city;
          $school->state  = $req->state;
          $school->pincode  = $req->pincode;
          $school->save();
          return redirect('/school');

  }






public function schoolpage()
{

  $data['school'] = school::all();
  return view('school.school',$data);
}











/*update*/

public function update(Request $req)
{
	 if ($req->hasFile('profile_image')) {
            $profile_image=$req->file('profile_image');
            $filename='profile_image_'.time().'.jpg';
            $destination_path=public_path('/uploads/');
            $profile_image->move($destination_path, $filename);
        }
        else{
            $filename='';  
        }


    $teacher  = Teacher::find($req->id);
    
    $teacher->profile_image = $filename;
    $teacher->name = $req->name;
    $teacher->emailID = $req->emailID;
    $teacher->qualification = $req->qualification;
  
    $teacher->DOB = $req->DOB;
    $teacher->phone = $req->phone;
    $teacher->date_of_posting = $req->date_of_posting;
    $teacher->gender = $req->gender;

    $teacher->father = $req->father;
    $teacher->mother = $req->mother;
    $teacher->address = $req->address;
    $teacher->city = $req->city;
  
    $teacher->state = $req->state;
    $teacher->country = $req->country;
    $teacher->pincode = $req->pincode;
    $teacher->isactive = $req->isactive;
    $teacher->isdeleted = $req->isdeleted;
    $teacher->save();
    
  /*  return User::update([
        'name' => $req->name,
        'email' => $req->emailID,
        'password' => Hash::make('12345678'),
        'role' => 'user',
    ]);*/
      
    
      // $user = User::where($req->emailID)->get()
      // ->update(['name' => $req->name,
      //   'email' => $req->emailID,
      //   'password' => Hash::make('12345678'),
      //   'role' => 'user']);
     
if($req->password){
     $user = User::where('email',$req->emailID)->first();
     // $user->email =$req->emailID;
     $user->password = Hash::make($req->password);
     // dd($user);
     $user->save();
     return "updated successfull...";
}



}



 public function createteacher()
 {
    return view('Teacher.addteacher');

 }




 function addteacher(Request $req){

    if ($req->hasFile('profile_image')) {
            $profile_image=$req->file('profile_image');
            $filename='profile_image_'.time().'.jpg';
            $destination_path=public_path('/uploads/');
            $profile_image->move($destination_path, $filename);
        }
        else{
            $filename='';  
        }


    $teacher  = new Teacher;
    $teacher->profile_image = $filename;
    $teacher->name = $req->name;
    $teacher->emailID = $req->emailID;
    $teacher->qualification = $req->qualification;
  
    $teacher->DOB = $req->DOB;
    $teacher->phone = $req->phone;
    $teacher->date_of_posting = $req->date_of_posting;
    $teacher->gender = $req->gender;

    $teacher->father = $req->father;
    $teacher->mother = $req->mother;
    $teacher->address = $req->address;
    $teacher->city = $req->city;
  
    $teacher->state = $req->state;
    $teacher->country = $req->country;
    $teacher->pincode = $req->pincode;
    $teacher->isactive = $req->isactive;
    $teacher->isdeleted = $req->isdeleted;
    $teacher->save();
    
    return User::create([
        'name' => $req->name,
        'email' => $req->emailID,
        'password' => Hash::make('12345678'),
        'role' => 'user',
    ]);
   

 }






 public function show_data_admin()
 {
 	$data['teachers'] = Teacher::where('isdeleted','!=','1')->get();
    return view('admin_dashboard',$data);
 }

public function deleteteacher($id)
{
    $data= Teacher::find($id);
    $data->isdeleted = '1';
    $data->save();
    return redirect('/admin-dashboard');
}




/*show edit teacher*/
public function show_edit_teacher($id)
{

	$data['edit'] = Teacher::find($id);
	return view('Teacher.update_teacher',$data);
}


/*-------------------------------search--------------------------------------*/
  public function searchdata(Request $req)
  {
      

        
      $data= Teacher::where('emailID', 'like', '%'.$req->input('query').'%')->get();
    return view('Admin.search',['searchfield'=>$data]);
  }
 
}

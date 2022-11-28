@extends('layouts.admin_layout')
@section('content')




<!-- <h1>update teacher from here</h1>
<form action="/update_teacher_form" method="post" enctype="multipart/form-data">
@csrf -->
<!-- <input type="hidden" name="id" value="{{$edit->id}}"> -->
<!-- <label>profile_image</label><br> -->
<!-- <input type="file" name="profile_image"  value="{{$edit->profile_image}}"  id="" accept="image/*"/><br> -->

<!-- <label>name</label><br> -->
<!-- <input type="text" name="name"  value="{{$edit->name}}"><br> -->
<!-- <label>email</label><br> -->
<!-- <input type="email" name="emailID" value="{{$edit->emailID}}"><br> -->
<!-- <label>Qualification</label><br> -->
<!-- <input type="text" name="qualification"  value="{{$edit->qualification}}"><br> -->
<!-- <label>DOB</label><br> -->
<!-- <input type="date" name="DOB" id=""  value="{{$edit->DOB}}"><br> -->
<!-- <label>phone</label><br> -->
<!-- <input type="number" name="phone"  value="{{$edit->phone}}"><br> -->
<!-- <label>Date_of_posting</label><br> -->
<!-- <input type="date" name="date_of_posting"  value="{{$edit->date_of_posting}}"><br> -->
    <!-- <label>gender</label><br> -->
     
<!-- <input type="radio" name="gender" value="male" {{ ($edit->gender =="male")? "checked" : "" }} >male<br>
<input type="radio" name="gender" value="female"  {{ ($edit->gender =="female")? "checked" : "" }} >female<br> -->

    <!-- <label>father</label><br> -->
<!-- <input type="text" name="father"  value="{{$edit->father}}"><br> -->
    <!-- <label>mother</label><br> -->
<!-- <input type="text" name="mother"  value="{{$edit->mother}}"><br> -->
   
    <!-- <label>address</label><br> -->
<!-- <input type="text" name="address"  value="{{$edit->address}}"><br> -->
    <!-- <label>city</label><br>
<input type="text" name="city"  value="{{$edit->city}}"><br> -->
    <!-- <label>state</label><br> -->
<!-- <input type="text" name="state"  value="{{$edit->state}}"><br> -->
    <!-- <label>country</label><br> -->
<!-- <input type="text" name="country"  value="{{$edit->country}}"><br> -->

     <!-- <label>pincode</label><br> -->
<!-- <input type="number" name="pincode"  value="{{$edit->pincode}}"><br> -->

<!-- <label>isactive</label><br> -->
<!-- <input type="text" name="isactive"  value="{{$edit->isactive}}"><br> -->
<!-- <label>isdeleted</label><br> -->
<!-- <input type="number" name="isdeleted"  value="{{$edit->isdeleted}}"><br> -->

<!-- <label>Password</label><br> -->
<!-- <input type="password" name="password"  value=""><br> -->
<!-- <input type="submit" name="submit"> -->
<!-- </form> -->













<div class="d-flex" id="wrapper">
<div id="page-content-wrapper">
<div class="container-fluid main-body px-4 bgmain">
                <div class="row g-3">
                    <div class="col-xs-3 mx-auto">

                        <div class="container">
                            <header>Edit details of Teacher</header>
                    
                            <form action="/update_teacher_form" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$edit->id}}">
                                <!-- <div class="form first"> -->
                                    <div class="details personal">
                                        <span class="title">Personal Details</span>
                    
                                        <div class="fields">
                                            <div class="input-field">
                                                <label>Full Name</label>
                                                <input type="text" name="name"  value="{{$edit->name}}" placeholder="Enter your name" required>
                                            </div>
                    
                                            <div class="input-field">
                                                <label>Date of Birth</label>
                                                <input type="date" name="DOB" id=""  value="{{$edit->DOB}}">
                                            </div>
                    
                                            <div class="input-field">
                                                <label>Email</label>
                                                <input type="email" name="emailID" value="{{$edit->emailID}}">
                                            </div>
                    
                                            <div class="input-field">
                                                <label>Mobile Number</label>
                                                <input type="number" name="phone"  value="{{$edit->phone}}">
                                            </div>

                                            <div class="input-field">
                                                <label>Profile Image</label>
                                                <input type="file" name="profile_image"  value="{{$edit->profile_image}}"  id="" accept="image/*"/>
                                            </div>
                    
                                            <div class="" style= "margin-right : 15rem;">
                                                <label>Gender</label> <br>
                                                <input type="radio" name="gender" value="male" {{ ($edit->gender =="male")? "checked" : "" }} >male
                                                <input type="radio" name="gender" value="female"  {{ ($edit->gender =="female")? "checked" : "" }} >female

                                                <!-- <select required>
                                                    <option disabled selected>Select gender</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                    <option>Others</option>
                                                </select>  -->
                                            </div>
                                        </div>
                                    </div>
                    
                                    <div class="details address">
                                        <span class="title">Address Details</span>
                    
                                        <div class="fields">
                                            <div class="input-field">
                                                <label>Address</label>
                                                <input type="text" name="address"  value="{{$edit->address}}">
                                            </div>
<!-- 
                                            <div class="input-field">
                                                <label>Ward No.</label>
                                                <input type="text" placeholder="Enter ward no." required>
                                            </div>
                    
                                            <div class="input-field">
                                                <label>Locality</label>
                                                <input type="text" placeholder="Enter locality" required>
                                            </div> -->

                                            <div class="input-field">
                                                <label>City</label>
                                                <input type="text" name="city"  value="{{$edit->city}}">
                                            </div>

                                            <div class="input-field">
                                                <label>State</label>
                                                <input type="text" name="state"  value="{{$edit->state}}">
                                            </div>
                    
                                            <div class="input-field">
                                                <label>Country</label>
                                                <input type="text" name="country"  value="{{$edit->country}}">
                                            </div>
                    
                                            <div class="input-field">
                                                <label>Pincode</label>
                                                <input type="number" name="pincode"  value="{{$edit->pincode}}">
                                            </div>
                                        </div>
                                    </div>
                    
                                    <div class="details family">
                                        <span class="title">Family Details</span>
                    
                                        <div class="fields">
                                            <div class="input-field">
                                                <label>Father Name</label>
                                                <input type="text" name="father"  value="{{$edit->father}}">
                                            </div>
                    
                                            <div class="input-field">
                                                <label>Mother Name</label>
                                                <input type="text" name="mother"  value="{{$edit->mother}}">
                                            </div>
                                        </div> 
                                    </div> 
                                
                                    <div class="details profession-Details">
                                        <span class="title">Profession Details</span>
                    
                                        <div class="fields">
                                            <div class="input-field">
                                                <label>Qualification</label>
                                                <input type="text" name="qualification"  value="{{$edit->qualification}}">
                                            </div>
                                            
                                            <div class="input-field">
                                                <label>Date of Posting</label>
                                                <input type="date" name="date_of_posting"  value="{{$edit->date_of_posting}}">
                                            </div>
                                            
                                            <div class="input-field">
                                                <label>isActive</label>
                                                <input type="text" name="isactive"  value="{{$edit->isactive}}">
                                            </div>
                                            
                                            <div class="input-field">
                                                <label>isDeleted</label>
                                                <input type="number" name="isdeleted"  value="{{$edit->isdeleted}}">
                                            </div>

                                            <div class="input-field">
                                                <label>Password</label>
                                                <input type="password" name="password"  value="">
                                            </div>
                                        </div> 

                                        <div class="buttons">
                                            <button class="sumbit">
                                                <!-- <span class="btnText">Submit</span>
                                                <i class="uil uil-navigator"></i> -->
                                                <input type="submit" name="submit">
                                            </button>
                                        </div>
                                    </div> 
                                
                            </form>
                        </div>
                    
                    </div>
                </div>

            </div>
</div>
</div>
@endsection

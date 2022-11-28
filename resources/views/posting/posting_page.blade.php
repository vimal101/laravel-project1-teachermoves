@extends('layouts.admin_layout')
@section('content')

<div class="bgmain">
<form action="/posting_teacher" method="post">
   @csrf
   <input type="hidden" name="user_id" value="{{$tecaher->id}}">
   <br><br>
   <div class="row g-3">
      <div class="col-md-3 mx-auto">
         <div class="p-3 d-flex">
            <label class="p-3 d-flex"><h5>School</h5></label><br>
            <select name="school_id" id=designation1>
               <option value="1">H N S M ACADEMY MP</option>
               <option value="2">UADAY ACADEMY UP</option>
               <option value="3"> DPS  DELHI</option>
               <option value="4">ABC ACADEMY UK </option>
            </select>
         </div>
      </div>
      <br><br>
      <div class="col-md-3 mx-auto">
         <div class="p-3 d-flex my-2">
            <label class="d-flex py-2 mx-2"><h5>Posting_on</h5></label>
            <input type="date" name="posting_on">
         </div>
      </div>
      <div class="col-md-3 mx-auto">
         <div class="p-3 d-flex ">
            <label class="p-3 d-flex"><h5>Designation</h5></label><br>
            <select name="designation" id=designation1>
               <option value="Junior_teacher">Junior_teacher</option>
               <option value="senior_teacher">senior_teacher</option>
               <option value="principal">principal</option>
               <option value="other">other</option>
            </select>
         </div>
      </div>
      <div class="text-center">
         <input class="btn btn1 btn-primary" type="submit" name="submit">
      </div>

      
</form>

<br><br><br>

<div class="row my-5">
   <h3 class="fs-4 mb-3">Posting History</h3>
   <div class="col">
      <table class="table bg-white rounded shadow-sm  table-hover table-image">
         <tr>
            <th>Id</th>
            <th>School</th>
            <th>Designation</th>
            <th>Posted On</th>
            <th>Posted Till</th>
         </tr>

         @foreach($tecaher_posting as $posting)
         <tr>
            <td>{{$posting->id}}</td>
            <td>{{$posting->school_id}}</td>
            <td>{{$posting->designation}}</td>
            <td>{{$posting->posting_on}}</td>
            <td>{{$posting->posting_till}}</td>
         </tr>
         @endforeach
      </table>
   </div>
</div> </div>
</div>
@endsection
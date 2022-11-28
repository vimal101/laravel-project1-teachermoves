
@extends('layouts.teacher_layout')


@section('content')






<div class="row my-5">
   <h3 class="fs-4 mb-3">Teachers Data</h3>
   <div class="col">
      <table class="table bg-white rounded shadow-sm  table-hover table-image">
         <thead>
            <tr>
               <th scope="col" width="50">Teacher ID</th>
               <th scope="col">School</th>
               <th scope="col">Designation</th>
               <th scope="col">Posted On</th>
               <th scope="col">Posted till</th>
               <!-- <th scope="col">IsActive</th>
               <th scope="col"></th> -->
            </tr>
         </thead>
         <tbody>
         @foreach($tecaher_posting as $posting)
  
            <tr>
               <th scope="row">{{$posting->id}}</th>
               
               <td>{{$posting->school_id}}</td>
               <td>{{$posting->designation}}</td>
               <td>{{$posting->posting_on}}</td>
               <td>{{$posting->posting_till}}</td>
               
            </tr>
            @endforeach  
         </tbody>
      </table>
   </div>
</div>


@endsection
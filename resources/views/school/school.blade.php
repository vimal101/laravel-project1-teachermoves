
@extends('layouts.admin_layout')



@section('content')





<!-- <div class="container-fluid px-4 bgmain">
   <div class="row g-3 ">
      <div class="col-md-3">
         <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
            <div class="myBox">
               <a href="/addschool"  class="add_t">
                  <h3> Add <br> school </h3>
               </a>
            </div>
            <i class="fa-solid fa-user-plus fa-2x primary-text border rounded-full secondary-bg p-4"></i>
         </div>
      </div>
   </div> -->
<!-- 
<h1>school</h1> -->


<!-- <table class="table" border="1">
  <thead>
    <tr>
      <th scope="col">id </th>
      <th scope="col">school_name</th>
      <th scope="col">School_type</th>
      <th scope="col">Email</th>
      <th scope="col">operation</th>
    </tr>
  </thead> -->
  <!-- <tbody>
  	@foreach($school as $t) 
    <tr>
      
      <th scope="row">{{ $t->id  }}</th>
      <td scope="row">{{ $t->school_name }}</td>
      <td scope="row">{{ $t->School_type }}</td>
      <td scope="row">{{ $t->email }}</td>
       <td><a href="/update-page_school/{{$t->id}}">update</a></td>
       <td><a href="/delete-data_school/{{$t->id}}">delete</a></td>
    </tr>
    @endforeach -->
  <!-- </tbody>
</table> -->











<div class="bgmain">
   <div class="container-fluid px-4">
      <div class="row g-3 ">
         <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
               <div class="myBox">
                  <a href="/addschool" class="add_t" target="_blank">
                     <h3> Add <br> School </h3>
                  </a>
               </div>
               
               <i class="fa-solid fa-user-plus fa-2x primary-text border rounded-full secondary-bg p-4"></i>
            </div>
         </div>
      </div>
      
      <div class="row my-5">
         <h3 class="fs-4 mb-3">Teachers Data</h3>
         <div class="col">
            <table class="table bg-white rounded shadow-sm  table-hover table-image">
               <thead>
                  <tr>
                     <th scope="col">id </th>
                     <th scope="col">school_name</th>
                     <th scope="col">School_type</th>
                     <th scope="col">Email</th>
                     <th scope="col">operation</th>
                  </tr>
               </thead>

               <tbody>
                  @foreach($school as $t)
                  <tr>
                     <th scope="row">{{ $t->id  }}</th>
                     <td scope="row">{{ $t->school_name }}</td>
                     <td scope="row">{{ $t->School_type }}</td>
                     <td scope="row">{{ $t->email }}</td>
                     <td><a href="/update-page_school/{{$t->id}}">update</a></td>
                     <td><a href="/delete-data_school/{{$t->id}}">delete</a></td>
                  </tr>
                  @endforeach  
               </tbody>

            </table>
         </div>
      </div>
   </div>
</div> 


@endsection

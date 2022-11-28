

@extends('layouts.admin_layout')



@section('content')

 


<div class="container-fluid px-4">
   <div class="row g-3 ">
      <div class="col-md-3">
         <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
            <div class="myBox">
               <a href="/addteacher" class="add_t" target="_blank">
                  <h3> Add <br> teacher </h3>
               </a>
            </div>
            <i
               class="fa-solid fa-user-plus fa-2x primary-text border rounded-full secondary-bg p-4"></i>
         </div>
      </div>
   </div>


   <!-- <form  action="{{url('/search')}}" method="get">
   <input  name ="query"  type="text" placeholder="Search"> -->
   <!-- <input type="submit" name="search"></form> -->



   <form  action="{{url('/search')}}" method="get">
      <div class="col-md-5 mx-auto">
         <div class="small fw-light">
            <h5>Search</h5>
         </div>
         <div class="input-group">
            <input name ="query"  type="text" placeholder="Search" class="form-control border-end-0 border rounded-pill" type="text"  id="example-search-input">
            <span class="input-group-append">
            <button class="btn btn-outline-secondary bg-white border-bottom-0 border rounded-pill ms-n5" type="submit" name="search">
            <i class="fa fa-search"></i>
            </button>
            </span>
         </div>
      </div>
</div>
</form>
<div class="row my-5">
   <h3 class="fs-4 mb-3">Teachers Data</h3>
   <div class="col">
      <table class="table bg-white rounded shadow-sm  table-hover table-image">
         <thead>
            <tr>
              <th scope="col">profile</th>
              <th scope="col">Id</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Education</th>
              <th scope="col">IsActive</th>
              <th scope="col">DOB</th>
              <th scope="col">phone</th>
              <th scope="col">date_of_posting</th>
              <th scope="col">father</th>
              <th scope="col">mother</th>
              <th>operation</th>
            </tr>
         </thead>

         <tbody>
            @foreach($searchfield as $t)
            <tr>
              <th scope="row"><img src="{{ asset('uploads/'.$t->profile_image) }}" height="200px" width="200px"></th>
              <th scope="row">{{ $t->id }}</th>
              <td scope="row">{{ $t->name }}</td>
              <td scope="row">{{ $t->emailID }}</td>
              <td scope="row">{{ $t->qualification }}</td>
              <td scope="row">{{ $t->isactive }}</td>
              <th scope="row">{{ $t->DOB }}</th>
              <td scope="row">{{ $t->phone }}</td>
              <td scope="row">{{ $t->date_of_posting}}</td>
              <td scope="row">{{ $t->father }}</td>
              <td scope="row">{{ $t->mother}}</td>

              <td>
                <button class="btn btn-mod">
                  <a href="/edit/{{$t->id}}" class="btn btn-primary" target="_blank">Edit</a>
                </button> <br> <br>
              
                <button class="btn btn-mod">
                  <a href="/deleteteacher/{{$t->id}}" class="btn btn-danger" target="_blank">Delete</a>
                </button> <br> <br>
              </td>
                  
            </tr>
            @endforeach
        </tbody>
      </table>
   </div>
</div>
</div>

@endsection


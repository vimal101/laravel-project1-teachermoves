@extends('layouts.admin_layout')



@section('content')

  Hi..  {{ Auth::user()->name }}    

    Admin Dashboard
 
 <br>





         <form action="/search_date_wise_complaint" method="post">
            
            @csrf

             <div class="container-fluid px-4 bgmain">
                <div class="row g-3">
                    <div class="col-md-3 mx-auto">
                        <div class="p-3 d-flex">
                            Enter Email
                            <input type="email" name="query" id="" placeholder="Enter Email">
                        </div>
                    </div>

                    <div class="col-md-3 mx-auto">
                        <div class="p-3 d-flex">
                            Start Date
                            <input type="date" name="start_date" id="">
                        </div>
                    </div>
                    <div class="col-md-3 mx-auto">
                        <div class="p-3 d-flex">
                            End Date
                            <input type="date" name="end_date" id="">
                        </div>
                    </div>

                    <div class="col-md-3 mx-auto">
                        <div class="p-3 d-flex">
                            Current Status
                            <select name="current_status" id="currentStatus">
                                <option value="raised">Raised</option>
                                <option value="in_progress">In_progress</option>
                                <option value="completed">Completed</option>
                            </select>
                        </div>
                    </div>

                    <div class="text-center">
                        <button class="btn btn2 btn-primary"  type="submit" value="Submit" >Search</button>

                    </div>
                </div>




         
          </form>





         




<div class="row my-5">
                    <h3 class="fs-4 mb-3">Complaints Raised</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover table-image">
  <thead>
    <tr>

      <th scope="col">department</th>
      <th scope="col">current_status</th>
      <th scope="col">email</th>
      <th scope="col">phone_no</th>
      <th scope="col">type_of_complaint</th>
      <th scope="col">complaint_description</th>
      <th scope="col">proof</th>
    </tr>
  </thead>
  <tbody>
    @foreach($complaint as $t)
    <tr>
      
      <th scope="row">{{ $t->department }}</th>
      <td scope="row">
        <select name="current_status" >
      <option value="raised" @if($t->current_status == 'raised') selected @endif>Raised</option>
      <option value="in_progress" @if($t->current_status == 'in_progress') selected @endif>In Progress</option>
      <option value="completed" @if($t->current_status == 'completed') selected @endif>Completed</option>
      </select>
      </td>
      <td scope="row">{{ $t->email }}</td>
      <td scope="row">{{ $t->phone_no }}</td>
      <td scope="row">{{ $t->type_of_complaint }}</td>
      <td scope="row">{{ $t->complaint_description }}</td>
      
      <th scope="row"><img src="{{ asset('uploads/'.$t->proof) }}" height="200px" width="200px"></th>
      <td scope="row">

                         <button class="btn btn-info">
                     <a href="/show_complaint_update_page/{{$t->id}}" class="postingbutton" class="postingbutton" target="_blank">update</a>
                     </button>


      </td>
     
    </tr>
    @endforeach
  </tbody>
</table>
                    </div>
                </div>
@endsection

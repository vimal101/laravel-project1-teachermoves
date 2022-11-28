@extends('layouts.teacher_layout')

@section('content')

<!--
<div class="topnav" id="myTopnav">
  <a href="/" class="active">Home</a>
  <a href="/teacher_dashboard" class="active">Dashboard</a>
  <a href="complaintpage">Complaint</a>
  <a href="teacher-postings">Postings</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div> -->


<style>
    *{
      box-sizing: border-box;
    }

    body {
      /* font-family: Arial, Helvetica, sans-serif; */
    }

    /* Style the header */
    .header {
      grid-area: header;
      background-color: #F0F8FF;
      padding: 30px;
      text-align: center;
      font-size: 40px;
    }

    /* The grid container */
    .grid-container {
      display: grid;
      grid-template-areas: 
        'header header header header header header' 
        'left left middle middle right right' 
        'footer footer footer footer footer footer';
      /* grid-column-gap: 10px; - if you want gap between the columns */
    } 

    .left,
    .middle,
    .right {
      padding: 10px;
      /* height: 300px; Should be removed. Only for demonstration */
    }

    /* Style the left column */
    .left {
      grid-area: left;
    }

    /* Style the middle column */
    .middle {
      grid-area: middle;
    }

    /* Style the right column */
    .right {
      grid-area: right;
    }

    /* Style the footer */
    .footer {
      grid-area: footer;
      background-color: #F0F8FF;
      padding: 10px;
      text-align: center;
    }

    /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
    @media (max-width: 600px) {
      .grid-container  {
        grid-template-areas: 
          'header header header header header header' 
          'left left left left left left' 
          'middle middle middle middle middle middle' 
          'right right right right right right' 
          'footer footer footer footer footer footer';
      }
    }

    img
    {
      float: right;
    }

    .input
    {
      font-size:20px;
    }

table {
  border-spacing: 60px;
  padding: 26px;
  /* margin: 20px; */
}

td
{
  padding: 12px;
}

</style>


<div id="page-content-wrapper">
	<div class="container-fluid main-body px-4 bgmain">
    <div class="row g-3">
      <div class="col-xs-3 mx-auto">
        <div class="container">
          <!-- <header>Add Teacher</header> -->


          <div class="maincontent">

            <!-- <h2>CSS Template using Grid</h2>
            <p>In this example, we have created a header, three equal columns and a footer. On smaller screens, the columns will stack on top of each other.</p>
            <p>Resize the browser window to see the responsive effect.</p>
            <p><strong>Note:</strong> The Grid Layout Module is not supported in Internet Explorer or Edge 15 eand earlier versions.</p> -->

            @foreach($teachers as $t)

            <div class="grid-container">
              <div class="header">
              <i> Hi <h7><b>{{ Auth::user()->name }}</b></h7> </i>
                <!-- <h2>Header</h2> -->
              </div>
              
              <div class="left" style="background-color:white;">
    
              <div class="input">
  
                <table style="width:100%">
                 
                <tr>
                    
                    <td><h4>Name</h4></td> 
                    <td>{{$t->name}}</td> 
                    <td></td>
                  </tr>

                  <tr>
                    <td><h4>Phone no.</h4></td>
                    <td>{{$t->phone}}</td> 
                  </tr>

                  <tr>
                    <td><h4> Qualification</h4></td>
                    <td>{{$t->qualification}}</td> 
                  </tr>

                  <tr>
                    <td><h4> Date of Birth</h4></td>
                    <td>{{$t->DOB}}</td> 
                  </tr>

                  <tr>
                    <td><h4> Date of posting</h4></td>
                    <td>{{$t->date_of_posting}}</td> 
                  </tr>

                  <tr>
                    <td><h4> City</h4></td>
                    <td>{{$t->city}}</td> 
                  </tr>

                  <tr>
                    <td><h4> State</h4></td>
                    <td>{{$t->state}}</td> 
                  </tr>

                  <tr>
                    <td><h4> Address</h4></td>
                    <td>{{$t->address}}</td> 
                  </tr>
                  <tr>
                    <td><h4> Country</h4></td>
                    <td>{{$t->country}}</td> 
                  </tr>
                  <tr>
                    <td><h4> pincode</h4></td>
                    <td>{{$t->pincode}}</td> 
                  </tr>
                </table>


              </div>

              </div>
              
              <!-- <div class="middle" style="background-color:white;"> -->
                  <!-- <div class="input">
                    <p>Email ID: {{$t->emailID}}</p>
                    <p>Phone No. {{$t->phone}}</p>
                    <p>Gender: {{$t->gender}}</p>
                    <p>Father's Name: {{$t->father}}</p>
                    <p>Mother's Name: {{$t->mother}}</p>
                  </div> -->
              <!-- </div>   -->

              <div class="right" style="background-color:#F0F8FF;">
                <img src="{{ asset('uploads/'.$t->profile_image) }}" height="400px" width="400px" >
              </div>


            @endforeach

              
              <div class="footer">

              </div>
            </div>

          </div>


				</div>
			</div>
		</div>
	</div>
</div>



@endsection






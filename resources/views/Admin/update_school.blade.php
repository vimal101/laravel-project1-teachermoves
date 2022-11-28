@extends('layouts.admin_layout')



@section('content')
<!-- <h1>update School from here</h1>
<form action="/updateschool_form" method="post" enctype="multipart/form-data">
	@csrf
	 -->

	<!-- <input type="hidden" name="school_id" value="{{$school->id}}"> -->
	<!-- <label>school_name</label><br>
	<input type="text" name="school_name" value="{{$school->school_name}}"><br> -->
	<!-- <label >School_type</label><br>
  
  <select name="School_type" >
  <option value="primary_school">primary_school</option>
  <option value="high_school">high_school</option>
  <option value="higher_secondry_school">higher_secondry_school</option>
</select>
 <br> -->

    <!-- <label>email</label><br>
	<input type="email" name="email" value="{{$school->email}}"><br>
	<label>address</label><br>
	 <input type="text" name="address" id="" value="{{$school->address}}"><br> -->
	<!-- <label>city</label><br>
	<input type="text" name="city" value="{{$school->city}}"><br> -->
	<!-- <label>state</label><br>
	<input type="text" name="state" value="{{$school->state}}"><br> -->
   
     <!-- <label>pincode</label><br>
	<input type="number" name="pincode" value="{{$school->pincode}}"><br> -->
	
	<!-- <input type="submit" name="submit">
</form> -->
 




<div id="page-content-wrapper">
	<div class="container-fluid main-body px-4 bgmain">
        <div class="row g-3">
                    <div class="col-xs-3 mx-auto">

                        <div class="container">
                            <header>Update School</header>
            
							<form action="/updateschool_form" method="post" enctype="multipart/form-data">
								@csrf

								<input type="hidden" name="school_id" value="{{$school->id}}">
								<div class="details">
									<span class="title">School Details</span>
									
									<div class="fields">
										<div class="input-field">
											<label>school_name</label>
											<input type="text" name="school_name" value="{{$school->school_name}}">
										</div>
										
										<div class="input-field">	
											<label >School_type</label>
											<select name="School_type">
												<option value="primary_school">Primary_school</option>
												<option value="high_school">High_school</option>
												<option value="higher_secondry_school">Higher Secondary School</option>
											</select>
										</div>

										<div class="input-field">
											<label>Email</label>
											<input type="email" name="email" value="{{$school->email}}">
										</div>

										<div class="input-field">
											<label>Address</label>
	 										<input type="text" name="address" value="{{$school->address}}">
										</div>

										<div class="input-field">
											<label>City</label>
											<input type="text" name="city" value="{{$school->city}}">
										</div>

										<div class="input-field">
											<label>state</label>
											<input type="text" name="state" value="{{$school->state}}">
										</div>

										<div class="input-field">
										    <label>pincode</label>
											<input type="number" name="pincode" value="{{$school->pincode}}">
										</div>							
									</div>
								</div>

								<div class="buttons">
									<button type="submit" name="submit">Submit</button>
								</div>

							</form>
						</div>
					</div>
		</div>
	</div>
</div> 

@endsection

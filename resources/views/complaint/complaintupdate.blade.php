
@extends('layouts.admin_layout')

@section('content')



<!-- <h1>update comaplaint</h1>
<form action="/update_complaint_form" method="post" enctype="multipart/form-data">
	@csrf -->
	<!-- <input type="hidden" name="id"  value="{{$complaint->id}}"> -->
	

	
	<!-- <label>email</label> <br> -->
	<!-- <input type="email" name="email" value="{{$complaint->email}}" ><br> -->
    

    <!-- <label>current status</label><br> -->
	
	<!-- <select name="current_status" >
  <option value="raised">raised</option>
  <option value="in_progress">in_progress</option>
  <option value="completed">completed</option>
  
</select><br> -->
	<!-- <input type="submit" name="submit">
</form> -->





<div id="page-content-wrapper">
	<div class="container-fluid main-body px-4 bgmain">
        <div class="row g-3">
                    <div class="col-xs-3 mx-auto">

                        <div class="container">
                            <header>Update complaint status</header>
            
							<!-- <h1>ADD School from here</h1>  -->
							<form action="/update_complaint_form" method="post" enctype="multipart/form-data">
								@csrf

								<input type="hidden" name="id"  value="{{$complaint->id}}">

								<div class="details">
									<!-- <span class="title">School Details</span> -->
									
									<div class="fields">

										<div class="input-field">
											<label>Email</label>
											<input type="email" name="email" value="{{$complaint->email}}" >
										</div>

										<div class="input-field" style="margin-right:50rem">
										    <label>Current Status</label>
											<select name="current_status">
												<option value="raised">raised</option>
												<option value="in_progress">in_progress</option>
												<option value="completed">completed</option>
											</select>
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
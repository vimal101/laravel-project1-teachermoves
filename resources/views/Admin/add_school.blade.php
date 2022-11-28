@extends('layouts.admin_layout')

@section('content')

<div id="page-content-wrapper">
	<div class="container-fluid main-body px-4 bgmain">
        <div class="row g-3">
                    <div class="col-xs-3 mx-auto">

                        <div class="container">
                            <header>Add School</header>
            
							<!-- <h1>ADD School from here</h1>  -->
							<form action="/addschool_form" method="post" enctype="multipart/form-data">
								@csrf

								<div class="details">
									<span class="title">School Details</span>
									
									<div class="fields">
										<div class="input-field">
											<label>school_name</label>
											<input type="text" name="school_name">
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
											<input type="email" name="email">
										</div>

										<div class="input-field">
											<label>Address</label>
	 										<input type="text" name="address" id="">
										</div>

										<div class="input-field">
											<label>City</label>
											<input type="text" name="city">
										</div>

										<div class="input-field">
											<label>state</label>
											<input type="text" name="state">
										</div>

										<div class="input-field">
										    <label>pincode</label>
											<input type="number" name="pincode">
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
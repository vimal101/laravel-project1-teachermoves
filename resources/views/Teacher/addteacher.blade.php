@extends('layouts.admin_layout')

@section('content')

<div id="page-content-wrapper">
	<div class="container-fluid main-body px-4 bgmain">
                <div class="row g-3">
                    <div class="col-xs-3 mx-auto">

                        <div class="container">
                            <header>Add Teacher</header>
            
							<!-- <h1>ADD teacher from here</h1>  -->
							<form action="/addteacher_form" method="post" enctype="multipart/form-data">
								@csrf

								<div class="details personal">
									<span class="title">Personal Details</span>
									
									<div class="fields">
										<div class="input-field">
											<label>profile_image</label>
											<input type="file" name="profile_image" id="" accept="image/*"/>
										</div>
										
										<div class="input-field">	
											<label>name</label>
											<input type="text" name="name">
										</div>

										<div class="input-field">
											<label>email</label>
											<input type="email" name="emailID">
										</div>

										<div class="input-field">
											<label>DOB</label>
											<input type="date" name="DOB" id="">
										</div>

										<div class="input-field">
											<label>phone</label>
											<input type="number" name="phone">
										</div>

										<div class="" style="margin-right:12rem;">
											<label>Gender</label> 
											<input type="radio" name="gender" value="male">
											<label for="male">Male</label>
											<input type="radio" name="gender" value="female">
											<label for="female">Female</label>
										</div>
									
										<div class="input-field">
											<label>Father's Name</label>
											<input type="text" name="father">
										</div>

										<div class="input-field">
											<label>Mother's Name</label>
											<input type="text" name="mother">
										</div>

							
									</div>
								</div>


								<div class="details address">
                                        <span class="title">Address Details</span>
                    
                                        <div class="fields">
											<div class="input-field">
												<label>address</label>
												<input type="text" name="address">
											</div>

											<div class="input-field">
												<label>city</label>
												<input type="text" name="city">
											</div>

											<div class="input-field">
												<label>state</label>
												<input type="text" name="state">
											</div>

											<div class="input-field">
												<label>country</label>
												<input type="text" name="country">
											</div>

											<div class="input-field">
												<label>pincode</label>
												<input type="number" name="pincode">
											</div>
										</div>
								</div>

								<div class="details Qualification">
									<span class="title">Qualification</span>

									<div class="fields">
										<div class="input-field">
											<label>Qualification</label>
											<input type="text" name="qualification">
										</div>

										<div class="input-field">
											<label>Date_of_posting</label>
											<input type="date" name="date_of_posting">
										</div>

										<div class="input-field">
											<label>isactive</label>
											<input type="text" name="isactive">
										</div>

										<div class="input-field">
											<label>isdeleted</label>
											<input type="number" name="isdeleted">
										</div>
									</div>
								</div>

								<div class="buttons">
									<!-- <button class="submit">
										<input type="submit" name="submit">
									</button> -->
									
									<button type="submit" name="submit">Submit</button>
								</div>

							</form>

						</div>
					</div>
				</div>
	</div>

</div>
 
@endsection
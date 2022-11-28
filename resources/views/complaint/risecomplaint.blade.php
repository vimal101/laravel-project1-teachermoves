
@extends('layouts.teacher_layout')


@section('content')
<!-- 
<h1>Rise complaint</h1>
<form action="/complaint_form" method="post" enctype="multipart/form-data">
	@csrf
	<label>proof</label><br>
	<input type="file" name="proof" id="" accept="image/*"/><br>

	<label>department</label><br>
	<select name="department" >
  <option value="education">education</option>
  <option value="other">other</option>

</select><br>


</select><br>

	<label>email</label><br>
	<input type="email" name="email"><br>
   
	<label>phone_no</label><br>
	<input type="number" name="phone_no"><br>
	<label>type_of_complaint</label><br>
	
	<select name="type_of_complaint" >
  <option value="establishment_related">establishment_related</option>
  <option value="financial_ralated">financial_ralated</option>
  <option value="tansenfer_ralated">tansenfer_ralated</option>
  <option value="other">other</option>
  
  
</select><br>
 <br>



    <label>complaint_description</label><br>
	<textarea id="w3review" name="complaint_description" rows="4" cols="50">

</textarea>
    
	<input type="submit" name="submit">
</form>


 -->

<div id="page-content-wrapper">
	<div class="container-fluid main-body px-4 bgmain">
                <div class="row g-3">
                    <div class="col-xs-3 mx-auto">

                        <div class="container">
                            <header>RAISE COMPLAINT</header>
            
							<!-- <h1>ADD teacher from here</h1>  -->
							<form action="/complaint_form" method="post" enctype="multipart/form-data">
							@csrf
								<div class="details personal">
									<span class="title"></span>
									
									<div class="fields">
										<div class="input-field">
											<label>proof</label>
											<input type="file" name="proof" id="" accept="image/*"/>
										</div>
										
										<div class="input-field">	
									        <label>department</label>
	                                      	<select name="department">
												<option value="education">education</option>
												<option value="other">other</option>
                                            </select>
										</div>

										<div class="input-field">
											<label>email</label>
											<input type="email" name="email">
										</div>

										<div class="input-field">
											<label>phone_no</label>
											<input type="number" name="phone_no">
										</div>

										<div class="input-field">
											<label>type_of_complaint</label>
		
											<select name="type_of_complaint" >
												<option value="establishment_related">establishment_related</option>
												<option value="financial_ralated">financial_ralated</option>
												<option value="tansenfer_ralated">tansenfer_ralated</option>
												<option value="other">other</option>										
											</select>
										</div>
										
										<div class="input-field">
											<label>complaint_description</label>
											<textarea id="w3review" name="complaint_description" rows="4" cols="50">
											</textarea>
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




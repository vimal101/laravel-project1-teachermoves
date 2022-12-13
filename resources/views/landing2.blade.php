<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>TeachersMoves</title>
		<link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
		<link rel="stylesheet" href="vendors/owl.carousel/css/owl.carousel.css">
		<link rel="stylesheet" href="vendors/owl.carousel/css/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendors/aos/css/aos.css">
		<link rel="stylesheet" href="vendors/jquery-flipster/css/jquery.flipster.css">
		<!-- <link rel="stylesheet" href="css/style.css"> -->
		<link rel="shortcut icon" href="https://st2.depositphotos.com/1385144/11058/v/950/depositphotos_110586556-stock-illustration-letter-t-logo-design.jpg" />
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

        <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
        <img src="{{ asset('img/myimage.png') }}" alt="description of myimage">
	</head>
	<body data-spy="scroll" data-target=".navbar" data-offset="50">
		<div id="mobile-menu-overlay"></div>
		<nav class="navbar navbar-expand-lg fixed-top">
			<div class="container">
				<!-- <a class="navbar-brand" href="#"><img src="images/logo.svg" alt="Marshmallow"></a> -->
				<a class="navbar-brand" href="#">TeachersMoves</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"><i class="mdi mdi-menu"> </i></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
					<div class="d-lg-none d-flex justify-content-between px-4 py-3 align-items-center">
				 	<a class="navbar-brand" href="#">TeachersMoves</a>
           <a class="navbar-brand" href="#">TeachersMoves</a>
						<a href="javascript:;" class="close-menu"><i class="mdi mdi-close"></i></a>
					</div>
					<ul class="navbar-nav ml-auto align-items-center">
						<li class="nav-item active">
							<a class="nav-link" href="#home">Home<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#services">Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#about">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#contact">Contact Us</a>
						</li>

						<li class="nav-item">
							<a class="nav-link btn btn-success" href="{{route('login')}}">Login</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<div class="page-body-wrapper">

			<section id="home" class="home">

            <!-- <div class="main-banner"> -->
                <!-- <div class="d-sm-flex justify-content-between">
                                <div data-aos="zoom-in-up" class="aos-init aos-animate">
										<div class="banner-title">

											<h3 class="font-weight-medium">Teacher's Portal.<br>
											    A one stop solution to
											    track teachers over the country.
											</h3>
										</div>


										<p class="mt-3">The sole purpose of this portal is to track government teachers
											<br>
											which are posted in various schools across India.
										</p>
										<a href="#" class="btn btn-secondary mt-3">Learn more</a>
									</div>
									<div class="mt-5 mt-lg-0">
										<img src=" {{ asset('uploads/group.png') }}" alt="teachers" class="img-fluid" data-aos="zoom-in-up">
									</div>
								</div> -->
            <!-- </div>  -->
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="main-banner">
								<div class="d-sm-flex justify-content-between">
                                <div data-aos="zoom-in-up" class="aos-init aos-animate">
										<div class="banner-title">

											<h3 class="font-weight-medium" style="color:blue;"> Teacher's Portal.<br>
											    A one stop solution to
											    track teachers over the country.
											</h3>
										</div>


										<p class="mt-3">The sole purpose of this portal is to track government teachers
											<br>
											which are posted in various schools across India.
										</p>
										<a href="#" class="btn btn-secondary mt-3">Learn more</a>
									</div>
									<div class="mt-5 mt-lg-0">
										<img src=" {{ asset('uploads/group.png') }}" alt="teachers" class="img-fluid" data-aos="zoom-in-up">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>



			<!-- <img src=" {{ asset('uploads/modiji banner.jpg') }}" alt="" width="100%"> -->

			<section class="our-services" id="services">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h5 class="text-dark">We’re offering</h5>
							<h3 class="font-weight-medium text-dark mb-5">Creative Teachers Tracker</h3>
						</div>
					</div>
					<div class="row" data-aos="fade-up">
						<div class="col-sm-4 text-center text-lg-left">
							<div class="services-box" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
								<img src=" {{ asset('uploads/integrated-marketing.svg') }}" alt="integrated-marketing" data-aos="zoom-in">
								<h6 class="text-dark mb-3 mt-4 font-weight-medium">Full Fledged
									Tracking solution
								</h6>
								<p>Teacher's Tracker is a full fledged solution for tracking of teachers in their entire service duration.
								</p>
							</div>
						</div>
						<div class="col-sm-4 text-center text-lg-left">
							<div class="services-box"   data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
								<img src="  {{ asset('uploads/design-development.svg') }}" alt="design-development" data-aos="zoom-in">
								<h6 class="text-dark mb-3 mt-4 font-weight-medium">Complaints
									Resolution
								</h6>
								<p>The teachers can raise complaints, if any.
									All the complaints are resolved by Admin.
								</p>
							</div>
						</div>
						<div class="col-sm-4 text-center text-lg-left">
							<div class="services-box" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
								<img src=" {{ asset('uploads/digital-strategy.svg') }}" alt="digital-strategy" data-aos="zoom-in">
								<h6 class="text-dark mb-3 mt-4 font-weight-medium">Scalability

								</h6>
								<p>The system can handle the growing pool of teachers efficiently.

								</p>
							</div>
						</div>
					</div>
					</div>
				</div>
			</section>


			<section class="our-process" id="about">
				<div class="container">
					<div class="row">
						<div class="col-sm-6" data-aos="fade-up">
							<h4 class="text-dark">Our work process</h4>
							<h3 class="font-weight-medium text-dark">Discover New Idea With Us!</h3>
							<!-- <h5 class="text-dark mb-3">Imagination will take us everywhere</h5> -->
							<p class="font-weight-medium mb-4">The users of the system will have
								the following functionalities:
							</p>
							<div class="d-flex justify-content-start mb-3">
								<img src="  {{ asset('uploads/tick.png') }}" alt="tick" class="mr-3 tick-icon"  >
								<p class="mb-0">The overall control of the system will be with Admin. </p>
							</div>
							<div class="d-flex justify-content-start mb-3">
								<img src="  {{ asset('uploads/tick.png') }}" alt="tick" class="mr-3 tick-icon"  >
								<p class="mb-0">Admin is responsible for handling teachers and the schools associated</p>
							</div>
							<div class="d-flex justify-content-start">
								<img src="{{ asset('uploads/tick.png') }}" alt="tick" class="mr-3 tick-icon"  >
								<p class="mb-0">The complaints and queries are also addressed by Admin only.</p>
							</div>
							<div class="d-flex justify-content-start">
								<img src="{{ asset('uploads/tick.png') }}" alt="tick" class="mr-3 tick-icon"  >
								<p class="mb-0">The teacher can access his/her account info and can raise complaints <br>

								</p>
							</div>
						</div>
						<div class="col-sm-6 text-right" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
							<img src= "{{ asset('uploads/idea.png') }}" alt="idea" class="img-fluid">
						</div>
					</div>
				</div>
			</section>



			<section class="testimonial" id="testimonial">
				<div class="container">
					<div class="row  mt-md-0 mt-lg-4">
						<div class="col-sm-6 text-white" data-aos="fade-up">
							<p class="font-weight-bold mb-3">Events</p>
							<h3 class="font-weight-medium">Our Events are our <br>biggest pride.</h3>
							<ul class="flipster-custom-nav">
								<li class="flipster-custom-nav-item">
									<a href="javascript:;" class="flipster-custom-nav-link" title="0"></a>
								</li>
								<li class="flipster-custom-nav-item">
									<a href="javascript:;" class="flipster-custom-nav-link"  title="1"></a>
								</li>
								<li class="flipster-custom-nav-item">
									<a href="javascript:;" class="flipster-custom-nav-link active" title="2"></a>
								</li>
								<li class="flipster-custom-nav-item">
									<a href="javascript:;" class="flipster-custom-nav-link"  title="3"></a>
								</li>
							</ul>
						</div>
						<div class="col-sm-6" data-aos="fade-up">
							<div id="testimonial-flipster">
								<ul>
									<li>
										<div class="testimonial-item">
											<img src=" {{ asset('uploads/fire.jpg') }}" alt="icon" class="testimonial-icons">

											<h6 class="testimonial-author">Diwali MeetUp</h6>

										</div>
									</li>
									<li>
										<div class="testimonial-item">
											<img src=" {{ asset('uploads/fire.jpg') }}" alt="icon" class="testimonial-icons">

											<h6 class="testimonial-author">Navratri Fest</h6>
											<p class="testimonial-destination">DJ Snake</p>
										</div>
									</li>
									<li>
										<div class="testimonial-item">
											<img src=" {{ asset('uploads/fire.jpg') }}" alt="icon" class="testimonial-icons">

											<h6 class="testimonial-author">Winter Vacations</h6>

										</div>
									</li>

								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>


			<section class="contactus" id="contact">
				<div class="container">
					<div class="row mb-5 pb-5">
						<div class="col-sm-5" data-aos="fade-up" data-aos-offset="-500">
							<img src="  {{ asset('uploads/contact.jpg') }}" alt="contact" class="img-fluid">
						</div>
						<div class="col-sm-7" data-aos="fade-up" data-aos-offset="-500">
							<h3 class="font-weight-medium text-dark mt-5 mt-lg-0">Got A Problem</h3>
							<h5 class="text-dark mb-5">Please send us feedback on: </h5>
							<form>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control" id="name" placeholder="Name*">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<input type="email" class="form-control" id="mail" placeholder="Email*">
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<textarea name="message" id="message" class="form-control" placeholder="Message*" rows="5"></textarea>
										</div>
									</div>
									<div class="col-sm-12">
										<a href="#" class="btn btn-secondary">SEND</a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
		</div>
		<footer class="footer">
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<address>
								<p>143 castle road 517</p>
								<p class="mb-4">South Mumbai, Maharashtra</p>
								<div class="d-flex align-items-center">
									<p class="mr-4 mb-0">+3 123 456 789</p>
									<a href="mailto:info@yourmail.com" class="footer-link">info@yourmail.com</a>
								</div>
								<div class="d-flex align-items-center">
									<p class="mr-4 mb-0">+1 222 345 342</p>
									<a href="mailto:Marshmallow@yourmail.com" class="footer-link">teachersmove@mail.com</a>
								</div>
							</address>
							<div class="social-icons">
								<h6 class="footer-title font-weight-bold">
									Social Share
								</h6>
								<div class="d-flex">
									<a href="#"><i class="mdi mdi-github-circle"></i></a>
									<a href="#"><i class="mdi mdi-facebook-box"></i></a>
									<a href="#"><i class="mdi mdi-twitter"></i></a>
									<a href="#"><i class="mdi mdi-dribbble"></i></a>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="row">
								<div class="col-sm-4">
									<h6 class="footer-title">Social Share</h6>
									<ul class="list-footer">
										<li><a href="#" class="footer-link">Home</a></li>
										<li><a href="#" class="footer-link">About</a></li>
										<li><a href="#" class="footer-link">Services</a></li>
										<!-- <li><a href="#" class="footer-link">Portfolio</a></li> -->
										<li><a href="#" class="footer-link">Contact</a></li>
									</ul>
								</div>
								<!-- <div class="col-sm-4">
									<h6 class="footer-title">Product</h6>
									<ul class="list-footer">
										<li><a href="#" class="footer-link">Digital Marketing</a></li>
										<li><a href="#" class="footer-link">Web Development</a></li>
										<li><a href="#" class="footer-link">App Development</a></li>
										<li><a href="#" class="footer-link">Design</a></li>
									</ul>
								</div> -->
								<div class="col-sm-4">
									<h6 class="footer-title">Company</h6>
									<ul class="list-footer">
										<li><a href="#" class="footer-link">Partners</a></li>
										<li><a href="#" class="footer-link">Investors</a></li>
										<li><a href="#" class="footer-link">Partners</a></li>
										<li><a href="#" class="footer-link">FAQ</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
					<div class="d-flex justify-content-between align-items-center">
						<div class="d-flex align-items-center">
							<!-- <img src="images/logo.svg" alt="logo" class="mr-3"> -->
							<h3>TeachersMoves</h3>
							<p class="mb-0 text-small pt-1">© 2022-2023 TeachersMoves. All rights reserved.</p>
						</div>

                        <div class="registerbutton">
							<li class="nav-item">
								<a class="nav-link btn btn-success" href="{{ route('register') }}">Register</a>
							</li>
						</div>

						<div>
							<div class="d-flex">
								<a href="#" class="text-small text-white mx-2 footer-link">Privacy Policy </a>
								<a href="#" class="text-small text-white mx-2 footer-link">Customer Support </a>
								<a href="#" class="text-small text-white mx-2 footer-link">Careers </a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<script src="vendors/base/vendor.bundle.base.js"></script>
		<script src="vendors/owl.carousel/js/owl.carousel.js"></script>
		<script src="vendors/aos/js/aos.js"></script>
		<script src="vendors/jquery-flipster/js/jquery.flipster.min.js"></script>
		<script src="js/template.js"></script>
	</body>
</html>

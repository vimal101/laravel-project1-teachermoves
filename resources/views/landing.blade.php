<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <style type="text/css">
    .imagediv{
      padding-top: 50px;
      padding-right: 30px;
      padding-bottom: 50px;
      padding-left: 80px;
      height: 50px;

    }

    .sliderimage{
      height: 400px;
      width: 60px;
    }

    .sectiontwodiv{
      background-color:  #f2c2ff;
    }

  </style>
  <title>teachermoves</title>
</head>
<body>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  -->
  
  <body>
    <div>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

          <a class="navbar-brand" href="#"><img  class="" src="https://media.istockphoto.com/vectors/purple-blue-flower-fractal-on-black-background-vector-id1360609268" width="80px" height="80px" style="border-radius: 20px"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">Admin</a>
              </li>


             <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
             </li>

              <li class="nav-item">
                <a class="nav-link " href="{{route('login')}}" tabindex="-1" aria-disabled="true">Teacher</a>
              </li>
            </ul>



            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    </div>


    <!--section one image slider  -->
    <section>
      <div  class=".imagediv">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://cdn.pixabay.com/photo/2017/06/01/22/42/chain-2364828_960_720.jpg" class="d-block w-100 sliderimage" alt="...">
            </div>  
            <div class="carousel-item">
              <img src="https://cdn.pixabay.com/photo/2017/08/24/11/04/brain-2676370_960_720.jpg" class="d-block w-100 sliderimage" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://cdn.pixabay.com/photo/2017/09/25/11/55/cyberspace-2784907_960_720.jpg" class="d-block w-100 sliderimage" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

      </div> 
    </section>



    <!-- section two card  -->
    <section style="background-color:#00ccff; border-radius: 40px; " >
      <div class="container my-5" >
        <div class="col-md-10">
          <div class="title">
            <h1><span>Overview of Uttar Pradesh</span></h1>
          </div>
          <div class="content">
            <p>Uttar Pradesh, the heart of India, is a land of epics, holy rivers, ancient cities and pilgrimage.</p>
            <p>In modern times, it is emerging as a driver of the nation's economy with its network of expressways, industrial corridors, international airports, centers of educational and medical excellence, and an exporter of indigenous products.</p>
            <p>Since the times of Lord Rama, Lord Krishna, Gautam Buddha and Lord Mahavira, the state has been the center of cultural and intellectual brilliance.</p>
            <p>Today, with its robust infrastructure and a proactive leadership, the state offers the most investor friendly environment for a better future for its people and the entire country.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="helplineicon">
            <img src="https://up.gov.in/images/1076.png" alt="CM Helpline" title="CM Helpline"> 
            <img src="https://up.gov.in/images/112.png" alt="UP Police" title="UP Police">
          </div>
        </div>
      </div>

</section>



<section style="margin: 50px;padding: 20px ;background-color: #ffb26b ; border-radius: 40px;">
  
<div class="row ">
  <div class="col-sm-6">
    <div class="card" style="border-radius: 40px">
      <div class="card-body">
        <a href=""> <img src="http://www.educationportal.mp.gov.in/DefaultPage/img/psfa.png" class="btn btn-primary"  style="margin: 0px 0px 0px 150px"></a>
      </div>
    </div>
  </div>
  <div class="col-sm-6" >
    <div class="card" style="border-radius: 40px">
      <div class="card-body">
         <a href=""> <img src="http://www.educationportal.mp.gov.in/DefaultPage/img/RTE.png" class="btn btn-primary "style="margin: 0px 0px 0px 180px" ></a>
      </div>
    </div>
  </div>
</div>
<br>
<div class="row ">
  <div class="col-sm-6">
    <div class="card" style="border-radius: 40px">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere elsres</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card" style="border-radius: 40px">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>
</section>


<section>
  <div class="container " style="width: 1300px; height: 300px; margin: 50px;padding: 20px  background-repeat: no-repeat; border-radius: 40px; background-image: url(http://www.educationportal.mp.gov.in/DefaultPage/img/tiranga_transport.jpg);" ></div>
</section>

 


<section>
  
<!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container my-5" >
  <!-- Footer -->
  <footer
  class="text-center text-lg-start text-white"
  style="background-color: #45526e; border-radius: 40px;"
  >
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">
            Company name
          </h6>
          <p>
            Here you can use rows and columns to organize your footer
            content. Lorem ipsum dolor sit amet, consectetur adipisicing
            elit.
          </p>
        </div>
        <!-- Grid column -->

        <hr class="w-100 clearfix d-md-none" />

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
          <p>
            <a class="text-white">MDBootstrap</a>
          </p>
          <p>
            <a class="text-white">MDWordPress</a>
          </p>
          <p>
            <a class="text-white">BrandFlow</a>
          </p>
          <p>
            <a class="text-white">Bootstrap Angular</a>
          </p>
        </div>
        <!-- Grid column -->

        <hr class="w-100 clearfix d-md-none" />

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">
            Useful links
          </h6>
          <p>
            <a class="text-white">Your Account</a>
          </p>
          <p>
            <a class="text-white">Become an Affiliate</a>
          </p>
          <p>
            <a class="text-white">Shipping Rates</a>
          </p>
          <p>
            <a class="text-white">Help</a>
          </p>
        </div>

        <!-- Grid column -->
        <hr class="w-100 clearfix d-md-none" />

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
          <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
          <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
          <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->

    <hr class="my-3">

    <!-- Section: Copyright -->
    <section class="p-3 pt-0">
      <div class="row d-flex align-items-center">
        <!-- Grid column -->
        <div class="col-md-7 col-lg-8 text-center text-md-start">
          <!-- Copyright -->
          <div class="p-3">
            © 2020 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/"
            >MDBootstrap.com</a
            >
          </div>
          <!-- Copyright -->
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
          <!-- Facebook -->
          <a
          class="btn btn-outline-light btn-floating m-1"
          class="text-white"
          role="button"
          ><i class="fab fa-facebook-f"><img src="https://pnggrid.com/wp-content/uploads/2021/05/Facebook-logo-2021-1536x1536.png" style="width: 40px; height: 40px"></i
            ></a>

            <!-- Twitter -->
            <a
            class="btn btn-outline-light btn-floating m-1"
            class="text-white"
            role="button"
            ><i class="fab fa-twitter"><img src="https://cdn.pixabay.com/photo/2018/06/22/19/03/logo-3491390_960_720.png" style="width: 40px; height: 40px"></i
              ></a>

              <!-- Google -->
              <a
              class="btn btn-outline-light btn-floating m-1"
              class="text-white"
              role="button"
              ><i class="fab fa-google"> <img src="https://blog.hubspot.com/hubfs/image8-2.jpg " style="width: 40px; height: 40px"></i
                ></a>

                <!-- Instagram -->
                <a
                class="btn btn-outline-light btn-floating m-1"
                class="text-white"
                role="button"
                ><i class="fab fa-instagram"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/768px-Instagram_logo_2016.svg.png" style="width: 40px; height: 40px"></i
                  ></a>
                </div>
                <!-- Grid column -->
              </div>
            </section>
            <!-- Section: Copyright -->
          </div>
          <!-- Grid container -->
        </footer>
        <!-- Footer -->
      </div>
      <!-- End of .container -->

</section>









    </body>
    </html>
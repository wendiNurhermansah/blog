<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blog</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('')}}assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Vesperr - v4.6.0
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html">BLOG</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{route('beranda')}}">Beranda</a></li>
          <li><a class="nav-link scrollto" href="{{route('post.index')}}">Post</a></li>
          <li><a class="nav-link scrollto" href="{{route('register.index')}}">Register</a></li>
          <li><a class="getstarted scrollto" href="{{route('login_akun.index')}}"">LOGIN</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  
  <main id="main">

  
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" style="margin-top: 20px;" data-aos="fade-up">
          <h2>Register</h2>
        </div>

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif


       

      </div>
    </section><!-- End About Us Section -->

    

    <!-- ======= More Services Section ======= -->
    <section id="more-services" class="more-services">
      <div class="container">
        <form action="{{route('login')}}" method="POST">
            @csrf
            
           
                        <div class="form-group has-icon"><i class="icon icon-user"></i>
                            <input type="username" class="form-control form-control-lg @if ($errors->has('username')) is-invalid @endif" placeholder="username" name="username" autocomplete="off" value="{{ old('username') }}" required autofocus>
                            @if ($errors->has('username'))
                            <div class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('username') }}</strong>
                            </div>
                            @endif
                        </div>
                        <div class="form-group has-icon mt-4"><i class="icon icon-user-secret"></i>
                            <input type="password" class="form-control form-control-lg @if ($errors->has('password')) is-invalid @endif" placeholder="Password" name="password" autocomplete="off" value="{{ old('password') }}" required>
                            @if ($errors->has('password'))
                            <div class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </div>
                            @endif
                        </div>
                        <button class="btn btn-primary btn-lg btn-block mt-4">Login</button>


        </form>

      </div>
    </section><!-- End More Services Section -->

    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>WENDI</strong>. 2023
          </div>
          
        </div>
       
      </div>
    </div>
  </footer><!-- End Footer -->



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
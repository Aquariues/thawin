<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Thacoowin</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="{{url('lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{url('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="{{url('css/style.css')}}" rel="stylesheet">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
  <div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar & Hero Start -->
    <div class="container-xxl position-relative p-0" id="home">
        <nav class="navbar navbar-expand-lg navbar-light px-4 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="m-0">Thacoowin</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="#home" class="nav-item nav-link active">Home</a>
                </div>
            </div>

            <a href="/sign-in" class="btn btn-primary-gradient rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Đăng Nhập</a>
            <a href="/sign-up" class="btn btn-primary-gradient rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Đăng Ký</a>
        </nav>

        <div class="container-xxl bg-primary hero-header" style="min-height: 600px">
            <div class="container px-lg-5">
                <div class="row g-5">
                    <div class="col-lg-8 text-center text-lg-start">
                        <h1 class="text-white mb-4 animated slideInDown">Thông tin user {database}</h1>
                        <p class="text-white pb-3 animated slideInDown">Hạn mức vay {database}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    @include('fitapp.shared.flash_message')

    @php
        if(Session::has('user')) {
            return redirect(url('/sign-in'));
        } else {
            redirect('/sign-up');
        }
    @endphp

    @yield('content')

    <!-- Footer Start -->
    @include('fitapp.shared.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up text-white"></i></a>
  </div>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{url('lib/wow/wow.min.js')}}"></script>
  <script src="{{url('lib/easing/easing.min.js')}}"></script>
  <script src="{{url('lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{url('lib/counterup/counterup.min.js')}}"></script>
  <script src="{{url('lib/owlcarousel/owl.carousel.min.js')}}"></script>

  <!-- Template Javascript -->
  <script src="{{url('js/main.js')}}"></script>
</body>

</html>
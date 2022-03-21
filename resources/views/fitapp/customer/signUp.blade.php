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
      <div class="container-xxl" id="contact">
        <div class="container px-lg-5 pt-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="text-primary-gradient fw-medium">Thacoowin</h5>
                <h1 class="mb-5">Đăng ký</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <?php 
                        var_dump(Session('flash_message'));
                    ?>
                    @include('fitapp.shared.flash_message')
                    <div class="wow fadeInUp" data-wow-delay="0.3s">
                        <form method="post" action="/sign-up">
                            @csrf <!-- {{ csrf_field() }} -->
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input name="phone" type="text" class="form-control" id="phone" placeholder="Số điện thoại">
                                        <label for="email">Số điện thoại</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input name="password" type="password" class="form-control" id="password" placeholder="Mật khẩu">
                                        <label for="password">Mật khẩu</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                      <input type="password" class="form-control" id="passwordConfirmation" placeholder="Mật khẩu">
                                      <label for="passwordConfirmation">Nhập lại mật khẩu </label>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn btn-primary-gradient rounded-pill py-3 px-5" type="submit">Đăng ký</button>
                                </div>
                                <div class="col-12 text-center">
                                  Đã có tài khoản? <a href="/sign-up"> Đăng nhập tại đây </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('fitapp.shared.footer')
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
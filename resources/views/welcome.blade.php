<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>THEMosque - Mosque Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&family=Pacifico&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{asset('site_assets/lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('site_assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{asset('site_assets/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('site_assets/css/style.css')}}" rel="stylesheet">



    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar start -->
        <x-guestComponents.utilityComponents.navbar/>
        <!-- Topbar End -->


        <!-- Hero Start -->
        <div class="container-fluid hero-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="hero-header-inner animated zoomIn">
                            <p class="fs-4 text-dark">WELCOME TO THEMosque</p>
                            <h1 class="display-1 mb-5 text-dark">Purity Comes From Faith</h1>
                            <a href="" class="btn btn-primary py-3 px-5">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->

        <!-- Body Start -->
        <x-guestComponents.index/>
        <!-- Body End -->

        <!-- Footer Start -->
        <x-guestComponents.utilityComponents.footer/>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-3 border-light back-to-top"><i class="fa fa-arrow-up"></i></a>

{{-- {{ asset('js/script.js') }} --}}
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('site_assets/lib/wow/wow.min.js')}}"></script>
        <script src="{{asset('site_assets/lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('site_assets/lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset('site_assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>

        <!-- Template Javascript -->
        <script src="{{asset('site_assets/js/main.js')}}"></script>
    </body>

</html>

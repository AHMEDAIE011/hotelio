<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="Tooplate">

        <title>Moso Interior</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;300;400;600;700&display=swap" rel="stylesheet">

        <link href="{{ asset('site/css/bootstrap.min.css') }}" rel="stylesheet">

        <link href="{{asset('site/css/bootstrap-icons.css') }}" rel="stylesheet">

        <link href="{{asset('site/css/owl.carousel.min.css')}}" rel="stylesheet">

        <link href="{{asset('site/css/tooplate-moso-interior.css')}}" rel="stylesheet">

        <link href="{{asset('site/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

        <link href="{{asset('site/css/style.css')}}" rel="stylesheet">

<!--

Tooplate 2133 Moso Interior

https://www.tooplate.com/view/2133-moso-interior

Bootstrap 5 HTML CSS Template

-->
    </head>

    <body>

        <nav class="navbar navbar-expand-lg bg-light fixed-top shadow-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">Moso <span class="tooplate-red">Inter</span><span class="tooplate-green">ior</span></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_1">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2">About</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle click-scroll" href="#section_3" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>

                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="shop-listing.html">Shop Listing</a></li>

                                <li><a class="dropdown-item" href="shop-detail.html">Shop Detail</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_4">Reviews</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_5">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>




        @yield('content')


            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#36363e" fill-opacity="1" d="M0,96L40,117.3C80,139,160,181,240,186.7C320,192,400,160,480,149.3C560,139,640,149,720,176C800,203,880,245,960,250.7C1040,256,1120,224,1200,229.3C1280,235,1360,277,1400,298.7L1440,320L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
        </main>

        <footer class="site-footer section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-5 col-12 mb-3">
                        <h3><a href="index.html" class="custom-link mb-1">Moso Interior</a></h3>

                        <p class="text-white">Since 1986, We crafted interior products for better spaces</p>

                        <p class="text-white"><a href="https://www.tooplate.com" target="_parent">Web Design: Tooplate</a></p>
                    </div>

                    <div class="col-lg-3 col-md-3 col-12 ms-lg-auto mb-3">
                        <h3 class="text-white mb-3">Store</h3>

                        <p class="text-white mt-2">
                            <i class="bi-geo-alt"></i>
                            Berlin, Germany
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-4 col-12 mb-3">
                        <h3 class="text-white mb-3">Contact Info</h3>

                            <p class="text-white mb-1">
                                <i class="bi-telephone me-1"></i>

                                <a href="tel: 090-080-0760" class="text-white">
                                    090-080-0760
                                </a>
                            </p>

                            <p class="text-white mb-0">
                                <i class="bi-envelope me-1"></i>

                                <a href="mailto:info@company.com" class="text-white">
                                    info@company.com
                                </a>
                            </p>
                    </div>

                    <div class="col-lg-6 col-md-7 copyright-text-wrap col-12 d-flex flex-wrap align-items-center mt-4 ms-auto">
                        <p class="copyright-text mb-0 me-4">Copyright © Moso Interior 2048</p>

                        <ul class="social-icon">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link social-icon-twitter bi-twitter"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link social-icon-facebook bi-facebook"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link social-icon-instagram bi-instagram"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link social-icon-pinterest bi-pinterest"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link social-icon-whatsapp bi-whatsapp"></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="{{asset('site/js/jquery.min.js')}}"></script>
        <script src="{{asset('site/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('site/js/click-scroll.js')}}"></script>
        <script src="{{asset('site/js/jquery.backstretch.min.js')}}"></script>
        <script src="{{asset('site/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('site/js/custom.js')}}"></script>

          <!-- Vendor JS Files -->
          <script src="{{asset('site/vendor/glightbox/js/glightbox.min.js')}}"></script>
          <script src="{{asset('site/vendor/swiper/swiper-bundle.min.js')}}"></script>

          <!-- Template Main JS File -->
          <script src="{{asset('site/js/main.js')}}"></script>

    </body>
</html>

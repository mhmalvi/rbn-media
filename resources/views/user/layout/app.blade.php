<!DOCTYPE html>
<html lang="zxx">
<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!--====== Title ======-->
    <title>RBN - Education Consultant in Bangladesh | RBN Education | Study Abroad</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo-icon.png') }}" type="image/x-icon" />

    <!--====== Google Fonts ======-->
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;600;700&family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <!--====== Flaticon ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.min.css') }}" />
    <!--====== Font Awesome ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-5.9.0.min.css') }}" />
    <!--====== Bootstrap ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-4.5.3.min.css') }}" />
    <!--====== Magnific Popup ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}" />
    <!--====== Nice Select ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}" />
    <!--====== jQuery UI ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css') }}" />
    <!--====== Animate ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}" />
    <!--====== Slick ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}" />
    <!--====== Main Style ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />


    @stack('styles')


</head>
<body>
    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>

       <!-- Main header -->
        @include('user.partials.header')

        <!--Form Back Drop-->
        <div class="form-back-drop"></div>

        <!-- Hidden Sidebar -->
        <section class="hidden-bar">
            <div class="inner-box text-center">
                <div class="cross-icon"><span class="fa fa-times"></span></div>
                <div class="title">
                    <h4>Book Now</h4>
                </div>

                <!--Appointment Form-->
                <div class="appointment-form">
                    <form method="post" action="javascript:void(0)">
                        <div class="form-group">
                            <input type="text" name="text" value="" placeholder="Name" required />
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" value="" placeholder="Email Address" required />
                        </div>
                        <div class="form-group">
                            <textarea placeholder="Message" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="theme-btn">Submit now</button>
                        </div>
                    </form>
                </div>

                <!--Social Icons-->
                <div class="social-style-one">
                    <a href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                    <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                    <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                    <a href="javascript:void(0)"><i class="fab fa-pinterest-p"></i></a>
                </div>
            </div>
        </section>
        <!--End Hidden Sidebar -->

        @yield('content')

        <!-- Footer Area Start -->
        @include('user.partials.footer')
        <!-- Footer Area End -->
    </div>
    <!--End pagewrapper-->

    <!--====== Jquery ======-->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!--====== Bootstrap ======-->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!--====== Appear Js ======-->
    <script src="{{ asset('assets/js/appear.min.js') }}"></script>
    <!--====== Slick ======-->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!--====== jQuery UI ======-->
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <!--====== Isotope ======-->
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <!--==== Circle Progress bar ======-->
    <script src="{{ asset('assets/js/circle-progress.min.js') }}"></script>
    <!--====== Images Loader ======-->
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <!--====== Nice Select ======-->
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <!--====== Magnific Popup ======-->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!--  WOW Animation -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- Custom script -->
    <script src="{{ asset('assets/js/script.js') }}"></script>


    @stack('scripts')




</body>
</html>


 <!-- main header -->
 <header class="main-header header-two">
     <!-- Header-Top -->
     <div class="header-top bg-dark-blue text-white">
         <div class="container-fluid">
             <div class="top-inner">
                 <div class="top-left">
                     <!--   <p><i class="far fa-clock"></i> <b>Working Hours</b> : Manday - Friday, 08am - 05pm</p> -->
                 </div>
                 <div class="top-right d-flex align-items-center">
                     <div class="social-style-two">
                         <a href="https://twitter.com/RobiRaihan2"><i class="fab fa-twitter"></i></a>
                         <a href="https://www.facebook.com/rbn.com.bd"><i class="fab fa-facebook-f"></i></a>
                         <a href="https://www.instagram.com/rbn_education/"><i class="fab fa-instagram"></i></a>
                         <a href="https://www.linkedin.com/company/rbn-education/about/"><i class="fab fa-linkedin"></i></a>
                         <a href="https://www.youtube.com/@rbneducation7406"><i class="fab fa-youtube"></i></a>
                     </div>
                     <ul class="top-menu">
                     {{--<li><a href="about.html">Setting & Privacy</a></li>--}}
                                <li><a href="faqs.html">Faqs</a></li>
                                {{--<li><a href="about.html">About</a></li>--}}
                     </ul>
                 </div>
             </div>
         </div>
     </div>

     <!-- Header-Upper -->
     <div class="header-upper">
         <div class="container-fluid clearfix">
             <div class="header-inner d-flex align-items-center justify-content-between">
                 <div class="logo-outer d-lg-flex align-items-center">
                     <div class="logo">
                         <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logos/rbn.png') }}" alt="Logo" title="Logo" /></a>

                     </div>
                    {{--  <select name="select-languages" id="select-languages">
                         <option value="English">Eng</option>
                         <option value="Spanish">Spa</option>
                         <option value="Chinese">Chi</option>
                         <option value="Arabic">Ara</option>
                     </select> --}}
                 </div>

                 @include('user.partials.navbar')
             </div>
         </div>
     </div>
     <!--End Header Upper-->
 </header>

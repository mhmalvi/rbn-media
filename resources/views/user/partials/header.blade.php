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
                         <a href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                         <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                         <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                         <a href="javascript:void(0)"><i class="fab fa-pinterest-p"></i></a>
                     </div>
                     <ul class="top-menu">
                         <li><a href="javascript:void(0)">Setting & Privacy</a></li>
                         <li><a href="javascript:void(0)">Faqs</a></li>
                         <li><a href="javascript:void(0)">About</a></li>
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
                         <a href="javascript:void(0)"><img src="{{ asset('assets/images/logos/rbn.png') }}" alt="Logo" title="Logo" /></a>

                     </div>
                    {{--  <select name="select-languages" id="select-languages">
                         <option value="English">Eng</option>
                         <option value="Spanish">Spa</option>
                         <option value="Chinese">Chi</option>
                         <option value="Arabic">Ara</option>
                     </select> --}}
                 </div>

                 <div class="nav-outer clearfix">
                     <!-- Main Menu -->
                     <nav class="main-menu navbar-expand-lg">
                         <div class="navbar-header">
                             <div class="mobile-logo bg-green br-10 p-15">
                                 <a href="javascript:void(0)">
                                     <img src="{{ asset('assets/images/logos/logo.png') }}" alt="Logo" title="Logo" />

                                 </a>
                             </div>

                             <!-- Toggle Button -->
                             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                 <span class="icon-bar"></span>
                                 <span class="icon-bar"></span>
                                 <span class="icon-bar"></span>
                             </button>
                         </div>

                         <div class="navbar-collapse collapse clearfix">
                             <ul class="navigation clearfix">
                                 <li><a href="{{ route('home') }}">Home</a></li>


                                 <li class="dropdown">
                                     <a href="javascript:void(0)">About Us</a>
                                     <ul>
                                         <li><a href="{{ route('whoWeAre') }}">About RBN Education</a></li>
                                         <li><a href="{{ route('timeline') }}">Our Values</a></li>
                                         <li><a href="{{ route('timeline') }}">Goals</a></li>

                                     </ul>
                                 </li>

                                 <li class="dropdown">
                                     <a href="javascript:void(0)">Services</a>
                                     <ul>
                                         <li>
                                             <a href="{{ route('admissionConsultation') }}">Student Counseling</a>

                                         </li>
                                         <li><a href="{{ route('visaExpress') }}">IELTS & PTE Registration Center</a></li>


                                         <li>
                                             <a href="{{ route('phdAdmissionService') }}">Language & Scholarship Guidance</a>


                                         </li>
                                         <li>
                                             <a href="{{ route('scholarshipGuidance') }}">Admission Assistance</a>


                                         </li>
                                         <li>
                                             <a href="{{ route('departureBriefing') }}">Visa Assistance</a>


                                         </li>
                                         <li>
                                             <a href="{{ route('postalCare') }}">Pastoral Care</a>

                                         </li>
                                     </ul>
                                 </li>
                                 <li class="dropdown">
                                     <a href="javascript:void(0)">Dream Destination</a>

                                     <ul>
                                         <li>
                                             <a href="{{ route('studyInUk') }}">UK</a>

                                         </li>
                                         <li>
                                             <a href="{{ route('studyInUsa') }}">USA</a>


                                         </li>
                                         <li>
                                             <a href="{{ route('studyInCanada') }}">Canada</a>


                                         </li>
                                         <li>
                                             <a href="{{ route('studyInAus') }}">Australia</a>


                                         </li>
                                         <li>
                                             <a href="{{ route('studyInEurope') }}">Europe</a>


                                         </li>
                                         <li>
                                             <a href="{{ route('studyInMalyasia') }}">Malyasia</a>


                                         </li>

                                     </ul>
                                 </li>
                                 <li class="dropdown"><a href="{{ route('scholarship') }}">scholarship</a>
                                      <ul>
                                           <li><a href="{{ route('event') }}">Renowned Scholarships</a></li>
                                           <li><a href="{{ route('event') }}">Articles</a></li>
                                      </ul>
                                 </li>

                                 <li><a href="{{ route('event') }}">Event</a></li>

                                 <li><a href="{{ route('blog') }}">Blog</a></li>

                                 <li class="dropdown">
                                     <a href="javascript:void(0)">Visit Now</a>
                                     <ul>
                                         <li>
                                             <a href="{{ route('dhakaOffice') }}">Dhaka Office</a>

                                         </li>
                                         <li>
                                             <a href="{{ route('sylhetOffice') }}">Sylhet Office</a>

                                         </li>
                                     </ul>
                                 </li>
                             </ul>
                         </div>
                     </nav>
                     <!-- Main Menu End-->
                 </div>

                 <!-- Menu Button -->
                 <div class="menu-btn-sidebar d-flex align-items-center">
                    <a href="{{ route('schoolOfEnglish') }}" class="btn btn-success">School Of English</a>
                    {{--  <form action="javascript:void(0)">
                         <input type="search" placeholder="Search" required />
                         <button><i class="fas fa-search"></i></button>
                     </form> --}}
                     <!--  <button class="cart">
                  <i class="fas fa-shopping-bag"></i>
                </button>
                <button><i class="far fa-user-circle"></i></button> -->

                     <!-- menu sidbar -->
                     <div class="menu-sidebar">
                         <button>
                             <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                         </button>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!--End Header Upper-->
 </header>

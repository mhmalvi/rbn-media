    <div class="nav-outer clearfix">
        <!-- Main Menu -->
        <nav class="main-menu navbar-expand-lg">
            <div class="navbar-header">
                <div class="mobile-logo bg-green br-10 p-15">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/images/logos/rbn.png') }}" alt="Logo" title="Logo" />
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
                                <a href="{{ url('study-in-aus') }}">
                                    <img class="icon" src="{{ asset('assets/images/flag/1569253786.png') }}" alt="Australia">
                                    Study In Australia
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('study-in-canada') }}">
                                    <img class="icon" src="{{ asset('assets/images/flag/1569237351.png') }}" alt="Canada">
                                    Study In Canada
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('study-in-dubai') }}">
                                    <img class="icon" src="{{ asset('assets/images/flag/1624194469.png') }}" alt="Dubai">
                                    Study In Dubai
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('study-in-germany') }}">
                                    <img class="icon" src="{{ asset('assets/images/flag/1573652587.png') }}" alt="Germany">
                                    Study In Germany
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('study-in-malyasia') }}">
                                    <img class="icon" src="{{ asset('assets/images/flag/1569404987.png') }}" alt="Malaysia">
                                    Study In Malaysia
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('study-in-switzerland') }}">
                                    <img class="icon" src="{{ asset('assets/images/flag/1628508376.png') }}" alt="Switzerland">
                                    Study In Switzerland
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('study-in-uk') }}">
                                    <img class="icon" src="{{ asset('assets/images/flag/1569240440.png') }}" alt="UK">
                                    Study In UK
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('study-in-usa') }}">
                                    <img class="icon" src="{{ asset('assets/images/flag/1569246724.png') }}" alt="USA">
                                    Study In USA
                                </a>
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


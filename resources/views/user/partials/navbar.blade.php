    <style scoped>
        @media only screen and (max-width:480px) {
            .school-of-english {
                font-size: 88%;

            }

        }

        .main-menu .navbar-collapse li a {
            font-size: 14px;
        }

    </style>

    <div class="nav-outer clearfix">
        <!-- Main Menu -->
        <nav class="main-menu navbar-expand-lg">
            <div class="navbar-header">
                <div class="mobile-logo br-10 p-15">
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
                            <li><a href="{{ route('about-rbn-education') }}">About RBN Education</a></li>
                            <li><a href="{{ route('our-values') }}">Our Values</a></li>
                            <li><a href="{{ route('our-goals') }}">Goals</a></li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void(0)">Services</a>
                        <ul>
                            <li>
                                <a href="{{ route('student-counseling') }}">Student Counseling</a>

                            </li>
                            <li><a href="{{ route('registration-center') }}">IELTS & PTE Registration</a></li>
                            <li>
                                <a href="{{ route('language-scholarship') }}">Scholarship Guidance</a>

                            </li>
                            <li>
                                <a href="{{ route('admission-assistance') }}">Admission Assistance</a>

                            </li>
                            <li>
                                <a href="{{ route('visa-assistance') }}">Visa Assistance</a>
                            </li>
                            <li>
                                <a href="{{ route('departureBriefing') }}">Prior Departure Briefing</a>
                            </li>
                            <li>
                                <a href="{{ route('postalCare') }}">Pastoral Care</a>

                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void(0)">Dream Destination</a>

                        <ul style="padding-bottom: 4px">
                            <li>
                                <a href="{{ url('study-in-aus') }}">
                                    <img class="icon" src="{{ asset('assets/images/flag/1569253786.png') }}" alt="Australia">
                                    Australia
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('study-in-canada') }}">
                                    <img class="icon" src="{{ asset('assets/images/flag/1569237351.png') }}" alt="Canada">
                                    Canada
                                </a>
                            </li>
                            {{-- <li>
                                <a href="{{ url('study-in-dubai') }}">
                            <img class="icon" src="{{ asset('assets/images/flag/1624194469.png') }}" alt="Dubai">
                            Dubai
                            </a>
                    </li> --}}
                    <li>
                        <a href="{{ url('study-in-europe') }}">
                            <img class="icon" src="{{ asset('assets/images/flag/europe.png') }}" alt="Europe">
                            Europe
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('study-in-malyasia') }}">
                            <img class="icon" src="{{ asset('assets/images/flag/1569404987.png') }}" alt="Malaysia">
                            Malaysia
                        </a>
                    </li>
                    {{-- <li>
                                <a href="{{ url('study-in-switzerland') }}">
                    <img class="icon" src="{{ asset('assets/images/flag/1628508376.png') }}" alt="Switzerland">
                    Switzerland
                    </a>
                    </li> --}}
                    <li>
                        <a href="{{ url('study-in-uk') }}">
                            <img class="icon" src="{{ asset('assets/images/flag/1569240440.png') }}" alt="UK">
                            UK
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('study-in-usa') }}">
                            <img class="icon" src="{{ asset('assets/images/flag/1569246724.png') }}" alt="USA">
                            USA
                        </a>
                    </li>

                </ul>
                </li>
                <li class="dropdown"><a href="{{ route('scholarship') }}">scholarship</a>
                    <ul>
                        <li><a href="{{ route('renowned-scholarships') }}">Renowned Scholarships</a></li>
                        <li><a href="{{ route('article') }}">Articles</a></li>
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
        <div class=" EnglishSchool-btn"><a href="{{ route('schoolOfEnglish') }}" class="text-white school-of-english">School Of English</a></div>
        {{-- <form action="javascript:void(0)">
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

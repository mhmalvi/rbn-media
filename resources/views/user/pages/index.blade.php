@extends('user.layout.app')
@section('content')

  <!-- Hero Section Start -->
  <section class="hero-section-two text-white text-center bg-blue rel z-1 pt-240 rpt-150 pb-80">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-xl-8 col-lg-10">
                  <div class="hero-content-two">
                      <h1 class="mb-35 wow fadeInUp delay-0-2s">
                          <!--  Build Bright Life? Learn Many Things Us -->
                      &nbsp;

                      </h1>
                      <ul class="list-style-one wow fadeInUp delay-0-4s">
                          <li>&nbsp;</li>

                          <li>&nbsp;</li>

                          <li>&nbsp;</li>

                      </ul>
                      <div class="hero-two-btns mt-30 wow fadeInUp delay-0-6s">
                          <a href="javascript:void(0)" class="theme-btn mb-15">&nbsp;{{--  <i class="fas fa-arrow-right"></i> --}}</a>
                          <a href="https://www.youtube.com/watch?v=9Y7ma241N8k" class="mfp-iframe video-play mb-15">{{-- <i class="fas fa-play"></i> --}} {{-- <span>&nbsp;</span> --}}</a>

                      </div>
                      <div class="admin-speech mt-110 rmt-35 wow fadeInUp delay-0-8s">
                          <div class="image">
                             {{--  <img src="{{ asset('assets/images/hero/admin.jpg') }}" alt="Admin" /> --}}

                          </div>
                          <p>
                              &nbsp;

                          </p>
                          <span class="name">&nbsp;</span>

                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="hero-two-left wow fadeInUp delay-0-6s">
          <img src="{{ asset('assets/images/hero/475x634.png') }}" alt="Hero" />


      </div>
      <div class="hero-two-right wow fadeInRight delay-0-6s">
          <img src="{{ asset('assets/images/hero/02.png') }}" alt="Hero" />

      </div>
      <img class="circle-one" src="{{ asset('assets/images/shapes/circle-one.png') }}" alt="Circle" />

      <img class="circle-two" src="{{ asset('assets/images/shapes/circle-two.png') }}" alt="Circle" />

  </section>
  <!-- Hero Section End -->


  <!----- Fast and Fact Start ------------>
  <div class="rel z-1 pt-120 rpt-90 pb-75 rpb-45">

       @include('user.partials.fastFace')

  </div>
  <!----- Fast and Fact End ------------>

  <!-- destination Section Start -->
  <section class="destination study-destination text-center pt-120 rpt-90 pb-120 rpb-45">

      <div class="container">
          <div class="section-title text-center mb-55">
              <h2>Determine Your Future Hub</h2>
          </div>
          <div class="row justify-content-center align-items-center">
          <div class="col-lg-4 col-sm-6">
              <div class="card box-shadow border-0 hover-styled">
                  <figure class="figure mb-0" style="background-image: url('{{ asset('assets/images/future-hub/1569253786.jpg') }}'); background-repeat: no-repeat;">
                      <img src="{{ asset('assets/images/future-hub/1569253786.jpg') }}" class="card-img-top" alt="Image" style="visibility: hidden;">
                  </figure>
                  <div class="card-body pt-0">
                      <div class="icon position-absolute">
                          <img src="{{ asset('assets/images/flag/1569253786.png') }}" alt="Australia">
                      </div>
                      <h4>Australia</h4>
                      <p class="card-text">Enjoy the diverse cultural opportunities by studying abroad in Australia.</p>
                      <a href="{{ url('study-in-aus') }}" class="btn bg-blue text-white w-50 m-auto">Explore</a>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 col-sm-6">
              <div class="card box-shadow border-0 hover-styled">
                  <figure class="figure mb-0" style="background-image: url('{{ asset('assets/images/future-hub/1569237351.jpg') }}'); background-repeat: no-repeat;">
                      <img src="{{ asset('assets/images/future-hub/1569237351.jpg') }}" class="card-img-top" alt="Image" style="visibility: hidden;">
                  </figure>
                  <div class="card-body pt-0">
                      <div class="icon position-absolute">
                          <img src="{{ asset('assets/images/flag/1569237351.png') }}" alt="Canada">
                      </div>
                      <h4>Canada</h4>
                      <p class="card-text">Experience quality education and beautiful natural environment while studying in Canada..</p>
                      <a href="{{ url('study-in-canada') }}" class="btn bg-blue text-white w-50 m-auto">Explore</a>
                  </div>
              </div>
          </div>
          
          <div class="col-lg-4 col-sm-6">
              <div class="card box-shadow border-0 hover-styled">
                  <figure class="figure mb-0" style="background-image: url('{{ asset('assets/images/future-hub/1569401765.jpg') }}'); background-repeat: no-repeat;">
                      <img src="{{ asset('assets/images/future-hub/1569401765.jpg') }}" class="card-img-top" alt="Image" style="visibility: hidden;">
                  </figure>
                  <div class="card-body pt-0">
                      <div class="icon position-absolute">
                          <img src="{{ asset('assets/images/flag/1573652587.png') }}" alt="Germany">
                      </div>
                      <h4>Germany</h4>
                      <p class="card-text">Experience the diverse cultural opportunities by studying abroad in Germany..</p>
                      <a href="{{ url('study-in-germany') }}" class="btn bg-blue text-white w-50 m-auto">Explore</a>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 col-sm-6">
              <div class="card box-shadow border-0 hover-styled">
                  <figure class="figure mb-0" style="background-image: url('{{ asset('assets/images/future-hub/1569404986.jpg') }}'); background-repeat: no-repeat;">
                      <img src="{{ asset('assets/images/future-hub/1569404986.jpg') }}" class="card-img-top" alt="Image" style="visibility: hidden;">
                  </figure>
                  <div class="card-body pt-0">
                      <div class="icon position-absolute">
                          <img src="{{ asset('assets/images/flag/1569404987.png') }}" alt="Malaysia">
                      </div>
                      <h4>Malaysia</h4>
                      <p class="card-text">Be a part of Malaysian Society and experience the unique culture.</p>
                      <a href="{{ url('study-in-malyasia') }}" class="btn bg-blue text-white w-50 m-auto">Explore</a>
                  </div>
              </div>
          </div>
          
          <div class="col-lg-4 col-sm-6">
              <div class="card box-shadow border-0 hover-styled">
                  <figure class="figure mb-0" style="background-image: url('{{ asset('assets/images/future-hub/1569240440.jpg') }}'); background-repeat: no-repeat;">
                      <img src="{{ asset('assets/images/future-hub/1569240440.jpg') }}" class="card-img-top" alt="Image" style="visibility: hidden;">
                  </figure>
                  <div class="card-body pt-0">
                      <div class="icon position-absolute">
                          <img src="{{ asset('assets/images/flag/1569240440.png') }}" alt="UK">
                      </div>
                      <h4>UK</h4>
                      <p class="card-text">Take the opportunity to Immerse yourself in British culture by studying in the UK.</p>
                      <a href="{{ url('study-in-uk') }}" class="btn bg-blue text-white w-50 m-auto">Explore</a>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 col-sm-6">
              <div class="card box-shadow border-0 hover-styled">
                  <figure class="figure mb-0" style="background-image: url('{{ asset('assets/images/future-hub/1569252684.jpg') }}'); background-repeat: no-repeat;">
                      <img src="{{ asset('assets/images/future-hub/1569252684.jpg') }}" class="card-img-top" alt="Image" style="visibility: hidden;">
                  </figure>
                  <div class="card-body pt-0">
                      <div class="icon position-absolute">
                          <img src="{{ asset('assets/images/flag/1569246724.png') }}" alt="USA">
                      </div>
                      <h4>USA</h4>
                      <p class="card-text">Experience the beautiful natural environment and multi-cultural society of USA.</p>
                      <a href="{{ url('study-in-usa') }}" class="btn bg-blue text-white w-50 m-auto">Explore</a>
                  </div>
              </div>
          </div>
          </div>
      </div>
  </section>
  <!-- Features Section End -->



  <!-- services Section Start -->
  <section class="services-section bg-lighter rel z-1 py-75 rpb-85">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-5">
                  <div class="services-content rmb-65 wow fadeInUp delay-0-2s">
                      <div class="section-title text-white">

                          <h2>Services</h2>
                      </div>
                      <h5 class="text-white">
                         A place for everything you need to shape your dream.

                      </h5>

                  </div>
              </div>
              <div class="col-lg-7">
                  <div class="services-wrap wow fadeInUp delay-0-4s">
                      <div class="row">
                          <div class="col-md-4 col-sm-6 mt-40">
                              <div class="category-item mt-35 hover-styled">

                                  <div class="icon">
                                      <img src="{{ asset('assets/images/categories/icon1.png') }}" alt="Icon" />

                                  </div>
                                  <h4>Student Counseling</h4>

                                  <a href="#">Read More</a>

                              </div>
                              <div class="category-item  hover-styled">
                                  <div class="icon">
                                      <img src="{{ asset('assets/images/categories/icon2.png') }}" alt="Icon" />

                                  </div>
                                  <h4>IELTS & PTE Registration Center</h4>
                                        <a href="#">Read More</a>

                              </div>
                          </div>

                          <div class="col-md-4 col-sm-6">
                              <div class="category-item  hover-styled">
                                  <div class="icon">
                                      <img src="{{ asset('assets/images/categories/icon3.png') }}" alt="Icon" />

                                  </div>
                                  {{-- <h4>Language & Scholarship Guidance</h4> --}}
                                  <h4>Scholarship Guidance</h4>
                                        <a href="#">Read More</a>

                              </div>
                              <div class="category-item  hover-styled">
                                  <div class="icon">
                                      <img src="{{ asset('assets/images/categories/icon4.png') }}" alt="Icon" />

                                  </div>
                                  <h4>Admission Assistance </h4>
                                    <a href="#">Read More</a>
                              </div>
                               <div class="category-item  hover-styled">
                                   <div class="icon">
                                       <img src="{{ asset('assets/images/categories/icon6.png') }}" alt="Icon" />
                                   </div>
                                   <h4>Pastoral Care</h4>
                                        <a href="#">Read More</a>
                               </div>
                          </div>

                          <div class="col-md-4 col-sm-6 mt-40">
                              <div class="category-item  hover-styled mt-40">
                                  <div class="icon">
                                      <img src="{{ asset('assets/images/categories/icon5.png') }}" alt="Icon" />

                                  </div>
                                  <h4>Visa Assistance</h4>
                                         <a href="#">Read More</a>

                              </div>
                              <div class="category-item  hover-styled">
                                  <div class="icon">
                                      <img src="{{ asset('assets/images/categories/icon6.png') }}" alt="Icon" />

                                  </div>
                                  <h4>Prior Departure Briefing</h4>
                                     <a href="#">Read More</a>

                              </div>
                               {{--<div class="category-item  hover-styled">
                                   <div class="icon">
                                       <img src="{{ asset('assets/images/categories/icon6.png') }}" alt="Icon" />
                                   </div>
                                   <h4>Pastoral Care</h4>
                                        <a href="#">Read More</a>
                               </div>--}}


                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Categories Section End -->

  <!-- Featured Universities Section Start -->
  <section class="coach-section-two rel z-1 pt-120 rpt-90 pb-130 rpb-100">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-xl-6 col-lg-7 col-md-8">
                  <div class="section-title text-center mb-45">


                      <h2>Featured Universities</h2>

                  </div>
              </div>
          </div>
          <div class="Accreditations-slider m-10">
              <div class="col-6 fadeInUp delay-0-2s">
                  <div class="coach-image">
                      <img src="{{ asset('assets/images/features/sunderland-uni.jpg') }}" alt="University of Manchester" />
                  </div>
                  <div class="coach-content text-center">
                      <a href="javascript:void(0)" class="category text-secondary">University of Sunderland</a>

                      <h4>
                          <a href="javascript:void(0)" class="text-secondary">UK</a>

                      </h4>
                        {{-- <p>Ranked 55th by The Times Higher Education World University Rankings 2020.</p> --}}

                  </div>
              </div>
              <div class="col-6 fadeInUp delay-0-4s">
                  <div class="coach-image">
                    <img src="{{ asset('assets/images/features/middlesex-uni.jpg') }}" alt="Middlesex University London" />

                  </div>
                  <div class="coach-content text-center">
                      <a href="javascript:void(0)" class="category text-secondary">Middlesex University London</a>

                      <h4>
                          <a href="javascript:void(0)" class="text-secondary">UK</a>

                      </h4>
                        {{-- <p>Ranked Top 100 Universities in the world | QS World University Rankings 2020</p> --}}

                  </div>
              </div>
              <div class="col-6 fadeInUp delay-0-4s">
                  <div class="coach-image">
                    <img src="{{ asset('assets/images/features/michigan-uni.jpg') }}" alt="Central Michigan University" />

                  </div>
                  <div class="coach-content text-center">
                      <a href="javascript:void(0)" class="category text-secondary">Central Michigan University</a>

                      <h4>
                          <a href="javascript:void(0)" class="text-secondary">USA</a>

                      </h4>
                        {{-- <p>Ranked Top 100 Universities in the world | QS World University Rankings 2020</p> --}}

                  </div>
              </div>
              <div class="col-6 fadeInUp delay-0-4s">
                  <div class="coach-image">
                    <img src="{{ asset('assets/images/features/trine-uni.jpg') }}" alt="Trine University" />

                  </div>
                  <div class="coach-content text-center">
                      <a href="javascript:void(0)" class="category text-secondary">Trine University</a>

                      <h4>
                          <a href="javascript:void(0)" class="text-secondary">USA</a>

                      </h4>
                        {{-- <p>Ranked Top 100 Universities in the world | QS World University Rankings 2020</p> --}}

                  </div>
              </div>
              <div class="col-6 fadeInUp delay-0-4s">
                  <div class="coach-image">
                    <img src="{{ asset('assets/images/features/nipissing-uni.jpg') }}" alt="Nipissing University" />

                  </div>
                  <div class="coach-content text-center">
                      <a href="javascript:void(0)" class="category text-secondary">Nipissing University</a>

                      <h4>
                          <a href="javascript:void(0)" class="text-secondary">Canada</a>

                      </h4>
                        {{-- <p>Ranked Top 100 Universities in the world | QS World University Rankings 2020</p> --}}

                  </div>
              </div>
              <div class="col-6 fadeInUp delay-0-4s">
                  <div class="coach-image">
                    <img src="{{ asset('assets/images/features/quest-uni.jpg') }}" alt="Quest University" />

                  </div>
                  <div class="coach-content text-center">
                      <a href="javascript:void(0)" class="category text-secondary">Quest University</a>

                      <h4>
                          <a href="javascript:void(0)" class="text-secondary">Canada</a>

                      </h4>
                        {{-- <p>Ranked Top 100 Universities in the world | QS World University Rankings 2020</p> --}}

                  </div>
              </div>
              <div class="col-6 fadeInUp delay-0-4s">
                  <div class="coach-image">
                    <img src="{{ asset('assets/images/features/naps-uni.png') }}" alt="National Academy of Professional Studies" />

                  </div>
                  <div class="coach-content text-center">
                      <a href="javascript:void(0)" class="category text-secondary">National Academy of Professional Studies</a>

                      <h4>
                          <a href="javascript:void(0)" class="text-secondary">Australia</a>

                      </h4>
                        {{-- <p>Ranked Top 100 Universities in the world | QS World University Rankings 2020</p> --}}

                  </div>
              </div>
              <div class="col-6 fadeInUp delay-0-4s">
                  <div class="coach-image">
                    <img src="{{ asset('assets/images/features/ATC-uni.png') }}" alt="Australian Technical College" />

                  </div>
                  <div class="coach-content text-center">
                      <a href="javascript:void(0)" class="category text-secondary">Australian Technical College Western Australia</a>

                      <h4>
                          <a href="javascript:void(0)" class="text-secondary">Australia</a>

                      </h4>
                        {{-- <p>Ranked Top 100 Universities in the world | QS World University Rankings 2020</p> --}}

                  </div>
              </div>
              <div class="col-6 fadeInUp delay-0-4s">
                  <div class="coach-image">
                      <img src="{{ asset('assets/images/features/budapest-uni.png') }}" alt="Budapest Metropolitan University" />

                  </div>
                  <div class="coach-content text-center">
                      <a href="javascript:void(0)" class="category text-secondary">Budapest Metropolitan University</a>

                      <h4>
                          <a href="javascript:void(0)" class="text-secondary">Hungary</a>

                      </h4>
                        {{-- <p>Ranked Top 100 Universities in the world | QS World University Rankings 2020</p> --}}

                  </div>
              </div>
              <div class="col-6 fadeInUp delay-0-4s">
                  <div class="coach-image">
                    <img src="{{ asset('assets/images/features/mahsa-uni.png') }}" alt="Mahsa University" />

                  </div>
                  <div class="coach-content text-center">
                      <a href="javascript:void(0)" class="category text-secondary">Mahsa University</a>

                      <h4>
                          <a href="javascript:void(0)" class="text-secondary">Malaysia</a>

                      </h4>
                        {{-- <p>Ranked Top 100 Universities in the world | QS World University Rankings 2020</p> --}}

                  </div>
              </div>

          </div>
      </div>
  </section>
  <!-- Featured Universities Section End -->

  <!-- Accreditations Section Start -->

  <section class="Accreditations-section-two rel z-1 pt-120 rpt-90 pb-130 rpb-100">

      <div class="container">
          <div class="row justify-content-center">
              <div class="col-xl-6 col-lg-7 col-md-8">
                  <div class="section-title text-center mb-45">

                      <h2>Our Accreditations</h2>
                  </div>
              </div>
          </div>
          <div class="Accreditations-slider">

              <div class="coach-item style-two wow fadeInUp delay-0-2s">
                  <div class="coach-image">
                      <img src="https://www.iecc.co.uk/public/uploads/featureduniversity/1571659859.jpg{{-- asset('assets/images/coachs/coach1.jpg') --}}" alt="Coach" />
                  </div>
                  <div class="coach-content text-center">
                      <a href="javascript:void(0)" class="category">The University of Manchester</a>

                      <h4>Manchester, UK</h4>
                        <p>Ranked 55th by The Times Higher Education World University Rankings 2020.</p>


                  </div>
              </div>
              <div class="coach-item style-two wow fadeInUp delay-0-4s">
                  <div class="coach-image">
                      <img src="{{ asset('assets/images/coachs/coach2.jpg') }}" alt="Coach" />

                  </div>
                  <div class="coach-content text-center">
                      <a href="javascript:void(0)" class="category">University of Leeds</a>

                      <h4>Yorkshire, UK</h4>
                        <p>Ranked Top 100 Universities in the world | QS World University Rankings 2020</p>


                  </div>
              </div>
              <div class="coach-item style-two wow fadeInUp delay-0-6s">
                  <div class="coach-image">
                      <img src="{{ asset('assets/images/coachs/coach3.jpg') }}" alt="Coach" />

                  </div>
                  <div class="coach-content text-center">
                      <a href="javascript:void(0)" class="category">University of Manitoba</a>

                      <h4>Manitoba, Canada</h4>
                      <p>Ranked 350th by The World University Ranking 2021.</p>


                  </div>
              </div>
              <div class="coach-item style-two wow fadeInUp delay-0-2s">
                  <div class="coach-image">
                      <img src="https://www.iecc.co.uk/public/uploads/featureduniversity/1571659859.jpg{{-- asset('assets/images/coachs/coach1.jpg') --}}" alt="Coach" />
                  </div>
                  <div class="coach-content text-center">
                      <a href="javascript:void(0)" class="category">The University of Manchester</a>

                      <h4>Manchester, UK</h4>
                        <p>Ranked 55th by The Times Higher Education World University Rankings 2020.</p>


                  </div>
              </div>
              <div class="coach-item style-two wow fadeInUp delay-0-4s">
                  <div class="coach-image">
                      <img src="{{ asset('assets/images/coachs/coach2.jpg') }}" alt="Coach" />

                  </div>
                  <div class="coach-content text-center">
                      <a href="javascript:void(0)" class="category">University of Leeds</a>

                      <h4>Yorkshire, UK</h4>
                        <p>Ranked Top 100 Universities in the world | QS World University Rankings 2020</p>


                  </div>
              </div>
              <div class="coach-item style-two wow fadeInUp delay-0-6s">
                  <div class="coach-image">
                      <img src="{{ asset('assets/images/coachs/coach3.jpg') }}" alt="Coach" />

                  </div>
                  <div class="coach-content text-center">
                      <a href="javascript:void(0)" class="category">University of Manitoba</a>

                      <h4>Manitoba, Canada</h4>
                      <p>Ranked 350th by The World University Ranking 2021.</p>


                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Accredations Section End -->

  <!-- Advertise Area Start -->
{{--  <section class="advertise-area pb-100 rpb-70">--}}
{{--      <div class="container">--}}
{{--          <div class="row">--}}
{{--              <div class="col-lg-6">--}}
{{--                  <div class="advertise-item wow fadeInUp delay-0-2s">--}}
{{--                      <div class="content">--}}
{{--                          <h4>Add Text</h4>--}}
{{--                          <p>--}}
{{--                              Sit amet consectetur adipiscing sed eiusmod tempore dolore--}}
{{--                              magna suspendisse--}}
{{--                          </p>--}}
{{--                          <a href="javascript:void(0)" class="theme-btn">Join with us <i class="fas fa-arrow-right"></i></a>--}}
{{--                      </div>--}}
{{--                      <div class="image">--}}
{{--                          <img src="{{ asset('assets/images/advertise/advertise1.png') }}" alt="Advertise" />--}}

{{--                      </div>--}}
{{--                  </div>--}}
{{--              </div>--}}
{{--              <div class="col-lg-6">--}}
{{--                  <div class="advertise-item bg-two wow fadeInUp delay-0-4s">--}}
{{--                      <div class="content">--}}
{{--                          <h4>Add Text</h4>--}}
{{--                          <p>--}}
{{--                              Amet consectetur adipiscing sed eius tempore dolore magna--}}
{{--                              suspens--}}
{{--                          </p>--}}
{{--                          <a href="javascript:void(0)" class="theme-btn style-two">Join with us <i class="fas fa-arrow-right"></i></a>--}}
{{--                      </div>--}}
{{--                      <div class="image">--}}
{{--                          <img src="{{ asset('assets/images/advertise/advertise2.png') }}" alt="Advertise" />--}}

{{--                      </div>--}}
{{--                  </div>--}}
{{--              </div>--}}
{{--          </div>--}}
{{--      </div>--}}
{{--  </section>--}}
  <!-- Advertise Area End -->

  <!-- Team Section Start -->
  {{--<section class="team-section rel z-1 bg-blue text-white pb-100 rpb-70">
      <div class="container">
          <div class="row justify-content-between">
              <div class="col-lg-5">
                  <div class="team-content pt-120 rpt-90 mb-30 rmb-75 wow fadeInUp delay-0-2s">
                      <div class="section-title mb-25">
                          <span class="sub-title-two">Meet Our Team</span>
                          <h2>Add Text</h2>
                      </div>
                      <p>
                          Sed ut perspiciatis unde omnis iste natus error sit volup
                          tatem accusantium doloremque laudantium totam rem aperiam
                          eaques quae abillo inventore veritatis et quasi architecto
                      </p>
                      <ul class="list-style-one pt-10 pb-45">
                          <li>Experience Team Members</li>
                          <li>Lot’s of Video Tutorials</li>
                          <li>Events & Programs</li>
                          <li>Free & Premium Courses</li>
                      </ul>
                      <a href="javascript:void(0)" class="theme-btn">Learn more <i class="fas fa-arrow-right"></i></a>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="team-members">
                      <div class="row align-items-center">
                          <div class="col-sm-6 wow fadeInRight delay-0-2s">
                              <div class="team-member">
                                  <img src="{{ asset('assets/images/teams/member1.png') }}" alt="Team Member" />

                                  <div class="team-over">
                                      <h4>David S. Wickman</h4>
                                      <span>Wed Designer</span>
                                      <div class="social-style-two">
                                          <a href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                                          <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                                          <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                                          <a href="javascript:void(0)"><i class="fab fa-pinterest-p"></i></a>
                                      </div>
                                  </div>
                              </div>
                              <div class="team-member">
                                  <img src="{{ asset('assets/images/teams/member2.png') }}" alt="Team Member" />

                                  <div class="team-over">
                                      <h4>Steven A. Davis</h4>
                                      <span>Wed Developer</span>
                                      <div class="social-style-two">
                                          <a href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                                          <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                                          <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                                          <a href="javascript:void(0)"><i class="fab fa-pinterest-p"></i></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-sm-6 wow fadeInRight delay-0-4s">
                              <div class="team-member">
                                  <img src="{{ asset('assets/images/teams/member3.png') }}" alt="Team Member" />

                                  <div class="team-over">
                                      <h4>Joe L. Bergmann</h4>
                                      <span>UI/UX Designer</span>
                                      <div class="social-style-two">
                                          <a href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                                          <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                                          <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                                          <a href="javascript:void(0)"><i class="fab fa-pinterest-p"></i></a>
                                      </div>
                                  </div>
                              </div>
                              <div class="team-member">
                                  <img src="{{ asset('assets/images/teams/member4.png') }}" alt="Team Member" />

                                  <div class="team-over">
                                      <h4>Marco A. Tolliver</h4>
                                      <span>Web Designer</span>
                                      <div class="social-style-two">
                                          <a href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                                          <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                                          <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                                          <a href="javascript:void(0)"><i class="fab fa-pinterest-p"></i></a>
                                      </div>
                                  </div>
                              </div>
                              <div class="team-member">
                                  <img src="{{ asset('assets/images/teams/member5.png') }}" alt="Team Member" />

                                  <div class="team-over">
                                      <h4>Claude M. Remley</h4>
                                      <span>Web Developer</span>
                                      <div class="social-style-two">
                                          <a href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                                          <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                                          <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                                          <a href="javascript:void(0)"><i class="fab fa-pinterest-p"></i></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <span class="bg-text">Advisors</span>
  </section>--}}
  <!-- Team Section End -->

  <!-- Event Section Start -->
  <section class="event-section-two rel z-1 pt-120 rpt-90 pb-130 rpb-100">
      <div class="container">
          <div class="section-title text-center mb-55">
              <span class="sub-title-two">Event & Program</span>
{{--              <h2>Add Text</h2>--}}
          </div>
          <div class="row">
          @php
            $i=1;

          @endphp
           @isset($events)
               @php
                   $eventCount = count($events);
               @endphp
               @foreach($events as $event)
                 @if($i <5)
                     @if($i == 3)
                         <div class="col-lg-12">
                             <hr class="mb-55" />
                         </div>
                     @endif
                     <div class="col-lg-6">
                         <div class="event-item-two wow fadeInUp delay-0-2s">
                             <span class="date"> {{ date('M', strtotime($event->event_date)) }} <b>{{ date('d', strtotime($event->event_date)) }}</b> <span>{{ date('Y', strtotime($event->event_date)) }}</span> </span>


                             <img src="{{ asset('assets/admin/image/events/'.$event->thumbnail) }}" alt="Event thumbnail" />


                             <div class="content">
                                 <span class="location"><i class="fas fa-map-marker-alt"></i>{{ $event->location }}</span>
                                 <h4>
                                     <a href="javascript:void(0)" class="text-secondary">{{ $event->title }}</a>
                                 </h4>
                                 {{-- <a href="javascript:void(0)" class="read-more color-two">Get ticket <i class="fas fa-arrow-right"></i></a> --}}
                             </div>
                         </div>
                     </div>
                     @php
                         $i++;

                     @endphp
                 @endif
               @endforeach

           @endisset

             {{--  <div class="col-lg-6">
                  <div class="event-item-two wow fadeInUp delay-0-4s">
                      <span class="date"> Mar <b>09</b> <span>2022</span> </span>
                      <img src="{{ asset('assets/images/events/event-two2.jpg') }}" alt="Event" />

                      <div class="content">
                          <span class="location"><i class="fas fa-map-marker-alt"></i> 55 Main Street,
                              USA</span>
                          <h4>
                              <a href="javascript:void(0)">Guide To Newly Suppored Modern CSS Pseudo</a>
                          </h4>
                          <a href="javascript:void(0)" class="read-more color-two">Get ticket <i class="fas fa-arrow-right"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-12">
                  <hr class="mb-55" />
              </div>
              <div class="col-lg-6">
                  <div class="event-item-two wow fadeInUp delay-0-6s">
                      <span class="date"> Mar <b>15</b> <span>2022</span> </span>
                      <img src="{{ asset('assets/images/events/event-two3.jpg') }}" alt="Event" />

                      <div class="content">
                          <span class="location"><i class="fas fa-map-marker-alt"></i> 55 Main Street,
                              USA</span>
                          <h4>
                              <a href="javascript:void(0)">Deep Dive Into Eleventy Static Site Generator</a>
                          </h4>
                          <a href="javascript:void(0)" class="read-more color-two">Get ticket <i class="fas fa-arrow-right"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="event-item-two wow fadeInUp delay-0-8s">
                      <span class="date"> Mar <b>15</b> <span>2022</span> </span>
                      <img src="{{ asset('assets/images/events/event-two4.jpg') }}" alt="Event" />

                      <div class="content">
                          <span class="location"><i class="fas fa-map-marker-alt"></i> 55 Main Street,
                              USA</span>
                          <h4>
                              <a href="javascript:void(0)">Contexts Variables In That Static Site Generator</a>
                          </h4>
                          <a href="javascript:void(0)" class="read-more color-two">Get ticket <i class="fas fa-arrow-right"></i></a>
                      </div>
                  </div>
              </div> --}}
          </div>

          @if($eventCount >4)
          <div class="event-more-btn text-center pt-15">
              <a href="{{ route('event') }}" class="theme-btn style-three">View More Events <i class="fas fa-arrow-right"></i></a>
          </div>
          @endif
      </div>
  </section>
  <!-- Event Section End -->

  <!-- Testimonials Section Start -->
  <section class="testimonials-section-two my-80 rel z-1">
      <div class="container">
          <div class="testimonial-two-wrap wow fadeInUp delay-0-2s">
              <div class="testimonial-item-two">
                  <div class="testimonial-author-two">
                      <img src="{{ asset('assets/images/testimonials/testimonial-two1.jpg') }}" alt="Author" />

                  </div>
                  <div class="testimonial-content-two">
                      <div class="designation">
                          <h3>Canada student visa achiever</h3>
                          {{--<span>Business Manager</span>--}}
                      </div>
                      <p>
                      "I visited Canada on a visitor visa but wanted to convert my visitor visa 
                      into a Canada student visa. Every consultant I visited told me that your 
                      case was impossible. But then I met RBN EDUCATION and I got my Canada student 
                      visa with the help of the staff of RBN EDUCATION I would recommend them to all people."
                      </p>
                      <div class="ratting">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                      </div>
                  </div>
              </div>
              <div class="testimonial-item-two">
                  <div class="testimonial-author-two">
                      <img src="{{ asset('assets/images/testimonials/testimonial-two2.jpg') }}" alt="Author" />

                  </div>
                  <div class="testimonial-content-two">
                      <div class="designation">
                          <h3>UK student visa achiever</h3>
                          {{--<span>Business Manager</span>--}}
                      </div>
                      <p>
                      “The counselors at RBN EDUCATION are very helpful and helped me gain a 
                      UK student visa. Today, I'm very happy and would recommend them to each 
                      and every student.”
                      </p>
                      <div class="ratting">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Testimonials Section End -->

  <!-- Blog Section Start -->
  <section class="blog-section pt-120 rpt-90">
      <div class="container">
          <div class="section-title text-center mb-55">
              <span class="sub-title-two">Latest Blogs</span>
              <h2>Get Every Single Updates</h2>
          </div>
          <div class="row">
            @isset($blogs)
                  @php
                      $i=1;
                      $blogCount = count($blogs);
                  @endphp

              @foreach($blogs as $blog)
                      @if($i <5)
                       <div class="col-lg-3 col-md-6">
                           <div class="blog-item style-two wow fadeInUp delay-0-2s">
                               <div class="blog-image">
                                   <img src="{{ asset('assets/admin/image/blogs/'.$blog->thumbnail) }}" alt="Blog Thumbnail" />
                                   <span class="date">{{ date('M', strtotime($blog->created_at)) }} <span>{{ date('d', strtotime($blog->created_at)) }}</span></span>
                               </div>
                               <div class="blog-content">
                                   <div class="content">
                                       <ul class="blog-meta">
                                           <li>
                                               <i class="far fa-user"></i>
                                               <a href="javascript:void(0)">By {{ $blog->author_name }}</a>
                                           </li>

                                       </ul>
                                       <h4>
                                           <a href="javascript:void(0)">Designing Better Link Web Site and Emailsite</a>
                                       </h4>
                                       <a href="{{ url('blog-details' , [ 'id' => $blog->id ]) }}" class="read-more">Read more <i class="fas fa-arrow-right"></i></a>
                                   </div>
                               </div>
                           </div>
                       </div>
                      @endif
                          @php
                              $i++;
                          @endphp
                 @endforeach
            @endisset

                @if($blogCount >4)
                    <div class="event-more-btn text-center pt-15">
                        <a href="{{ route('blog') }}" class="theme-btn style-three">View More Posts <i class="fas fa-arrow-right"></i></a>
                    </div>
                @endif

          </div>

      </div>
  </section>
  <hr class="mt-95 rmt-65" />
  <!-- Blog Section End -->

{{--@include('user.partials.partners')--}}


@endsection

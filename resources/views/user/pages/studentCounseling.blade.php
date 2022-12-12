@extends('user.layout.app')
@push('styles')
   <style>
   
         .list-style-four li{
            font-size: 16px;
         }
         p{
            text-align: justify !important;
         }
      
   
   </style>
@endpush
@section('content')
   @include('user.partials.banner')
     <!--  destination list start -->
  <section class="destination text-justify py-40 rpt-90  rpb-45">
      <div class="container">
          <ul class="Counseling-list">
              <li>
                  <a href="#">
                      <div class="card hover-styled">
                          <div class="card-body">
                              <h5>Initial Counseling</h5>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="card hover-styled">
                          <div class="card-body">
                              <h5>Paper Assessment</h5>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="card hover-styled">
                          <div class="card-body">
                              <h5>In-Depth Exploration</h5>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="card hover-styled">
                          <div class="card-body">
                              <h5>Destination Finalize</h5>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="card hover-styled">
                          <div class="card-body">
                              <h5>Commitment To Action</h5>
                          </div>
                      </div>
                  </a>
              </li>


          </ul>
      </div>
  </section>
  <!--  destination list end -->

  
   <!-- how it all works section start -->
   <section class="why-learn-area pb-120 rpb-100">
      <div class="container">
         <h2 class="text-center" style="color: #278ACD!important">HOW IT ALL WORKS</h2>
         <h4 class="text-center">Step by Step Elaboration</h4>
          <div class="row align-items-center large-gap wow fadeInLeft delay-0-2s pt-20">
              <div class="col-lg-6">
                  <div class="why-learn-content rmb-35">
                      <div class="section-title">
                         {{--  <span class="sub-title-two"></span> --}}
                          <h5>Step 1: Initial Counseling</h5>
                      </div>
                      <p>
                      The first step involves providing tailored consultation on your decision to study abroad. In this stage, we try to develop a robust relationship with prospective students.</p>
                     <p>The initial conversation is important. Since genuine students read verbal and nonverbal messages. Then, make a decision to further work with us based on our way of communication and the provided information.</p>
                      </p>


                      <div class="section-title">
                         {{--  <span class="sub-title-two"></span> --}}
                          <h5>Step 2: Paper Assessment</h5>
                      </div>
                     <p>After the first session of consultation, we follow up on the student file. Then, compile students required academic documents and all other supporting documents for research.</p>

                     <div class="section-title">
                         {{--  <span class="sub-title-two"></span> --}}
                          <h5>Step 3: In-Depth Exploration</h5>
                      </div>
                     <p>In-depth exploration involves collecting more information about the student's academic & professional background and scrutinizing the entire file. This stage is crucial to opt for a suitable country, university as well as program that is relevant to the student's previous academic background or synched with work experience.</p>
                     
                     <div class="section-title">
                         {{--  <span class="sub-title-two"></span> --}}
                          <h5>Step 4: Destination Finalize</h5>
                      </div>
                     <p>Here is the phase where our expert consultants suggest some tremendous suggestions including shortlisting universities, programs, and available scholarships. We complete this entire stage according to students' education goals, career path, financial ability, and preferred study destination. We also prioritize the students' good IELTS scores which is mandatory.</p>
                     
                     <div class="section-title">
                         {{--  <span class="sub-title-two"></span> --}}
                          <h5>Step 5: Commitment to Action</h5>
                      </div>
                     <p>After making a balanced decision as per students' preferences and our suggestions, we start commencing one of our major tasks. That is precise university application.</p>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="why-learn-image wow fadeInRight delay-0-2s">
                      <img src="{{ asset('assets/images/about/whoweare.jpg') }}" alt="Why Learn">


                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- how it all works section end -->

    <!-- Approach Your Free Consultation Start -->
    <section class="why-learn-area pt-120 pb-120 rpb-100">
        <div class="container">
            <div class="row align-items-center large-gap wow fadeInLeft delay-0-2s">
                <div class="col-lg-6">
                    <div class="why-learn-image wow fadeInRight delay-0-2s">
                        <img src="assets/images/about/whoweare2.jpg" alt="Why Learn">


                    </div>
                </div>
                 <div class="col-lg-6">
                     <div class="why-learn-content rmb-35">
                         <div class="section-title mb-30">
                             {{-- <span class="sub-title-two"></span> --}}
                             <h2>Approach Your Free Consultation Now!</h2>

                         </div>
                         <p>Because of the abundance of choices and advanced living destinations available, it is a tough task for an international student to choose the study destination, best-suited university, and program.</p>

                         <p>Whenever you are puzzled about your university selection or career planning, you may require expert guidelines. So, here we are. First, our skilled consultants will uphold the fast facts of your preferred countries. Ultimately, we help you decide the exact one that is perfect for you in all aspects.</p>

                         <p>We don’t want you to sign up for a course in which you aren’t interested. Furthermore, we can verify if you are on the right track or explore alternatives for you with our extensive institutional ties.</p>

                         <p>Feel free to consult with our proficient counselors. Just come over to our office or take virtual counseling anytime you want.</p>


                     </div>
                 </div>

            </div>
        </div>
    </section>

    <!-- student lifecycle START -->
    <section class=" student-leftcycle pt-120 pb-120 rpb-100">
        <div class="container">
            <div class="row align-items-center large-gap wow fadeInLeft delay-0-2s">
            <div class="col-lg-6">
                <h2>Students Life cycle with us</h2>
                    </div>
                <div class="col-lg-6">
                    <div class="counseling-img fadeInRight delay-0-2s">
                        <img src="assets/images/service/lifecycle.png" alt="">


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- student lifecycle END -->




@endsection
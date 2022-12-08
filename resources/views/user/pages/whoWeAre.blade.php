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

  <!-- Why Learn Start -->
  <section class="why-learn-area pt-120 pb-120 rpb-100">
      <div class="container">
          <div class="row align-items-center large-gap wow fadeInLeft delay-0-2s">
              <div class="col-lg-6">
                  <div class="why-learn-content rmb-35">
                      <div class="section-title mb-30">
                         {{--  <span class="sub-title-two"></span> --}}
                          <h2>who We Are</h2>
                      </div>
                      <p>
                      We, as a consultancy firm, have been serving our students since 2005 and this is how our students treat us in return. Their good words and references help us growing further and give us strengths to ensure a fastest, finest and quality services toward our beloved students.</p>
                    <p>It is very important for us as well to keep our promise as we don’t want to put our students in trouble. We do our best to guide them to reach their dream destinations and make us proud seeing their success in career.</p>
                     <p> Since 2005, we have managed to build up a strong relationship within our partner institutes in abroad which helps us to assure genuine guidance to our students and their parents.</p>
                      </p>
                     <p><b>Here are few reasons to choose us:</b></p>


                     <ul class="list-style-four">

                        <li> A company which you can trust based on our expertise and professionalism.</li>
                        <li> We deal with multi-national students which allow us to know and resolve different problems.</li>
                        <li> Our experts will help and guide you throughout the entire process starting from inquiry to visa stage. We also provide pastoral care to ensure you a smooth enrolment at the university after getting your visa.</li>
                        <li> We represent 200+ institutes globally and our consultants are foreign graduates which help us to provide realistic information to our students.</li>
                        <li> Our presence in the UK helps us reaching to any institutes directly if our students need any assistance on their applications.</li>

                     </ul>
                
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
  <!-- Why Learn End -->
  <!-- Team Section Start -->
  {{--<section class="team-setion-two bg-lighter rel z-1 pt-120 rpt-90 pb-70 rpb-40">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-8">
                  <div class="section-title text-center mb-55">
                      <span class="sub-title-two">Meet Our Team</span>
                      <h2>We’ve Experience Team Members</h2>
                  </div>
              </div>
          </div>
          <div class="row justify-content-center">
              <div class="col-lg-3 col-md-4 col-sm-6">
                  <div class="team-member-two wow fadeInUp delay-0-2s">
                      <div class="image">
                          <img src="{{asset('assets/images/teams/raihan.jpg')}}" alt="Team Member">
                          <div class="social-style-two">
                          <a href="https://www.facebook.com/robi.raihan.7" target="_blank"><i class="fab fa-facebook-f"></i></a>
                              <a href="https://www.linkedin.com/in/m-a-raihan/" target="_blank"><i class="fab fa-twitter"></i></a>
                               <a href="contact.html"><i class="fab fa-instagram"></i></a>
                              <a href="contact.html"><i class="fab fa-pinterest-p"></i></a> 
                          </div>
                      </div>
                      <div class="member-description">
                          <h4>MA Raihan</h4>
                          <span>CEO</span>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6">
                  <div class="team-member-two wow fadeInUp delay-0-4s">
                      <div class="image">
                          <img src="{{asset('assets/images/teams/tokee.jpg')}}" alt="Team Member">
                          <div class="social-style-two">
                               <a href="https://www.facebook.com/tahmid.tokee" target="_blank"><i class="fab fa-facebook-f"></i></a>
                              <a href="https://www.linkedin.com/in/tokeetahmid/" target="_blank"><i class="fab fa-twitter"></i></a>
                               <a href="contact.html"><i class="fab fa-instagram"></i></a>
                              <a href="contact.html"><i class="fab fa-pinterest-p"></i></a> 
                          </div>
                      </div>
                      <div class="member-description">
                          <h4>Tokee Tahmid</h4>
                          <span>Business Development Manager</span>

                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6">
                  <div class="team-member-two wow fadeInUp delay-0-6s">
                      <div class="image">
                          <img src="{{asset('assets/images/teams/asif.jpg')}}" alt="Team Member">

                          <div class="social-style-two">
                             <a href="https://www.facebook.com/asif.shoshi" target="_blank"><i class="fab fa-facebook-f"></i></a>
                             <a href="https://www.linkedin.com/in/asif-shahriyar-64380564/" target="_blank"><i class="fab fa-twitter"></i></a>
                           <a href="contact.html"><i class="fab fa-instagram"></i></a>
                              <a href="contact.html"><i class="fab fa-pinterest-p"></i></a>
                          </div>
                      </div>
                      <div class="member-description">
                          <h4>Asif Shahriyar </h4>
                          <span>Education Counsellor</span>

                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6">
                  <div class="team-member-two wow fadeInUp delay-0-8s">
                      <div class="image">
                          <img src="{{asset('assets/images/teams/tanmoy.jpg')}}" alt="Team Member">

                          <div class="social-style-two">
                             <a href="https://www.facebook.com/tanmaytbs" target="_blank"><i class="fab fa-facebook-f"></i></a>
                             <a href="https://www.linkedin.com/in/tanmaybiswastt/" target="_blank"><i class="fab fa-twitter"></i></a>
                             <a href="contact.html"><i class="fab fa-instagram"></i></a>
                              <a href="contact.html"><i class="fab fa-pinterest-p"></i></a>
                          </div>
                      </div>
                      <div class="member-description">
                          <h4>TANMAY BISWAS</h4>
                          <span>Digital Marketing Officer</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>--}}
  <!-- Team Section End -->

    <!-- Why Learn Start -->
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
                             <h2>We are the solution to your overseas education queries</h2>

                         </div>
                         <p>As an international student education counsellor, we are very caring toward our students’ satisfaction. To ensure the best quality of services on due time, we work more than 18 hours in a day.</p>

                         <p>We take care of your every step from advising you regarding course selection, university and application procedure to your visa documentation. Our experts will help you taking the most important decision of your life. ‘’ Because we believe, if there is a problem, of course, there will be a solution as well, that’s why we are here to support " .</p>

                         <p>Choosing RBN means you have taken your step towards your dream, now the rest of it we will take care on behalf of you.</p>

                         </p>


                     </div>
                 </div>

            </div>
        </div>
    </section>

     <!-- Advertise Area Start -->
     <section class="advertise-area pt-130 rpt-100 pb-90 rpb-60">
         <div class="container">
             <div class="row">
                 <div class="col-lg-6">
                     <div class="advertise-item wow fadeInUp delay-0-2s">
                         <div class="content">
                             <h4>Become An Instructor?</h4>
                             <p>Sit amet consectetur adipiscing sed eiusmod tempore dolore magna suspendisse</p>
                             <a href="contact.html" class="theme-btn">Join with us <i class="fas fa-arrow-right"></i></a>
                         </div>
                         <div class="image">
                             <img src="assets/images/advertise/advertise1.png" alt="Advertise">
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="advertise-item bg-two wow fadeInUp delay-0-4s">
                         <div class="content">
                             <h4>Get Online Courses</h4>
                             <p>Amet consectetur adipiscing sed eius tempore dolore magna suspens</p>
                             <a href="contact.html" class="theme-btn style-two">Join with us <i class="fas fa-arrow-right"></i></a>
                         </div>
                         <div class="image">
                             <img src="assets/images/advertise/advertise2.png" alt="Advertise">
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- Advertise Area End -->



<!-- Global Partner -->
@include('user.partials.partners')


@endsection
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
  <section class="why-learn-area pt-40 pt-lg-120 pb-20 pb-lg-120 rpb-100">
      <div class="container">
          <div class="row align-items-center large-gap wow fadeInLeft delay-0-2s">
              <div class="col-lg-6">
                  <div class="why-learn-content rmb-35">
                      <div class="section-title mb-30">
                         {{--  <span class="sub-title-two"></span> --}}
                          <h2>About RBN Education</h2>
                      </div>
                      <p>As an education consultancy firm, RBN Education has been providing services to potential students since 2017. We provide quality guidance in the overall university admission process, visa support, career assessment, language training, and help to gain captivating scholarship opportunities from partnered institutions on behalf of the students. RBN Education strives to provide the utmost services to students and makes education abroad easy for them.</p>
                      <p>To offer you a seamless and trouble-free transition, we provide veteran customized consultations. From delving into your interest to matching your passion relevant to your academic background we help to discover authentic and updated admission and scholarship information from the most elite and top-ranked universities in the USA, UK, Australia, Canada, Europe, and Malaysia.</p>
                      <p>We soulfully believe that everyone should be able to receive quality higher education. It is one of the basic rights. With this goal in mind, we endeavor to provide chances for students who have true goals and sincere intentions to study overseas. We are a one-stop solution for those students who are looking for quality education in developed countries, fast admission services, and proper guidance until getting the visa.</p>
                      <p>Our relationship with students does not come to an end after getting the visa. Rather, you would find our supporting hand even after reaching your dream destination. We grow further and gain strength to deliver the fastest, finest, and quality services, and thank students for excellent words, appreciation, and recommendations.</p>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="why-learn-image wow fadeInRight delay-0-2s">
                      <img src="{{ asset('assets/images/about/about1.jpg') }}" alt="Why Learn">
                  </div>
              </div>
          </div>
      </div>
  </section>


    <!-- Why Learn Start -->
    <section class="why-learn-area pt-20 pt-lg-120 pb-20 pb-lg-120 rpb-100">
        <div class="container">
            <div class="row align-items-center large-gap wow fadeInLeft delay-0-2s">
                <div class="col-lg-6">
                    <div class="why-learn-image wow fadeInRight delay-0-2s">
                        <img src="assets/images/about/about2.jpg" alt="Why Learn">
                    </div>
                </div>
                 <div class="col-lg-6">
                     <div class="why-learn-content rmb-35">
                         <div class="section-title mb-30 pt-10">
                             {{-- <span class="sub-title-two"></span> --}}
                             <h2>Why Choose RBN Education?</h2>

                         </div>
                         <p>Keeping our promise is extremely crucial for us since we don't want our students to face any trouble. We make every effort to assist them in reaching their ambitions and allow us to be proud of their achievements. We have been able to develop a solid relationship with our partner institutions overseas since 2017, allowing us to provide genuine guidance to our students and their parents.</p>

                         <p><b>Consider thinking about these reasons to embark on your journey of study abroad:</b></p>
                         <ul class="">
                            <li class="aboutrbn-li">
                                <img src="assets/images/service/tick.png" class="visaService-bullet" alt="">
                                <p>Based on our experience and professionalism, we can rely on RBN Education.</p>
                            </li>
                            <li class="aboutrbn-li">
                                <img src="assets/images/service/tick.png" class="visaService-bullet" alt="">
                                <p>Starting with the inquiry until the visa stage, our expert team assists and guides you throughout the entire process. After you have obtained your visa, we also provide pastoral support to ensure that you enroll at the university easily.</p>
                            </li>
                            <li class="aboutrbn-li">
                                <img src="assets/images/service/tick.png" class="visaService-bullet" alt="">
                                <p>Moreover, we represent over a hundred academic institutions all around the world.</p>
                            </li>
                            <li class="aboutrbn-li">
                                <img src="assets/images/service/tick.png" class="visaService-bullet" alt="">
                                <p>We have consultants who are international graduates, which enables us to give precise advice to applicants.</p>
                            </li>
                            <li class="aboutrbn-li">
                                <img src="assets/images/service/tick.png" class="visaService-bullet" alt="">
                                <p>We can identify and solve diverse issues as we deal with multinational students.</p>
                            </li>
                            <li class="aboutrbn-li">
                                <img src="assets/images/service/tick.png" class="visaService-bullet" alt="">
                                <p>Additionally, we have a professional code of conduct that we follow. In order to maintain high standards in our work, we observe ethical, moral, and personal values.</p>
                            </li>
                             
                         </ul>


                     </div>
                 </div>

            </div>
        </div>
    </section>


@endsection

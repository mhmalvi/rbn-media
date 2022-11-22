@extends('user.layout.app')
@push('styles')
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

<style>

   p{
    text-align: justify;
   }

   .timeline-card{
        width: 250px;
        height: 300px;
        background-color: antiquewhite;
        /* overflow: hidden; */
        border-radius: 15px;
        padding: 20px;

   }

    @media screen and (max-width: 480px) {
    .timeline-card {
        margin: 0 auto;
    }
    }


   .slick-prev, .slick-next{
      display:none !important;
   }

   .team-member-two .image
    {
     
      height:160px;
    }
   .team-member-two .image img
    {
      height:100%;
    
    }

    .slick-dots {
    
    bottom: -60px !important;
   
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
             <div class="why-learn-image wow fadeInRight delay-0-2s">
                 <img src="{{ asset('assets/images/about/ourtimeline.jpg') }}" alt="timeline">


             </div>
         </div>

            <div class="col-lg-6">
                <div class="why-learn-content rmb-35">
                    <div class="section-title mb-30">
                        {{-- <span class="sub-title-two"></span> --}}
                        <h2>Expand your route to develop your career with RBN</h2>

                    </div>
                    <p>RBN Education (known as RBN) is one of the renowned international education consultancy firms which assisting overseas students to get admissions into different foreign universities since 2005.</p>

                    <p>The head office of RBN is located in Bangladesh which helps all Bangladeshi students to get admission into top-ranked universities from the United Kingdom, USA, Australia, Canada,Germany and Sweden. At the same time, we have a very strong relationship with our partner Malaysian, Cyprus and Chinese Universities.</p>

                    <p>Our work ethics force us to ensure the free quality of admission advice to those who are in need of help to get an acceptance from foreign universities. Each year thousands of students receive acceptance and scholarship from internationally recognized universities through RBN which plays an important role to shape their career.</p>

                    </p>
                  
                </div>
            </div>
           
        </div>
    </div>
</section>
<!-- Why Learn End -->
<!-- timeline Section Start -->
<section class="team-setion-two bg-lighter rel z-1 pt-120 rpt-90 pb-70 rpb-40">
    <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-8">
                  <div class="section-title text-center mb-55">
                    
                      <h2>Cycle of experience</h2>

                  </div>
              </div>
          </div>
          <div class="row">
           <div class="col-lg-12">
               
               <div class="timeline-slider">
                       <div>
                             <div class="timeline-card">
                                 <div class="header">
                                     <h2>2005</h2>
                                 </div>
                                 <div class="content">
                                     <p>RBN was established in Farmget, Bangladesh </p>

                                 </div>
                             </div>
                       </div>
                       <div>
                            <div class="timeline-card">
                                <div class="header">
                                    <h2>2005</h2>
                                </div>
                                <div class="content">
                                    <p>Collaborate with UK universities </p>


                                </div>
                            </div>
                       </div>
                       <div>
                            <div class="timeline-card">
                                <div class="header">
                                    <h2>2005</h2>
                                </div>
                                <div class="content">
                                    <p>Collaborate with Canadian universities </p>


                                </div>
                            </div>
                       </div>
                       <div>
                            <div class="timeline-card">
                                <div class="header">
                                    <h2>2005</h2>
                                </div>
                                <div class="content">
                                    <p>Collaborate with USA universities </p>


                                </div>
                            </div>
                       </div>
                      <div>
                        <div class="timeline-card">
                            <div class="header">
                                <h2>2006</h2>
                            </div>
                            <div class="content">
                                <p>Collaborate with Australia universities </p>

                            </div>
                          </div>
                      </div>
                      <div>
                        <div class="timeline-card">
                            <div class="header">
                                <h2>2008</h2>
                            </div>
                            <div class="content">
                                <p>RBN Bangladesh was moved to House: 69/1 Suvastu Tower, 2nd floor,
                                    Panthapath Signal, Dhaka-1205. </p>


                            </div>
                          </div>
                      </div>
                      <div>
                        <div class="timeline-card">
                            <div class="header">
                                <h2>2015</h2>
                            </div>
                            <div class="content">
                                <p>Collaborate with German universities </p>


                            </div>
                          </div>
                      </div>
                      <div>
                        <div class="timeline-card">
                            <div class="header">
                                <h2>2015</h2>
                            </div>
                            <div class="content">
                                <p>Collaborate with Swedish universities </p>

                            </div>
                          </div>
                      </div>
                      <div>
                        <div class="timeline-card">
                            <div class="header">
                                <h2>2015</h2>
                            </div>
                            <div class="content">
                                <p>Collaborate with Malayasian universities </p>

                            </div>
                          </div>
                      </div>
                      <div>
                        <div class="timeline-card">
                            <div class="header">
                                <h2>2017</h2>
                            </div>
                            <div class="content">
                                <p>RBN Bangladesh added more people within team and had moved to House: 69/1 Suvastu Tower, 2nd floor,
                                    Panthapath Signal, Dhaka-1205. </p>


                            </div>
                          </div>
                      </div>
                     

                  
                      
                  </div>
               </div>
          </div>
        </div>
</section>
<!-- Team Section End -->


  <!-- Team Section Start -->
  <section class="team-setion-two bg-lighter rel z-1 pt-120 rpt-90 pb-70 rpb-40">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-8">
                  <div class="section-title text-center mb-55">
                      
                      <h2>RBN Accomplishments</h2>

                  </div>
              </div>
          </div>
          <div class="row justify-content-center">
              <div class="col-lg-3 col-md-4 col-sm-6">
                  <div class="team-member-two wow fadeInUp delay-0-2s">
                      <div class="image">
                          <img src="{{asset('assets/images/about/1571329673.png')}}" alt="Team Member">
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6">
                  <div class="team-member-two wow fadeInUp delay-0-2s">
                      <div class="image">
                          <img src="{{asset('assets/images/about/1569935105.png')}}" alt="Team Member">

                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6">
                  <div class="team-member-two wow fadeInUp delay-0-2s">
                      <div class="image">
                          <img src="{{asset('assets/images/about/1571329895.png')}}" alt="Team Member">

                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6">
                  <div class="team-member-two wow fadeInUp delay-0-2s">
                      <div class="image">
                          <img src="{{asset('assets/images/about/1571330169.png')}}" alt="Team Member">

                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6">
                  <div class="team-member-two wow fadeInUp delay-0-2s">
                      <div class="image">
                          <img src="{{asset('assets/images/about/1576686406.jpg')}}" alt="Team Member">

                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6">
                  <div class="team-member-two wow fadeInUp delay-0-2s">
                      <div class="image">
                          <img src="{{asset('assets/images/about/1628422788.png')}}" alt="Team Member">

                      </div>
                  </div>
              </div>
              
          </div>
      </div>
  </section>
  <!-- Team Section End -->


<!-- Global Partner -->
@include('user.partials.partners')

@push('scripts')
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script>

      $('.timeline-slider').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      dots: true,
      infinite: true,
      responsive: [
      {
      breakpoint: 1024,
      settings: {
      slidesToShow: 2,
      slidesToScroll: 2,
      infinite: true,
      dots: true
      }
      },
      {
      breakpoint: 600,
      settings: {
      slidesToShow: 2,
      slidesToScroll: 2
      }
      },
      {
      breakpoint: 480,
      settings: {
      slidesToShow: 1,
      slidesToScroll: 1
      }
      }
      ]
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a se



      });



  </script>
@endpush
@endsection

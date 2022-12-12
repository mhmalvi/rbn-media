@extends('user.layout.app')
@section('content')
  @include('user.partials.banner')
  <!--  destination list start -->
  <section class="destination text-justify py-80 rpt-90  rpb-45">
      <div class="container">
        <div class="section-title text-center mb-55">
            <h2>Determine Your Future Hub</h2>
        </div>
          <ul class="destination-list">
          <li>
                  <a href="#">
                  <div class="flip-box  mx-auto">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                        <img src="{{asset('assets/images/destination/can/topcities/toronto.png')}}"  class="" alt="" style="width: 50%; align-items: center">
                        </div>
                        <div class="flip-box-back">
                        <h4>ONTARIO</h4>
                        </div>
                    </div>
                    </div>
                  </a>
                  <div class="flipboxback-mob">
                        <h5>ONTARIO</h5>
                    </div>
              </li>
              <li>
                  <a href="#">
                  <div class="flip-box  mx-auto">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                        <img src="{{asset('assets/images/destination/can/topcities/qebec.png')}}"  class="" alt="" style="width: 50%; align-items: center">
                        </div>
                        <div class="flip-box-back">
                        <h4>NOVA SCOTIA</h4>
                        </div>
                    </div>
                    </div>
                  </a>
                  <div class="flipboxback-mob">
                        <h5>NOVA SCOTIA</h5>
                    </div>
              </li>
              <li>
                  <a href="#">
                  <div class="flip-box  mx-auto">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                        <img src="{{asset('assets/images/destination/can/topcities/vancouver.png')}}"  class="" alt="" style="width: 50%; align-items: center">
                        </div>
                        <div class="flip-box-back">
                        <h4>NEWFOUNDLAND & LABRADOR</h4>
                        </div>
                    </div>
                    </div>
                  </a>
                  <div class="flipboxback-mob">
                        <h5>NEWFOUNDLAND & LABRADOR</h5>
                    </div>
              </li>
              <li>
                  <a href="#">
                  <div class="flip-box  mx-auto">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                        <img src="{{asset('assets/images/destination/can/topcities/manitoba.png')}}"  class="" alt="" style="width: 50%; align-items: center">
                        </div>
                        <div class="flip-box-back">
                        <h4>MANITOBA</h4>
                        </div>
                    </div>
                    </div>
                  </a>
                  <div class="flipboxback-mob">
                        <h5>MANITOBA</h5>
                    </div>
              </li>
              <li>
                  <a href="#">
                  <div class="flip-box  mx-auto">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                        <img src="{{asset('assets/images/destination/can/topcities/britcol.png')}}"  class="" alt="" style="width: 50%; align-items: center">
                        </div>
                        <div class="flip-box-back">
                        <h4>NEW BRUNSWICK</h4>
                        </div>
                    </div>
                    </div>
                  </a>
                  <div class="flipboxback-mob">
                        <h5>NEW BRUNSWICK</h5>
                    </div>
              </li>
              {{--<li>
                  <a href="#">
                      <div class="card">
                          <figure class="figure mx-auto">
                              <img src="{{asset('assets/images/destination/can/topcities/toronto.png')}}" class="img-fluid" alt="ONTARIO ">
                          </figure>
                          <div class="card-body">
                              <h5>ONTARIO</h5>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="card">
                          <figure class="figure  mx-auto">
                              <img src="{{asset('assets/images/destination/can/topcities/qebec.png')}}" class="img-fluid" alt="NOVA SCOTIA ">
                          </figure>
                          <div class="card-body">
                              <h5>NOVA SCOTIA</h5>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="card">
                          <figure class="figure  mx-auto">
                              <img src="{{asset('assets/images/destination/can/topcities/vancouver.png')}}" class="img-fluid" alt="NEWFOUNDLAND & LABRADOR">
                          </figure>
                          <div class="card-body">
                              <h5>NEWFOUNDLAND & LABRADOR</h5>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="card">
                          <figure class="figure  mx-auto">
                              <img src="{{asset('assets/images/destination/can/topcities/manitoba.png')}}" class="img-fluid" alt="MANITOBA">
                          </figure>
                          <div class="card-body">
                              <h5>MANITOBA</h5>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="card">
                          <figure class="figure  mx-auto">
                              <img src="{{asset('assets/images/destination/can/topcities/britcol.png')}}" class="img-fluid" alt="NEW BRUNSWICK">
                          </figure>
                          <div class="card-body">
                              <h5>NEW BRUNSWICK</h5>
                          </div>
                      </div>
                  </a>
              </li>--}}


          </ul>
      </div>
  </section>
  <!--  destination list end -->
  
  <!-- about first section start -->
    <section class="about-us text-justify py-50 rpt-90  rpb-45">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-md-2  m-auto">
                    <div class="video-box">
                        <figure class="figure circle-styled">
                            <img class="img-fluid" src="{{asset('assets/images/destination/aus/1578484469.jpg')}}" alt="Image">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 pl-lg-5 text-white">
                    <h3 class="text-white"> Why choose Canada? </h3>
                    <ol>
                      <li>Canada is one of the most welcoming countries when it comes to international students.</li>
                      <li>The country is ranked as one of the best countries in the world to study abroad.</li>
                      <li>The education system in Canada is very robust and provides students with the best possible education.</li>
                      <li>International students acquire precious work experience in Canada in a variety of ways.</li>
                      <li>Canada has excellent infrastructure and offers a wide range of PR opportunities for global students. Furthermore, Canada Student Immigration Program (CSIP) allows graduate international academic pupils and their spouses to study in Canada on open work permits.</li>
                    </ol>
                  </div>
            </div>
        </div>
        <!-- Video modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog')}}" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg')}}" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" id="video_first" src="" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Video modal -->
    </section>
  <!-- about first section end -->

  <!-- about us second section start -->
      <section class="text-justify py-50 rpt-90  rpb-45">

          <div class="container">
              <div class="row">
                  <div class="col-lg-6 pr-lg-5">
                      <h3 class="divider-1">Expand Your Enrollment Possibilities in a Canadian University </h3>
                      <p>
                      </p>
                      <p>As a professional student visa agency, we can help you to 
                        expand your enrollment possibilities in a Canadian university by providing access to international students.</p>
                      <p>The process of applying for a student visa in Canada is comparatively complicated and time-consuming. Nevertheless, 
                        our experienced consultants and immigration lawyers are able to walk you through the steps and help you to understand 
                        all of your options.</p>
                      <p>Once you are approved, our representative will take care of everything else from submitting the necessary paperwork 
                        to ensuring that you are registered for classes and meeting any other appropriate requirements for Canadian universities.</p>
                      <p>It may seem like an arduous task, but using a professional student visa agency makes the process much easier and more manageable. 
                          Since we know exactly what needs to happen. Accordingly, you can focus on the required actions.</p>

                  </div>
                  <div class="col-lg-6">
                      <div class="video-box">
                          <figure class="figure1 mb-0">
                            <img class="img-fluid" src="{{asset('assets/images/destination/aus/1571659027.jpg')}}" alt="Image">
                              <button class="btn btn-link play-btn-sec absolute-center" data-toggle="modal" data-target="#myModalSec" data-src="https://www.youtube.com/embed/8VFx25hIB70">
                                  <svg class="svg-inline--fa fa-play-circle fa-w-16" aria-hidden="true" data-prefix="far" data-icon="play-circle" role="img')}}" xmlns="http://www.w3.org/2000/svg')}}" viewBox="0 0 512 512" data-fa-i2svg="">
                                      <path fill="currentColor" d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z"></path>
                                  </svg><!-- <i class="far fa-play-circle"></i> -->
                              </button>

                          </figure>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Video modal -->
          <div class="modal fade" id="myModalSec" tabindex="-1" role="dialog')}}" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg')}}" role="document">
                  <div class="modal-content">
                      <div class="modal-body">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                          </button>
                          <div class="embed-responsive embed-responsive-16by9">
                              <iframe class="embed-responsive-item" id="video_sec" src="" allowfullscreen=""></iframe>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- /Video modal -->
      </section>
  <!-- about us second section end -->

    <!-- demandable Subjects section start -->
    <section class="text-center bg-white py-50 rpt-90  rpb-45">
        <div class="container">
            <div class="section-title text-center mb-55">
                <h2>Demandable Subjects in Canada</h2>
            </div>
            <div class="allsubject-container">
            <ul class="">
                <li>
                    <div class="subject-container">
                        <div class="subject-circle py-20"><span>1</span></div>
                        <div class="subject-line">Information Technology</div>
                    </div>
                </li>
                <li>
                    <div class="subject-container" style="position: relative; right:30px;">
                        <div class="subject-circle py-20"><span>2</span></div>
                        <div class="subject-line">Engineering</div>
                    </div>
                </li>
                <li>
                    <div class="subject-container">
                        <div class="subject-circle py-20"><span>3</span></div>
                        <div class="subject-line">Business Management</div>
                    </div>
                </li>
                <li>
                    <div class="subject-container" style="position: relative; right:30px;">
                        <div class="subject-circle py-20"><span>4</span></div>
                        <div class="subject-line">Project Management</div>
                    </div>
                </li>
                <li>
                    <div class="subject-container" >
                        <div class="subject-circle py-20"><span>5</span></div>
                        <div class="subject-line">Psychology</div>
                    </div>
                </li>
            </ul>
            <ul class="">
            <li>
                    <div class="subject-container">
                        <div class="subject-circle py-20"><span>6</span></div>
                        <div class="subject-line">Health and Medicine</div>
                    </div>
                </li>
                <li>
                    <div class="subject-container" style="position: relative; right:30px;">
                        <div class="subject-circle py-20"><span>7</span></div>
                        <div class="subject-line">Economics</div>
                    </div>
                </li>
                <li>
                    <div class="subject-container">
                        <div class="subject-circle py-20"><span>8</span></div>
                        <div class="subject-line">Media and Journalism</div>
                    </div>
                </li>
                <li>
                    <div class="subject-container" style="position: relative; right:30px;">
                        <div class="subject-circle py-20"><span>9</span></div>
                        <div class="subject-line">Health and Medicine</div>
                    </div>
                </li>
                <li>
                    <div class="subject-container">
                        <div class="subject-circle py-20"><span>10</span></div>
                        <div class="subject-line">Agriculture and Forestry</div>
                    </div>
                </li>
            </ul>
            </div>
        </div>
    </section>

  <!-- demandable Subjects section end -->

  <!-- partner universities section start -->
  <section class="text-center bg-white py-50 rpt-90  rpb-45">

      <div class="container">
          <div class="section-title text-center mb-55">
              <h2>Our Partners</h2>
          </div>

          <ul class="list-unstyled partner-universities">

              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="https://images.studee.com/images/university/university__coast-mountain-college--logo.svg" class="img-fluid" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> Coast Mountain College</h5>
                          <p>British Columbia</p>
                          <p>
                              <span class="badge badge-secondary font-weight-normal custom-scholarship mr-2">Scholarship</span>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="https://ospreyeducation.ca/wp-content/uploads/2020/11/d2aaa251580f5bffdad3e9ad96557171-5bce15e699419-hero.jpg" class="img-fluid" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> Nipissing University</h5>
                          <p>Wales</p>
                          <p>
                              <span class="badge badge-secondary font-weight-normal custom-scholarship mr-2">Ontario</span>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      {{--<img src="{{asset('assets/images/destination/aus/partners/1572875214.jpg')}}" class="img-fluid" alt="">--}}
                      <img src="https://gamaeducation.com/wp-content/uploads/2018/11/Lakeland-College-Logo.png" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> Lakeland College</h5>
                          <p>Alberta</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      {{--<img src="{{asset('assets/images/destination/aus/partners/1572699086.png')}}" class="img-fluid" alt="">--}}
                      <img src="https://images.studee.com/images/university/university__coast-mountain-college--logo.svg" class="img-fluid" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> Coast Mountain College</h5>
                          <p>British Columbia</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      {{--<img src="{{asset('assets/images/destination/aus/partners/1572699473.jpg')}}" class="img-fluid" alt="">--}}
                      <img src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Etoncollegearms.svg" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> Eton College</h5>
                          <p>British Columbia</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      {{--<img src="{{asset('assets/images/destination/aus/partners/1572699609.jpg')}}" class="img-fluid" alt="">--}}
                      <img src="https://crampete.s3.ap-south-1.amazonaws.com/uploads/kanan/2020/7/1593845252091_GREAT-PLAINS-COLLEGE.jpg" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1">Great Plains College</h5>
                          <p>Saskatchewan</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      {{--<img src="{{asset('assets/images/destination/aus/partners/1569490283.jpg')}}" class="img-fluid" alt="">--}}
                      <img src="https://www.internationalexperience.ca/wp-content/uploads/2020/06/Mentora.png" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> Mentora College of Business and Technology</h5>
                          <p>Toronto</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      {{--<img src="{{asset('assets/images/destination/aus/partners/1572699938.png')}}" class="img-fluid" alt="">--}}
                      <img src="https://s3.ap-south-1.amazonaws.com/leverageedu/school-logo/logo_1613054997761.png" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1">Multihexa College</h5>
                          <p>Quebec</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      {{--<img src="{{asset('assets/images/destination/aus/partners/1572700160.png')}}" class="img-fluid" alt="">--}}
                      <img src="https://www.parkland.edu/portals/3/Global/Media/Logos/PC-logo%20green-vertical.jpg" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1">Parkland College</h5>
                          <p>Saskatchewan</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      {{--<img src="{{asset('assets/images/destination/aus/partners/1572870037.jpg')}}" class="img-fluid" alt="">--}}
                      <img src="https://www.jeduka.com/storage/school_image/2/q-college.png" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> Q College</h5>
                          <p>British Columbia</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      {{--<img src="{{asset('assets/images/destination/aus/partners/1575369232.png')}}" class="img-fluid" alt="">--}}
                      <img src="https://www.eduopinions.com/wp-content/uploads/2018/07/QuestUniversityCanada-logo-350x306.jpg" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> Quest University</h5>
                          <p>British Columbia</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      {{--<img src="{{asset('assets/images/destination/aus/partners/1572873162.png')}}" class="img-fluid" alt="">--}}
                      <img src="https://www.nelsonstar.com/wp-content/uploads/2018/01/10411702_web1_copy_Selkirk-logo-vertical_RGB-640x640.jpg" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> Selkirk College</h5>
                          <p>British Columbia</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      {{--<img src="{{asset('assets/images/destination/aus/partners/1572700272.png')}}" class="img-fluid" alt="">--}}
                      <img src="https://theglobalexposure.com/wp-content/uploads/2019/02/Study-In-St.-Thomas-University-Canada-1.jpg" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> St. Thomas University</h5>
                          <p>New Brunswick</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      {{--<img src="{{asset('assets/images/destination/aus/partners/1572700753.png')}}" class="img-fluid" alt="">--}}
                      <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/TaylorsCollege_logo.jpg" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1">Taylor Pro College</h5>
                          <p>British Columbia</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
          </ul>
      </div>
  </section>
  <!-- partner universities section end -->

  <!---- group partners universities  start-->
  {{--<section class="text-center bg-white py-50 rpt-90  rpb-45">

      <div class="container">
          <div class="section-title text-center mb-55">
              <h2>INTO</h2>
          </div>

          <ul class="list-unstyled partner-universities">
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572699938.png')}}" class="img-fluid" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> City University of London</h5>
                          <p>London</p>
                          <p>
                          </p>
                      </div>

                  </div>
              </li>


              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572784689.png')}}" class="img-fluid" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> East Anglia University</h5>
                          <p>Norwich</p>
                          <p>
                          </p>
                      </div>

                  </div>
              </li>


              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572785167.png')}}" class="img-fluid" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> Glasgow Caledonian University</h5>
                          <p>Scotland</p>
                          <p>
                          </p>
                      </div>

                  </div>
              </li>


              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572872985.png')}}" class="img-fluid" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> INTO London World Education Centre</h5>
                          <p>London</p>
                          <p>
                          </p>
                      </div>

                  </div>
              </li>


              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572872882.jpg')}}" class="img-fluid" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> INTO Manchester</h5>
                          <p>Manchester</p>
                          <p>
                          </p>
                      </div>

                  </div>
              </li>


              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572873985.png')}}" class="img-fluid" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> Manchester Metropolitan University</h5>
                          <p>Manchester</p>
                          <p>
                          </p>
                      </div>

                  </div>
              </li>


              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572786861.png')}}" class="img-fluid" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> Newcastle University</h5>
                          <p>Newcastle</p>
                          <p>
                          </p>
                      </div>

                  </div>
              </li>


              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572872810.jpg')}}" class="img-fluid" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> Newcastle University London</h5>
                          <p>London</p>
                          <p>
                          </p>
                      </div>

                  </div>
              </li>


              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572786976.png')}}" class="img-fluid" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> Queen's University Belfast</h5>
                          <p>Northern Ireland</p>
                          <p>
                          </p>
                      </div>

                  </div>
              </li>


              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572873115.png')}}" class="img-fluid" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> University of Exeter</h5>
                          <p>Exeter</p>
                          <p>
                          </p>
                      </div>

                  </div>
              </li>


              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572787481.jpg')}}" class="img-fluid" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> University of Stirling</h5>
                          <p>Scotland</p>
                          <p>
                          </p>
                      </div>

                  </div>
              </li>


          </ul>
      </div>
  </section>--}}

  <!---- group partners universities  end-->

@endsection
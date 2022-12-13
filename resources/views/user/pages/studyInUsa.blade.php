@extends('user.layout.app')
@section('content')
  @include('user.partials.banner')
  <!--  destination list start -->
  <section class="destination text-justify py-80 mx-sm-4 rpt-90 rpb-45">
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
                        <img src="{{asset('assets/images/destination/usa/topcities/cali.png')}}"  class="" alt="" style="width: 50%; align-items: center">
                        </div>
                        <div class="flip-box-back">
                        <h4>CALIFORNIA</h4>
                        </div>
                    </div>
                    </div>
                  </a>
                  <div class="flipboxback-mob">
                        <h5>CALIFORNIA</h5>
                    </div>
              </li>
              <li>
                  <a href="#">
                  <div class="flip-box  mx-auto">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                        <img src="{{asset('assets/images/destination/usa/topcities/ny.png')}}"  class="" alt="" style="width: 50%; align-items: center">
                        </div>
                        <div class="flip-box-back">
                        <h4>NEW YORK</h4>
                        </div>
                    </div>
                    </div>
                  </a>
                  <div class="flipboxback-mob">
                        <h5>NEW YORK</h5>
                    </div>
              </li>
              <li>
                  <a href="#">
                  <div class="flip-box  mx-auto">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                        <img src="{{asset('assets/images/destination/usa/topcities/tex.png')}}"  class="" alt="" style="width: 50%; align-items: center">
                        </div>
                        <div class="flip-box-back">
                        <h4>TEXAS</h4>
                        </div>
                    </div>
                    </div>
                  </a>
                  <div class="flipboxback-mob">
                        <h5>TEXAS</h5>
                    </div>
              </li>
              <li>
                  <a href="#">
                  <div class="flip-box  mx-auto">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                        <img src="{{asset('assets/images/destination/usa/topcities/florida.png')}}"  class="" alt="" style="width: 50%; align-items: center">
                        </div>
                        <div class="flip-box-back">
                        <h4>FLORIDA</h4>
                        </div>
                    </div>
                    </div>
                  </a>
                  <div class="flipboxback-mob">
                        <h5>FLORIDA</h5>
                    </div>
              </li>
              <li>
                  <a href="#">
                  <div class="flip-box  mx-auto">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                        <img src="{{asset('assets/images/destination/usa/topcities/was.png')}}"  class="" alt="" style="width: 50%; align-items: center">
                        </div>
                        <div class="flip-box-back">
                        <h4>WASHINGTON</h4>
                        </div>
                    </div>
                    </div>
                  </a>
                  <div class="flipboxback-mob">
                        <h5>WASHINGTON</h5>
                    </div>
              </li>
              {{--<li>
                  <a href="#">
                      <div class="card">
                          <figure class="figure mx-auto">
                              <img src="https://www.iecc.co.uk/public/uploads/destination/topcity/1569240627.png')}}" class="img-fluid" alt="Toronto ">
                              <img src="{{asset('assets/images/destination/usa/topcities/cali.png')}}" class="img-fluid" alt="London ">
                          </figure>
                          <div class="card-body">
                              <h5>California</h5>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="card">
                          <figure class="figure mx-auto">
                              <img src="{{asset('assets/images/destination/usa/topcities/ny.png')}}" class="img-fluid" alt="Manchester ">
                          </figure>
                          <div class="card-body">
                              <h5>New York</h5>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="card">
                          <figure class="figure mx-auto">
                              <img src="{{asset('assets/images/destination/usa/topcities/tex.png')}}" class="img-fluid" alt="Scotland">
                          </figure>
                          <div class="card-body">
                              <h5> Texas</h5>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="card">
                          <figure class="figure mx-auto">
                              <img src="{{asset('assets/images/destination/usa/topcities/florida.png')}}" class="img-fluid" alt="Sheffield">
                          </figure>
                          <div class="card-body">
                              <h5> Florida</h5>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="card">
                          <figure class="figure mx-auto">
                              <img src="{{asset('assets/images/destination/usa/topcities/was.png')}}" class="img-fluid" alt="Wales">
                          </figure>
                          <div class="card-body">
                              <h5> Washington</h5>
                          </div>
                      </div>
                  </a>
              </li>--}}


          </ul>
      </div>
  </section>
  <!--  destination list end -->
  
  <!-- about first section start -->
    <section class="about-us text-justify py-50 rpt-90  rpb-45" style='margin-inline:8%'>



        <div class="container">
            <div class="row">
                <div class="col-sm-12 mx-auto col-lg-6 pt-md-2  m-auto">
                    <div class="video-box" style="padding: 19%;">

                        <figure class="figure circle-styled">
                            <img class="img-fluid" src="{{asset('assets/images/destination/uk/1603015036.jpg')}}" alt="Image">
                        </figure>
                    </div>
                </div>
                <div class="col-11 mx-auto col-lg-6 pl-lg-5" style="margin: 35px 0 0 0;">

                    <h3 class=""> Why choose USA? </h3>
                    <ol>
                        <li>The USA offers world-class universities with top-ranked faculties.</li>
                        <li>American universities are known for their high standard of teaching and research.</li>
                        <li>The quality of education is undoubtedly top-notch.
                        </li>
                        <li>A plethora of work opportunities.</li>
                        <li>Enriched history and blended culture.</li>
                        <li>No language barrier</li>
                        <li>The US education system is flexible and allows international students to complete their degrees in a shorter time frame.</li>
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
                  <div class="col-11  mx-auto col-lg-6 pl-lg-5">
                      <h3 class="divider-1">Mobilize USA Study Plan with RBN Education </h3>
                      <p>The USA is one of the most welcoming countries when it comes to international students. RBN education mobilizes a student file to enroll students in reputed American universities and gets them on track for obtaining the F1 visa. We work with you to create an individualized plan that takes your unique situation into account, and also assist with the enrollment process so that everything goes as smoothly as possible.
                      </p>
                      <p>By working closely with representatives from US universities, we can ensure that our students are getting information about the school and the program that best suits their needs. In addition, by liaising with embassies worldwide, we can help you secure any necessary paperwork.</p>
                      <p>The team at our student consultancy firm is proficient enough in all aspects of international education, and we strive beyond to make sure you have an outstanding experience while studying overseas.</p>
                  </div>
                  <div class="col-sm-12 mx-auto col-lg-6 col-lg-6">
                      <div class="video-box">
                          <figure class="figure1 mb-0">
                            {{-- <img width="75%" src="{{asset('assets/images/destination/uk/1571657683.png')}}" alt="Image"> --}}
                            <img src="{{asset('assets/images/destination/uk/1571657683.png')}}" alt="Image">
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
          <div class="modal fade" id="myModalSec" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
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
            <h2>Demandable Subjects in USA</h2>
        </div>
        <div class="allsubject-container">
        <ul class="">
              <li>
                <div class="subject-container">
                    <div class="subject-circle py-15"><span>1</span></div>
                    <div class="subject-line">Nursing</div>
                </div>
              </li>
              <li>
                <div class="subject-container" style="position: relative; right:30px;">
                    <div class="subject-circle py-15"><span>2</span></div>
                    <div class="subject-line">Pharmaceutical Science</div>
                </div>
              </li>
              <li>
                <div class="subject-container" style="position: relative;">
                    <div class="subject-circle py-15"><span>3</span></div>
                    <div class="subject-line">Health Science</div>
                </div>
              </li>
              <li>
                <div class="subject-container" style="position: relative; right:30px;">
                    <div class="subject-circle py-15"><span>4</span></div>
                    <div class="subject-line">Information Technology</div>
                </div>
              </li>
              <li>
                <div class="subject-container">
                    <div class="subject-circle py-15"><span>5</span></div>
                    <div class="subject-line">Computer Science & Engineering</div>
                </div>
              </li>
        </ul>
        <ul class="">
              <li>
                <div class="subject-container">
                    <div class="subject-circle py-15"><span>6</span></div>
                    <div class="subject-line">Cybersecurity</div>
                </div>
              </li>
              <li>
                <div class="subject-container" style="position: relative; right:30px;">
                    <div class="subject-circle py-15"><span>7</span></div>
                    <div class="subject-line">Architecture</div>
                </div>
              </li>
              <li>
                <div class="subject-container">
                    <div class="subject-circle py-15"><span>8</span></div>
                    <div class="subject-line">Business Analytics</div>
                </div>
              </li>
              <li>
                <div class="subject-container" style="position: relative; right:30px;">
                    <div class="subject-circle py-15"><span>9</span></div>
                    <div class="subject-line">Finance</div>
                </div>
              </li>
              <li>
                <div class="subject-container">
                    <div class="subject-circle py-15"><span>10</span></div>
                    <div class="subject-line">Human Resource Management</div>
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
                      <img src="{{asset('assets/images/uni/usa/usa1.png')}}" class="img-fluid" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> Bay Atlantic University</h5>
                          <p>Washington</p>
                          {{-- <p>
                              <span class="badge badge-secondary font-weight-normal custom-scholarship mr-2">Scholarship</span>
                          </p> --}}
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/uni/usa/usa2.png')}}" class="img-fluid" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> Hawaii Pacific University</h5>
                          <p>Honolulu</p>
                          {{-- <p>
                              <span class="badge badge-secondary font-weight-normal custom-scholarship mr-2">Scholarship</span>
                          </p> --}}
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/uni/usa/usa3.jpg')}}" class="img-fluid" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> University of Charleston</h5>
                          <p>West Virginia</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/uni/usa/usa4.png')}}" class="img-fluid" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1">Herzing University</h5>
                          <p>Wisconsin</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/uni/usa/usa5.png')}}" class="img-fluid" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1">Rosemont College</h5>
                          <p>Pennsylvania</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/uni/usa/usa6.jpg')}}" class="img-fluid" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1">Paul Smiths College</h5>
                          <p>New York</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/uni/usa/usa7.jpg')}}" class="img-fluid" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1">Presentation College</h5>
                          <p>South Dakota</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/uni/usa/usa8.png')}}" class="img-fluid" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1">Hanover College</h5>
                          <p>Indiana</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/uni/usa/usa9.jpg')}}" class="img-fluid" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1">Hartwick College</h5>
                          <p>New York</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/uni/usa/usa10.png')}}" class="img-fluid" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1">Hilbert College</h5>
                          <p>New York</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/uni/usa/usa11.jpg')}}" class="img-fluid" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1">Los Angeles Mission College</h5>
                          <p>California</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/uni/usa/usa12.png')}}" class="img-fluid" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1">Mentora College</h5>
                          <p>Washington, DC</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/uni/usa/usa13.jpg')}}" class="img-fluid" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1">COE College</h5>
                          <p>Cedar Rapids, Lowa</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/uni/usa/usa14.jpg')}}" class="img-fluid" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> Edgewood College</h5>
                          <p>Wisconsin</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/uni/usa/usa15.png')}}" class="img-fluid" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1">Glasgow Caledonian New York College</h5>
                          <p>New York</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/uni/usa/usa16.jpg')}}" class="img-fluid" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1">Nichols College</h5>
                          <p>Massachusetts</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              {{--<li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/uk/partners/1572785167.png')}}" class="img-fluid" alt="">
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
                      <img src="{{asset('assets/images/destination/uk/partners/1569487896.png')}}" class="img-fluid" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> University of Westminster</h5>
                          <p>London</p>
                          <p>
                              <span class="badge badge-secondary font-weight-normal custom-scholarship mr-2">Scholarship</span>
                          </p>
                      </div>
                  </div>
              </li>--}}


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
                      <img src="{{asset('assets/images/destination/uk/partners/1572699938.png')}}" class="img-fluid" alt="">
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
                      <img src="{{asset('assets/images/destination/uk/partners/1572784689.png')}}" class="img-fluid" alt="">
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
                      <img src="{{asset('assets/images/destination/uk/partners/1572785167.png')}}" class="img-fluid" alt="">
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
                      <img src="{{asset('assets/images/destination/uk/partners/1572872985.png')}}" class="img-fluid" alt="">
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
                      <img src="{{asset('assets/images/destination/uk/partners/1572872882.jpg')}}" class="img-fluid" alt="">
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
                      <img src="{{asset('assets/images/destination/uk/partners/1572873985.png')}}" class="img-fluid" alt="">
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
                      <img src="{{asset('assets/images/destination/uk/partners/1572786861.png')}}" class="img-fluid" alt="">
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
                      <img src="{{asset('assets/images/destination/uk/partners/1572872810.jpg')}}" class="img-fluid" alt="">
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
                      <img src="{{asset('assets/images/destination/uk/partners/1572786976.png')}}" class="img-fluid" alt="">
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
                      <img src="{{asset('assets/images/destination/uk/partners/1572873115.png')}}" class="img-fluid" alt="">
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
                      <img src="{{asset('assets/images/destination/uk/partners/1572787481.jpg')}}" class="img-fluid" alt="">
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
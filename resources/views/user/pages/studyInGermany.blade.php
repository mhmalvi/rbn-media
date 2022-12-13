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
                        <img src="{{asset('assets/images/flag/ger.png')}}"  class="" alt="" style="width: 50%; align-items: center">
                        </div>
                        <div class="flip-box-back">
                        <h4>GERMANY</h4>
                        </div>
                    </div>
                    </div>
                  </a>
                  <div class="flipboxback-mob">
                        <h5>GERMANY</h5>
                    </div>
              </li>
              <li>
                  <a href="#">
                  <div class="flip-box  mx-auto">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                        <img src="{{asset('assets/images/flag/sweden.png')}}"  class="" alt="" style="width: 50%; align-items: center">
                        </div>
                        <div class="flip-box-back">
                        <h4>SWEDEN</h4>
                        </div>
                    </div>
                    </div>
                  </a>
                  <div class="flipboxback-mob">
                        <h5>SWEDEN</h5>
                    </div>
              </li>
              <li>
                  <a href="#">
                  <div class="flip-box  mx-auto">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                        <img src="{{asset('assets/images/flag/denmark.png')}}"  class="" alt="" style="width: 50%; align-items: center">
                        </div>
                        <div class="flip-box-back">
                        <h4>DENMARK</h4>
                        </div>
                    </div>
                    </div>
                  </a>
                  <div class="flipboxback-mob">
                        <h5>DENMARK</h5>
                    </div>
              </li>
              <li>
                  <a href="#">
                  <div class="flip-box  mx-auto">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                        <img src="{{asset('assets/images/flag/hungary.png')}}"  class="" alt="" style="width: 50%; align-items: center">
                        </div>
                        <div class="flip-box-back">
                        <h4>HUNGARY</h4>
                        </div>
                    </div>
                    </div>
                  </a>
                  <div class="flipboxback-mob">
                        <h5>HUNGARY</h5>
                    </div>
              </li>
              <li>
                  <a href="#">
                  <div class="flip-box  mx-auto">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                        <img src="{{asset('assets/images/flag/italy.png')}}"  class="" alt="" style="width: 50%; align-items: center">
                        </div>
                        <div class="flip-box-back">
                        <h4>ITALY</h4>
                        </div>
                    </div>
                    </div>
                  </a>
                  <div class="flipboxback-mob">
                        <h5>ITALY</h5>
                    </div>
              </li>
              {{--<li>
                  <a href="#">
                      <div class="card">
                          <figure class="figure mx-auto">
                              <img src="https://www.iecc.co.uk/public/uploads/destination/topcity/1569240627.png')}}" class="img-fluid" alt="Toronto ">
                              <img src="{{asset('assets/images/flag/ger.png')}}" class="img-fluid" alt="London ">
                          </figure>
                          <div class="card-body">
                              <h5>Germany</h5>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="card">
                          <figure class="figure mx-auto">
                              <img src="{{asset('assets/images/flag/sweden.png')}}" class="img-fluid" alt="Manchester ">
                          </figure>
                          <div class="card-body">
                              <h5>Sweden</h5>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="card">
                          <figure class="figure mx-auto">
                              <img src="{{asset('assets/images/flag/denmark.png')}}" class="img-fluid" alt="Scotland">
                          </figure>
                          <div class="card-body">
                              <h5> Denmark</h5>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="card">
                          <figure class="figure mx-auto">
                              <img src="{{asset('assets/images/flag/hungary.png')}}" class="img-fluid" alt="Sheffield">
                          </figure>
                          <div class="card-body">
                              <h5> Hungary</h5>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="card">
                          <figure class="figure mx-auto">
                              <img src="{{asset('assets/images/flag/italy.png')}}" class="img-fluid" alt="Wales">
                          </figure>
                          <div class="card-body">
                              <h5> Italy</h5>
                          </div>
                      </div>
                  </a>
              </li>--}}


          </ul>
      </div>
  </section>
  <!--  destination list end -->
  
  <!-- about first section start -->
    <section class="about-us text-justify py-50 rpt-90  rpb-45" style="margin-inline:8%;">

        <div class="container">
            <div class="row">
                <div class="col-sm-12 mx-auto col-lg-6 pt-md-2  m-auto">
                    <div class="video-box" style="padding:19%;">
                        <figure class="figure circle-styled">
                            <img class="img-fluid" src="{{asset('assets/images/destination/uk/1603015036.jpg')}}" alt="Image">
                        </figure>
                    </div>
                </div>
                <div class="col-11 mx-auto col-lg-6 pl-lg-5 " style="margin: 35px 0 0 0;">

                    <h3 class=""> Why Europe? </h3>
                    <ol>
                        <li>Many European universities are among the world's top 50 universities. The quality of education is splendid and the cost of studying is very reasonable.</li>
                        <li>European universities offer world-class teaching and research facilities. They also have strong connections with the industry, which makes them well-equipped to meet the needs of working professionals.</li>
                        <li>Europe is the learning hub where education is highly valued and respected.
                        </li>
                        <li>The continent boasts a rich history and culture that you will love.</li>
                        <li>The weather is usually temperate and does not get too cold in winter or too hot in summer.</li>
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
      <section class="py-50 rpt-90  rpb-45">

          <div class="container">
              <div class="row">
                  <div class="col-11  mx-auto col-lg-6 pl-lg-5">
                      <h3 class="divider-1">How Do We Organize a Student Profile for a European University?</h3>
                      <p>A student profile is an essential part of the admissions process at a European university. It can help to identify students' strengths and weaknesses, as well as highlight any areas of focus that they may want to pursue in university. In order for your profile to be effective, it needs to be comprehensive and tailored specifically for each school to that you are applying.
                      </p>
                      <p>So, here we are to help. We target specific schools based on your interests and skillsets. Start making a student CV in European format, we arrange all the paperwork. Furthermore, provide guidance on compiling academically strong files (transcripts, letters of recommendation, etc.), writing persuasive essays, conducting interviews, and more.</p>
                      <p>Due to our direct affiliation with some universities in Poland, Hungary, Lithuania, and Denmark, the visa-getting possibility of European student files is expedited. We provide all the relevant auxiliary aids in this case. Besides, students can open their files with us in the package system as well.</p>
                      <p>By working together with RBN Education, you will ensure that your application reaches its full potential and gives you the best chance of being accepted into one or more universities in Europe!</p>
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
            <h2>Demandable Subjects in Europe</h2>
        </div>
        <div class="allsubject-container">
        <ul class="">
              <li>
                <div class="subject-container">
                    <div class="subject-circle py-15"><span>1</span></div>
                    <div class="subject-line">Engineering</div>
                </div>
              </li>
              <li>
                <div class="subject-container" style="position: relative; right:30px;">
                    <div class="subject-circle py-15"><span>2</span></div>
                    <div class="subject-line">Law</div>
                </div>
              </li>
              <li>
                <div class="subject-container" style="position: relative;">
                    <div class="subject-circle py-15"><span>3</span></div>
                    <div class="subject-line">Architecture</div>
                </div>
              </li>
              <li>
                <div class="subject-container" style="position: relative; right:30px;">
                    <div class="subject-circle py-15"><span>4</span></div>
                    <div class="subject-line">Mathematics and Physics</div>
                </div>
              </li>
              <li>
                <div class="subject-container">
                    <div class="subject-circle py-15"><span>5</span></div>
                    <div class="subject-line">Medical Science</div>
                </div>
              </li>
        </ul>
        <ul class="">
              <li>
                <div class="subject-container">
                    <div class="subject-circle py-15"><span>6</span></div>
                    <div class="subject-line">Biology</div>
                </div>
              </li>
              <li>
                <div class="subject-container" style="position: relative; right:30px;">
                    <div class="subject-circle py-15"><span>7</span></div>
                    <div class="subject-line">Dentistry</div>
                </div>
              </li>
              <li>
                <div class="subject-container">
                    <div class="subject-circle py-15"><span>8</span></div>
                    <div class="subject-line">Psychology</div>
                </div>
              </li>
              <li>
                <div class="subject-container" style="position: relative; right:30px;">
                    <div class="subject-circle py-15"><span>9</span></div>
                    <div class="subject-line">Social Work</div>
                </div>
              </li>
              <li>
                <div class="subject-container">
                    <div class="subject-circle py-15"><span>10</span></div>
                    <div class="subject-line">Media Studies & Journalism</div>
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
                      <img src="{{asset('assets/images/uni/eu/eu1.png')}}" class="img-fluid" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> CCT College Dublin</h5>
                          <p>Ireland</p>
                          {{-- <p>
                              <span class="badge badge-secondary font-weight-normal custom-scholarship mr-2">Scholarship</span>
                          </p> --}}
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/uni/eu/eu2.png')}}" class="img-fluid" alt="">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1">Caucasus's International University</h5>
                          <p>Georgia</p>
                          {{-- <p>
                              <span class="badge badge-secondary font-weight-normal custom-scholarship mr-2">Scholarship</span>
                          </p> --}}
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
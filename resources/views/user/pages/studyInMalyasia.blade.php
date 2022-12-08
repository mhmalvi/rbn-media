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
                      <div class="card">
                          <figure class="figure mx-auto">
                              {{-- <img src="https://www.iecc.co.uk/public/uploads/destination/topcity/1569240627.png')}}" class="img-fluid" alt="Toronto "> --}}
                              <img src="{{asset('assets/images/destination/malay/topcities/111.png')}}" class="img-fluid" alt="London ">
                          </figure>
                          <div class="card-body">
                              <h5>Kuala Lumpur</h5>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="card">
                          <figure class="figure mx-auto">
                              <img src="{{asset('assets/images/destination/malay/topcities/222.png')}}" class="img-fluid" alt="Manchester ">
                          </figure>
                          <div class="card-body">
                              <h5>Penang</h5>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="card">
                          <figure class="figure mx-auto">
                              <img src="{{asset('assets/images/destination/malay/topcities/333.png')}}" class="img-fluid" alt="Scotland">
                          </figure>
                          <div class="card-body">
                              <h5> Johor Bahru</h5>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="card">
                          <figure class="figure mx-auto">
                              <img src="{{asset('assets/images/destination/malay/topcities/444.png')}}" class="img-fluid" alt="Sheffield">
                          </figure>
                          <div class="card-body">
                              <h5> Selangor</h5>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="card">
                          <figure class="figure mx-auto">
                              <img src="{{asset('assets/images/destination/malay/topcities/555.png')}}" class="img-fluid" alt="Wales">
                          </figure>
                          <div class="card-body">
                              <h5> Malacca</h5>
                          </div>
                      </div>
                  </a>
              </li>


          </ul>
      </div>
  </section>
  <!--  destination list end -->
  
  <!-- about first section start -->
    <section class="about-us text-justify py-50 rpt-90  rpb-45">

        <div class="container">
            <div class="row">
                <div class="col-sm-12 mx-auto col-lg-6 pt-md-2">
                    <div class="video-box">
                        <figure class="figure circle-styled">
                            <img class="img-fluid" src="{{asset('assets/images/destination/uk/1603015036.jpg')}}" alt="Image">
                        </figure>
                    </div>
                </div>
                <div class="col-11 mx-auto col-lg-6 pl-lg-5">
                    <h3 class="brand-color divider-1"> Why choose Malaysia? </h3>
                    <ol>
                        <li>Malaysia has a thriving economy, on the other hand, is a moderate-cost country to live in.</li>
                        <li>The education system in Malaysia specializes in world-class work opportunities.</li>
                        <li>Malaysia has a rich history and culture and is home to diverse ethnic groups.
                        </li>
                        <li>The country offers great support to international students, both academically and socially.</li>
                        <li>What's more, the flouring economy ensures that international students with good job prospects after they graduate.</li>
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
                      <h3 class="brand-color divider-1">Get Admitted to A Malaysian University Through RBN Education </h3>
                      <p>We assist students to enroll in a Malaysian university by providing them with the expertise and resources they need to navigate the gradual process. This may include helping students to identify their goals, develop a strong application package, and locate potential universities that are best suited to their needs.
                      </p>
                      <p>Our team has extensive experience working with international students, which makes them well-equipped to provide support throughout the entire enrollment process. We answer all of your queries regarding the admission process. We make every effort possible to make sure your transition is smooth and quick.</p>
                      <p>Skilled education consultants like us also offer a unique blend of practical advice coupled with personalized support.</p>
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
            <h2>Demandable Subjects in Malaysia</h2>
        </div>
        <div class="allsubject-container">
        <ul class="">
              <li>
                <div class="subject-container">
                    <div class="subject-circle py-15"><span>1</span></div>
                    <div class="subject-line">Computing & Information Technology</div>
                </div>
              </li>
              <li>
                <div class="subject-container" style="position: relative; right:30px;">
                    <div class="subject-circle py-15"><span>2</span></div>
                    <div class="subject-line">Artificial Intelligence System</div>
                </div>
              </li>
              <li>
                <div class="subject-container" style="position: relative;">
                    <div class="subject-circle py-15"><span>3</span></div>
                    <div class="subject-line">Accounting</div>
                </div>
              </li>
              <li>
                <div class="subject-container" style="position: relative; right:30px;">
                    <div class="subject-circle py-15"><span>4</span></div>
                    <div class="subject-line">Finance</div>
                </div>
              </li>
              <li>
                <div class="subject-container">
                    <div class="subject-circle py-15"><span>5</span></div>
                    <div class="subject-line">Marketing</div>
                </div>
              </li>
        </ul>
        <ul class="">
              <li>
                <div class="subject-container">
                    <div class="subject-circle py-15"><span>6</span></div>
                    <div class="subject-line">Engineering</div>
                </div>
              </li>
              <li>
                <div class="subject-container" style="position: relative; right:30px;">
                    <div class="subject-circle py-15"><span>7</span></div>
                    <div class="subject-line">Business & Management</div>
                </div>
              </li>
              <li>
                <div class="subject-container">
                    <div class="subject-circle py-15"><span>8</span></div>
                    <div class="subject-line">Environmental Science</div>
                </div>
              </li>
              <li>
                <div class="subject-container" style="position: relative; right:30px;">
                    <div class="subject-circle py-15"><span>9</span></div>
                    <div class="subject-line">Hospitality, Tourism & Culinary Arts</div>
                </div>
              </li>
              <li>
                <div class="subject-container">
                    <div class="subject-circle py-15"><span>10</span></div>
                    <div class="subject-line">Communication</div>
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
                      <img src="{{asset('assets/images/destination/uk/partners/1572698665.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> Mahsa University</h5>
                          <p>Petaling Jaya</p>
                          <p>
                              <span class="badge badge-secondary font-weight-normal custom-scholarship mr-2">Scholarship</span>
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
                      <img src="{{asset('assets/images/destination/uk/partners/1572699938.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
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
                      <img src="{{asset('assets/images/destination/uk/partners/1572784689.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
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
                      <img src="{{asset('assets/images/destination/uk/partners/1572785167.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
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
                      <img src="{{asset('assets/images/destination/uk/partners/1572872985.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
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
                      <img src="{{asset('assets/images/destination/uk/partners/1572872882.jpg')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
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
                      <img src="{{asset('assets/images/destination/uk/partners/1572873985.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
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
                      <img src="{{asset('assets/images/destination/uk/partners/1572786861.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
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
                      <img src="{{asset('assets/images/destination/uk/partners/1572872810.jpg')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
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
                      <img src="{{asset('assets/images/destination/uk/partners/1572786976.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
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
                      <img src="{{asset('assets/images/destination/uk/partners/1572873115.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
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
                      <img src="{{asset('assets/images/destination/uk/partners/1572787481.jpg')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
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
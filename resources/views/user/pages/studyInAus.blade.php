@extends('user.layout.app')
{{-- @include('style.css') --}}
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
                      <div class="card">
                          <figure class="figure">
                              <img src="{{asset('assets/images/destination/aus/topcities/1569254151.png')}}" class="img-fluid" alt="London ">
                          </figure>
                          <div class="card-body">
                              <h5>MELBOURNE</h5>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="card">
                          <figure class="figure">
                              <img src="{{asset('assets/images/destination/aus/topcities/1573052543.png')}}" class="img-fluid" alt="Manchester ">
                          </figure>
                          <div class="card-body">
                              <h5>BRISBANE</h5>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="card">
                          <figure class="figure">
                              <img src="{{asset('assets/images/destination/aus/topcities/1573052585.png')}}" class="img-fluid" alt="Scotland">
                          </figure>
                          <div class="card-body">
                              <h5>ADELAIDE</h5>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="card">
                          <figure class="figure">
                              <img src="{{asset('assets/images/destination/aus/topcities/1569254535.png')}}" class="img-fluid" alt="Sheffield">
                          </figure>
                          <div class="card-body">
                              <h5>PERTH</h5>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="card">
                          <figure class="figure">
                              <img src="{{asset('assets/images/destination/aus/topcities/1569254579.png')}}" class="img-fluid" alt="Wales">
                          </figure>
                          <div class="card-body">
                              <h5>SYDNEY</h5>
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
                <div class="col-lg-6 pt-md-2">
                    <div class="video-box">
                        <figure class="figure circle-styled">
                            <img class="img-fluid" src="{{asset('assets/images/destination/aus/1578484469.jpg')}}" alt="Image">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 pl-lg-5">
                    <h3 class="brand-color divider-1"> Why to choose Australia? </h3>
                    <p>Find out why Australia has become one of the most popular destinations for international students</p>
                    <ol>
                      <li>Australia ranks high in the World Economic Forum's Global Competitiveness Index. The developed economy with high living standards makes it a great place to live and study.</li>
                      <li>Offers world-class research facilities and an excellent education system.</li>
                      <li>The country is linguistically diverse, making it an enriching experience for students from different backgrounds.</li>
                      <li>The weather is great all year round, and the cost of living is relatively low.</li>
                      <li>The country is multicultural and cosmopolitan, which means that you will get to experience a lot of different cultures while you are here.</li>
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
                      <h3 class="brand-color divider-1">Study in the Australia with RBN </h3>
                      <p>
                      </p>
                      <p>Guide for application and visa requirements with RBN Thousands of students plan to study in the Australia&nbsp;every year but many of them find it difficult while applying for the Australia universities. RBN helps international students to live their dream to study in Australia since 2005. We handle the whole process on your behalf starting with university selection, application paperwork, visa guidance, and accommodation arrangements.</p>
                      <p>Our expert team is aware of your time and interest so we start the process immediately after receiving your document and submit your application within 2 working days. We have a dedicated team to support you in visa processing and ensure your admission journey to be successful.</p>
                      <p></p>

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
                <h2>Demandable Subjects in Australia</h2>
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
                        <div class="subject-line">Computer Science and Engineering</div>
                    </div>
                </li>
                <li>
                    <div class="subject-container" style="position: relative;">
                        <div class="subject-circle py-20"><span>3</span></div>
                        <div class="subject-line">Commercial Cookery</div>
                    </div>
                </li>
                <li>
                    <div class="subject-container" style="position: relative; right:30px;">
                        <div class="subject-circle py-20"><span>4</span></div>
                        <div class="subject-line">Tourism and Hospitality Management</div>
                    </div>
                </li>
                <li>
                    <div class="subject-container">
                        <div class="subject-circle py-20"><span>5</span></div>
                        <div class="subject-line">Accounting</div>
                    </div>
                </li>
            </ul>
            <ul class="">
                <li>
                    <div class="subject-container">
                        <div class="subject-circle py-20"><span>6</span></div>
                        <div class="subject-line">Business Management & Marketing</div>
                    </div>
                </li>
                <li>
                    <div class="subject-container" style="position: relative; right:30px;">
                        <div class="subject-circle py-20"><span>7</span></div>
                        <div class="subject-line">Nursing</div>
                    </div>
                </li>
                <li>
                    <div class="subject-container">
                        <div class="subject-circle py-20"><span>8</span></div>
                        <div class="subject-line">Biomedical Engineering</div>
                    </div>
                </li>
                <li>
                    <div class="subject-container"  style="position: relative; right:30px;">
                        <div class="subject-circle py-20"><span>9</span></div>
                        <div class="subject-line">Automobile Engineering</div>
                    </div>
                </li>
                <li>
                    <div class="subject-container">
                        <div class="subject-circle py-20"><span>10</span></div>
                        <div class="subject-line">Psychology</div>
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
                      <img src="{{asset('assets/images/destination/aus/partners/1571659027.jpg')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> Aston University</h5>
                          <p>Birmingham</p>
                          <p>
                              <span class="badge badge-secondary font-weight-normal custom-scholarship mr-2">Scholarship</span>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1569490629.jpg')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> Bangor University</h5>
                          <p>Wales</p>
                          <p>
                              <span class="badge badge-secondary font-weight-normal custom-scholarship mr-2">Scholarship</span>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572875214.jpg')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> Bellerbys College</h5>
                          <p>Brighton</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572699086.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> Bournemouth University</h5>
                          <p>Dorset</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572699473.jpg')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> Brunel University</h5>
                          <p>London</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572699609.jpg')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> Buckingham University</h5>
                          <p>Buckingham</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1569490283.jpg')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> Cardiff University</h5>
                          <p>Wales</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572873704.jpg')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> CATS College</h5>
                          <p>Canterbury</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572699938.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
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
                      <img src="{{asset('assets/images/destination/aus/partners/1572700160.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> Coventry University</h5>
                          <p>Coventry</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572870037.jpg')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> Coventry University London</h5>
                          <p>London</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1575369232.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> Cranfield University</h5>
                          <p>Cranfield</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572873162.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> d'Overbroeck's, Oxford</h5>
                          <p>Oxford</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572700272.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> De Montfort University</h5>
                          <p>Leicester</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572700753.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> Durham University</h5>
                          <p>Durham</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572784932.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> East London University</h5>
                          <p>London</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572785167.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
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
                      <img src="{{asset('assets/images/destination/aus/partners/1572785314.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> Heriot-Watt University</h5>
                          <p>Scotland</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572874820.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> Istituto Marangoni (fashion)</h5>
                          <p>London</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572786296.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> Keele University</h5>
                          <p>Keele</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572869887.jpg')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> Leeds Beckett University</h5>
                          <p>Leeds</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572786416.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> Liverpool John Moores University</h5>
                          <p>Liverpool</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572786560.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> Middlesex University</h5>
                          <p>London</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572873269.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> Oxford Tutorial College</h5>
                          <p>Oxford</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572786976.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
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
                      <img src="{{asset('assets/images/destination/aus/partners/1569488170.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> Sheffield Hallam University</h5>
                          <p>Sheffield</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1569490373.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> Swansea University</h5>
                          <p>Wales</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572873342.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> The Courtauld Institute of Art</h5>
                          <p>London</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572869963.jpg')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> The University of Aberdeen</h5>
                          <p>Scotland</p>
                          <p>
                              <span class="badge badge-secondary font-weight-normal custom-scholarship mr-2">Scholarship</span>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1569487716.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> The University of Manchester</h5>
                          <p>Manchester</p>
                          <p>
                              <span class="badge badge-secondary font-weight-normal custom-scholarship mr-2">Scholarship</span>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1652611078.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> University of Birmingham</h5>
                          <p>Birmingham</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572698884.jpg')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> University of Bolton</h5>
                          <p>Bolton</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572875314.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> University of Bradford</h5>
                          <p>Bradford</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572699817.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> University of Central Lancashire</h5>
                          <p>Preston</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1592140732.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> University of Chester</h5>
                          <p>Parkgate</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572868032.jpg')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> University of Dundee</h5>
                          <p>Scotland</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572872980.jpg')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> University of Greenwich</h5>
                          <p>London</p>
                          <p>
                              <span class="badge badge-secondary font-weight-normal custom-scholarship mr-2">Scholarship</span>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572785617.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> University of Hertfordshire</h5>
                          <p>Hertfordshire</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572785732.jpg')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> University of Huddersfield</h5>
                          <p>Huddersfield</p>
                          <p>
                              <span class="badge badge-secondary font-weight-normal custom-scholarship mr-2">Scholarship</span>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572786082.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> University of Hull</h5>
                          <p>Hull</p>
                          <p>
                              <span class="badge badge-secondary font-weight-normal custom-scholarship mr-2">Scholarship</span>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1569488242.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> University of Leeds</h5>
                          <p>Leeds</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572265952.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> University of Portsmouth</h5>
                          <p>Portsmouth</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572787168.jpg')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> University of Salford</h5>
                          <p>Manchester</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572787481.jpg')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> University of Stirling</h5>
                          <p>Scotland</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572875061.jpg')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> University of Strathclyde</h5>
                          <p>Scotland</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572787852.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> University of Sunderland</h5>
                          <p>Sunderland</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572870312.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> University of Surrey</h5>
                          <p>Surrey</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572870252.jpg')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> University of Sussex</h5>
                          <p>Sussex</p>
                          <p>
                          </p>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1569487896.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
                      <div class="media-body">
                          <h5 class="mt-0 mb-1"> University of Westminster</h5>
                          <p>London</p>
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
  <section class="text-center bg-white py-50 rpt-90  rpb-45">

      <div class="container">
          <div class="section-title text-center mb-55">
              <h2>INTO</h2>
          </div>

          <ul class="list-unstyled partner-universities">
              <li>
                  <div class="media box-shadow2 hover-styled">
                      <img src="{{asset('assets/images/destination/aus/partners/1572699938.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
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
                      <img src="{{asset('assets/images/destination/aus/partners/1572784689.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
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
                      <img src="{{asset('assets/images/destination/aus/partners/1572785167.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
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
                      <img src="{{asset('assets/images/destination/aus/partners/1572872985.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
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
                      <img src="{{asset('assets/images/destination/aus/partners/1572872882.jpg')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
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
                      <img src="{{asset('assets/images/destination/aus/partners/1572873985.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
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
                      <img src="{{asset('assets/images/destination/aus/partners/1572786861.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
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
                      <img src="{{asset('assets/images/destination/aus/partners/1572872810.jpg')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
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
                      <img src="{{asset('assets/images/destination/aus/partners/1572786976.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
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
                      <img src="{{asset('assets/images/destination/aus/partners/1572873115.png')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
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
                      <img src="{{asset('assets/images/destination/aus/partners/1572787481.jpg')}}" class="img-fluid" alt="University of Massachusetts, Dartmouth">
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
  </section>

  <!---- group partners universities  end-->

@endsection
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
                <a>
                    <div class="flip-box  mx-auto">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <img src="{{asset('assets/images/destination/aus/topcities/1569254151.png')}}" class="" alt="" style="width: 50%; align-items: center">
                            </div>
                            <div class="flip-box-back">
                                <h4>MELBOURNE</h4>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="flipboxback-mob">
                    <h5>MELBOURNE</h5>
                </div>
            </li>
            <li>
                <a href="#">
                    <div class="flip-box  mx-auto">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <img src="{{asset('assets/images/destination/aus/topcities/1573052543.png')}}" class="" alt="" style="width: 50%; align-items: center">
                            </div>
                            <div class="flip-box-back">
                                <h4>BRISBANE</h4>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="flipboxback-mob">
                    <h5>BRISBANE</h5>
                </div>
            </li>
            <li>
                <a href="#">
                    <div class="flip-box mx-auto">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <img src="{{asset('assets/images/destination/aus/topcities/1573052585.png')}}" class="" alt="" style="width: 50%; align-items: center">
                            </div>
                            <div class="flip-box-back">
                                <h4>ADELAIDE</h4>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="flipboxback-mob">
                    <h5>ADELAIDE</h5>
                </div>
            </li>
            <li>
                <a href="#">
                    <div class="flip-box mx-auto">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <img src="{{asset('assets/images/destination/aus/topcities/1569254535.png')}}" class="" alt="" style="width: 50%; align-items: center">
                            </div>
                            <div class="flip-box-back">
                                <h4>PERTH</h4>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="flipboxback-mob">
                    <h5>PERTH</h5>
                </div>
            </li>
            <li>
                <a href="#">
                    <div class="flip-box mx-auto">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <img src="{{asset('assets/images/destination/aus/topcities/1569254579.png')}}" class="" alt="" style="width: 50%; align-items: center">
                            </div>
                            <div class="flip-box-back">
                                <h4>SYDNEY</h4>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="flipboxback-mob">
                    <h5>SYDNEY</h5>
                </div>
            </li>
          </ul>
      </div>
  </section>
  <!--  destination list end -->
  
  <!-- about first section start -->
    {{--<section class="about-us text-justify py-50 rpt-90  rpb-45">

<!-- about first section start -->
{{-- <section class="about-us text-justify py-50 rpt-90  rpb-45">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-md-2  m-auto">
                <div class="video-box">
                    <figure class="figure circle-styled">
                        <img class="img-fluid" src="{{asset('assets/images/destination/aus/1578484469.jpg')}}" alt="Image">
                    </figure>
                </div>
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
</section> --}}
<!--  destination list end -->

<!-- about first section start -->
<section class="about-us text-justify py-50 rpt-90  rpb-45" style="margin-inline: 8%;">


    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-md-2  m-auto">
                <div class="video-box" style="padding: 19%;">

                    <figure class="figure circle-styled">
                        <img class="img-fluid" src="{{asset('assets/images/destination/aus/1578484469.jpg')}}" alt="Image">
                    </figure>
                </div>
            </div>
            <div class="col-lg-6 pl-lg-5" style="margin: 35px 0 0 0;">

                <h3 class=""> Why to choose Australia? </h3>
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
                <h3 class="divider-1">Study in the Australia with RBN </h3>
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
                    <div class="subject-container" style="position: relative; right:30px;">
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
                    <img src="https://skstudy.com/wp-content/uploads/2020/06/300pixel.png" class="img-fluid" alt="">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">Australian Technical College Western Australia</h5>
                        <p>Perth</p>
                        <p>
                            <span class="badge badge-secondary font-weight-normal custom-scholarship mr-2">Scholarship</span>
                        </p>
                    </div>
                </div>
            </li>
            <li>
                <div class="media box-shadow2 hover-styled">
                    {{--<img src="{{asset('assets/images/destination/aus/partners/1569490629.jpg')}}" class="img-fluid" alt="">--}}
                    <img src="https://ibb.co/cwNRvxx" alt="">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">Illora College</h5>
                        <p>Perth</p>
                        <p>
                            <span class="badge badge-secondary font-weight-normal custom-scholarship mr-2">Scholarship</span>
                        </p>
                    </div>
                </div>
            </li>
            <li>
                <div class="media box-shadow2 hover-styled">
                    <img src="https://topaustralianuniversities.com/logos/original/logo-ozford-college.png" class="img-fluid" alt="">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">Ozford Institute</h5>
                        <p>Melbourne</p>
                        <p>
                        </p>
                    </div>
                </div>
            </li>
            <li>
                <div class="media box-shadow2 hover-styled">
                    <img src="https://upload.wikimedia.org/wikipedia/en/c/c6/Riverdale_CI_Crest.png" class="img-fluid" alt="">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">Riverdale Institute</h5>
                        <p>Melbourne</p>
                        <p>
                        </p>
                    </div>
                </div>
            </li>
            <li>
                <div class="media box-shadow2 hover-styled">
                    <img src="https://sunbeam.edu.au/wp-content/uploads/2019/08/Logo_Trans-1024x662.png" class="img-fluid" alt="">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">Sunbeam International College</h5>
                        <p>Adelaide</p>
                        <p>
                        </p>
                    </div>
                </div>
            </li>
            <li>
                <div class="media box-shadow2 hover-styled">
                    <img src="https://www.uniagents.com/ga-institution/logo/institute_151_logo1531218454.jpg" class="img-fluid" alt="">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">South Sydney College</h5>
                        <p>Burwood</p>
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

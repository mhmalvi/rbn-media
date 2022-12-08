@extends('user.layout.app')
@section('content')
  @include('user.partials.banner')
    <!--  departure list start -->
    <section class="destination text-justify py-80 rpt-90  rpb-45">
      <div class="container">
        <div class="section-title text-center mb-55">
            <h2>Prior Departure Instructions Include</h2>
        </div>
        <div class="row">
          <div class="col-lg-12 mx-auto">
            <ul class="departure-list py-10">
              <li>
                <a>
                <div class="flip-box  mx-auto">
                  <div class="flip-box-inner">
                      <div class="flip-box-front">
                      <h4>1. Checklist Confer</h4>
                      </div>
                      <div class="flip-box-back">
                      <p>In accordance with circumstances as well as weather issues, we prepare a checklist of what a student may need while traveling and residing abroad.</p>
                      </div>
                  </div>
                  </div>
                </a>
              </li>
              <li>
                  <a>
                  <div class="flip-box  mx-auto">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                        <h4>2. Documents Array</h4>
                        </div>
                        <div class="flip-box-back">
                        <h4>It's a bit complex to remember for students to have all of their documents with them before they leave their home country. To avoid unnecessary stress overseas, we assist them in preparing the essential document list.</h4>
                        </div>
                    </div>
                    </div>
                  </a>
              </li>
              <li>
                  <a>
                  <div class="flip-box mx-auto">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                        <h4>3. Health & Safety Measures</h4>
                        </div>
                        <div class="flip-box-back">
                        <h4>We let our pupils be familiar with the health and safety regulations of the country they are going to study.</h4>
                        </div>
                    </div>
                    </div>
                  </a>
              </li>
            </ul>
            <ul class="departure-list py-10">
              <li>
                <a>
                <div class="flip-box  mx-auto">
                  <div class="flip-box-inner">
                      <div class="flip-box-front">
                      <h4>4. Travel Restrictions</h4>
                      </div>
                      <div class="flip-box-back">
                      <p>We make aware of the students of any travel restrictions that their destination country may have. Also, guide on the local currency transportation system, food & drink, entertainment, etc.</p>
                      </div>
                  </div>
                  </div>
                </a>
              </li>
              <li>
                  <a>
                  <div class="flip-box  mx-auto">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                        <h4>5. Airport Immigration</h4>
                        </div>
                        <div class="flip-box-back">
                        <h4>For students who are not well-known about the immigration process, here we are to instruct them about the airport immigration rules. Before flying, we provide them with a range of helpful resources including helpful links or written materials.</h4>
                        </div>
                    </div>
                    </div>
                  </a>
              </li>
              <li>
                  <a>
                  <div class="flip-box mx-auto">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                        <h4>6. On-Arrival Actions</h4>
                        </div>
                        <div class="flip-box-back">
                        <p>We offer students a comprehensive briefing that outlines all the necessary steps they need to take as soon as arriving at the study destination.
                          We also ensure the flexibility of getting in touch with us if students face any issues after arriving.</p>
                        </div>
                    </div>
                    </div>
                  </a>
              </li>
            </ul>
            <ul class="departure-list py-10">
              <li>
                <a>
                <div class="flip-box  mx-auto">
                  <div class="flip-box-inner">
                      <div class="flip-box-front">
                      <h4>1. Checklist Confer</h4>
                      </div>
                      <div class="flip-box-back">
                      <p>In accordance with circumstances as well as weather issues, we prepare a checklist of what a student may need while traveling and residing abroad.</p>
                      </div>
                  </div>
                  </div>
                </a>
              </li>
              <li>
                  <a>
                  <div class="flip-box  mx-auto">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                        <img src="{{asset('assets/images/destination/aus/topcities/1573052543.png')}}"  class="" alt="" style="width: 50%; align-items: center">
                        </div>
                        <div class="flip-box-back">
                        <h4>BRISBANE</h4>
                        </div>
                    </div>
                    </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                  <div class="flip-box mx-auto">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                        <img src="{{asset('assets/images/destination/aus/topcities/1573052585.png')}}"  class="" alt="" style="width: 50%; align-items: center">
                        </div>
                        <div class="flip-box-back">
                        <h4>ADELAIDE</h4>
                        </div>
                    </div>
                    </div>
                  </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
  </section>
  <!--  departure list end -->

@endsection
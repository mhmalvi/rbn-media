@extends('user.layout.app')
@section('content')
  @include('user.partials.banner')
    <!--  departure list start -->
    <section class="destination text-justify py-80 rpt-90  rpb-45">
      <div class="container">
        <div class="section-title text-center mb-55">
            <h2>Prior Departure Instructions Include</h2>
        </div>
        <div class="">
          <div class="mx-auto">
            <ul class="departure-list py-10">
              <li>
                <a>
                <div class="flip-box  mx-auto">
                  <div class="flip-box-inner">
                      <div class="flip-box-front">
                        <div>
                          <img src="assets/images/service/departure/checklist.gif" alt="">
                        </div> 
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
                        <div>
                          <img src="assets/images/service/departure/doc-array.gif" alt="">
                        </div> 
                        <h4>2. Documents Array</h4>
                        </div>
                        <div class="flip-box-back">
                        <p>It's a bit complex to remember for students to have all of their documents with them before they leave their home country. To avoid unnecessary stress overseas, we assist them in preparing the essential document list.</p>
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
                        <div>
                          <img src="assets/images/service/departure/safety.gif" alt="">
                        </div> 
                        <h4>3. Health & Safety Measures</h4>
                        </div>
                        <div class="flip-box-back">
                        <p>We let our pupils be familiar with the health and safety regulations of the country they are going to study.</p>
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
                      <div>
                          <img src="assets/images/service/departure/rules.gif" alt="">
                        </div> 
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
                        <div>
                          <img src="assets/images/service/departure/immigration.gif" alt="">
                        </div> 
                        <h4>5. Airport Immigration</h4>
                        </div>
                        <div class="flip-box-back">
                        <p>For students who are not well-known about the immigration process, here we are to instruct them about the airport immigration rules. Before flying, we provide them with a range of helpful resources including helpful links or written materials.</p>
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
                        <div>
                          <img src="assets/images/service/departure/plane.gif" alt="">
                        </div> 
                        <h4>6. On-Arrival Actions</h4>
                        </div>
                        <div class="flip-box-back">
                        <p>We offer students a comprehensive briefing that outlines all the necessary steps they need to take as soon as arriving at the study destination. </p>
                        <p>This briefing might include information about the university reporting registration procedure, SEVIS reporting, orientation class, university resource utilization, adjusting to new time zones, accommodation documents as well as ways to connect with fellow students for further help. </p>
                        <p>We also ensure the flexibility of getting in touch with us if students face any issues after arriving.</p>
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
                      <div>
                          <img src="assets/images/service/departure/job.gif" alt="">
                        </div> 
                      <h4>7. Part-Time Job</h4>
                      </div>
                      <div class="flip-box-back">
                      <p>While studying abroad, it can be a daunting task to find jobs that are work-related and compatible with your studies. This is where we come in handy as well. We help students search for part-time job opportunities by providing them with the necessary information on how to apply.</p>
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
                        <div>
                          <img src="assets/images/service/departure/post-job.gif" alt="">
                        </div> 
                        <h4>8. Post-Study Work</h4>
                        </div>
                        <div class="flip-box-back">
                          <p>We also offer information about post-study work opportunities. It helps students to find jobs or internships that match their skills, and interests, as well as helps them navigate the process of finding a job after completing their degree.</p>
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
                        <div>
                          <img src="assets/images/service/departure/travel.gif" alt="">
                        </div> 
                        <h4>9. Visa Extension</h4>
                        </div>
                        <div class="flip-box-back">
                          <p>Visa extension is a vital service as many international graduates face difficulty to find work. This situation may force them to leave the country or face trouble utilizing the academic knowledge & practical skill they achieved. We, as consultants will guide you through the process of how to extend a student visa.</p>
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
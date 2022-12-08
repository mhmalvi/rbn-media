  <footer class="main-footer bg-blue">
      <div class="container">
        @include('user.partials.messageFromCEO')
          <div class="clearfix"></div>
          <div class="row justify-content-between text-white pt-75">
              <div class="row">
                  <div class="col-lg-3 col-sm-4">
                      <div class="footer-widget about-widget">
                          <h5 class="footer-title">About Us</h5>
                          <p>
                              We, as a consultancy firm, have been serving our students
                              since 2005 and this is how our students treat us in return.
                              Their good words and references help us growing further.
                          </p>
                          <h5 class="pt-5">Follow Us</h5>
                          <div class="social-style-one">
                              <a href="https://www.facebook.com/rbn.com.bd"><i class="fab fa-facebook-f"></i></a>
                              <a href="https://twitter.com/RobiRaihan2"><i class="fab fa-twitter"></i></a>
                              <a href="https://www.instagram.com/rbn_education/"><i class="fab fa-instagram"></i></a>
                              <a href="https://www.linkedin.com/company/rbn-education/about/"><i class="fab fa-linkedin-in"></i></a>
                              <a href="https://www.youtube.com/@rbneducation7406"><i class="fab fa-youtube"></i></a>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-4">
                      <div class="footer-widget menu-widget">
                        <h5 class="footer-title">About</h5>
                          <ul>
                              <li>
                                  <a href="{{ route('whoWeAre') }}">About Us</a>
                              </li>
                              <li>
                                  <a href="javascript:void(0)">Scholarship</a>
                              </li>
                              <li>
                                  <a href="javascript:void(0)">Event</a>
                              </li>
                              <li>
                                  <a href="javascript:void(0)">Blog</a>
                              </li>
                              <li>
                                  <a href="javascript:void(0)">Contact Us</a>
                              </li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-4">
                      <div class="footer-widget menu-widget">
                          <h5 class="footer-title">Services</h5>
{{--                          <ul>--}}
{{--                              <li>--}}
{{--                                  <a href="javascript:void(0)">Admission Consultation</a>--}}
{{--                              </li>--}}
{{--                              <li>--}}
{{--                                  <a href="javascript:void(0)">phd admission service</a>--}}
{{--                              </li>--}}
{{--                              <li>--}}
{{--                                  <a href="javascript:void(0)">scholarship guidance</a>--}}
{{--                              </li>--}}
{{--                              <li>--}}
{{--                                  <a href="javascript:void(0)">pre-departure briefing</a>--}}
{{--                              </li>--}}
{{--                              <li>--}}
{{--                                  <a href="javascript:void(0)">pastoral care in abroad</a>--}}
{{--                              </li>--}}
{{--                          </ul>--}}
                          <ul>
                              <li>
                                  <a href="{{ route('student-counseling') }}">Student Counseling</a>

                              </li>
                              <li><a href="{{ route('registration-center') }}">IELTS & PTE Registration Center</a></li>
                              <li>
                                  <a href="{{ route('language-scholarship') }}">Language & Scholarship Guidance</a>

                              </li>
                              <li>
                                  <a href="{{ route('admission-assistance') }}">Admission Assistance</a>

                              </li>
                              <li>
                                  <a href="{{ route('visa-assistance') }}">Visa Assistance</a>
                              </li>
                              <li>
                                  <a href="{{ route('departureBriefing') }}">Prior Departure Briefing</a>
                              </li>
                              <li>
                                  <a href="{{ route('postalCare') }}">Pastoral Care</a>

                              </li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-4">
                      <div class="footer-widget menu-widget">
                          <h5 class="footer-title">Destination</h5>
                          <ul>
                              <li><a href="{{ url('study-in-aus') }}">Australia</a></li>
                              <li><a href="{{ url('study-in-canada') }}">Canada</a></li>
                              <li><a href="{{ url('study-in-europe') }}">Europe</a></li>
                              <li><a href="{{ url('study-in-malyasia') }}">Malaysia</a></li>
                              <li><a href="{{ url('study-in-uk') }}">UK</a></li>
                              <li><a href="{{ url('study-in-usa') }}">USA</a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-3">
                      <div class="row">
                          <div class="col-sm-12">
                              <div class="footer-widget contact-info-widget">
                                  <h5 class="footer-title">Get In Touch</h5>
                                  <ul>
                                      <li>
                                          <i class="fas fa-map-marker-alt"></i>69/1 Suvastu Tower,
                                          2nd floor, Panthapath Signal, Dhaka-1205
                                      </li>
                                      <li>
                                          <i class="far fa-envelope"></i>
                                          <a href="mailto:info@rbn.com.bd">info@rbn.com.bd</a>
                                      </li>
                                      <li>
                                          <i class="fas fa-phone"></i>
                                          <a href="callto:+8801312777919">+8801312777919</a>
                                      </li>
                                      <!--  <li>
                            <i class="far fa-clock"></i> Sunday - Friday,<br />
                            08 am - 05 pm
                          </li> -->
                                  </ul>
                              </div>
                              <div class="footer-widget contact-info-widget">
                                  <ul>
                                      <li>
                                          <a href="">Terms of Use</a>
                                      </li>
                                      <li>
                                          <a href="{{ asset('assets/pdf/RBN-Privacy-Policy.pdf') }}"  download>Privacy Policy</a>
                                      </li>
                                      <li>
                                          <a href="{{ asset('assets/pdf/RBN-Code-of-Conduct.pdf') }}" download>Code of Conduct</a>
                                      </li>
                                      <!--  <li>
                            <i class="far fa-clock"></i> Sunday - Friday,<br />
                            08 am - 05 pm
                          </li> -->
                                  </ul>
                              </div>
                          </div>
{{--                          <div class="col-sm-6">--}}
{{--                              <div class="footer-widget video-widget">--}}
{{--                                  <p>Quis autem vel eum iure repre enderit voluptate</p>--}}
{{--                                  <div class="video-widget overlay my-20">--}}
{{--                                      <img src="{{ asset('assets/images/footer/video.jpg') }}" alt="Video" />--}}

{{--                                      <a href="https://www.youtube.com/watch?v=9Y7ma241N8k" class="mfp-iframe video-play"><i class="fas fa-play"></i></a>--}}
{{--                                  </div>--}}
{{--                                  <a href="javascript:void(0)" class="read-more">view more <i class="fas fa-arrow-right"></i></a>--}}
{{--                              </div>--}}
{{--                          </div>--}}
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="copyright-area bg-dark-blue text-white rel">
          <div class="container">
              <div class="copyright-inner">
                  <p>
                      © {{ date('Y') }}. <a href="javascript:void(0)">QuadQue</a> All rights
                      reserved.
                  </p>
                  <ul class="footer-menu">
                      <li><a href="javascript:void(0)">Faqs</a></li>
                      <li><a href="javascript:void(0)">Links</a></li>
                      <li><a href="javascript:void(0)">About</a></li>
                      <!--  <li><a href="javascript:void(0)">Payments</a></li> -->
                  </ul>
              </div>
          </div>
          <!-- Scroll Top Button -->
          <button class="scroll-top scroll-to-target" data-target="html">
              <span class="fas fa-angle-double-up"></span>
          </button>
      </div>

      <script>
        
        if(window.location.href.split("/")[3]==="message-from-ceo"){
            document.getElementById("messageFromCEO").style.display="none"
        }

      </script>
  </footer>

@extends('user.layout.app')
@section('content')
   @include('user.partials.banner')
   <!-- Pastoral care top section Start -->
      <section class="pt-40">
        <div class="container">
            <div class="row align-items-center large-gap wow fadeInLeft delay-0-2s">
                <div class="col-lg-6">
                    <div class="why-learn-image wow fadeInRight delay-0-2s">
                        <img src="{{ asset('assets/images/service/pastoral/yellow.jpg') }}" alt="">
                    </div>
                </div>
                 <div class="col-lg-6">
                     <div class="why-learn-content text-justify rmb-35 pt-20">
                         <p>RBN education supports students by giving them the service they need about pastoral care abroad. This type of service can be helpful for students who are studying overseas and may not have access to traditional forms of pastoral support.</p>

                         <p>It is important for these individuals to have a strong understanding of the customs and culture of that country, and this knowledge can be gained through working with a consultant firm like ours.</p>

                         <p>By providing this service, we equip students with the essential suggestions they need to manage their mental health and well-being while living away from home. Additionally, this could help reduce anxiety or stress levels that might be associated with adjusting to a new environment or lifestyle.</p>
                     </div>
                 </div>

            </div>
        </div>
    </section>
    <!-- Pastoral care top section end -->

    <!--Our Services in Oversea Section START -->
    <section class="pt-120 pb-120 rpb-100">
      <div class="postalCare pt-20 text-center text-white">
            <h3>A Glimpse of Our Services in Overseas Pastoral Care</h3>
      </div>
      <div class="postalCareContainer">
         <div class="py-10">
            <ul class="postalCare-list">
              <li
              >
                <a>
                <div class="dice-box mx-auto">
                      <div class="dicebox-dialog">
                      <h4>1.<br> Guidance on the university registration process</h4>
                      </div>
                  </div>
                </a>
              </li>
              <li>
                  <a>
                  <div class="dice-box mx-auto">
                        <div class="dicebox-dialog">
                        <h4>2.<br> Instructions on how to get a local resident permit</h4>
                        </div>
                    </div>
                  </a>
              </li>
              <li>
                  <a>
                  <div class="dice-box mx-auto">
                        <div class="dicebox-dialog">
                        <h4>3.<br>Familiarize students with the local healthcare system</h4>
                        </div>
                    </div>
                  </a>
              </li>
            </ul>


            <ul class="postalCare-list px-20">
              <li>
                  <a>
                  <div class="dice-box mx-auto">
                        <div class="dicebox-dialog">
                        <h4>4.<br> Guidelines on foreign bank account open</h4>
                        </div>
                    </div>
                  </a>
              </li>
              <li>
                  <a>
                  <div class="dice-box mx-auto">
                        <div class="dicebox-dialog">
                        <h4>5.<br> Support in getting a dependent visa & family visit visa</h4>
                        </div>
                    </div>
                  </a>
              </li>
            </ul>
         </div>
      </div>
    </section>
    <!--Our Services in Oversea Section END -->

@endsection
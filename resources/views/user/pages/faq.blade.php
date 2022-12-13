@extends('user.layout.app')
@section('content')
   @include('user.partials.banner')
   <!-- Accordion section Start -->
      <section class="pt-40 pb-40">
        <div class="container">
            <div class="align-items-center large-gap wow fadeInLeft delay-0-2s">
                <div class="accordion" id="accordionExample">
                    
                    <div class="card">
                        <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h5> Do I need a higher education consultant to study abroad?</h5>
                            </button>
                        </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            A good education consultant can help you to choose the right course at the right institution with the right direction for your academic and career progressions. They can provide you with one-stop services and save you time, money, and accidental/wrong decisions. They earn synergic benefits for you from your investment in higher education overseas.
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <h5> How can I choose a good education agent for studying abroad?</h5>
                            </button>
                        </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            To study at overseas universities, it is not mandatory for students to apply through education agents; they can submit their admission applications on their own. However, most of the students fail to understand the process, make mistakes in the application and become unsuccessful in securing a place as per their requirements. Additionally, some students prepare poorly for visa applications and interviews – this often results in visa refusal.
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <h5> Is there any financial assistance offered by the universities to the students?</h5>
                            </button>
                        </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            International Education Financial Aid (IEFA) provides financial aid, college scholarship, and grant information for international students wishing to study abroad. Their search feature allows users to find scholarships around the world.
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                            <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <h5> Is the internship a paid session for international students?</h5>
                            </button>
                        </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body">
                            Depending on the position, interns may or may not be paid. Unpaid internships are common, especially when the internship counts as academic credit toward graduation.
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFive">
                        <h2 class="mb-0">
                            <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <h5> How will I know which course and University/College are appropriate for me?</h5>
                            </button>
                        </h2>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                        <div class="card-body">
                            1) Identify which category you fall under <br> 2) Ask yourself why you want to study <br> 3) Decide on what career you want <br> 4) Study Destination <br> 5) Mode of study <br> 6) Identify the most important factors you are considering <br> 7) Research <br> 8) Narrow down your options.
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingSix">
                        <h2 class="mb-0">
                            <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            <h5> What are the differences between MSc, MA, and MBA: Management degree programs?</h5>
                            </button>
                        </h2>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                        <div class="card-body">
                            Masters of Management can be divided into subgroups such as the Master of Science (MSc), the Master of Arts (MA), or the Master of Business Administration (MBA).
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingSeven">
                        <h2 class="mb-0">
                            <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            <h5> What is an Embedded College?</h5>
                            </button>
                        </h2>
                        </div>
                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                        <div class="card-body">
                            Embedded colleges refer to the providers' centers of delivery. Typically, a provider conducts its central functions from a separate headquarters but may operate from one or more of its embedded colleges. 2 Higher Education Review (Embedded Colleges) has two components.
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingEight">
                        <h2 class="mb-0">
                            <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            <h5> How long does it take to get an offer?</h5>
                            </button>
                        </h2>
                        </div>
                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                        <div class="card-body">
                            The hiring process can vary from employer to employer, the type of job you are applying for, and the industry in which you work. You could get an offer in a day or two or it could take weeks.
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingNine">
                        <h2 class="mb-0">
                            <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            <h5> What is the difference between a Conditional Offer and an Unconditional Offer?</h5>
                            </button>
                        </h2>
                        </div>
                        <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                        <div class="card-body">
                            A conditional offer means you still need to meet the requirements – usually exam results. An unconditional offer means you've got a place, although there might still be a few things to arrange. An unsuccessful or withdrawn choice removes that option, but you could add more.
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTen">
                        <h2 class="mb-0">
                            <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                            <h5> How can I pay the fees to University/College?</h5>
                            </button>
                        </h2>
                        </div>
                        <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
                        <div class="card-body">
                            Pay by credit or debit card, bank transfer, or by e-wallet. Pay from any country or bank in your local currency. Avoid bank fees and extra charges. Be guaranteed the best exchange rate when making a bank transfer using Flywire.
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingEleven">
                        <h2 class="mb-0">
                            <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                            <h5> What are the reasons for Tier 4 Student Visa Refusals?</h5>
                            </button>
                        </h2>
                        </div>
                        <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordionExample">
                        <div class="card-body">
                            Submitting copies/photocopies or printouts instead of original documents. Missing documents. Unsuccessful credibility interview. Failure to meet the strict Student visa rules, such as not maintaining the required funds in your account for 28 consecutive days.
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Accordion section end -->


@endsection
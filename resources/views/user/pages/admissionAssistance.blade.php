@extends('user.layout.app')
@section('content')
@include('user.partials.banner')
<!--  destination list start -->
<section class="destination text-justify py-40 rpt-90  rpb-45">
    <div class="container">
        <ul class="Counseling-list">
            <li>
                <a href="#">
                    <div class="card hover-styled">
                        <div class="card-body">
                            <h5>Requirements & Deadlines Meet</h5>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="card hover-styled">
                        <div class="card-body">
                            <h5>Insightful SOP Writing</h5>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
        <ul class="Counseling-list">
            <li>
                <a href="#">
                    <div class="card hover-styled">
                        <div class="card-body">
                            <h5>Accurate Application from Fill-up</h5>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="card hover-styled">
                        <div class="card-body">
                            <h5>Double-check & Final Submission</h5>
                        </div>
                    </div>
                </a>
            </li>


        </ul>
    </div>
</section>
<!--  destination list end -->

<!-- how it all works section start -->
<section class="why-learn-area pb-120 rpb-100">
    <div class="container">
        <h2 class="text-center">HOW IT ALL WORKS</h2>
        <div class="row align-items-center large-gap wow fadeInLeft delay-0-2s pt-20">
            <div class="col-lg-8 mx-auto">
                <ul class="why-learn-content rmb-35">
                    <li class="admission_assistance_list_style">

                        <div class="admission-bullet">
                            {{-- <span class="sub-title-two"></span> --}}
                            <img src="assets/images/service/bulletpoint.png" alt="">
                        </div>
                        <p class="admission_assistance_list_para">
                            It is important to be aware of deadlines throughout the application process. Hence, we always remain meticulous to meet the deadlines of universities. Simultaneously, we recheck if there are any updated entry requirements and guides about visa requirements. Accordingly, we organize all the student's files.</p>
                    </li>

                    <li class="admission_assistance_list_style">

                        <div class="admission-bullet">
                            {{-- <span class="sub-title-two"></span> --}}
                            <img src="assets/images/service/bulletpoint.png" alt="">
                        </div>
                        <p class="admission_assistance_list_para">Our talented content developer team writes the proper, meaningful, and comprehensive statement of purpose (SOP). We give this support if any student fails to demonstrate his or her own study plan. It matters! Because your perspective on life, career goals, ideology, program, subject selection, and financial statement all are evaluated by the admission committee when you have a perfect SOP.</p>

                    </li>

                    <li class="admission_assistance_list_style">

                        <div class="admission-bullet">
                            {{-- <span class="sub-title-two"></span> --}}
                            <img src="assets/images/service/bulletpoint.png" alt="">
                        </div>
                        <p class="admission_assistance_list_para">Flawless admission form fill-up is the most significant factor in university admission. We'll take care of everything for you at this stage. There's no need to worry about the paperwork. We will ensure that your application form is submitted correctly in the shortest time possible once you provide all the required documents.</p>

                    </li>

                    <li class="admission_assistance_list_style">

                        <div class="admission-bullet">
                            {{-- <span class="sub-title-two"></span> --}}
                            <img src="assets/images/service/bulletpoint.png" alt="">
                        </div>
                        <p class="admission_assistance_list_para">The cross-check phase includes making sure that all required documents are attached and all entry requirements have been met. If we find anything missing or incorrect, we resolve this before submitting the final application form.</p>

                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- how it all works section end -->

@endsection

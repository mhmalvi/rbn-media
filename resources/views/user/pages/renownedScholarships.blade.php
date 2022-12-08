@extends('user.layout.app')
@push('styles')
    <style>
        p{
            text-align: justify !important;
        }
    </style>
@endpush
@section('content')
    @include('user.partials.banner')

    <!-- Why Learn Start -->
    <section class="why-learn-area pt-120 pb-120 rpb-100">
        <div class="container">
            <div class="row align-items-center large-gap wow fadeInLeft delay-0-2s">
                <div class="col-lg-6">
                    <div class="why-learn-content rmb-35">
                        <div class="section-title mb-30">
                            {{--  <span class="sub-title-two"></span> --}}
                            <h2>Renowned Scholarships</h2>
                        </div>
                        <p><b>12 Best Renowned Scholarships For International Students</b></p>
                        <ul class="list-style-four">
                            <li><a href="https://www.chevening.org/" class="text-secondary" target="_blank">Chevening Scholarship UK</a> </li>
                            <li><a href="https://www.simmons.edu/undergraduate/admission-and-financial-aid/tuition-financial-aid/types-financial-aid/scholarships/kotzen" class="text-secondary" target="_blank">Simmons University Kotzen Scholarships</a> </li>

                            <li><a href="https://financialaid.dartmouth.edu/apply-aid/prospective-transfer-students/types-financial-aid/grants-scholarships" class="text-secondary" target="_blank">Dartmouth College Scholarships</a> </li>

                            <li><a href="https://financialaid.stanford.edu/undergrad/how/international.html" class="text-secondary" target="_blank">Stanford University Scholarships</a> </li>

                            <li><a href="https://www.ucalgary.ca/registrar/finances/awards-scholarships-and-bursaries/international-awards#:~:text=Information%20on%20Eligibility,degree%20program%20to%20be%20eligible." class="text-secondary" target="_blank">University of Calgary International Scholarships</a> </li>

                            <li><a href="https://uwaterloo.ca/graduate-studies-postdoctoral-affairs/awards/university-waterloo-graduate-scholarship" class="text-secondary" target="_blank">International Master's Degree and Doctoral Program Awards by the University of Waterloo</a> </li>
                            <li><a href="https://science.anu.edu.au/study/scholarships/anu-chancellors-international-scholarship" class="text-secondary" target="_blank">Australian National University (ANU) Chancellor's International Scholarship</a> </li>

                            <li><a href="https://bond.edu.au/scholarship/international-undergraduate-excellence-scholarship" class="text-secondary" target="_blank">Bond University International Undergraduate Excellence Scholarship</a> </li>
                            <li><a href="https://www.eacea.ec.europa.eu/scholarships/erasmus-mundus-catalogue_en" class="text-secondary" target="_blank">Erasmus Mundus Scholarships</a> </li>
                            <li><a href="https://stipendiumhungaricum.hu/" class="text-secondary" target="_blank">Stipendium Hungaricum</a> </li>


                        </ul>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="why-learn-image wow fadeInRight delay-0-2s">
                        <img src="{{ asset('assets/images/about/whoweare.jpg') }}" alt="Why Learn">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

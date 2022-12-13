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
    <section class="why-learn-area pb-60 rpb-100">
        <div class="container">
            <div class="row align-items-center wow fadeInLeft delay-0-2s">
                <div class="col-lg-12">
                    <div class="why-learn-image wow d-flex justify-content-center fadeInRight delay-0-2s">
                        <img src="{{ asset('assets/images/scolars.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="why-learn-content rmb-35">
                        <div class="section-title">
                            <h2>Renowned Scholarships</h2>
                        </div>
                        <p><b>10 Best Renowned Scholarships For International Students</b></p>
                
                            <div class="accordion" id="accordionExample">                   
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="collapsed py-10 w-100 text-left pl-4" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <h5> Chevening Scholarship UK</h5>
                                        </button>
                                    </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse p-10" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <a href="https://www.chevening.org/" class="text-primary">https://www.chevening.org/</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="collapsed py-10 w-100 text-left pl-4" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <h5> Simmons University Kotzen Scholarships</h5>
                                        </button>
                                    </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse p-10" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <a href="https://www.simmons.edu/undergraduate/admission-and-financial-aid/tuition-financial-aid/types-financial-aid/scholarships/kotzen" class="text-primary">https://www.simmons.edu/undergraduate/admission-and-financial-aid/tuition-financial-aid/types-financial-aid/scholarships/kotzen</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="collapsed py-10 w-100 text-left pl-4" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <h5> Dartmouth College Scholarships</h5>
                                        </button>
                                    </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse p-10" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <a href="https://financialaid.dartmouth.edu/apply-aid/prospective-transfer-students/types-financial-aid/grants-scholarships" class="text-primary">https://financialaid.dartmouth.edu/apply-aid/prospective-transfer-students/types-financial-aid/grants-scholarships</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                    <h2 class="mb-0">
                                        <button class="collapsed py-10 w-100 text-left pl-4" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <h5>Stanford University Scholarships</h5>
                                        </button>
                                    </h2>
                                    </div>
                                    <div id="collapseFour" class="collapse p-10" aria-labelledby="headingFour" data-parent="#accordionExample">
                                        <a href="https://financialaid.stanford.edu/undergrad/how/international.html" class="text-primary">https://financialaid.stanford.edu/undergrad/how/international.html</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                    <h2 class="mb-0">
                                        <button class="collapsed py-10 w-100 text-left pl-4" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        <h5> University of Calgary International Scholarships</h5>
                                        </button>
                                    </h2>
                                    </div>
                                    <div id="collapseFive" class="collapse p-10" aria-labelledby="headingFive" data-parent="#accordionExample">
                                        <a href="https://www.ucalgary.ca/registrar/finances/awards-scholarships-and-bursaries/international-awards#:~:text=Information%20on%20Eligibility,degree%20program%20to%20be%20eligible." class="text-primary">https://www.ucalgary.ca/registrar/finances/awards-scholarships-and-bursaries/international-awards#:~:text=Information%20on%20Eligibility,degree%20program%20to%20be%20eligible.</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingSix">
                                    <h2 class="mb-0">
                                        <button class="collapsed py-10 w-100 text-left pl-4" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        <h5>International Master's Degree and Doctoral Program Awards by the University of Waterloo</h5>
                                        </button>
                                    </h2>
                                    </div>
                                    <div id="collapseSix" class="collapse p-10" aria-labelledby="headingSix" data-parent="#accordionExample">
                                        <a href="https://uwaterloo.ca/graduate-studies-postdoctoral-affairs/awards/university-waterloo-graduate-scholarship" class="text-primary">https://uwaterloo.ca/graduate-studies-postdoctoral-affairs/awards/university-waterloo-graduate-scholarship</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingEight">
                                    <h2 class="mb-0">
                                        <button class="collapsed py-10 w-100 text-left pl-4" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        <h5> Australian National University (ANU) Chancellor's International Scholarship</h5>
                                        </button>
                                    </h2>
                                    </div>
                                    <div id="collapseEight" class="collapse p-10" aria-labelledby="headingEight" data-parent="#accordionExample">
                                        <a href="https://science.anu.edu.au/study/scholarships/anu-chancellors-international-scholarship" class="text-primary">https://science.anu.edu.au/study/scholarships/anu-chancellors-international-scholarship</a>    
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingNine">
                                    <h2 class="mb-0">
                                        <button class="collapsed py-10 w-100 text-left pl-4" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                        <h5>Bond University International Undergraduate Excellence Scholarship</h5>
                                        </button>
                                    </h2>
                                    </div>
                                    <div id="collapseNine" class="collapse p-10" aria-labelledby="headingNine" data-parent="#accordionExample">
                                        <a href="https://bond.edu.au/scholarship/international-undergraduate-excellence-scholarship" class="text-primary">https://bond.edu.au/scholarship/international-undergraduate-excellence-scholarship</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTen">
                                    <h2 class="mb-0">
                                        <button class="collapsed py-10 w-100 text-left pl-4" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                        <h5> Erasmus Mundus Scholarships</h5>
                                        </button>
                                    </h2>
                                    </div>
                                    <div id="collapseTen" class="collapse p-10" aria-labelledby="headingTen" data-parent="#accordionExample">
                                        <a href="https://www.eacea.ec.europa.eu/scholarships/erasmus-mundus-catalogue_en" class="text-primary">https://www.eacea.ec.europa.eu/scholarships/erasmus-mundus-catalogue_en</a>    
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingEleven">
                                    <h2 class="mb-0">
                                        <button class="collapsed py-10 w-100 text-left pl-4" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                        <h5> Stipendium Hungaricum</h5>
                                        </button>
                                    </h2>
                                    </div>
                                    <div id="collapseEleven" class="collapse p-10" aria-labelledby="headingEleven" data-parent="#accordionExample">
                                        <a href="https://stipendiumhungaricum.hu/" class="text-primary">https://stipendiumhungaricum.hu/</a>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

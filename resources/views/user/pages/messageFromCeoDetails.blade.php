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
                            <h2>Message From CEO</h2>
                        </div>
                        <p>"The whole purpose of education is to turn mirrors into windows”</p>
                        <p>Higher education clears up the space to know beyond oneself as if looking through a window, rather than seeing the world as a reflection of yourself and your own perspective.</p>
                        <p>RBN Education believes that the quality of a person's higher educational experience is directly proportional to their self-development & Improved vision.</p>
                        <p>As a mentor, we work diligently to find the best schools and educators for our students. Our team of experienced consultants is dedicated to providing the entire university enrollment & visa services. We also assist earnestly with post-departure support.</p>
                        <p>Finally, our communication is transparent with both current and potential clients. Subsequently, we've built trust and fostered collaboration with our partner institutions.</p>

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

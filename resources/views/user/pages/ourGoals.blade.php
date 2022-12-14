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
                            <h2>Our Goals</h2>
                        </div>

                        <ul class="">
                            <li class="aboutrbn-li">
                                <img src="assets/images/service/tick.png" class="visaService-bullet" alt="">
                                <p>Consistently remain a trustworthy and optimum name in the education consultancy industry.</p>
                            </li>
                            <li class="aboutrbn-li">
                                <img src="assets/images/service/tick.png" class="visaService-bullet" alt="">
                                <p>To strengthen the digital marketing team.</p>
                            </li>
                            <li class="aboutrbn-li">
                                <img src="assets/images/service/tick.png" class="visaService-bullet" alt="">
                                <p>To build a strong and credible relationship with the partner universities.</p>
                            </li>
                            <li class="aboutrbn-li">
                                <img src="assets/images/service/tick.png" class="visaService-bullet" alt="">
                                <p>To provide effective solutions & career advice that are both beneficial and life-changing for students.</p>
                            </li>

                        </ul>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="why-learn-image wow fadeInRight delay-0-2s">
                        <img src="{{ asset('assets/images/about/goal1.jpg') }}" alt="Why Learn">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

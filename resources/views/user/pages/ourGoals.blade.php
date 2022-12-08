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
                            <h2>Our Goal</h2>
                        </div>

                        <ul class="list-style-four">

                            <li>Consistently remain a trustworthy and optimum name in the education consultancy industry.</li>
                            <li>To strengthen the digital marketing team.</li>
                            <li>To build a strong and credible relationship with the partner universities.</li>
                            <li>To provide effective solutions & career advice that are both beneficial and life-changing for students.</li>

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

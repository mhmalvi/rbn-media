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
                            <h2>Visit Now</h2>
                        </div>
                        <p><b>Dhaka Office:</b></p>
                        <p>69/1, Suvastu Tower (2nd Floor) Panthapath Signal, Dhaka-1205</p>
                        <p>Phone: 01810183133, 01312-777909 (WhatsApp)</p>
                        <p>Email: <a href="mailto:admission@rbn.com.bd" class="text-secondary">admission@rbn.com.bd</a> </p>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="why-learn-image wow fadeInRight delay-0-2s">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14607.60115912011!2d90.38426189872563!3d23.750934837620335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8bae1a3de9f%3A0x22305253501b40db!2sRBN%20Education!5e0!3m2!1sen!2sbd!4v1670493755046!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

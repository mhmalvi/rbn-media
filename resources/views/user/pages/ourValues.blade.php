@extends('user.layout.app')
@push('styles')
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

<style>

   p{
    text-align: justify;
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
                        {{-- <span class="sub-title-two"></span> --}}
                        <h2>Our Values</h2>

                    </div>
                    <p>We strongly believe that through our viewpoints, ideas, and behaviors, we can establish a successful company image. Therefore, RBN Education's senior executives developed a service value-driven philosophy.</p>
                    <p><b>Honesty:</b> Our honesty and commitment give us strength. As a result, team RBN will always serve the client's needs with honesty. All of our employees always maintain honesty in their business dealings as well.</p>
                    <p><b>Transparency:</b> This honesty policy of ours is also extended to our dealings with transparency. We perceive that it's important for everyone, including us as business people, to be transparent in all of our actions. We'll tell you what we plan on doing and then do it.</p>
                    <p><b>Integrity:</b> We tend to do our best in both honesty and professionalism. We recognize our clients' eventual goals depend on our efficiency. So, it is our responsibility to balance our services with integrity.</p>
                    <p><b>Trustworthiness:</b> Likewise, we value trustworthiness. It is an essential part of our business relationships and it's something that we as individuals take seriously. We always work to be trustworthy so that we can build strong, lasting client relationships.</p>
                    <p><b>Accountability:</b> We are always held accountable for our actions and results. We work to ensure that we use our abilities in a responsible manner so that we can contribute towards the success of RBN Education.</p>
                    <p><b>Teamwork:</b> We believe that when working together as a team, we can achieve anything. Hence, we work hard to build trust with each other and strive for continuous improvement.</p>

                </div>
            </div>
         <div class="col-lg-6">
             <div class="why-learn-image wow fadeInRight delay-0-2s">
                 <img src="{{ asset('assets/images/about/ourtimeline.jpg') }}" alt="timeline">


             </div>
         </div>



        </div>
    </div>
</section>
<!-- Why Learn End -->

@endsection

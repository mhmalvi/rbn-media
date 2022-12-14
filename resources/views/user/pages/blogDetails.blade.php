@extends('user.layout.app')
@section('content')
        <div class="page-wrapper">
            <!-- Page Banner Start -->
            @include('user.partials.banner')
{{--            <section class="page-banner-area rel z-1 text-white text-center" style="background-image: url({{ asset('assets/images/banner.jpg') }});">--}}

{{--                <div class="container">--}}
{{--                    <div class="banner-inner rpt-10">--}}
{{--                        <h2 class="page-title wow fadeInUp delay-0-2s">Blog Details</h2>--}}
{{--                        <nav aria-label="breadcrumb">--}}
{{--                            <ol class="breadcrumb wow fadeInUp delay-0-4s">--}}
{{--                                <li class="breadcrumb-item"><a href="index.html">home</a></li>--}}
{{--                                <li class="breadcrumb-item active">Blog Details</li>--}}
{{--                            </ol>--}}
{{--                        </nav>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <img class="circle-one" src="{{ asset('assets/images/shapes/circle-one.png') }}" alt="Circle">--}}

{{--                <img class="circle-two" src="{{ asset('assets/images/shapes/circle-two.png') }}" alt="Circle">--}}

{{--            </section>--}}

            <!-- Page Banner End -->
            <!-- Blog Details Start -->
            <section class="blog-details-area py-130 rpy-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="blog-details-wrap">
                                <div class="blog-standard-item wow fadeInUp delay-0-2s">
                                    <div class="image">
                                        <img src="{{ asset('assets/admin/image/blogs/'.$blog->thumbnail) }}" alt="Blog Thumbnail">

                                    </div>
                                    <div class="blog-standard-content">
{{--                                        <div class="author">--}}
{{--                                            <img src="{{ asset('assets/admin/image/authors/'.$blog->author_image) }}" alt="Author">--}}
{{--                                        </div>--}}
                                        <div class="content">
                                            <div class="mb-50 text-justify">
                                                <h3>{{ $blog->title }}</h3>
                                                <ul class="blog-standard-header">
                                                    <li><span class="name">{{ $blog->author_name }}</span></li>
                                                    <li><i class="far fa-calendar-alt"></i> <a href="javascript:void(0)" class="text-secondary">{{ date('M d, Y', strtotime($blog->created_at)) }}</a></li>

                                                </ul>
                                            </div>
                                            <div class="text-justify pb-4">

                                                @php
                                                    $details = explode(".",$blog->details);
                                                    //$detailsData = html_entity_decode($blog->details, ENT_COMPAT, 'UTF-8')
                                                @endphp
                                                {!! $blog->details !!}

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="blog-sidebar rmt-75">

                                <div class="widget widget-recent-courses wow fadeInUp delay-0-2s">
                                    <h4 class="widget-title">Recent Posts</h4>

                                        @isset($recent_blogs)
                                            @foreach($recent_blogs as $blog)
                                                <div class="container mb-20">
                                                <div class="row">
                                                    <div class="image col-12 mb-15">
                                                        <img src="{{ asset('assets/admin/image/blogs/'.$blog->thumbnail) }}" alt="blog thumbnail" class="img-thumbnail">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="content text-justify col-12">
                                                        <h6><a href="{{ url('blog-details' , [ 'id' => $blog->id ]) }}" class="text-secondary">{{$blog->title}}</a></h6>
                                                        <p>{{ $blog->intro_details }}</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="author-info col-5">

                                                        <strong><span class="name">{{ $blog->author_name }}</span></strong>
                                                    </div>
                                                    <div class="author-info col-7">

                                                        <i class="far fa-calendar-alt"></i> <a href="javascript:void(0)" class="text-secondary">{{ date('M d, Y', strtotime($blog->created_at)) }}</a>

                                                    </div>
                                                </div>
                                                </div>

                                            @endforeach
                                        @endisset

                                </div>
{{--                                <div class="widget widget-tag-cloud wow fadeInUp delay-0-2s">--}}
{{--                                    <h4 class="widget-title">Popular Tags</h4>--}}
{{--                                    <div class="tag-coulds">--}}
{{--                                        <a href="blog.html">Course</a>--}}
{{--                                        <a href="blog.html">Design</a>--}}
{{--                                        <a href="blog.html">Marketing</a>--}}
{{--                                        <a href="blog.html">Life Course</a>--}}
{{--                                        <a href="blog.html">Health Course</a>--}}
{{--                                        <a href="blog.html">SEO</a>--}}
{{--                                        <a href="blog.html">Business</a>--}}
{{--                                        <a href="blog.html">Graphics</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Blog Details End -->
        </div>
        <!--End pagewrapper-->
@endsection


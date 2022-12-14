@extends('user.layout.app')
@section('content')
  <div class="page-wrapper">
      <!-- Page Banner Start -->
      @include('user.partials.banner')
      <!-- Page Banner End -->
      <!-- Blog Standard Start -->
      <section class="blog-standard-area py-130 rpt-95 rpb-100">
          <div class="container">
              <div class="row">
                  <div class="col-lg-8">
                      <div class="blog-standard-wrap">
                      @isset($blogs)
                             @foreach($blogs as $blog)
                                      <div class="blog-standard-item wow fadeInUp delay-0-2s">
                                          <div class="image">
                                              <img src="{{ asset('assets/admin/image/blogs/'.$blog->thumbnail) }}" alt="Blog Thumbnail">
                                             {{--  <a href="#"><i class="fas fa-share-alt"></i></a> --}}
                                          </div>
                                          <div class="blog-standard-content">
                                              <div class="author">
                                                  <img src="{{ asset('assets/admin/image/authors/'.$blog->author_image) }}" alt="Author">
                                              </div>
                                              <div class="content">
                                                  <ul class="blog-standard-header">
                                                      <li><span class="name">{{ $blog->author_name }}</span></li>
                                                      <li><i class="far fa-calendar-alt"></i>
                                                          <a href="javascript:void(0)" class="text-secondary">{{ date('M d, Y', strtotime($blog->created_at)) }}</a>
                                                      </li>
                                                      {{-- <li><i class="far fa-comments"></i> <a href="blog-details.html">Comments (05)</a></li> --}}
                                                  </ul>
                                                  <h3><a href="{{ url('blog-details' , [ 'id' => $blog->id ]) }}" class="text-secondary text-justify">{{ $blog->title }}</a></h3>
                                                  @php
                                                    $details = explode(".",$blog->details);
                                                  @endphp
                                                  <p class="text-justify">{{ $blog->intro_details }}</p>
                                                  <a href="{{ url('blog-details' , [ 'id' => $blog->id ]) }}" class="theme-btn style-two">Learn more <i class="fas fa-arrow-right"></i></a>
                                              </div>
                                          </div>
                                      </div>
                             @endforeach
                      @endisset
                          <ul class="pagination flex-wrap">
                              <li class="page-item">
                                  <a href="{{ $page - 1 == 0 ? 'javascript:void(0)' : route('blog', $page-1)}}" style="text-decoration:none; display:inline-block">

                                    <span class="page-link"><i class="fas fa-angle-double-left"></i></span>
                                  </a>
                              </li>
                              @for($i = 1; $i <= $total_page; $i++)
                                <li class="page-item {{ $i == $page ?'active':''}}">
                                    <a href="{{ route('blog', $i)}}" style="text-decoration:none; display:inline-block">
                                        <span class="page-link">
                                            {{ $i }}
                                        </span>
                                    </a>
                                </li>
                              @endfor
                              <li class="page-item">
                                  <a class="page-link" href="{{ $page + 1 > $total_page ? 'javascript:void(0)' : route('blog', $page+1)}}"><i class="fas fa-angle-double-right"></i></a>

                              </li>
                          </ul>
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
                                              <div class="content col-12">
                                                  <h6><a href="{{ url('blog-details' , [ 'id' => $blog->id ]) }}" class="text-secondary text-justify">{{$blog->title}}</a></h6>
                                                  <p class="text-justify">{{ $blog->intro_details }}</p>
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
                          <div class="widget widget-tag-cloud wow fadeInUp delay-0-2s">
                              <h4 class="widget-title">Popular Tags</h4>
                              <div class="tag-coulds">
                                  @isset($tags)
                                    @foreach($tags as $tag)
                                    <a href="javascript:void(0)">{{ $tag->name }}</a>
                                    @endforeach
                                  @endisset

                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- Blog Standard End -->
  </div>

@endsection

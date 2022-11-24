@extends('user.layout.app')
@section('content')
  @include('user.partials.banner')
{{--  <div style="height: 600px;"></div>--}}

  <section class="blog-standard-area py-130 rpt-95 rpb-100">
      <div class="container">
          <div class="row">


                      @isset($events)
                          @php
                              $i=1;
                          @endphp
                          @foreach($events as $event)

                              @if($i == 3)
                                  <div class="col-lg-12">
                                      <hr class="mb-55" />
                                  </div>
                              @endif
                              <div class="col-lg-6">
                                  <div class="event-item-two wow fadeInUp delay-0-2s">
                                      <span class="date"> {{ date('M', strtotime($event->event_date)) }} <b>{{ date('d', strtotime($event->event_date)) }}</b> <span>{{ date('Y', strtotime($event->event_date)) }}</span> </span>
                                      <img src="{{ asset('assets/admin/image/events/'.$event->thumbnail) }}" alt="Event thumbnail" />

                                      <div class="content">
                                          <span class="location"><i class="fas fa-map-marker-alt"></i>{{ $event->location }}</span>
                                          <h4>
                                              <a href="javascript:void(0)" class="text-secondary">{{ $event->title }}</a>
                                          </h4>
                                          {{-- <a href="javascript:void(0)" class="read-more color-two">Get ticket <i class="fas fa-arrow-right"></i></a> --}}
                                      </div>
                                  </div>
                              </div>
                                  @php
                                      $i++;

                                  @endphp
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
  </section>
@endsection

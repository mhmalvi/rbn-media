@extends('admin.layouts.app')
@section('title', 'Edit Event')
@push('css')
<link href="{{asset('assets/admin/css/plugins/jasny/jasny-bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/admin/css/plugins/chosen/bootstrap-chosen.css')}}" rel="stylesheet">
@endpush

@section('content')
<div class="wrapper wrapper-content">
    <form action="{{route('admin.event.update', $event->slug)}}" method="post" enctype="multipart/form-data" id="formEvent">
          @method('PUT')
          @csrf

        <div class="container">
            <div class="ibox">
                <div class="ibox-content">
                    <div class="form-group">
                        <input type="text" name="title" id="title" value="{{$event->title }}" class="form-control @error('title') is-invalid @enderror" />
                        <cite class="tex-light" style="font-size: 10px; display: block;">*Max 100 characters</cite>
                        @error('title')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" name="location" id="location" value="{{ $event->location}}" class="form-control @error('location') is-invalid @enderror"/>
                        <cite class="tex-light" style="font-size: 10px; display: block;">*Max 100 characters</cite>
                        @error('location')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="ibox">
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-lg-6 pb-2">
                            <h4>Upload Event Thumbnail</h4>
                            {{-- <cite class="text-warning">*max-upload-size: 2mb</cite> --}}
                            <br>
                            <cite class="text-warning">*image-dimension: 125px x 125px</cite>
                        </div>
                        <div class="col-lg-6">
                            <div id="thumbnail"></div>
                            @error('thumbnail')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                    </div>
                </div>
            </div>
            <div class="ibox">
                <div class="ibox-content">
                    <div class="form-group">
                        <label for="event_date">Event Date</label>
                        <input type="date" class="form-control @error('event_date') is-invalid @enderror" name="event_date" id="event_date" value="{{$event->event_date}}" />
                        @error('event_date')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="starting_date">Starting Date</label>
                        <input type="date" class="form-control @error('starting_date') is-invalid @enderror" name="starting_date" id="starting_date" value="{{$event->starting_date}}" />
                        @error('starting_date')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="ending_date">Ending Date</label>
                        <input type="date" class="form-control @error('ending_date') is-invalid @enderror" name="ending_date" id="ending_date" value="{{$event->ending_date}}" />

                        @error('ending_date')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                </div>
            </div>
            <div style="display: flex; justify-content: center;">
                <button type="button" class="btn btn-outline-primary" onclick="event.preventDefault(); document.getElementById('formEvent').submit();">Update</button>
            </div>
        </div>
    </form>
</div>
@endsection


@push('js')
<script src="{{asset('assets/admin/js/plugins/jasny/jasny-bootstrap.min.js')}}"></script>
<script src="{{asset('assets/admin/js/plugins/chosen/chosen.jquery.js')}}"></script>
<script src="{{asset('assets/admin/js/plugins/spartan/spartan-multi-image-picker-min.js')}}"></script>
<script src="{{asset('assets/tinymce/tinymce.min.js')}}"></script>
@include('admin.events.scripts')
@endpush


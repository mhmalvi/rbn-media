@extends('admin.layouts.app')
@section('title', 'Edit Blog')
@push('css')
<link href="{{asset('assets/admin/css/plugins/jasny/jasny-bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/admin/css/plugins/chosen/bootstrap-chosen.css')}}" rel="stylesheet">
@endpush

@section('content')
<div class="wrapper wrapper-content">
    <form action="{{route('admin.blog.update', $blog->blog_slug)}}" method="POST" enctype="multipart/form-data" id="formBlog">

    @method('PUT')
    @csrf

        <div class="container">
            <div class="ibox">
                <div class="ibox-content">
                    <div class="form-group">
                        <input type="text" name="title" id="title" value="{{$blog->title}}" class="form-control @error('title') is-invalid @enderror" placeholder="Lets give a blog title..."/>
                        <cite class="tex-light" style="font-size: 10px; display: block;">*Max 100 characters</cite>
                        @error('title')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                      <div class="form-group">
                          <div>
                              <textarea name="intro_details" class="form-control  @error('intro_details') is-invalid @enderror" value="" placeholder="Lets give a blog intro details...">{{ $blog->intro_details }}</textarea>
                          </div>
                          <cite class="tex-light" style="font-size: 10px; display: block;">*Max first two lines</cite>
                          @error('intro_details')
                          <small class="text-danger">{{ $message }}</small>
                          @enderror
                      </div>


                    <div class="form-group">
                        {{-- <label for="tag">Tags</label> --}}
                        <select name="tags[]" data-placeholder="Choose tag..." class="form-control tags  @error('title') is-invalid @enderror" tabindex="2" multiple='multiple'>
                            <option value>Select category...</option>
                            @isset($tags)
                            @foreach ($tags as $item)
                            <option value="{{$item->tag_slug}}">{{$item->name}}</option>
                            @endforeach
                            @endisset
                        </select>
                        @error('tags')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror

                    </div>
                </div>
            </div>
            <div class="ibox">
                <div class="ibox-content">
                    <div>
                        <textarea rows="50" name="details" class="desc" class="form-control  @error('title') is-invalid @enderror" value="" placeholder="Describe yourself here...">{{ $blog->details}}</textarea>
                    </div>
                    @error('details')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror

                </div>
            </div>

            <div class="ibox">
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-lg-6 pb-2">
                            <h4>Upload Blog Thumbnail</h4>
                            <cite class="text-warning">*max-upload-size: 2mb</cite>
                            <br>
                            <cite class="text-warning">*image-dimension: 720px x 450px</cite>
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
                        <input type="text" class="form-control" name="meta_tags" id="meta_tags" placeholder="blogs meta tags..." value="{{$blog->meta_tags}}" />
                         @error('meta_tags')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="meta_keys" id="meta_keys" placeholder="blogs meta keywords..." value="{{$blog->meta_keys}}" />
                         @error('meta_keys')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <textarea name="meta_desc" class="form-control" rows="5" style="resize: none;" placeholder="bolgs meta description...">{{$blog->meta_desc}}</textarea>
                        @error('meta_desc')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>


            <div class="ibox">
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="author_name"><b>Author Name</b></label>
                                <input type="text" class="form-control  @error('title') is-invalid @enderror" name="author_name"  value="{{ $blog->author_name }}" placeholder="enter author name...">
                                @error('author_name')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label><b>Author Image</b> <span class="text-warning">(50*50 size)</span> </label>
                            <div id="author_image">
                            </div>
                            @error('author_image')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror

                        </div>
                    </div>
                </div>
            </div>



            <div style="display: flex; justify-content: center;">
                <button type="button" class="btn btn-outline-primary" onclick="event.preventDefault(); document.getElementById('formBlog').submit();">Update</button>
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
@include('admin.blogs.scripts')
@endpush

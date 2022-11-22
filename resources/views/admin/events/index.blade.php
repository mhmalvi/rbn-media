@extends('admin.layouts.app')
@section('title', 'Show Event')

@push('css')
    <link href="{{asset('assets/admin/css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">
    <style>
        .devider{
            display: inline;
            padding: 0px 5px;
        }
    </style>
@endpush

@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>So far you have created!!!</h5>
            </div>
            <div class="ibox-content">

                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                        <thead>
                            <tr class="text-center">
                              
                                <th>#</th>
                                <th>Title</th>
                                <th>Location</th>
                                <th>Thumbnail</th>
                                <th>Event Date</th>
                                <th>Starting Date</th>
                                <th>Ending Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @isset($events)
                                @php
                                    $i = 1;
                                @endphp
                                @foreach($events as $event)
                                @php
                                    $date = date("M d, Y", strtotime($event->created_at));
                                @endphp
                                    <tr class="text-center">
                                        <td>{{$i++}}</td>
                                        <td class="text-left">
                                            {{$event->title}}
                                            <div class="row">
                                              {{--   <div class="col-md-1">
                                                    <a href="{{ route('admin.event.show',$event->slug)}}">view</a>

                                                </div> --}}
                                                <div class="col-md-1">
                                                    <a href="{{ route('admin.event.edit',$event->slug )}}">edit</a>
                                                </div>
                                                <div class="col-md-1">
                                                    <a href="#" data-slug="{{$event->slug}}" class="del">delete</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                           {{$event->location}}
                                        </td>
                                        <td class="text-center">
                                        <img src="{{ asset('assets/admin/image/events/'.$event->thumbnail) }}" width="150" height="150">
                                        </td>
                                        <td>{{$event->event_date}}</td>
                                        <td>{{$event->starting_date}}</td>
                                        <td>{{$event->ending_date}}</td>
                                     @php

                                        $today = date('Y-m-d',time());

                                        if($event->ending_date >= $today){
                                            $status = 'Active';
                                            $status_class = 'btn-success';
                                        }else{
                                            $status = 'Expired';
                                            $status_class = 'btn-danger';

                                        }

                                     @endphp
                                        <td><button class="btn {{ $status_class }}">{{ $status }}</button></td>

                                    </tr>
                                @endforeach
                            @endisset
                        </tbody>
                    </table>
                    {{-- {!! $dataTable->table() !!} --}}
                </div>
                {{-- {!! $dataTable->script() !!} --}}
            </div>
        </div>
    </div>
    </div>
</div>
@endsection

@push('js')
    <script src="{{asset('assets/admin/js/plugins/dataTables/datatables.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/plugins/dataTables/dataTables.bootstrap4.min.js')}}"></script>

    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });
    </script>

    <script>
        $(document).ready(function(){
            $('.del').on('click', function(){
                var slug = $(this).data('slug');
                // $('.dataTables-example').DataTable().ajax.reload();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                if(confirm('Are you sure to delete?')){
                        $.ajax({
                        url: "/admin/event/" + slug,
                        method: 'DELETE',
                        success: function(data){
                            if(data['status'] == 200){
                                location.reload(true);
                            }
                        }
                    })
                }
            })
        })
    </script>
@endpush
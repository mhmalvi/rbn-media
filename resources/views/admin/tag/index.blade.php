@extends('admin.layouts.app')

@push('css')
    <link href="{{asset('assets/admin/css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">
@endpush

@section('content')
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Add New Tag</h4>

                        <form action="{{route('admin.tag.add')}}" method="post" autocomplete="off">
                            @csrf

                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Enter new tag here...">
                            </div>

                            <button type="submit" class="btn btn-sm btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>So far you have created!!!</h5>
                    </div>
                    <div class="ibox-content">
        
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="tag">
                            <thead>
                                <tr class="text-center">
                                 
                                    <th>#</th>
                                    <th>Action</th>
                                    <th>Tag</th>
                                    <th>Created at</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($data)
                                @php
                                $i = 1;
                                @endphp
                                @foreach ($data as $row)
                                    @php
                                        $date = date("M d, Y", strtotime($row->created_at));
                                    @endphp
                                    <tr class="text-center">
                                        
                                        <td>{{$i++}}</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline btn-primary edit" data-slug="{{$row->tag_slug}}">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline btn-danger del" data-slug="{{$row->tag_slug}}">

                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$date}}</td>
                                    </tr>
                                @endforeach
                                @endisset
                            </tbody>
                        </table>
                    </div>
        
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.tag.edit')
@endsection

@push('js')
    <script src="{{asset('assets/admin/js/plugins/dataTables/datatables.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/plugins/dataTables/dataTables.bootstrap4.min.js')}}"></script>

    <script>
        $(document).ready(function(){
            $('#tag').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
               /* buttons: [
                    {extend: 'copy'},
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
                ]*/

            });

        });
    </script>

    <script>
        $(document).ready(function(){
            $('.edit').on('click', function(){
                var slug = $(this).data('slug');

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: "tag/" + slug + "/edit",
                    method: 'GET',
                    dataType: "json",
                    success: function(data){
                        if(data){
                           
                            var slug = data.tag_slug;
                            var name = data.name;

                            $("#slug").val(slug);
                            $("#name").val(name);
                            $("#tagEdit").modal('show');
                        }
                    }
                })
            })
        })
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
                        url: "tag/" + slug,
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
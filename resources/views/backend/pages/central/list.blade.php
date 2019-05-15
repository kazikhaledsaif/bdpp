@extends('backend.layouts.app')
@section('title' , 'Central Committee List')

@section('content')

    <div class="box">
        <div class="box-header">
            <div class="col-md-3">
                <h3 class="box-title">Central Committee List</h3>
            </div>

            <div class="col-md-6 ">
                <a href="{{ route('backend.central-committee.add') }}" class="btn btn-success">Add Central Committee</a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="product-list" class="table table-bordered table-striped table-responsive table-hover" >
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Details</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Image</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($committees  as $committee )
                <tr>
                    <td>{{ $committee->id }}</td>

                    <td>{{ $committee->name }}</td>

                    <td>{{ $committee->ccPost->title }}</td>

                    <td>{{ $committee->details }}  </td>
                    <td>{{ $committee->email }}</td>
                    <td>{{ $committee->mobile }}</td>
                    <td>
                        <img src="{{ asset("uploads/".$committee->image)  }}" alt="" width="100px" height="100px">

                     </td>

                    <td>{{ date("d-m-Y", strtotime( $committee->created_at))}}</td>

                    <td>
                  {{--      <a href="{{ route('frontend.notice.show',['id'=> $notice->slug]) }}">
                            <i class="fa fa-search-plus fa-lg" style="color:green" aria-hidden="true"></i> </a> --}}&nbsp;
                        <a href="{{ route('backend.central-committee.edit',['id'=> $committee->id]) }}">
                            <i class="fa fa-pencil-square fa-lg" style="color:dodgerblue" aria-hidden="true"></i> </a> &nbsp;
                        <a href=""><i class="fa fa-trash fa-lg deletebtn" data-id="{{ $committee->id }}"
                            data-name="{{ $committee->name }}" data-token="{{ @csrf_token() }}" style="color:red"></i> </a>
                    </td>

                </tr>
                @endforeach

                </tbody>
                <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Details</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Image</th>
                    <th>Date</th>
                    <th>Action</th>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>


@endsection


@push('scripts')


    {{-- DataTable js --}}
    <link rel="stylesheet" href="{{asset('backend/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <script src="{{asset('backend/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{asset('backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script>
        $(function () {
            $('#product-list').DataTable();
        });

        $(document).on('click', '.deletebtn', function (e) {
            e.preventDefault();
            var id = $(this).data('id');
            var token = $(this).data('token');

            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'Danger',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type: "POST",
                        url: "{{route('backend.central-committee.destroy')}}",
                        data: {id:id, _token:token},
                        success: function (data) {
                            if(data.success === true){ // if true (1)
                                setTimeout(function(){  // wait for 5 secs(2)
                                    location.reload();  // then reload the page.(3)
                                }, 100);
                            }
                        }
                    });

                    swal(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }
            });

        });

        $(document).ajaxStop(function(){
            window.location.reload();
        });


    </script>
@endpush
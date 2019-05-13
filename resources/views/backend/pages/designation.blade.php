@extends('backend.layouts.app')
@section('title' , 'Designation List')

@section('content')

    <div class="box">
        <div class="box-header">
            <div class="col-md-3">
                <h3 class="box-title">Designation list</h3>
            </div>

            <div class="col-md-6 ">
                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#designationForm">Add New Designation</a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="product-list" class="table table-bordered table-striped table-responsive table-hover" >
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Designation</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($designation as $key)
                    <tr>
                        <td>{{ $key['id'] }}</td>
                        <td>{{ $key['title'] }}</td>

                        <td>
                            {{--      <a href="{{ route('frontend.notice.show',['id'=> $key->id]) }}">
                                      <i class="fa fa-search-plus fa-lg" style="color:green" aria-hidden="true"></i> </a> --}}&nbsp;
                            <a href="{{ route('backend.notice.edit',['id'=> $key->id]) }}">
                                <i class="fa fa-pencil-square fa-lg" style="color:dodgerblue" aria-hidden="true"></i> </a> &nbsp;
                            <a href=""><i class="fa fa-trash fa-lg deletebtn" data-id="{{ $key->id }}"
                                          data-name="{{ $key->title }}" data-token="{{ @csrf_token() }}" style="color:red"></i> </a>
                        </td>

                    </tr>
                @endforeach

                </tbody>
                <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Designation</th>
                    <th>Action</th>
                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>


    <div class="modal fade" id="designationForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">New Designation</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('backend.designation.store') }}" method="POST">

                    <div class="modal-body mx-3">
                        @csrf
                        <div class="md-form mb-5">
                            <label data-error="wrong" data-success="right" for="defaultForm-email">Designation Name</label>
                            <input type="text" id="defaultForm-email" class="form-control validate" name="title" required>
                        </div>

                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        {{--                        <button class="btn btn-warning"> <span aria-hidden="true">Cancel</span>--}}
                        {{--                        </button>--}}
                        <button type="button" class="btn btn-warning" data-dismiss="modal" aria-label="Close">
                            Cancel
                        </button>

                        <button class="btn btn-success">Create</button>
                    </div>
                </form>
            </div>
        </div>
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
            var name = $(this).data('name');
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
                        url: "{{ route('backend.notice.destroy') }}",
                        data: {id:id, _token:token},
                        success: function (data) {
                            if(data.success === true){ // if true (1)
                                setTimeout(function(){  // wait for 5 secs(2)
                                    location.reload();  // then reload the page.(3)
                                }, 500);
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


    </script>
@endpush
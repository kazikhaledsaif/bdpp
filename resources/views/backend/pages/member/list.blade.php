@extends('backend.layouts.app')
@section('title' , 'General Member List')
@push('top_scripts')
    <!-- all your includes for Jquery, Bootstrap (optionally), Datatables above -->

    <!-- Now we include the actual plugin -->


    <!-- Finally you define your DataTables table and include a filterDropDown section in the initialisation array -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

    <script>
        // initialising dt table
        $(document).ready(function() {

            $('#product-list').DataTable({
                // Definition of filter to display
                // format is: idx of column to filter on => text to show as filter name or NULL to use corresponding column header as name
                // also works great with invisible columns e.g. for using unformated data as input
                filterDropDown: {
                    columns: [
                        {
                            idx: 5,
                            title: "Payment status",

                        }

                    ],
                    bootstrap: true
                }
            } );
        } );
    </script>

@endpush
@section('content')

    <div class="box">
        <div class="box-header">
            <div class="col-md-3">
                <h3 class="box-title">General Member list</h3>
            </div>
{{--
            <div class="col-md-6 ">
                <a href="#" class="btn btn-success">Add Notice</a>
            </div>--}}
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="product-list" class="table table-bordered table-striped table-responsive table-hover" >
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>

                    <th>Reference</th>
                    <th>Transaction ID</th>
                    <th>Payment status</th>
                    <th>Date</th>
                    <th>Action</th>
                    <th>Payment</th>
                </tr>
                </thead>
                <tbody>
                @foreach($members  as $member )
                <tr>
                    <td>{{ $member->id }}</td>

                    <td> {{ str_limit($member->name, $limit= 20, $end = ' ....') }}</td>
                    <td>{{ $member->email }}</td>

                    <td>{{ $member->reference }}</td>
                    <td>{{ $member->payment_txid }}</td>

                        @if($member['payment_status'] == 'pending')
                            <td class="badge badge-primary " style=" background-color: yellow ; color: #000000; font-size: 15px"  > {{ $member->payment_status }}</td>
                        @elseif($member['payment_status'] == 'successful')
                            <td class="badge badge-success " style="background-color: green ; color: #000000;font-size: 15px" >{{ $member->payment_status }}</td>
                        @elseif($member['payment_status'] == 'canceled')
                            <td class="badge badge-danger" style="background-color: red ; color: #000000;font-size: 15px" >{{ $member->payment_status }}</td>
                        @endif

                    <td>{{ date("d-m-Y", strtotime( $member->created_at))}}</td>

                    <td>&nbsp;&nbsp;&nbsp;
                      <a href="{{ route('backend.general-member.edit',['id'=> $member->id]) }}">
                            <i class="fa fa-search-plus fa-lg" style="color:green" aria-hidden="true"></i> </a>&nbsp;&nbsp;
                        <a href="{{ route('backend.general-member.edit',['id'=> $member->id]) }}">
                            <i class="fa fa-pencil-square fa-lg" style="color:dodgerblue" aria-hidden="true"></i> </a> &nbsp;&nbsp;
                        <a href=""><i class="fa fa-trash fa-lg deletebtn" data-id="{{ $member->id }}"
                            data-name="{{ $member->name }}" data-token="{{ @csrf_token() }}" style="color:red"></i> </a>&nbsp;
                    </td>
                    <td>

                        <a  href="{{ route('backend.general-member.successful',['id'=> $member->id]) }}">
                            <i class="fa fa-check fa-lg" style="color:green" aria-hidden="true"></i> </a>&nbsp;&nbsp;&nbsp;&nbsp;

                        <a href="{{ route('backend.general-member.canceled',['id'=> $member->id]) }}">
                            <i class="fa fa-close fa-lg" style="color:red" aria-hidden="true"></i> </a>&nbsp;

                    </td>

                </tr>
                @endforeach

                </tbody>
                <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Reference</th>
                    <th>Transaction ID</th>
                    <th>Payment status</th>
                    <th>Date</th>
                    <th>Action</th>
                    <th>Payment</th>
                </tr>
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
                        url: "{{route('backend.general-member.destroy')}}",
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
    <script src="{{asset('backend/plugins/filter/filterDropDown.min.js') }}"></script>
@endpush
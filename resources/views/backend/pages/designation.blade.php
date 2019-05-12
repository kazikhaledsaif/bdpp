@extends('backend.layouts.app')

@section('title','Designation')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Designation
            <small>  <a href="#" class="btn btn-success" data-toggle="modal" data-target="#designationForm">Add New Designation</a>
            </small>
        </h1>
        <ol class="breadcrumb">
            <li><a href=""><i class="fa fa-dashboard"></i> Admin</a></li>
            <li class="active">Designation</li>
        </ol>
    </section>

    <section class="content container">

        <hr>

        <div class="row mt-5">
        <table class="table table-striped table-hover dataTable">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Action</th>
            </tr>
            @foreach($designation as $key)
            <tr>
                <td>{{ $key['id'] }}</td>
                <td>{{ $key['title'] }}</td>
                <td>
                    #/#
                </td>
            </tr>
            @endforeach

        </table>
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
                                <label data-error="wrong" data-success="right" for="defaultForm-email">Title Name</label>
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



    </section>
    <!-- /.content -->
@endsection
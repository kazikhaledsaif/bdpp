@extends('backend.layouts.app')
@section('title' , 'Central Committee Edit')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Update Central Committee info
                <small>{{ $central->name }} </small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('backend.dashboard') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
                <li><a href=" {{ route('backend.notice.list') }}"><i class="fa fa-shopping-cart"></i> Central Committee</a></li>
                <li class="active">Edit Central Committee</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <div class="product">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <!-- form start -->
                    <form class="form-horizontal" action="{{ route('backend.central-committee.update') }}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" class="form-control"  name="id" value="{{ $central->id }}" >
                        <div class="box-body">

                            <div class="form-group">
                                <label for="inputTitle" class="col-sm-2 control-label">Name</label>

                                <div class="col-sm-10">
                                    <input type="text" value=" {{ $central->name }} " class="form-control" id="inputTitle" name="centralName" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputTitle" class="col-sm-2 control-label">Designation</label>

                                <div class="col-sm-10">
                                    <input type="text"  value=" {{ $central->designation }} " class="form-control" id="inputTitle" name="centralDesignation" placeholder="Designation" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputTitle" class="col-sm-2 control-label">Details</label>

                                <div class="col-sm-10">
                                    <input type="text"  value=" {{ $central->details }} " class="form-control" id="inputTitle" name="centralDetails" placeholder="Details" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputTitle" class="col-sm-2 control-label">Email</label>

                                <div class="col-sm-10">
                                    <input type="email"  value=" {{ $central->email }} " class="form-control" id="inputTitle" name="centralEmail" placeholder="Email" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputTitle" class="col-sm-2 control-label">Mobile</label>

                                <div class="col-sm-10">
                                    <input type="text"  value=" {{ $central->mobile }} " class="form-control" id="inputTitle" name="centralMobile" placeholder="Mobile" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="inputTitle" class="col-sm-2 control-label">Photo</label>

                                <div class="col-sm-10">
                                    <img src="{{ asset("uploads/".$central->image)  }}" alt="" width="200px" height="200px">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="thumbImg" class="col-sm-2 control-label">Upload New Photo</label>

                                <div class="col-sm-6">
                                    <input type="file" class="form-control" id="thumbImg" placeholder="Upload file"
                                           name="centralPhoto">
                                </div>
                            </div>

                        </div>

                        <div class="box-footer">
                            <a href="#" class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-info pull-right">Update</button>

                        </div>
                        </form>

                </div>
                <!-- /.box -->
            </div>

        </section>
        <!-- /.content -->

    @endsection

@section('script')
    <script>



        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('inputDescription')
            //bootstrap WYSIHTML5 - text editor
            $('.textarea').wysihtml5()
        })
    </script>
@endsection

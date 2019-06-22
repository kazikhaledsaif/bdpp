@extends('backend.layouts.app')
@section('title' , 'Notice')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            New Notice
            <small>Create a new notice</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li class="active">New Notice</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="product">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <!-- form start -->
                <form accept-charset="UTF-8" class="form-horizontal" action="{{ route('backend.notice.create') }}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">

                        <div class="form-group">
                            <label for="inputTitle" class="col-sm-2 control-label">Title</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputTitle" name="noticeTitle" placeholder="Title" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputNoticeSlug" class="col-sm-2 control-label">Slug</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputNoticeSlug" name="noticeSlug"
                                       placeholder="Slug (auto generate)" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="inputDescription" class="col-sm-2 control-label">Description</label>

                            <div class="col-sm-10">
                                <textarea class="form-control" id="inputDescription" name="noticeDescription"
                                          placeholder="Description"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="thumbImg" class="col-sm-2 control-label">Upload File</label>

                            <div class="col-sm-6">
                                <input type="file" class="form-control" id="thumbImg" placeholder="Upload file"
                                       name="noticeFile">
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="#" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-info pull-right">Create</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box -->
        </div>

    </section>
    <!-- /.content -->

@endsection

@section('script')
    <script>
        $('#inputTitle').on('input',function (e) {
                 console.log($(this).val());
            $.get('{{ route('backend.notice.slug') }}',
                { 'title' : $(this).val() },
                function (data) {
                    $('#inputNoticeSlug').val(data.slug);
                }
            );

        });

    $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('inputDescription')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
    })
    </script>
@endsection
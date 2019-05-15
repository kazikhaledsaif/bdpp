@extends('backend.layouts.app')
@section('title' , 'Notice Edit')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Update Product info
                <small>{{ $notice->name }} </small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('backend.dashboard') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
                <li><a href=" {{ route('backend.notice.list') }}"><i class="fa fa-shopping-cart"></i> Notice</a></li>
                <li class="active">Edit Notice</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <div class="product">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <!-- form start -->
                    <form class="form-horizontal" action="{{ route('backend.notice.update') }}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" class="form-control"  name="id" value="{{ $notice->id }}" >

                        <div class="box-body">

                            <div class="form-group">
                                <label for="inputTitle" class="col-sm-2 control-label">Title</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputTitle" name="noticeTitle"
                                           placeholder="Title" value="{{ $notice->title }}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputNoticeSlug" class="col-sm-2 control-label">Slug</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputNoticeSlug" name="noticeSlug"
                                           value="{{ $notice->slug }}"    placeholder="Slug (auto generate)" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="inputDescription" class="col-sm-2 control-label">Description</label>

                                <div class="col-sm-10">
                                <textarea class="form-control" id="inputDescription" name="noticeDescription"
                                          placeholder="Description">{{ $notice->description }}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="thumbImg" class="col-sm-2 control-label">File </label>

                                <div class="col-sm-6">
{{--                                    <iframe src="https://docs.google.com/gview?url={{asset("uploads/".$notice->file)}}" style="" width="100%" height="500px" allowfullscreen="" webkitallowfullscreen=""></iframe>--}}

{{--                                        <iframe src="http://docs.google.com/gview? url={{asset("uploads/".$notice->file)}}"--}}
{{--                                            style="width:600px; height:500px;" frameborder="0">--}}
{{--                                    </iframe>--}}
                                {{--    <embed name="plugin" src="{{asset("uploads/".$notice->file)}}" type="application/pdf">--}}
                                  {{--  <object type="application/pdf" width="400" height="500" data="{{asset("uploads/".$notice->file)}}"></object>--}}
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="thumbImg" class="col-sm-2 control-label">Upload File </label>

                                <div class="col-sm-6">
                                    <input type="file" class="form-control" id="thumbImg" placeholder="Upload file"

                                           name="noticeFile">
                                </div>
                            </div>


                        </div> <div class="box-footer">
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

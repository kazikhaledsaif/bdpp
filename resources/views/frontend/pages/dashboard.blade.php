@extends('frontend.theme.master')

@section('title','Dashboard')

@section('content')

    <div class="container mt-5">

        <div class="row">
            <div class="jumbotron-fluid text-black">
                <h4 class="text-green">Hello Someone,</h4>
                <p class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Ab alias ipsum molestiae totam. Alias, animi at deserunt distinctio dolorem ea eaque ipsum iure magnam quas totam ut, voluptatibus.
                </p>
            </div>
        </div>

        <div class="row mt-5">

            <div class="col-4">
                <div class="card bg-success">

                </div>
            </div>


        </div>





    </div>

@endsection

@push('script')
    <script>
        $('body').scrollspy({ target: '#list-example' })
    </script>
@endpush
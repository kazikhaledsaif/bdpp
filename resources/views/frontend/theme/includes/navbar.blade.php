
<nav class="navbar-default bg-menu" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <img class="img-responsive" src="{{ asset('frontend/img/bango.png') }} ">
        </div>
        <!--/.navbar-header-->
        <!--/.navbar-collapse-->
    </div>
</nav>

<nav class="navbar navbar-expand-lg  bg-menu ">
    <div class="container ">
        <div class="navbar-translate text-black">
            <a class="navbar-brand" href="../bdpp/"   data-placement="bottom" >
                <span>    </span>
            </a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end  bg-menu text-black" id="navigation">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand">
                    </div>
                    <div class="col-12 collapse-close text-right">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="tim-icons icon-simple-remove"></i>
                        </button>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav m-auto">

                <li class="nav-item active">
                    <a class="nav-link " href="index.html">
                        {{ __('nav.home') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#pablo">
                        {{ __('nav.central') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="#pablo">
                        {{ __('nav.district') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="#pablo">
                        {{ __('nav.division') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="#pablo">
                        {{ __('nav.form') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('lang', ['locale' => __('nav.locale') ] ) }}">
                        {{ __('nav.lang') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
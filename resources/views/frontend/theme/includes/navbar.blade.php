
<nav class="navbar-default bg-menu-image" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <img class="img-responsive" src="{{ asset('frontend/img/bango.png') }} ">
        </div>
    </div>
</nav>

<nav class="navbar navbar-expand-lg bg-menu nav-shadow">
    <div class="container ">
        <div class="navbar-translate text-black">
            <a class="navbar-brand" href="../bdpp/" data-placement="bottom" >
                <span> </span>
            </a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end bg-menu text-black" id="navigation">
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
                    <a class="nav-link " href="{{ route('frontend.index') }}">
                        {{ __('nav.home') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('frontend.notice.list') }}">
                        {{ __('nav.notice') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('frontend.centralCommittee.list') }}">
                        {{ __('nav.central') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('frontend.districtCommittee.list') }}">
                        {{ __('nav.district') }}
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link " >
                        {{ __('nav.department') }}
                    </a>
                    <div class="dropdown-content">
                        <a href="{{ route('frontend.departmentCommittee.show',['id' => 'সরকারি']) }}"> {{ __('nav.government') }}</a>
                        <a href="{{ route('frontend.departmentCommittee.show',['id' => 'বেসরকারী']) }}"> {{ __('nav.non-government') }}</a>
                        <a href="{{ route('frontend.departmentCommittee.show',['id' => 'অন্যান্য']) }}"> {{ __('nav.other') }}</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{{ route('frontend.generalMember.form') }}">
                        {{ __('nav.form') }}
                    </a>
                </li>


                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('nav.login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('nav.register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('frontend.dashboard') }}">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('logout') }}"
                           onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>

                @endguest

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('lang', ['locale' => __('nav.locale') ] ) }}">
                        {{ __('nav.lang') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
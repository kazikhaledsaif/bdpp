<!DOCTYPE html>
<html lang="en">

@include('frontend.theme.includes.head')

<body class="index-page">
<!-- Navbar -->

@include('frontend.theme.includes.navbar')


@yield('content')



@include('frontend.theme.includes.footer')


@include('frontend.theme.includes.script')
@stack('script')

</body>

</html>
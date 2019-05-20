<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href=" {{ asset('frontend/img/apple-icon.png') }} ">
    <link rel="icon" type="image/png" href="{{ asset('frontend/img/favicon.png') }}  ">
    <title>
        @yield('title') • BDPP • Bangabandhu Diploma Engineer Porishod
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="{{ asset('frontend/css/nucleo-icons.css') }} " rel="stylesheet" />
    <!-- CSS Files -->
    <link href="{{ asset('frontend/css/blk-design-system.css?v=1.0.0') }}" rel="stylesheet" />

    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/stylesheet.css') }}  ">

    <style>
        .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #D6D275;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black !important;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            font-size: 1.2em;
        }

        .dropdown-content a:hover {background-color: #D6D275;}

        .dropdown:hover .dropdown-content {display: block;}

        .dropdown:hover .dropbtn {background-color: #3e8e41;}
    </style>
    @yield('css')

</head>
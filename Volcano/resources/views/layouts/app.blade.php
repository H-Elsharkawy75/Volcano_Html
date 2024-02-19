<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <!-- title -->
    <title>Volcano</title>
    <meta name="description" content="" />
    <meta name="author" content="lgauthor">
    <!-- favicon -->
    <link rel="shortcut icon" href="images/new/logoIcon.png">
    <!-- animation -->
    <link rel="stylesheet" href="css/animate.css" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- font-awesome icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!-- themify-icons -->
    <link rel="stylesheet" href="css/themify-icons.css" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.transitions.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <!-- magnific popup -->
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <!-- base -->
    <link rel="stylesheet" href="css/base.css" />
    <!-- elements -->
    <link rel="stylesheet" href="css/elements.css" />
    <!-- responsive -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!--[if IE 9]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" />
        <![endif]-->
    <!--[if IE]>
            <script src="{{ asset('js/html5shiv.min.js') }}"></script>
        <![endif]-->
</head>

<body>
    @include('layouts.navbar')


        @yield('content')


    @include('layouts.footer')
    <!-- javascript libraries -->
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.appear.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/smooth-scroll.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- wow animation -->
    <script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
    <!-- owl carousel -->
    <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- images loaded -->
    <script type="text/javascript" src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- isotope -->
    <script type="text/javascript" src="{{ asset('js/jquery.isotope.min.js') }}"></script>
    <!-- magnific popup -->
    <script type="text/javascript" src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <!-- navigation -->
    <script type="text/javascript" src="{{ asset('js/jquery.nav.js') }}"></script>
    <!-- equalize -->
    <script type="text/javascript" src="{{ asset('js/equalize.min.js') }}"></script>
    <!-- fit videos -->
    <script type="text/javascript" src="{{ asset('js/jquery.fitvids.js') }}"></script>
    <!-- number counter -->
    <script type="text/javascript" src="{{ asset('js/jquery.countTo.js') }}"></script>
    <!-- time counter  -->
    <script type="text/javascript" src="{{ asset('js/counter.js') }}"></script>
    <!-- twitter Fetcher  -->
    <script type="text/javascript" src="{{ asset('js/twitterFetcher_min.js') }}"></script>
    <!-- main -->
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    <!-- purchase -->
    <link rel="stylesheet" href="../incs/css/purchase.css" />
    <script type="text/javascript" src="{{ asset('../incs/js/purchase.js') }}"></script>
</body>

</html>

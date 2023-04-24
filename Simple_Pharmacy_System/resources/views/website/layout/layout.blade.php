<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from tunatheme.com/tf/html/vicodin-preview/vicodin/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Apr 2023 16:18:30 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Vicodin Pharmacy</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="{{ asset ('webAssets/img/favicon.png')}}" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="{{ asset ('webAssets/css/font-icons.css')}}">
    <!-- plugins css -->
    <link rel="stylesheet" href="{{ asset ('webAssets/css/plugins.css')}}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset ('webAssets/css/style.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset ('webAssets/css/responsive.css')}}">
</head>

<body>

<!-- include navbar -->
@include('website.layout.navbar')


<!-- yeild body -->
@yield('body')


<!--include footer-->
@include('website.layout.footer')



  <!-- preloader area start -->
  <div class="preloader d-none" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- All JS Plugins -->
    <script src="{{ asset ('webAssets/js/plugins.js')}}"></script>
    <!-- Main JS -->
    <script src="{{ asset ('webAssets/js/main.js')}}"></script>
  
</body>

</html>
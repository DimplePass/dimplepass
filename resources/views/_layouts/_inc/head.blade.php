  <head>
    <meta charset="utf-8">
    <title>Dimple Pass</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Dimple Pass - National Park Discounts">
    <meta name="keywords" content="">
    <meta name="author" content="Dimple Pass">
    <!-- Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	{{-- Page Meta Info set on Specific View.--}}
	@yield('meta-page')

	{{-- Social Graph Meta Info set on Specific View. --}}
	@yield('meta-og')

    <!-- Favicon and Apple Icons-->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="apple-touch-icon" href="touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="180x180" href="touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="167x167" href="touch-icon-ipad-retina.png">

    {{-- @TODO-BJ - Get Webpack working correctly so that we can remove these and use the Laravel Mix asset. --}}
    {{-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc --}}
    <link rel="stylesheet" media="screen" href="css/vendor.min.css">
    <link id="mainStyles" rel="stylesheet" media="screen" href="css/styles.min.css">

    {{-- Laravel Mix created file --}}
    {{-- <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css" media="screen"> --}}

    <!-- Modernizr-->
    <script src="js/modernizr.min.js"></script>

  </head>
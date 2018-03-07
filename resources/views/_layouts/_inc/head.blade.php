  <head>

    <meta charset="utf-8">

    {{-- Laravel CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- SEO Meta Tags --}}
    @yield('meta-page')
    <meta name="author" content="Dimple Pass">

	{{-- Social Graph Meta Info set on Specific View. --}}
	@yield('meta-og')

    {{-- Favicon and Apple Icons --}}
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="apple-touch-icon" href="touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="180x180" href="touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="167x167" href="touch-icon-ipad-retina.png">

    {{-- Mobile Specific Meta Tag --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    {{-- Laravel Mix created file --}}
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css" media="screen">

    {{-- Modernizr --}}
    <script src="/js/modernizr.min.js"></script>

    {{--  Global site tag (gtag.js) - Google Analytics --}}
    @if(\App::environment('production'))
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115046513-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-115046513-1');
    </script>
    @endif
    
  </head>
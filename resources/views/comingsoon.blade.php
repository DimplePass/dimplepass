<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Dimple Pass</title>
    {{-- SEO Meta Tags --}}
    <meta name="description" content="Dimple Pass - National Park Discounts">
    <meta name="keywords" content="">
    <meta name="author" content="Dimple Pass">
    {{-- Mobile Specific Meta Tag --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    {{-- Page Meta Info set on Specific View.--}}
    @yield('meta-page')

    {{-- Social Graph Meta Info set on Specific View. --}}
    @yield('meta-og')

    {{-- Favicon and Apple Icons --}}
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="apple-touch-icon" href="touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="180x180" href="touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="167x167" href="touch-icon-ipad-retina.png">

    {{-- Laravel Mix created file --}}
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css" media="screen">

    {{-- Modernizr --}}
    <script src="js/modernizr.min.js"></script>

  </head>

  {{-- Body --}}
  <body>

    {{-- Off-Canvas Wrapper --}}
    <div class="offcanvas-wrapper">
      {{-- Page Content --}}
      <div class="row no-gutters">
        <div class="col-md-8 fh-section" style="background-image: url(img/coming-soon-bg.jpg);">
          <span class="overlay" style="background-color: #504537; opacity: .75;"></span>
          <div class="d-flex flex-column fh-section py-5 px-3 justify-content-between">
            <div class="w-100 text-center">
              {{-- <div class="d-inline-block mb-5" style="width: 129px;"><img class="d-block" src="/img/logo/logo-dimple.png" alt="Dimple Pass"></div> --}}
              <h1 class="text-white mt-5"><strong>The Dimple Pass</strong></h1>
							<h1 class="text-white text-normal mt-3 mb-2">Exclusive National Park Travel Discounts</h1>
              <h3 class="text-white text-normal mb-2">discounted. simple. happy</h1>
              <div class="col-md-6 offset-md-3 my-5"><hr></div>
              <h5 class="text-white text-normal opacity-80 mt-5 mb-4">Introducing Yellowstone on March 17th, 2018</h5>
              <div class="countdown countdown-inverse" data-date-time="03/17/2018 12:00:00">
                <div class="item">
                  <div class="days">00</div><span class="days_ref">Days</span>
                </div>
                <div class="item">
                  <div class="hours">00</div><span class="hours_ref">Hours</span>
                </div>
                <div class="item">
                  <div class="minutes">00</div><span class="minutes_ref">Mins</span>
                </div>
                <div class="item">
                  <div class="seconds">00</div><span class="seconds_ref">Secs</span>
                </div>
              </div>
              <div class="pt-3 hidden-md-up"><a class="btn btn-primary scroll-to" href="#notify"><i class="icon-bell"></i>&nbsp;Notify Me!</a></div>
            </div>
            <div class="w-100 text-center">
              <p class="text-white mb-2">(307) 690-9788</p><a class="navi-link-light" href="mailto:info@dimplepass.com">info@dimplepass.com</a>
              <div class="pt-3">
								<a class="social-button shape-circle sb-facebook sb-light-skin" href="#"><i class="socicon-facebook"></i></a>
								<a class="social-button shape-circle sb-twitter sb-light-skin" href="#"><i class="socicon-twitter"></i></a>
								<a class="social-button shape-circle sb-instagram sb-light-skin" href="#"><i class="socicon-instagram"></i></a>
							</div>
            </div>
          </div>
        </div>
        <div class="col-md-4 fh-section" id="notify" data-offset-top="-1">
          <div class="d-flex flex-column fh-section py-5 px-3 justify-content-center align-items-center">
            <div class="text-center" style="max-width: 500px;">
              <div class="h1 text-normal mb-2">Notify Me!</div>
              <h5 class="text-normal text-muted mb-4">Let me know when I can purchase a Dimple Pass.</h5>
              <form>
                <div class="form-group">
                  <input class="form-control" type="text" placeholder="Name" required>
                </div>
                <div class="form-group">
                  <input class="form-control" type="email" placeholder="Email Address" required>
                </div>
                <button class="btn btn-primary" type="submit"><i class="icon-mail"></i>&nbsp;Get Notified</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Backdrop --}}
    <div class="site-backdrop"></div>

    {{-- JavaScript (jQuery) libraries, and plugins --}}
    <script src="{{ mix('/js/app.js') }}" type="text/javascript"></script>
  </body>
</html>
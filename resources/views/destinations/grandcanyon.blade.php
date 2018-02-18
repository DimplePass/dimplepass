@extends('_layouts.body')

@section('meta-page')
  <title>The Dimple Pass | Save Money on National Park Travel</title>
  <meta name="description" content="Meta Description Here" />
@stop

@section('meta-og')
  <meta property="og:type" content="article"/>
  <meta property="og:title" content="OG Title Here"/>
  <meta property="og:url" content="{{ Request::url() }}"/>
  <meta property="og:image" content="OG Image URL Here."/>
  <meta property="og:site_name" content="Dimple Pass"/>
  <meta property="og:description" content="OG Description Here."/>
  <meta property="og:locale" content="en_US"/>
@stop

@section('logo-tag')
Grand Canyon National Park
@stop

@section('content')

{{-- Hero Slider --}}
<section class="hero-slider" style="background-image: url(/img/destinations/grandcanyon-1920x580.jpg);">
  <div class="container padding-top-8x">
    <div class="row">
      <div class="col-md-9 col-lg-8 col-xl-7 padding-bottom-2x text-md-left text-center">
        <div class="hero-overlay">
          <h1 class="mb-2 white-color">The Best of @yield('logo-tag')</h1>
          <h2 class="mt-0 mb-2 white-color"><strong>One Pass. <span class="dp-warning">24</span> Discounts.</strong></h2>               
        </div>
    </div>
  </div>
</section>

{{-- Page Content --}}
<div class="container padding-bottom-3x mb-1 mt-5">
  <div class="row">
    {{-- Vendor Discounts --}}
    <div class="col-xl-9 col-lg-8 order-lg-2">
      {{-- Dimple Pass CTA Bar --}}
      <div class="shop-toolbar padding-bottom-1x mb-2">
        <div class="column">
          <h2 class="mb-0"><strong>The Grand Canyon Dimple Pass</strong></h2>
          <h3 class="mb-0 dp-warning">Summer 2018 <small>May 15 - October 15</small></h3>
          <h6 class="mt-o">Dates may vary per vendor.</h6>
        </div>
        <div class="column">
          <h2><strong></strong><a href="/checkout" class="btn btn-primary btn-lg btn-block">Buy the <strong>$26</strong> pass</a></h2>
        </div>
      </div>
      {{-- Vendor Listing --}}
      <div class="product-card product-list city2">
        <a class="product-thumb" href="#">
          {{-- <div class="product-badge text-danger">50% Off</div> --}}
          <img src="/img/vendors/gca/sample-450x290.jpg" alt="Zion Discounts">
        </a>
        <div class="product-info">
          <h3 class="product-title">
            Vendor Name Goes Here
          </h3>
          {{-- <h4 class="product-price">
            <del>$99.99</del>$49.99
          </h4> --}}
          <p class="hidden-xs-down">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore odit officiis illo perferendis deserunt, ipsam dolor ad dolorem eaque veritatis harum facilis aliquid id doloribus incidunt quam beatae, soluta magni alori sedum quanto.</p>
          <div class="product-buttons">
            <h4><i class="icon-tag dp-success"></i> 30% Off Entry <small>(one time)</small></h4>
            <ul class="list-unstyled text-sm">
              <li><span class="opacity-50">Season:</span> May 15 - October 15</li>
              <li><span class="opacity-50">Monday-Friday:</span> 9.00 am - 8.00 pm</li>
              <li><span class="opacity-50">Saturday:</span> 10.00 am - 6.00 pm</li>
              <li><a href="#">Visit Website</a></li>
            </ul>
          </div>
        </div>
      </div>
      {{-- Vendor Listing --}}
      <div class="product-card product-list city3">
        <a class="product-thumb" href="#">
          {{-- <div class="product-badge text-danger">50% Off</div> --}}
          <img src="/img/vendors/gca/sample-450x290.jpg" alt="Zion Discounts">
        </a>
        <div class="product-info">
          <h3 class="product-title">
            Vendor Name Goes Here
          </h3>
          {{-- <h4 class="product-price">
            <del>$99.99</del>$49.99
          </h4> --}}
          <p class="hidden-xs-down">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore odit officiis illo perferendis deserunt, ipsam dolor ad dolorem eaque veritatis harum facilis aliquid id doloribus incidunt quam beatae, soluta magni alori sedum quanto.</p>
          <div class="product-buttons">
            <h4><i class="icon-tag dp-success"></i> 30% Off Entry <small>(one time)</small></h4>
            <ul class="list-unstyled text-sm">
              <li><span class="opacity-50">Season:</span> May 15 - October 15</li>
              <li><span class="opacity-50">Monday-Friday:</span> 9.00 am - 8.00 pm</li>
              <li><span class="opacity-50">Saturday:</span> 10.00 am - 6.00 pm</li>
              <li><a href="#">Visit Website</a></li>
            </ul>
          </div>
        </div>
      </div>
      {{-- Vendor Listing --}}
      <div class="product-card product-list city4">
        <a class="product-thumb" href="#">
          {{-- <div class="product-badge text-danger">50% Off</div> --}}
          <img src="/img/vendors/gca/sample-450x290.jpg" alt="Zion Discounts">
        </a>
        <div class="product-info">
          <h3 class="product-title">
            Vendor Name Goes Here
          </h3>
          {{-- <h4 class="product-price">
            <del>$99.99</del>$49.99
          </h4> --}}
          <p class="hidden-xs-down">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore odit officiis illo perferendis deserunt, ipsam dolor ad dolorem eaque veritatis harum facilis aliquid id doloribus incidunt quam beatae, soluta magni alori sedum quanto.</p>
          <div class="product-buttons">
            <h4><i class="icon-tag dp-success"></i> 30% Off Entry <small>(one time)</small></h4>
            <ul class="list-unstyled text-sm">
              <li><span class="opacity-50">Season:</span> May 15 - October 15</li>
              <li><span class="opacity-50">Monday-Friday:</span> 9.00 am - 8.00 pm</li>
              <li><span class="opacity-50">Saturday:</span> 10.00 am - 6.00 pm</li>
              <li><a href="#">Visit Website</a></li>
            </ul>
          </div>
        </div>
      </div>
      {{-- Vendor Listing --}}
      <div class="product-card product-list city5">
        <a class="product-thumb" href="#">
          {{-- <div class="product-badge text-danger">50% Off</div> --}}
          <img src="/img/vendors/gca/sample-450x290.jpg" alt="Zion Discounts">
        </a>
        <div class="product-info">
          <h3 class="product-title">
            Vendor Name Goes Here
          </h3>
          {{-- <h4 class="product-price">
            <del>$99.99</del>$49.99
          </h4> --}}
          <p class="hidden-xs-down">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore odit officiis illo perferendis deserunt, ipsam dolor ad dolorem eaque veritatis harum facilis aliquid id doloribus incidunt quam beatae, soluta magni alori sedum quanto.</p>
          <div class="product-buttons">
            <h4><i class="icon-tag dp-success"></i> 30% Off Entry <small>(one time)</small></h4>
            <ul class="list-unstyled text-sm">
              <li><span class="opacity-50">Season:</span> May 15 - October 15</li>
              <li><span class="opacity-50">Monday-Friday:</span> 9.00 am - 8.00 pm</li>
              <li><span class="opacity-50">Saturday:</span> 10.00 am - 6.00 pm</li>
              <li><a href="#">Visit Website</a></li>
            </ul>
          </div>
        </div>
      </div>
      {{-- Vendor Listing --}}
      <div class="product-card product-list city1">
        <a class="product-thumb" href="#">
          {{-- <div class="product-badge text-danger">50% Off</div> --}}
          <img src="/img/vendors/gca/sample-450x290.jpg" alt="Zion Discounts">
        </a>
        <div class="product-info">
          <h3 class="product-title">
            Vendor Name Goes Here
          </h3>
          {{-- <h4 class="product-price">
            <del>$99.99</del>$49.99
          </h4> --}}
          <p class="hidden-xs-down">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore odit officiis illo perferendis deserunt, ipsam dolor ad dolorem eaque veritatis harum facilis aliquid id doloribus incidunt quam beatae, soluta magni alori sedum quanto.</p>
          <div class="product-buttons">
            <h4><i class="icon-tag dp-success"></i> 30% Off Entry <small>(one time)</small></h4>
            <ul class="list-unstyled text-sm">
              <li><span class="opacity-50">Season:</span> May 15 - October 15</li>
              <li><span class="opacity-50">Monday-Friday:</span> 9.00 am - 8.00 pm</li>
              <li><span class="opacity-50">Saturday:</span> 10.00 am - 6.00 pm</li>
              <li><a href="#">Visit Website</a></li>
            </ul>
          </div>
        </div>
      </div>
      {{-- Vendor Listing --}}
      <div class="product-card product-list city1">
        <a class="product-thumb" href="#">
          {{-- <div class="product-badge text-danger">50% Off</div> --}}
          <img src="/img/vendors/gca/sample-450x290.jpg" alt="Zion Discounts">
        </a>
        <div class="product-info">
          <h3 class="product-title">
            Vendor Name Goes Here
          </h3>
          {{-- <h4 class="product-price">
            <del>$99.99</del>$49.99
          </h4> --}}
          <p class="hidden-xs-down">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore odit officiis illo perferendis deserunt, ipsam dolor ad dolorem eaque veritatis harum facilis aliquid id doloribus incidunt quam beatae, soluta magni alori sedum quanto.</p>
          <div class="product-buttons">
            <h4><i class="icon-tag dp-success"></i> 30% Off Entry <small>(one time)</small></h4>
            <ul class="list-unstyled text-sm">
              <li><span class="opacity-50">Season:</span> May 15 - October 15</li>
              <li><span class="opacity-50">Monday-Friday:</span> 9.00 am - 8.00 pm</li>
              <li><span class="opacity-50">Saturday:</span> 10.00 am - 6.00 pm</li>
              <li><a href="#">Visit Website</a></li>
            </ul>
          </div>
        </div>
      </div>
      {{-- Vendor Listing --}}
      <div class="product-card product-list city2">
        <a class="product-thumb" href="#">
          {{-- <div class="product-badge text-danger">50% Off</div> --}}
          <img src="/img/vendors/gca/sample-450x290.jpg" alt="Zion Discounts">
        </a>
        <div class="product-info">
          <h3 class="product-title">
            Vendor Name Goes Here
          </h3>
          {{-- <h4 class="product-price">
            <del>$99.99</del>$49.99
          </h4> --}}
          <p class="hidden-xs-down">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore odit officiis illo perferendis deserunt, ipsam dolor ad dolorem eaque veritatis harum facilis aliquid id doloribus incidunt quam beatae, soluta magni alori sedum quanto.</p>
          <div class="product-buttons">
            <h4><i class="icon-tag dp-success"></i> 30% Off Entry <small>(one time)</small></h4>
            <ul class="list-unstyled text-sm">
              <li><span class="opacity-50">Season:</span> May 15 - October 15</li>
              <li><span class="opacity-50">Monday-Friday:</span> 9.00 am - 8.00 pm</li>
              <li><span class="opacity-50">Saturday:</span> 10.00 am - 6.00 pm</li>
              <li><a href="#">Visit Website</a></li>
            </ul>
          </div>
        </div>
      </div>
      {{-- Vendor Listing --}}
      <div class="product-card product-list city3">
        <a class="product-thumb" href="#">
          {{-- <div class="product-badge text-danger">50% Off</div> --}}
          <img src="/img/vendors/gca/sample-450x290.jpg" alt="Zion Discounts">
        </a>
        <div class="product-info">
          <h3 class="product-title">
            Vendor Name Goes Here
          </h3>
          {{-- <h4 class="product-price">
            <del>$99.99</del>$49.99
          </h4> --}}
          <p class="hidden-xs-down">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore odit officiis illo perferendis deserunt, ipsam dolor ad dolorem eaque veritatis harum facilis aliquid id doloribus incidunt quam beatae, soluta magni alori sedum quanto.</p>
          <div class="product-buttons">
            <h4><i class="icon-tag dp-success"></i> 30% Off Entry <small>(one time)</small></h4>
            <ul class="list-unstyled text-sm">
              <li><span class="opacity-50">Season:</span> May 15 - October 15</li>
              <li><span class="opacity-50">Monday-Friday:</span> 9.00 am - 8.00 pm</li>
              <li><span class="opacity-50">Saturday:</span> 10.00 am - 6.00 pm</li>
              <li><a href="#">Visit Website</a></li>
            </ul>
          </div>
        </div>
      </div>
      {{-- Vendor Listing --}}
      <div class="product-card product-list city2">
        <a class="product-thumb" href="#">
          {{-- <div class="product-badge text-danger">50% Off</div> --}}
          <img src="/img/vendors/gca/sample-450x290.jpg" alt="Zion Discounts">
        </a>
        <div class="product-info">
          <h3 class="product-title">
            Vendor Name Goes Here
          </h3>
          {{-- <h4 class="product-price">
            <del>$99.99</del>$49.99
          </h4> --}}
          <p class="hidden-xs-down">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore odit officiis illo perferendis deserunt, ipsam dolor ad dolorem eaque veritatis harum facilis aliquid id doloribus incidunt quam beatae, soluta magni alori sedum quanto.</p>
          <div class="product-buttons">
            <h4><i class="icon-tag dp-success"></i> 30% Off Entry <small>(one time)</small></h4>
            <ul class="list-unstyled text-sm">
              <li><span class="opacity-50">Season:</span> May 15 - October 15</li>
              <li><span class="opacity-50">Monday-Friday:</span> 9.00 am - 8.00 pm</li>
              <li><span class="opacity-50">Saturday:</span> 10.00 am - 6.00 pm</li>
              <li><a href="#">Visit Website</a></li>
            </ul>
          </div>
        </div>
      </div>
      {{-- Vendor Listing --}}
      <div class="product-card product-list city4">
        <a class="product-thumb" href="#">
          {{-- <div class="product-badge text-danger">50% Off</div> --}}
          <img src="/img/vendors/gca/sample-450x290.jpg" alt="Zion Discounts">
        </a>
        <div class="product-info">
          <h3 class="product-title">
            Vendor Name Goes Here
          </h3>
          {{-- <h4 class="product-price">
            <del>$99.99</del>$49.99
          </h4> --}}
          <p class="hidden-xs-down">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore odit officiis illo perferendis deserunt, ipsam dolor ad dolorem eaque veritatis harum facilis aliquid id doloribus incidunt quam beatae, soluta magni alori sedum quanto.</p>
          <div class="product-buttons">
            <h4><i class="icon-tag dp-success"></i> 30% Off Entry <small>(one time)</small></h4>
            <ul class="list-unstyled text-sm">
              <li><span class="opacity-50">Season:</span> May 15 - October 15</li>
              <li><span class="opacity-50">Monday-Friday:</span> 9.00 am - 8.00 pm</li>
              <li><span class="opacity-50">Saturday:</span> 10.00 am - 6.00 pm</li>
              <li><a href="#">Visit Website</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    {{-- Sidebar --}}
    <div class="col-xl-3 col-lg-4 order-lg-1">
      <aside class="sidebar">
        <div class="padding-top-2x hidden-lg-up"></div>
        {{-- Filters --}}
        @include('/destinations/_inc/filters')
      </aside>
			<hr class="mb-5">
			<aside class="sticky text-center">
				<h2><a href="/checkout" class="btn btn-primary btn-lg btn-block">Buy the <strong>$26</strong> pass</a></h2>
      	<h5><a href="/how">How does it work?</a></h5>				
			</aside>
    </div>
  </div>
</div>

@stop

@section('scripts')
<script>

$("#filters :checkbox").click(function() {
  $(".product-card").fadeOut('fast');
  $("#filters :checkbox:checked").each(function() {
    $("." + $(this).val()).fadeIn('fast');
  });
});

</script>
@stop
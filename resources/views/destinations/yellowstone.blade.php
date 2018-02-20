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
Yellowstone National Park
@stop

@section('content')

{{-- Hero Slider --}}
<section class="hero-slider" style="background-image: url(/img/destinations/yellowstone-1920x580.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-lg-8 padding-bottom-2x text-md-left text-center hero-overlay">
        <div class="hero-text">
          <h1 class="mb-2 white-color">The Best of @yield('logo-tag')</h1>
          <h2 class="mt-0 mb-2 white-color"><strong>One Pass. <span class="dp-warning">24 Discounts.</span></strong></h2>               
        </div>
    </div>
  </div>
</section>

{{-- Page Content --}}
<div class="container padding-bottom-3x mb-1 mt-5">
  <div class="row">
    {{-- Vendor Discounts --}}
    <div class="col-xl-9 col-lg-9 col-md-9 order-md-2">
      {{-- Dimple Pass CTA Bar --}}
      <div class="shop-toolbar padding-bottom-1x mb-2">
        <div class="column">
          <h2 class="mb-0"><strong>The Yellowstone Dimple Pass</strong></h2>
          <h3 class="mb-0 dp-warning">Summer 2018 <small>May 15 - October 15</small></h3>
          <h6 class="mt-o">Dates may vary per vendor.</h6>
        </div>
        <div class="column">
          @if (Auth::user())
            <h2><strong></strong><a href="{{ route('checkout.payment') }}" class="btn btn-primary btn-lg btn-block">Buy the <strong>$26</strong> pass</a></h2>
          @else
            <h2><strong></strong><a href="{{ route('checkout.index') }}" class="btn btn-primary btn-lg btn-block">Buy the <strong>$26</strong> pass</a></h2>
          @endif
        </div>
      </div>
      {{-- Vendor Listing --}}
      <div class="product-card product-list city1">
        <a class="product-thumb" href="#">
          {{-- <div class="product-badge text-danger">50% Off</div> --}}
          <img src="/img/vendors/ynp/sk-bigking-450x290.jpg" alt="">
        </a>
        <div class="product-info">
          <h3 class="product-title">
            Snow King Mountain <small>Jackson, WY</small>
          </h3>
          <p class="hidden-xs-down">A one-day pass that includes one tour on the Treetop Adventure, and unlimited rides on all open activities including the Cowboy Coaster, Mini-Golf, Alpine Slide, Amaze’n Maze, Bungee Trampoline and Scenic Chairlift!</p>
          <div class="product-buttons">
            <h4><i class="icon-tag dp-success"></i> 25% Off Big King Pass <small>(one time)</small></h4>
            <h4 class="product-price">
              Adults / Juniors / Seniors <span class="dp-primary">|</span> <del>$125.00</del>$100
            </h4>
            <h4 class="product-price">
              Children <small>6 & under</small> <span class="dp-primary">|</span> <del>$50.00</del>$40
            </h4>
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
          <img src="/img/vendors/ynp/sk-chairlift-450x290.jpg" alt="">
        </a>
        <div class="product-info">
          <h3 class="product-title">
            Snow King Mountain <small>Jackson, WY</small>
          </h3>
          <p class="hidden-xs-down">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore odit officiis illo perferendis deserunt, ipsam dolor ad dolorem eaque veritatis harum facilis aliquid id doloribus incidunt quam beatae, soluta magni alori sedum quanto.</p>
          <div class="product-buttons">
            <h4><i class="icon-tag dp-success"></i> 30% Off Scenic Chairlift <small>(one time)</small></h4>
            <h4 class="product-price">
              Adults <small>13-64</small> <span class="dp-primary">|</span> <del>$20.00</del>$14.00
            </h4>
            <h4 class="product-price">
              Seniors <small>65 & up</small> <span class="dp-primary">|</span> <del>$15.00</del>$10.50
            </h4>
            <h4 class="product-price">
              Junoirs <small>12 & under</small> <span class="dp-primary">|</span> <del>$15.00</del>$10.50
            </h4>
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
          <img src="/img/vendors/ynp/sk-cowboycoaster-450x290.jpg" alt="">
        </a>
        <div class="product-info">
          <h3 class="product-title">
            Snow King Mountain <small>Jackson, WY</small>
          </h3>
          <p class="hidden-xs-down">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore odit officiis illo perferendis deserunt, ipsam dolor ad dolorem eaque veritatis harum facilis aliquid id doloribus incidunt quam beatae, soluta magni alori sedum quanto.</p>
          <div class="product-buttons">
            <h4><i class="icon-tag dp-success"></i> 30% Off Cowboy Coaster <small>(one time)</small></h4>
            <h4 class="product-price">
              Driver <small>54+" tall</small> <span class="dp-primary">|</span> <del>$20.00</del>$14.00
            </h4>
            <h4 class="product-price">
              Passenger <small>38+" tall</small> <span class="dp-primary">|</span> <del>$10.00</del>$7.00
            </h4>
            <h4 class="product-price">
              Junoirs <small>12 & under</small> <span class="dp-primary">|</span> <del>$15.00</del>$10.50
            </h4>
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
          <img src="/img/vendors/ynp/jhmr-tram-450x290.jpg" alt="">
        </a>
        <div class="product-info">
          <h3 class="product-title">
            Jackson Hole Mountain Resort <small>Teton Village, WY</small>
          </h3>
          <p class="hidden-xs-down">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore odit officiis illo perferendis deserunt, ipsam dolor ad dolorem eaque veritatis harum facilis aliquid id doloribus incidunt quam beatae, soluta magni alori sedum quanto.</p>
          <div class="product-buttons">
            <h4><i class="icon-tag dp-success"></i> 25% Off Tram Ride <small>(one time)</small></h4>
            <h4 class="product-price">
              Adult <small>18-64</small> <span class="dp-primary">|</span> <del>$42.00</del>$31.50
            </h4>
            <h4 class="product-price">
              Senior <small>65+</small> <span class="dp-primary">|</span> <del>$34.00</del>$25.50
            </h4>
            <h4 class="product-price">
              Junoirs <small>6-17</small> <span class="dp-primary">|</span> <del>$27.00</del>$20.25
            </h4>
            <ul class="list-unstyled text-sm">
              <li><span class="opacity-50">Season:</span> May 20 - October 8</li>
              <li><span class="opacity-50">Daily:</span> 9.00 am - 5.00 pm</li>
              <li><a href="#">Visit Website</a></li>
            </ul>
          </div>
        </div>
      </div>
      {{-- Vendor Listing --}}
      <div class="product-card product-list city2">
        <a class="product-thumb" href="#">
          {{-- <div class="product-badge text-danger">50% Off</div> --}}
          <img src="/img/vendors/ynp/jkh-ecotouradventures-450x290.jpg" alt="">
        </a>
        <div class="product-info">
          <h3 class="product-title">
            Eco Tour Adventures <small>Jackson, WY</small>
          </h3>
          <p class="hidden-xs-down">Top 10 Greatest Wildlife Tours in the world (TripAdvisor). Jackson Hole Eco Tour Adventures offers a variety of wildlife viewing in the Jackson Hole, Grand Teton, and Yellowstone Ecosystems.</p>
          <div class="product-buttons">
            <h4><i class="icon-tag dp-success"></i> 15% Off Full Day Wildlife Tour <small>(one time)</small></h4>
            <h4 class="product-price">
              Adult <small>over 11</small> <span class="dp-primary">|</span> <del>$290.00</del>$246.00
            </h4>
            <h4 class="product-price">
              Child <small>10 & under</small> <span class="dp-primary">|</span> <del>$240.00</del>$204.00
            </h4>
            <ul class="list-unstyled text-sm">
              <li><span class="opacity-50">Season:</span> May 15 - October 15</li>
              <li><span class="opacity-50">Monday - Sunday:</span> Leaving Jackson, WY at 8am</li>
              <li class="dp-danger">Reservation Required - Limited Availability - Book ASAP!</li>
              <li><a href="http://www.jhecotouradventures.com/Wildlife-Tours/yellowstone-lower-loop">Visit Website</a></li>
            </ul>
          </div>
        </div>
      </div>
      {{-- Vendor Listing --}}
      <div class="product-card product-list city4">
        <a class="product-thumb" href="#">
          {{-- <div class="product-badge text-danger">50% Off</div> --}}
          <img src="/img/vendors/ynp/gwdc-bears-450x290.jpg" alt="">
        </a>
        <div class="product-info">
          <h3 class="product-title">
            Grizzy and Wolf Discovery Center <small>West Yellowstone, MT</small>
          </h3>
          <p class="hidden-xs-down">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore odit officiis illo perferendis deserunt, ipsam dolor ad dolorem eaque veritatis harum facilis aliquid id doloribus incidunt quam beatae, soluta magni alori sedum quanto.</p>
          <div class="product-buttons">
            <h4><i class="icon-tag dp-success"></i> 30% Off Entry <small>(one time)</small></h4>
            <h4 class="product-price">
              Adult <small>13 and up</small> <span class="dp-primary">|</span> <del>$13.00</del>$9.10
            </h4>
            <h4 class="product-price">
              Senior <small>62+</small> <span class="dp-primary">|</span> <del>$12.25</del>$8.58
            </h4>
            <h4 class="product-price">
              Children <small>5-12</small> <span class="dp-primary">|</span> <del>$8.00</del>$5.60
            </h4>
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
          <img src="/img/vendors/ynp/imax-450x290.jpg" alt="">
        </a>
        <div class="product-info">
          <h3 class="product-title">
            Yellowstone Giant Screen - IMAX <small>West Yellowstone, MT</small>
          </h3>
          <p class="hidden-xs-down">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore odit officiis illo perferendis deserunt, ipsam dolor ad dolorem eaque veritatis harum facilis aliquid id doloribus incidunt quam beatae, soluta magni alori sedum quanto.</p>
          <div class="product-buttons">
            <h4><i class="icon-tag dp-success"></i> 30% Off Entry <small>(one time)</small></h4>
            <ul class="list-unstyled text-sm">
              <li><span class="opacity-50">Season:</span> May 15 - October 15</li>
              <li><span class="opacity-50">Monday-Friday:</span> 9.00 am - 8.00 pm</li>
              <li><span class="opacity-50">Saturday:</span> 10.00 am - 6.00 pm</li>
              <li class="dp-danger">Reservation Recommended</li>
              <li><a href="#">Visit Website</a></li>
            </ul>
          </div>
        </div>
      </div>
      {{-- Vendor Listing --}}
      <div class="product-card product-list city5">
        <a class="product-thumb" href="#">
          {{-- <div class="product-badge text-danger">50% Off</div> --}}
          <img src="/img/vendors/ynp/bb-museum-450x290.jpg" alt="">
        </a>
        <div class="product-info">
          <h3 class="product-title">
            Buffalo Bill Center of the West <small>Cody, WY</small>
          </h3>
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
          <img src="/img/vendors/ynp/gt-chairlift-450x290.jpg" alt="">
        </a>
        <div class="product-info">
          <h3 class="product-title">
            Grand Targhee Scenic Chairlift <small>Alta, WY</small>
          </h3>
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
          <img src="/img/vendors/ynp/jh-rodeo-450x290.jpg" alt="">
        </a>
        <div class="product-info">
          <h3 class="product-title">
            Jackson Hole Rodeo <small>Jackson, WY</small>
          </h3>
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
          <img src="/img/vendors/ynp/cdy-niterodeo-450x290.jpg" alt="">
        </a>
        <div class="product-info">
          <h3 class="product-title">
            Cody Night Rodeo <small>Cody, WY</small>
          </h3>
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
          <img src="/img/vendors/ynp/mtw-zipline-450x290.jpg" alt="">
        </a>
        <div class="product-info">
          <h3 class="product-title">
            Montana Whitewater Zipline <small>Gallatin, MT</small>
          </h3>
          <p class="hidden-xs-down">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore odit officiis illo perferendis deserunt, ipsam dolor ad dolorem eaque veritatis harum facilis aliquid id doloribus incidunt quam beatae, soluta magni alori sedum quanto.</p>
          <div class="product-buttons">
            <h4><i class="icon-tag dp-success"></i> 20% Off Zipline <small>(one time)</small></h4>
            <ul class="list-unstyled text-sm">
              <li><span class="opacity-50">Season:</span> May 15 - October 15</li>
              <li><span class="opacity-50">Monday-Friday:</span> 9.00 am - 8.00 pm</li>
              <li><span class="opacity-50">Saturday:</span> 10.00 am - 6.00 pm</li>
              <li class="dp-danger">Reservation Recommended</li>
              <li><a href="#">Visit Website</a></li>
            </ul>
          </div>
        </div>
      </div>
      {{-- Vendor Listing --}}
      <div class="product-card product-list city4">
        <a class="product-thumb" href="#">
          {{-- <div class="product-badge text-danger">50% Off</div> --}}
          <img src="/img/vendors/ynp/mtw-rafting-450x290.jpg" alt="">
        </a>
        <div class="product-info">
          <h3 class="product-title">
            Montana Whitewater Rafting <small>Gallatin, MT</small>
          </h3>
          <p class="hidden-xs-down">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore odit officiis illo perferendis deserunt, ipsam dolor ad dolorem eaque veritatis harum facilis aliquid id doloribus incidunt quam beatae, soluta magni alori sedum quanto.</p>
          <div class="product-buttons">
            <h4><i class="icon-tag dp-success"></i> 20% Off 1/2 Day Whitewater Trip <small>(one time)</small></h4>
            <ul class="list-unstyled text-sm">
              <li><span class="opacity-50">Season:</span> May 15 - October 15</li>
              <li><span class="opacity-50">Monday-Friday:</span> 9.00 am - 8.00 pm</li>
              <li><span class="opacity-50">Saturday:</span> 10.00 am - 6.00 pm</li>
              <li class="dp-danger">Reservation Required</li>
              <li><a href="#">Visit Website</a></li>
            </ul>
          </div>
        </div>
      </div>
      {{-- Vendor Listing --}}
      <div class="product-card product-list city2">
        <a class="product-thumb" href="#">
          {{-- <div class="product-badge text-danger">50% Off</div> --}}
          <img src="/img/vendors/ynp/dp-horseback-450x290.jpg" alt="">
        </a>
        <div class="product-info">
          <h3 class="product-title">
            The Diamond P Ranch <small>West Yellowstone, MT</small>
          </h3>
          <p class="hidden-xs-down">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore odit officiis illo perferendis deserunt, ipsam dolor ad dolorem eaque veritatis harum facilis aliquid id doloribus incidunt quam beatae, soluta magni alori sedum quanto.</p>
          <div class="product-buttons">
            <h4><i class="icon-tag dp-success"></i> 20% Off Horseback Ride <small>(one time)</small></h4>
            <ul class="list-unstyled text-sm">
              <li><span class="opacity-50">Season:</span> May 15 - October 15</li>
              <li><span class="opacity-50">Monday-Friday:</span> 9.00 am - 8.00 pm</li>
              <li><span class="opacity-50">Saturday:</span> 10.00 am - 6.00 pm</li>
              <li class="dp-danger">Reservation Required</li>
              <li><a href="#">Visit Website</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    {{-- Sidebar --}}
    <div class="col-xl-3 col-lg-3 col-md-3 order-md-1">
      <div class="sticky">
        <aside class="sidebar">
          {{-- Filters --}}
          @include('/destinations/_inc/filters')
        </aside>
  			<hr class="mb-5 hidden-sm-down">
  			<aside class="text-center">
          @if (Auth::user())
            <h2><strong></strong><a href="{{ route('checkout.payment') }}" class="btn btn-primary btn-lg btn-block">Buy the <strong>$26</strong> pass</a></h2>
          @else
            <h2><strong></strong><a href="{{ route('checkout.index') }}" class="btn btn-primary btn-lg btn-block">Buy the <strong>$26</strong> pass</a></h2>
          @endif
        	<h5><a href="/how">How does it work?</a></h5>				
  			</aside>
      </div>
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
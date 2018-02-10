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
<section class="hero-slider" style="background-image: url(/img/hero-slider/main-bg1.jpg);">
    <div class="item">
      <div class="container padding-top-9x">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-12 padding-bottom-2x text-md-left text-center">
            <div class="from-bottom">
              <div class="h1 mb-2 gray-lighter">Save up to <strong class="dp-warning hero-cta">$289</strong> on the best of</div>
              <h1 class="mb-2"><strong class="dp-white">@yield('logo-tag')</strong></h1>
              <h5 class="mt-0 mb-2 gray-lighter">View Wildlife and Geysers in America's 1st National Park.</h5>            
          </div>
        </div>
      </div>
    </div>
</section>

{{-- Page Content --}}
<div class="container padding-bottom-3x mb-1 mt-5">
  <div class="row">
    {{-- Vendor Discounts --}}
    <div class="col-xl-9 col-lg-8 order-lg-2">
      {{-- Add Dimple Pass to Cart --}}
      <div class="row mb-3">
        <div class="col-md-2">
          <div class="form-group{{ $errors->has('numAdults') ? ' has-error' : '' }} form-horizontal">
              {!! Form::label('numAdults', '# Adults @ $24') !!}
              {!! Form::text('numAdults', null, ['class' => 'form-control text-center']) !!}
              <small class="text-danger">{{ $errors->first('numAdults') }}</small>
          </div>
        </div>
        <div class="col-md-1 mt-5">
          <h5>$<span class="numAdultsTotal">0</span></h5>
        </div>
        <div class="col-md-2">  
          <div class="form-group{{ $errors->has('numChildren') ? ' has-error' : '' }}">
              {!! Form::label('numChildren', '# Children @ $16') !!}
              {!! Form::text('numChildren', null, ['class' => 'form-control text-center']) !!}
              <small class="text-danger">{{ $errors->first('numChildren') }}</small>
          </div>
        </div>
        <div class="col-md-1 mt-5">
          <h5>$<span class="numChildrenTotal">0</span></h5>
        </div>
        <div class="col-md-3 mt-4 h1 text-center">$<span class="totalDue">0</span></div>
        <div class="col-md-2 text-left">
          <h2><strong></strong><a href="/checkout" class="btn btn-primary btn-lg">Add to My Cart</a></h2>
        </div>
      </div>
      {{-- Vendor Listing --}}
      <div class="product-card product-list">
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
      <div class="product-card product-list">
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
      <div class="product-card product-list">
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
      <div class="product-card product-list">
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
      <div class="product-card product-list">
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
      <div class="product-card product-list">
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
            <h4><i class="icon-tag dp-success"></i> $2 Off Entry <small>(one time)</small></h4>
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
      <div class="product-card product-list">
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
      <div class="product-card product-list">
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
      <div class="product-card product-list">
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
      <div class="product-card product-list">
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
      <div class="product-card product-list">
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
      <div class="product-card product-list">
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
      <div class="product-card product-list">
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
    <div class="col-xl-3 col-lg-4 order-lg-1">
      <aside class="sidebar">
        <div class="padding-top-2x hidden-lg-up"></div>
        {{-- Filters --}}
        @include('/destinations/_inc/filters')
      </aside>
			<hr class="mb-5">
			<aside class="sticky text-center">
				<h2><a href="/checkout" class="btn btn-primary btn-lg">Buy the <strong>$26</strong> pass</a></h2>
      	<h5><a href="/how">How does it work?</a></h5>				
			</aside>
    </div>
  </div>
</div>

@stop

@section('scripts')
<script>

//////////
/// On Page Load
//////////

$(function() {

  /// Add total of all passes.
  addTotalDue();

});

$('#numAdults,#numChildren').on('keyup', function() {
  addTotalDue();
});

//////////
/// Add total due and display
//////////

function addTotalDue() {
  numAdults = 0;
  numChildren = 0;
  numAdults = $('#numAdults').val();
  numChildren = $('#numChildren').val();
  numAdultsTotal = (numAdults * 24); 
  $('.numAdultsTotal').text(addCommas(roundTo(numAdultsTotal, 0)));
  numChildrenTotal = (numChildren * 16);
  $('.numChildrenTotal').text(addCommas(roundTo(numChildrenTotal, 0)));
  totalDue = (numAdults * 24) + (numChildren *16);
  $('.totalDue').text(addCommas(roundTo(totalDue, 0)));
}

//////////
/// Adds Number Commas and decimal point.
//////////

function addCommas(nStr) {
  nStr += '';
  x = nStr.split('.');
  x1 = x[0];
  x2 = x.length > 1 ? '.' + x[1] : '';
  var rgx = /(\d+)(\d{3})/;
  while (rgx.test(x1)) {
    x1 = x1.replace(rgx, '$1' + ',' + '$2');
  }
  return x1 + x2;
}

//////////
/// Rounds current calculations.
//////////

function roundTo(num, places) {
  var calc = (Math.round(num * (Math.pow(10, places))) / (Math.pow(10, places)));
  return calc.toFixed(0);
}

</script>
@stop
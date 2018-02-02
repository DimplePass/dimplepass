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

{{-- Main Slider --}}
<section class="hero-slider" style="background-image: url(/img/hero-slider/main-bg1.jpg);">
    <div class="item">
      <div class="container padding-top-6x">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-12 padding-bottom-2x text-md-left text-center">
            <div class="from-bottom">
              <div class="h1 mb-2 gray-lighter">Save <strong class="dp-warning">$289</strong> in</div>
              <h1 class="mb-2"><strong class="dp-white">@yield('logo-tag')</strong></h1>
              <h5 class="mt-0 mb-2 gray-lighter">View Wildlife and Geysers in America's 1st National Park.</h5>            
          </div>
        </div>
      </div>
    </div>
</section>

<!-- Page Content-->
<div class="container padding-bottom-3x mb-1 mt-5">
  <div class="row">
    <!-- Coupons -->
    <div class="col-xl-9 col-lg-8 order-lg-2">
      <!-- Dimple Pass CTA Bar -->
      <div class="shop-toolbar padding-bottom-1x mb-2">
        <div class="column">
          <h2 class="mb-0"><strong>The Yellowstone Dimple Pass</strong></h2>
          <h3 class="dp-warning"><strong>$289</strong> possible savings</h3>
        </div>
        <div class="column">
          <h2><strong></strong><a href="/checkout" class="btn btn-primary btn-lg">Buy the <strong>$26</strong> pass</a></h2>
        </div>
      </div>
      <!-- Vendor Listing -->
      <div class="product-card product-list">
        <a class="product-thumb" href="#">
          {{-- <div class="product-badge text-danger">50% Off</div> --}}
          <img src="/img/vendors/ynp/sample-450x290.jpg" alt="Yellowstone Discounts">
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
            <h4><i class="icon-tag dp-success"></i> $5 Off Entry <small>(up to 4)</small></h4>
            <h6 class="dp-warning">$20 possible savings</h6>
            <ul class="list-unstyled text-sm">
              <li><span class="opacity-50">Season:</span> May 15 - October 15</li>
              <li><span class="opacity-50">Monday-Friday:</span> 9.00 am - 8.00 pm</li>
              <li><span class="opacity-50">Saturday:</span> 10.00 am - 6.00 pm</li>
              <li><a href="#">Visit Website</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Vendor Listing -->
      <div class="product-card product-list">
        <a class="product-thumb" href="#">
          {{-- <div class="product-badge text-danger">50% Off</div> --}}
          <img src="/img/vendors/ynp/sample-450x290.jpg" alt="Yellowstone Discounts">
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
            <h4><i class="icon-tag dp-success"></i> $5 Off Entry <small>(up to 4)</small></h4>
            <h6 class="dp-warning">$20 possible savings</h6>
            <ul class="list-unstyled text-sm">
              <li><span class="opacity-50">Season:</span> May 15 - October 15</li>
              <li><span class="opacity-50">Monday-Friday:</span> 9.00 am - 8.00 pm</li>
              <li><span class="opacity-50">Saturday:</span> 10.00 am - 6.00 pm</li>
              <li><a href="#">Visit Website</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Vendor Listing -->
      <div class="product-card product-list">
        <a class="product-thumb" href="#">
          {{-- <div class="product-badge text-danger">50% Off</div> --}}
          <img src="/img/vendors/ynp/sample-450x290.jpg" alt="Yellowstone Discounts">
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
            <h4><i class="icon-tag dp-success"></i> $5 Off Entry <small>(up to 4)</small></h4>
            <h6 class="dp-warning">$20 possible savings</h6>
            <ul class="list-unstyled text-sm">
              <li><span class="opacity-50">Season:</span> May 15 - October 15</li>
              <li><span class="opacity-50">Monday-Friday:</span> 9.00 am - 8.00 pm</li>
              <li><span class="opacity-50">Saturday:</span> 10.00 am - 6.00 pm</li>
              <li><a href="#">Visit Website</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Vendor Listing -->
      <div class="product-card product-list">
        <a class="product-thumb" href="#">
          {{-- <div class="product-badge text-danger">50% Off</div> --}}
          <img src="/img/vendors/ynp/sample-450x290.jpg" alt="Yellowstone Discounts">
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
            <h4><i class="icon-tag dp-success"></i> $5 Off Entry <small>(up to 4)</small></h4>
            <h6 class="dp-warning">$20 possible savings</h6>
            <ul class="list-unstyled text-sm">
              <li><span class="opacity-50">Season:</span> May 15 - October 15</li>
              <li><span class="opacity-50">Monday-Friday:</span> 9.00 am - 8.00 pm</li>
              <li><span class="opacity-50">Saturday:</span> 10.00 am - 6.00 pm</li>
              <li><a href="#">Visit Website</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Vendor Listing -->
      <div class="product-card product-list">
        <a class="product-thumb" href="#">
          {{-- <div class="product-badge text-danger">50% Off</div> --}}
          <img src="/img/vendors/ynp/sample-450x290.jpg" alt="Yellowstone Discounts">
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
            <h4><i class="icon-tag dp-success"></i> $5 Off Entry <small>(up to 4)</small></h4>
            <h6 class="dp-warning">$20 possible savings</h6>
            <ul class="list-unstyled text-sm">
              <li><span class="opacity-50">Season:</span> May 15 - October 15</li>
              <li><span class="opacity-50">Monday-Friday:</span> 9.00 am - 8.00 pm</li>
              <li><span class="opacity-50">Saturday:</span> 10.00 am - 6.00 pm</li>
              <li><a href="#">Visit Website</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Vendor Listing -->
      <div class="product-card product-list">
        <a class="product-thumb" href="#">
          {{-- <div class="product-badge text-danger">50% Off</div> --}}
          <img src="/img/vendors/ynp/sample-450x290.jpg" alt="Yellowstone Discounts">
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
            <h4><i class="icon-tag dp-success"></i> $5 Off Entry <small>(up to 4)</small></h4>
            <h6 class="dp-warning">$20 possible savings</h6>
            <ul class="list-unstyled text-sm">
              <li><span class="opacity-50">Season:</span> May 15 - October 15</li>
              <li><span class="opacity-50">Monday-Friday:</span> 9.00 am - 8.00 pm</li>
              <li><span class="opacity-50">Saturday:</span> 10.00 am - 6.00 pm</li>
              <li><a href="#">Visit Website</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Vendor Listing -->
      <div class="product-card product-list">
        <a class="product-thumb" href="#">
          {{-- <div class="product-badge text-danger">50% Off</div> --}}
          <img src="/img/vendors/ynp/sample-450x290.jpg" alt="Yellowstone Discounts">
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
            <h4><i class="icon-tag dp-success"></i> $5 Off Entry <small>(up to 4)</small></h4>
            <h6 class="dp-warning">$20 possible savings</h6>
            <ul class="list-unstyled text-sm">
              <li><span class="opacity-50">Season:</span> May 15 - October 15</li>
              <li><span class="opacity-50">Monday-Friday:</span> 9.00 am - 8.00 pm</li>
              <li><span class="opacity-50">Saturday:</span> 10.00 am - 6.00 pm</li>
              <li><a href="#">Visit Website</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Vendor Listing -->
      <div class="product-card product-list">
        <a class="product-thumb" href="#">
          {{-- <div class="product-badge text-danger">50% Off</div> --}}
          <img src="/img/vendors/ynp/sample-450x290.jpg" alt="Yellowstone Discounts">
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
            <h4><i class="icon-tag dp-success"></i> $5 Off Entry <small>(up to 4)</small></h4>
            <h6 class="dp-warning">$20 possible savings</h6>
            <ul class="list-unstyled text-sm">
              <li><span class="opacity-50">Season:</span> May 15 - October 15</li>
              <li><span class="opacity-50">Monday-Friday:</span> 9.00 am - 8.00 pm</li>
              <li><span class="opacity-50">Saturday:</span> 10.00 am - 6.00 pm</li>
              <li><a href="#">Visit Website</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Vendor Listing -->
      <div class="product-card product-list">
        <a class="product-thumb" href="#">
          {{-- <div class="product-badge text-danger">50% Off</div> --}}
          <img src="/img/vendors/ynp/sample-450x290.jpg" alt="Yellowstone Discounts">
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
            <h4><i class="icon-tag dp-success"></i> $5 Off Entry <small>(up to 4)</small></h4>
            <h6 class="dp-warning">$20 possible savings</h6>
            <ul class="list-unstyled text-sm">
              <li><span class="opacity-50">Season:</span> May 15 - October 15</li>
              <li><span class="opacity-50">Monday-Friday:</span> 9.00 am - 8.00 pm</li>
              <li><span class="opacity-50">Saturday:</span> 10.00 am - 6.00 pm</li>
              <li><a href="#">Visit Website</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Vendor Listing -->
      <div class="product-card product-list">
        <a class="product-thumb" href="#">
          {{-- <div class="product-badge text-danger">50% Off</div> --}}
          <img src="/img/vendors/ynp/sample-450x290.jpg" alt="Yellowstone Discounts">
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
            <h4><i class="icon-tag dp-success"></i> $5 Off Entry <small>(up to 4)</small></h4>
            <h6 class="dp-warning">$20 possible savings</h6>
            <ul class="list-unstyled text-sm">
              <li><span class="opacity-50">Season:</span> May 15 - October 15</li>
              <li><span class="opacity-50">Monday-Friday:</span> 9.00 am - 8.00 pm</li>
              <li><span class="opacity-50">Saturday:</span> 10.00 am - 6.00 pm</li>
              <li><a href="#">Visit Website</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Dimple Pass CTA Bar -->
      <div class="shop-toolbar padding-bottom-1x mb-2">
        <div class="column">
          <h2 class="mb-0"><strong>The Yellowstone Dimple Pass</strong></h2>
          <h3 class="dp-warning"><strong>$289</strong> possible savings</h3>
        </div>
        <div class="column">
          <h2><strong></strong><a href="/checkout" class="btn btn-primary btn-lg">Buy the <strong>$26</strong> pass</a></h2>
        </div>
      </div>
    </div>
    <!-- Sidebar -->
    <div class="col-xl-3 col-lg-4 order-lg-1">
      <aside class="sidebar">
        <div class="padding-top-2x hidden-lg-up"></div>
        <!-- Widget Town Filter-->
        <section class="widget">
          <h3 class="widget-title">Filter by Location</h3>
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="bsk">
            <label class="custom-control-label" for="bsk">Big Sky, MT <span class="text-muted">(2)</span></label>
          </div>
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="cdy">
            <label class="custom-control-label" for="cdy">Cody, WY <span class="text-muted">(3)</span></label>
          </div>
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="grd">
            <label class="custom-control-label" for="grd">Gardiner, MT<span class="text-muted">(2)</span></label>
          </div>
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="jkh">
            <label class="custom-control-label" for="jkh">Jackson Hole, WY <span class="text-muted">(5)</span></label>
          </div>
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="wys">
            <label class="custom-control-label" for="wys">West Yellowstone, MT <span class="text-muted">(3)</span></label>
          </div>
        </section>
        <!-- Widget Size Filter-->
        <section class="widget">
          <h3 class="widget-title">Filter by Type</h3>
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="type1">
            <label class="custom-control-label" for="type1">Museum <span class="text-muted">(2)</span></label>
          </div>
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="type2">
            <label class="custom-control-label" for="type2">Tram/Chairlift/Gondola <span class="text-muted">(2)</span></label>
          </div>
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="type3">
            <label class="custom-control-label" for="type3"> Rodeo<span class="text-muted">(2)</span></label>
          </div>
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="type4">
            <label class="custom-control-label" for="type4"> Boating<span class="text-muted">(2)</span></label>
          </div>
        </section>
        <h2><a href="/checkout" class="btn btn-primary btn-lg">Buy the <strong>$26</strong> pass</a></h2>
        <h5><a href="/how">How does it work?</a></h5>
      </aside>
    </div>
  </div>
</div>

@stop

@section('scripts')
<script>

</script>
@stop
@extends('_layouts.body')

@section('meta-page')
  <title>Meta Title Here</title>
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
Logo Tag Here
@stop

@section('content')

{{-- Main Slider --}}
<section class="hero-slider" style="background-image: url(img/hero-slider/main-bg1.jpg);">
  {{-- <div class="owl-carousel large-controls dots-inside" data-owl-carousel="{ &quot;nav&quot;: true, &quot;dots&quot;: true, &quot;loop&quot;: true, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 7000 }"> --}}
    <div class="item">
      <div class="container padding-top-8x">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-12 padding-bottom-2x text-md-left text-center">
            <div class="from-bottom">
							{{-- <img class="d-inline-block w-150 mb-4" src="img/hero-slider/logo02.png" alt="Puma"> --}}
              <div class="h1 mb-2 pt-1"><strong class="ap-white">National Park Travel Discounts</strong></div>
              <div class="h2 mb-0 pb-1">Save Money. Don't miss a thing!</div>
              <div class="h4 mt-0 mb-4" style="color:#fff;">discounted. simple. happy.</div>
            </div><a class="btn btn-primary scale-up delay-1" href="shop-grid-ls.html">How it works</a>
          </div>
          {{-- <div class="col-md-6 padding-bottom-2x mb-3"><img class="d-block mx-auto" src="img/destinations/yellowstone-300x300.jpg" alt="Puma Backpack"></div> --}}
        </div>
      </div>
    </div>
{{--       <div class="item">
      <div class="container padding-top-3x">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center">
            <div class="from-bottom"><img class="d-inline-block w-200 mb-4" src="img/hero-slider/logo01.png" alt="Converse">
              <div class="h2 text-body text-normal mb-2 pt-1">Chuck Taylor All Star II</div>
              <div class="h2 text-body text-normal mb-4 pb-1">for only <span class="text-bold">$59.99</span></div>
            </div><a class="btn btn-primary scale-up delay-1" href="shop-single.html">Shop Now</a>
          </div>
          <div class="col-md-6 padding-bottom-2x mb-3"><img class="d-block mx-auto" src="img/hero-slider/01.png" alt="Chuck Taylor All Star II"></div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="container padding-top-3x">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center">
            <div class="from-bottom"><img class="d-inline-block mb-4" src="img/hero-slider/logo03.png" style="width: 125px;" alt="Motorola">
              <div class="h2 text-body text-normal mb-2 pt-1">Smart Watch Moto 360 2nd</div>
              <div class="h2 text-body text-normal mb-4 pb-1">for only <span class="text-bold">$299.99</span></div>
            </div><a class="btn btn-primary scale-up delay-1" href="shop-single.html">Shop Now</a>
          </div>
          <div class="col-md-6 padding-bottom-2x mb-3"><img class="d-block mx-auto" src="img/hero-slider/03.png" alt="Moto 360"></div>
        </div>
      </div>
    </div> --}}
  {{-- </div> --}}
</section>
{{-- Top Categories --}}
<section class="container padding-top-3x">
  <h3 class="text-center mb-30">Top National Parks</h3>
  <div class="row">
    <div class="col-md-4 col-sm-6">
      <div class="card mb-30"><a class="card-img-tiles" href="shop-grid-ls.html">
          <div class="inner">
            <div class="main-img"><img src="img/destinations/yellowstone-315x278.jpg" alt="Yellowstone National Park"></div>
            <div class="thumblist"><img src="img/destinations/yellowstone-falls-155x137.jpg" alt="Category"><img src="img/destinations/yellowstone-bison-155x137.jpg" alt="Category"></div>
          </div></a>
        <div class="card-body text-center">
          <h4 class="card-title">Yellowstone</h4>
          <p class="text-muted">$324 total savings</p><a class="btn btn-outline-primary btn-sm" href="">View the <strong>$26</strong> Pass</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6">
      <div class="card mb-30"><a class="card-img-tiles" href="shop-grid-ls.html">
          <div class="inner">
            <div class="main-img"><img src="img/destinations/yosemite-315x278.jpg" alt="Category"></div>
            <div class="thumblist"><img src="img/destinations/yosemite-trees-155x137.jpg" alt="Category"><img src="img/destinations/yosemite-falls-155x137.jpg" alt="Category"></div>
          </div></a>
        <div class="card-body text-center">
          <h4 class="card-title">Yosemite</h4>
          <p class="text-muted">$289 total savings</p><a class="btn btn-outline-primary btn-sm" href="">View the <strong>$26</strong> Pass</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6">
      <div class="card mb-30"><a class="card-img-tiles" href="shop-grid-ls.html">
          <div class="inner">
            <div class="main-img"><img src="img/destinations/glacier-315x278.jpg" alt="Category"></div>
            <div class="thumblist"><img src="img/destinations/glacier-bus-155x137.jpg" alt="Category"><img src="img/destinations/glacier-kayak-155x137.jpg" alt="Category"></div>
          </div></a>
        <div class="card-body text-center">
          <h4 class="card-title">Glacier</h4>
          <p class="text-muted">$245 total savings</p><a class="btn btn-outline-primary btn-sm" href="">View the <strong>$26</strong> Pass</a>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center"><a class="btn btn-outline-secondary margin-top-none" href="shop-categories.html">View All Dimple National Parks</a></div>
</section>
{{-- Promo #1 --}}
<section class="container-fluid padding-top-3x">
  <div class="row justify-content-center">
    <div class="col-xl-5 col-lg-6 mb-30">
      <div class="rounded bg-faded position-relative padding-top-3x padding-bottom-3x"><span class="product-badge text-danger" style="top: 24px; left: 24px;">Limited Offer</span>
        <div class="text-center">
          <h3 class="h2 text-normal mb-1">National Park</h3>
          <h2 class="display-2 text-bold mb-2">Yellowstone</h2>
          <h4 class="h3 text-normal mb-4">$289 total savings</h4>
          <div class="countdown mb-3" data-date-time="03/17/2018 12:00:00">
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
          </div><br><a class="btn btn-primary margin-bottom-none" href="#">View the <strong>$26</strong> Pass</a>
        </div>
      </div>
    </div>
    <div class="col-xl-5 col-lg-6 mb-30" style="min-height: 270px;">
      <div class="img-cover rounded" style="background-image: url(img/destinations/yellowstone-800x800.jpg);"></div>
    </div>
  </div>
</section>
{{-- Featured Stories Carousel --}}
<section class="container padding-top-3x padding-bottom-3x">
  <h3 class="text-center mb-30">Visitor Stories</h3>
  <div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: true, &quot;loop&quot;: true, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 7000, &quot;margin&quot;: 30, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;576&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}} }">
    {{-- Story --}}
    <div class="grid-item">
      <div class="product-card">
        <a class="product-thumb" href="shop-single.html"><img src="img/stories/1.jpg" alt="Yosemite - Visitor Story"></a>
        <h3 class="product-title"><a href="shop-single.html">Happy Golucky</a></h3>
        <h4 class="product-price">Yosemite</h4>
        <div class="product-buttons">
          <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Read Her Story</button>
        </div>
      </div>
    </div>
    {{-- Story --}}
    <div class="grid-item">
      <div class="product-card">
        <a class="product-thumb" href="shop-single.html"><img src="img/stories/2.jpg" alt="Yosemite - Visitor Story"></a>
        <h3 class="product-title"><a href="shop-single.html">Happy Golucky</a></h3>
        <h4 class="product-price">Yosemite</h4>
        <div class="product-buttons">
          <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Read Her Story</button>
        </div>
      </div>
    </div>
    {{-- Story --}}
    <div class="grid-item">
      <div class="product-card">
        <a class="product-thumb" href="shop-single.html"><img src="img/stories/3.jpg" alt="Yosemite - Visitor Story"></a>
        <h3 class="product-title"><a href="shop-single.html">Happy Golucky</a></h3>
        <h4 class="product-price">Yosemite</h4>
        <div class="product-buttons">
          <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Read Her Story</button>
        </div>
      </div>
    </div>
    {{-- Story --}}
    <div class="grid-item">
      <div class="product-card">
        <a class="product-thumb" href="shop-single.html"><img src="img/stories/4.jpg" alt="Yosemite - Visitor Story"></a>
        <h3 class="product-title"><a href="shop-single.html">Happy Golucky</a></h3>
        <h4 class="product-price">Yosemite</h4>
        <div class="product-buttons">
          <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Read Her Story</button>
        </div>
      </div>
    </div>
    {{-- Story --}}
    <div class="grid-item">
      <div class="product-card">
        <a class="product-thumb" href="shop-single.html"><img src="img/stories/2.jpg" alt="Yosemite - Visitor Story"></a>
        <h3 class="product-title"><a href="shop-single.html">Happy Golucky</a></h3>
        <h4 class="product-price">Yosemite</h4>
        <div class="product-buttons">
          <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Read Her Story</button>
        </div>
      </div>
    </div>
    {{-- Story --}}
    <div class="grid-item">
      <div class="product-card">
        <a class="product-thumb" href="shop-single.html"><img src="img/stories/3.jpg" alt="Yosemite - Visitor Story"></a>
        <h3 class="product-title"><a href="shop-single.html">Happy Golucky</a></h3>
        <h4 class="product-price">Yosemite</h4>
        <div class="product-buttons">
          <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Read Her Story</button>
        </div>
      </div>
    </div>
    {{-- Story --}}
    <div class="grid-item">
      <div class="product-card">
        <a class="product-thumb" href="shop-single.html"><img src="img/stories/4.jpg" alt="Yosemite - Visitor Story"></a>
        <h3 class="product-title"><a href="shop-single.html">Happy Golucky</a></h3>
        <h4 class="product-price">Yosemite</h4>
        <div class="product-buttons">
          <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Read Her Story</button>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- Popular Brands --}}
<section class="bg-faded padding-top-3x padding-bottom-3x">
  <div class="container">
    <h3 class="text-center mb-30 pb-2">Our Promise to You</h3>
    <div class="row">
      <div class="col-md-3 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="img/services/01.png" alt="Shipping">
        <h6>Free Worldwide Shipping</h6>
        <p class="text-muted margin-bottom-none">Free shipping for all orders over $100</p>
      </div>
      <div class="col-md-3 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="img/services/02.png" alt="Money Back">
        <h6>Money Back Guarantee</h6>
        <p class="text-muted margin-bottom-none">We return money within 30 days</p>
      </div>
      <div class="col-md-3 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="img/services/03.png" alt="Support">
        <h6>24/7 Customer Support</h6>
        <p class="text-muted margin-bottom-none">Friendly 24/7 customer support</p>
      </div>
      <div class="col-md-3 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="img/services/04.png" alt="Payment">
        <h6>Secure Online Payment</h6>
        <p class="text-muted margin-bottom-none">We posess SSL / Secure Certificate</p>
      </div>
    </div>
  </div>
</section>

@stop

@section('scripts')
<script>

</script>
@stop
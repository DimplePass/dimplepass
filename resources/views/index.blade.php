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
Stop Planning. Start Playing. Save Money.
@stop

@section('content')

{{-- Main Slider --}}
<section class="hero-slider" style="background-image: url(img/hero-slider/main-bg1.jpg);">
    <div class="item">
      <div class="container padding-top-8x">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-12 padding-bottom-2x text-md-left text-center">
            <div class="from-bottom">
              <div class="h1 mb-2 pt-1"><strong class="dp-white">National Park Travel Discounts</strong></div>
              <div class="h2 mb-0 pb-1 gray-lighter">Save Money. Don't miss a thing!</div>
              <div class="h4 mt-0 mb-4 gray-lighter">Have the best vacation ever.</div>
            </div><a class="btn btn-primary btn-lg scale-up delay-1" href="/how">How it works</a>
          </div>
        </div>
      </div>
    </div>
</section>

{{-- Featured Destinations --}}
<section class="container padding-top-3x">
  {{-- <h3 class="text-center mb-30">Top National Parks</h3> --}}
  <div class="row">
    <div class="col-md-4 col-sm-6">
      <div class="card mb-30"><a class="card-img-tiles" href="/d/yellowstone">
          <div class="inner">
            <div class="main-img"><img src="/img/destinations/yellowstone-315x278.jpg" alt="Yellowstone National Park"></div>
            <div class="thumblist"><img src="/img/destinations/yellowstone-falls-155x137.jpg" alt="Category"><img src="/img/destinations/yellowstone-bison-155x137.jpg" alt="Category"></div>
          </div></a>
        <div class="card-body text-center">
          <h4 class="card-title">Yellowstone</h4>
          <h6 class="dp-warning"><strong>$289</strong> total savings</h6>
          <a class="btn btn-primary" href="/d/yellowstone">View <strong>16</strong> Discounts</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6">
      <div class="card mb-30"><a class="card-img-tiles" href="/d/yosemite">
          <div class="inner">
            <div class="main-img"><img src="/img/destinations/yosemite-315x278.jpg" alt="Category"></div>
            <div class="thumblist"><img src="/img/destinations/yosemite-trees-155x137.jpg" alt="Category"><img src="/img/destinations/yosemite-falls-155x137.jpg" alt="Category"></div>
          </div></a>
        <div class="card-body text-center">
          <h4 class="card-title">Yosemite</h4>
          <h6 class="dp-warning"><strong>$324</strong> total savings</h6>
          <a class="btn btn-primary" href="/d/yosemite">View <strong>16</strong> Discounts</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6">
      <div class="card mb-30"><a class="card-img-tiles" href="/d/zion">
          <div class="inner">
            <div class="main-img"><img src="/img/destinations/zion-315x278.jpg" alt="Category"></div>
            <div class="thumblist"><img src="/img/destinations/zion-overlook-155x137.jpg" alt="Category"><img src="/img/destinations/zion-subway-155x137.jpg" alt="Category"></div>
          </div></a>
        <div class="card-body text-center">
          <h4 class="card-title">Zion</h4>
          <h6 class="dp-warning"><strong>$245</strong> total savings</h6>
          <a class="btn btn-primary" href="/d/zion">View <strong>16</strong> Discounts</a>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center"><a class="btn btn-outline-secondary margin-top-none" href="/d">View All Dimple National Parks</a></div>
</section>

{{-- The Dimple Pass Commitment --}}
<section class="bg-faded padding-top-3x padding-bottom-3x mt-5">
  <div class="container">
    <h3 class="text-center mb-30 pb-2">Our Commitment to Your Vacation</h3>
    <div class="row commitmentFooter">
      <div class="col-md-3 col-sm-6 text-center mb-30">
        <a href="/thebest">
          <i class="w-90 dp-warning img-thumbnail mx-auto mb-3 pe-7s-camera"></i>
        </a>
        <h6>The Best Attractions</h6>
        <p class="text-muted margin-bottom-none">We strive to include only the best vendors available.</p>
         <p><a href="/thebest">Learn More</a></p>
      </div>
      <div class="col-md-3 col-sm-6 text-center mb-30">
        <a href="/vendor/promise">
          <i class="w-90 dp-warning img-thumbnail mx-auto mb-3 pe-7s-id"></i>
        </a>
        <h6>Hassle Free Redemption</h6>
        <p class="text-muted margin-bottom-none">We work with vendors to ensure redeeming your pass is hassle-free.</p>
        <p><a href="/vendor/promise">Learn More</a></p>
      </div>
      <div class="col-md-3 col-sm-6 text-center mb-30">
        <a href="/guarantee">
          <i class="w-90 dp-warning img-thumbnail mx-auto mb-3 pe-7s-umbrella"></i>
        </a>
        <h6>Money Back Guarantee</h6>
        <p class="text-muted margin-bottom-none">Not satisfied? We'll return money within 30 days of travel.</p>
         <p><a href="/guarantee">Learn More</a></p>
      </div>
      <div class="col-md-3 col-sm-6 text-center mb-30">
        <a href="/foundation">
          <i class="w-90 dp-warning img-thumbnail mx-auto mb-3 pe-7s-sun"></i>
        </a>
        <h6>100% to get Kids Outdoors</h6>
        <p class="text-muted margin-bottom-none">100% of our profits go to programs that get kids outdoors.</p>
         <p><a href="/foundation">Learn More</a></p>
      </div>
    </div>
  </div>
</section>

@stop

@section('scripts')
<script>

</script>
@stop
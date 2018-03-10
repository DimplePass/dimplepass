@extends('_layouts.body')

@section('meta-page')
  <title>Get Outside Pass - National Parks Discount Cards</title>
  <meta name="description" content="One Pass. Multiple Discounts. Save money and don't miss a thing during your National Park Vacation." />
  <meta name="keywords" content="national parks, travel, discounts, coupons, attractions, activities, things to do, Get Outside Pass">
@stop

@section('meta-og')
  <meta property="og:type" content="article"/>
  <meta property="og:title" content="Get Outside Pass - National Parks Discount Cards"/>
  <meta property="og:url" content="{{ Request::url() }}"/>
  <meta property="og:image" content="{{ url('/img/destinations/yellowstone-1200x630.jpg') }}"/>
  <meta property="og:site_name" content="Get Outside Pass"/>
  <meta property="og:description" content="One Pass. Multiple Discounts. Save money and don't miss a thing during your National Park Vacation."/>
  <meta property="og:locale" content="en_US"/>
@stop

@section('content')

{{-- Hero Slider --}}
<section class="hero-slider" style="background-image: url(/img/destinations/yellowstone-1920x580.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-lg-8 padding-bottom-2x text-md-left text-center hero-overlay">
        <div class="hero-text">
          <h1 class="mb-2 white-color">Save money. Don't miss a thing.</h1>
          <h2 class="mt-0 mb-2 white-color"><strong>National Park <span class="dp-warning">Discount Cards</span></strong></h2>               
        </div>
    </div>
  </div>
</section>

{{-- Pass Cards --}}
@include('_layouts._inc.passcards')

{{-- The Get Outside Pass Commitment --}}
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
@extends('_layouts.body')

@section('meta-page')
  <title>Get Outside Pass - Our Guarantee</title>
  <meta name="description" content="One Pass. Multiple Discounts. Save money and don't miss a thing during your National Park Vacation." />
  <meta name="keywords" content="national parks, travel, discounts, coupons, attractions, activities, things to do, Get Outside Pass">
@stop

@section('meta-og')
  <meta property="og:type" content="article"/>
  <meta property="og:title" content="Get Outside Pass - Our Guarantee"/>
  <meta property="og:url" content="{{ Request::url() }}"/>
  <meta property="og:image" content="{{ url('/img/destinations/yellowstone-1200x630.jpg') }}"/>
  <meta property="og:site_name" content="Get Outside Pass"/>
  <meta property="og:description" content="One Pass. Multiple Discounts. Save money and don't miss a thing during your National Park Vacation."/>
  <meta property="og:locale" content="en_US"/>
@stop

@section('content')

{{-- Hero Slider --}}
<section class="hero-slider mb-6" style="background-image: url(/img/destinations/yosemite-1920x580.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-lg-8 padding-bottom-2x text-md-left text-center hero-overlay">
        <div class="hero-text">
          <h1 class="mb-2 white-color">Our Guarantee</h1>
          <h2 class="mt-0 mb-2 white-color"><strong>We'll refund your money within 30 days of travel.</strong></h2>               
        </div>
    </div>
  </div>
</section>

{{-- Page Content --}}
<div class="container padding-bottom-2x mb-2">
  <div class="row padding-bottom-2x">
    <div class="col-md-5">
      <img class="d-block w-270 mx-auto rounded mb-3 hidden-sm-down" src="/img/features/yosemite-ladyarms-540x540.jpg" alt="">
    </div>
    <div class="col-md-7 text-md-left text-center">
      <div class="mt-30 hidden-md-up"></div>
      <h2>Not Happy with the Get Outside Pass?</h2>
      <h3>Just let us know and we'll give you a full refund.</h3>
      <div class="mb-4 mt-4"><hr></div>
      <h3>Easy refund process</h3>
      <i class="pe-7s-cash float-md-left gray-light mr-4" style="font-size: 6rem;"></i>
      <p>We understand that sometimes things go wrong that are beyond our control.  Maybe you weren't able to bookt that perfect excursion because the vendor didn't have availability.  Or, maybe it just rained the whole time and you didn't get out of the hotel room.  In any case, all you have to do is let us know within 30 days of returning home and we'll refund your Get Outside Pass purchase.</p>
    </div>
  </div>
</div>

@stop

@section('scripts')
<script>

</script>
@stop
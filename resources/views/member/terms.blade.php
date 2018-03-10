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
<section class="hero-slider mb-6" style="background-image: url(/img/destinations/grand-canyon-1920x580.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-lg-8 padding-bottom-2x text-md-left text-center hero-overlay">
        <div class="hero-text">
          <h1 class="mb-2 white-color">Member <span class="dp-warning">/</span> Terms & Conditions</h1>
          <h2 class="mt-0 mb-2 white-color"><strong>The small print, but there isn't much of it.</strong></h2>               
        </div>
    </div>
  </div>
</section>

{{-- Page Content --}}
<div class="container padding-bottom-2x mb-2">
  <div class="row">
    {{-- Side Menu --}}
    <div class="col-md-4">
      <img class="d-block w-270 mx-auto rounded mb-3 hidden-sm-down" src="/img/features/grand-canyon-havasu-540x540.jpg" alt="">
    </div>
    {{-- Content --}}
    <div class="col-md-8 text-md-left text-center">
      <div class="mt-30 hidden-md-up"></div>
      <h1>The Small Print <small>But, not much of it.</small></h1>
      <h3>These are some things to be aware of about your Get Outside Pass.</h3>
      <hr>
      <h3>Vendors May Not Have Availability <small>Book Early.</small></h3>
      <i class="pe-7s-ticket float-md-left gray-light mr-4" style="font-size: 6rem;"></i>
      <p>It is possible that vendors simply have no availablity during your travel dates.  This will more likely happen with smaller vendors during peak travel times.  Be sure to book early for any vendors that require a reservations.  Another way to ensure your booking is to look either before or after peak travel times.</p>
      <hr>
      <h3>Changes Can Happen <small>Be flexible.</small></h3>
      <i class="pe-7s-way float-md-left gray-light mr-4" style="font-size: 6rem;"></i>
      <p>We do our best to lock in vendors before we release each Pass.  Yet, sometimes changes will happen and it is possible that a discount may no longer be offerred.  We hope that you can find another great attraction or activity on the Pass to take the place of any that are no longer available.  Yet, if you possibly bought the pass for one particular offer and it is no longer valid, please remember our <a href="{{ route('utility.guarantee') }}">money back guarantee</a>.</p>
    </div>
  </div>
</div>

@stop

@section('scripts')
<script>

</script>
@stop
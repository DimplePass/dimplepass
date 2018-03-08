@extends('_layouts.body')

@section('meta-page')
  <title>Dimple Pass - The Best Attractions </title>
  <meta name="description" content="One Pass. Multiple Discounts. Save money and don't miss a thing during your National Park Vacation." />
  <meta name="keywords" content="national parks, travel, discounts, coupons, attractions, activities, things to do, dimple pass">
@stop

@section('meta-og')
  <meta property="og:type" content="article"/>
  <meta property="og:title" content="Dimple Pass - The Best Attractions "/>
  <meta property="og:url" content="{{ Request::url() }}"/>
  <meta property="og:image" content="{{ url('/img/destinations/yellowstone-1200x630.jpg') }}"/>
  <meta property="og:site_name" content="Dimple Pass"/>
  <meta property="og:description" content="One Pass. Multiple Discounts. Save money and don't miss a thing during your National Park Vacation."/>
  <meta property="og:locale" content="en_US"/>
@stop

@section('content')

{{-- Hero Slider --}}
<section class="hero-slider mb-6" style="background-image: url(/img/destinations/zion-1920x580.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-lg-8 padding-bottom-2x text-md-left text-center hero-overlay">
        <div class="hero-text">
          <h1 class="mb-2 white-color">Only the Best</h1>
          <h2 class="mt-0 mb-2 white-color"><strong>The best attractions for the best vacation ever.</strong></h2>               
        </div>
    </div>
  </div>
</section>

{{-- Page Content --}}
<div class="container padding-bottom-2x mb-2">
  <div class="row padding-bottom-2x">
    <div class="col-md-5">
      <img class="d-block w-270 mx-auto rounded mb-3 hidden-sm-down" src="/img/features/zion-path-540x540.jpg" alt="Hiking in Zion National Park">
    </div>
    <div class="col-md-7 text-md-left text-center">
      <div class="mt-30 hidden-md-up"></div>
      <h2>Your personal must-do list.</h2>
      <h3>Stop sifting through reviews and start booking your trip!</h3>
      <div class="mb-4 mt-4"><hr></div>
      <h3>Can't Miss Attractions & Activities</h3>
      <i class="pe-7s-diamond float-md-left gray-light mr-4" style="font-size: 6rem;"></i>
      <p>We're picky. We like to hand-select the vendors in each region using one simple rule. Is this the trip that we'd want to take if we had a few days to explore during our well deserved vacation? We strive to work with the best in class operators, resorts, restaurants and activity providers in each area. We place a heavy weight on those that encompass the culture and character of each unique destination. </p>
      <hr>
      <h3>Curated by Dimple Pass Members</h3>
      <i class="pe-7s-chat float-md-left gray-light mr-4" style="font-size: 6rem;"></i>
      <p>As the Dimple Membership grows, we acquire feedback from real travelers each and every day.  We ask that you get involved as well to let us know if you think we are missing something that should be included in the Pass.  We also ask that you let us know if we've included something that you didn't enjoy.</p>

    </div>
  </div>
</div>

@stop

@section('scripts')
<script>

</script>
@stop
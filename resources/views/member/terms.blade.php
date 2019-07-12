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
      <h3>A few things to be aware of about your Get Outside Pass.</h3>
      <hr>
      <h3>Not a Park Entrance Pass <small>Purchase at Park Gates.</small></h3>
      <i class="pe-7s-car float-md-left gray-light mr-4" style="font-size: 5rem;"></i>
      <p>The GO Pass is not a Park Entrance pass.  Park entrance fees are paid to the National Park Service and can be purchased at the gates to the Park as you enter.  If visiting more than one Park, be sure to get the Annual Pass.</p>
      <hr>
      <h3>Not valid with any other offer <small>It stands alone.</small></h3>
      <i class="pe-7s-close-circle float-md-left gray-light mr-4" style="font-size: 5rem;"></i>
      <p>The GO Pass can not be used with any other offer.  If there is another offer out there for one of the activities, you are not able to use the GO Pass in conjunction with the other offer.  The GO Pass can only be used on its own.</p>
      <hr>
      <h3>One Time Only <small>At each vendor.</small></h3>
      <i class="pe-7s-wristwatch float-md-left gray-light mr-4" style="font-size: 5rem;"></i>
      <p>The GO Pass can be used one time at each vendor.  Pass holders are not able to use the GO Pass multiple times for one vendor.  Although, be on the lookout as many vendors have their own specials if you are returning for a second or third time during your vacation.</p>
      <hr>
      <h3>Booking must be made by Pass Holder <small>No third parties.</small></h3>
      <i class="pe-7s-comment float-md-left gray-light mr-4" style="font-size: 5rem;"></i>
      <p>The GO Pass must be used by the original purchaser.  All bookings and reservations are to be booked directly and not through a third party agent or concierge.  Reservations will not be accepted from travel agents or hotel concierges.</p>
      <hr>
      <h3>Vendors may not have availability <small>Book early.</small></h3>
      <i class="pe-7s-ticket float-md-left gray-light mr-4" style="font-size: 5rem;"></i>
      <p>It is possible that vendors simply have no availablity during your travel dates.  This will more likely happen with smaller vendors during peak travel times.  Be sure to book early for vendors that require a reservation.  You may also want to travel either before or after peak seasons.</p>
      <hr>
      <h3>Changes can happen <small>Be flexible.</small></h3>
      <i class="pe-7s-way float-md-left gray-light mr-4" style="font-size: 5rem;"></i>
      <p>We do our best to lock in vendors before we release each Pass.  Yet, sometimes changes will happen and it is possible that a discount may no longer be offerred.  If you possibly bought the pass for one particular offer and it is no longer valid, please remember our <a href="{{ route('utility.guarantee') }}">money back guarantee</a>.</p>
    </div>
  </div>
</div>

@stop

@section('scripts')
<script>

</script>
@stop
@extends('_layouts.body')

@section('meta-page')
  <title>Get Outside Pass - How it Works</title>
  <meta name="description" content="One Pass. Multiple Discounts. Save money and don't miss a thing during your National Park Vacation." />
  <meta name="keywords" content="national parks, travel, discounts, coupons, attractions, activities, things to do, Get Outside Pass">
@stop

@section('meta-og')
  <meta property="og:type" content="article"/>
  <meta property="og:title" content="Get Outside Pass - How it Works"/>
  <meta property="og:url" content="{{ Request::url() }}"/>
  <meta property="og:image" content="{{ url('/img/destinations/yellowstone-1200x630.jpg') }}"/>
  <meta property="og:site_name" content="Get Outside Pass"/>
  <meta property="og:description" content="One Pass. Multiple Discounts. Save money and don't miss a thing during your National Park Vacation."/>
  <meta property="og:locale" content="en_US"/>
@stop

@section('content')

{{-- Hero Slider --}}
<section class="hero-slider" style="background-image: url(/img/destinations/grand-canyon-1920x580.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-lg-8 padding-bottom-2x text-md-left text-center hero-overlay">
        <div class="hero-text">
          <h1 class="mb-2 white-color">It's pretty simple really.</h1>
          <h2 class="mt-0 mb-2 white-color"><strong>Save Money and have the Best Vacation Ever.</strong></h2>               
        </div>
    </div>
  </div>
</section>

{{-- Page Content --}}
<div class="container padding-bottom-3x mb-1 mt-5">

  <div class="row padding-bottom-2x">
    <div class="col-md-4 text-center">
      <img class="d-block w-270 mx-auto rounded mb-3 hidden-sm-down" src="/img/holder-540x540.jpg" alt="100% Profits to Get Kids Outdoors">
      <h4 class="hidden-sm-down"><strong><a href="{{ route('foundation') }}">100% Profits to<br>Get Kids Outdoors</a></strong></h4>
    </div>
    <div class="col-md-8 text-md-left text-center">
      <div class="mt-30 hidden-md-up"></div>
      <h2>We don't like to complicate things, especially when we travel.  So, we've kept this as simple as we can.</h2>
      <hr >
      <h3 class="mb-30"><strong class="text-black">1.)</strong> Purchase the Get Outside Pass</h3>
      <i class="pe-7s-credit float-md-left gray-light mr-4" style="font-size: 6rem;"></i>  
      <p>If you like the discounts on a Pass, click "Buy the Pass".  You will be taken to a secure checkout page to pay for the Pass.  You will then be immediately taken to your purchased pass so that you can start to make reservations today!</p>
      <hr >
      <h3 class="mb-30"><strong class="text-black">2.)</strong> Present to Vendor</h3>
      <i class="pe-7s-mouse float-md-left gray-light mr-4" style="font-size: 5rem;"></i>
      <h5>Book Online</h5>
      <p>Many Get Outside Pass vendors are capable of taking bookings online and redeeming the discount via a code in their online reservation system.  Simply place the Get Outside Pass code while booking and save!</p>   
      <i class="pe-7s-call float-md-left gray-light mr-4" style="font-size: 5rem;"></i>      
      <h5>Book by Phone</h5>
      <p>When booking by phone, simply let the vendor know that you have a Get Outside Pass.  They'll ask you for the redemption code while placing your reservation into their system.  Bam, it's that easy - you just saved money!</p> 
      <i class="pe-7s-phone float-md-left gray-light mr-4" style="font-size: 5rem;"></i>
      <h5>Show Pass on Phone</h5>
      <p>You will be able to login using your phone or iPad and view your active passes.  You can then show the pass to the vendor at their place of business.  <strong>NOTE: Many places may not have phone service, we suggest printing a copy of the pass to take with you.</strong></p>
      <i class="pe-7s-print float-md-left gray-light mr-4" style="font-size: 5rem;"></i>
      <h5>Print It</h5>
      <p>For the larger vendors (resorts, museums, restaurants, etc.), you can usually present the printed pass at the vendor's place of business.  The pass will have your full name and contact info and you may be asked to show ID to confirm your identity.</p>
      <hr>
      <h3 class="mb-30"><strong class="text-black">3.)</strong> Save Money</h3>
      <i class="pe-7s-piggy float-md-left gray-light mr-4" style="font-size: 6rem;"></i>  
      <p><strong>Well, yeah...that's the point!</strong>  You probably understand this already, but the whole reason behind the Get Outside Pass is so that you can save money on the best attractions and activities during your vacation.  We'd like to think that you can use at least one discount per day!</p>
      <hr>
      <h3 class="mb-30"><strong class="text-black">4.)</strong> Have the Best Vacation Ever</h3>
      <i class="pe-7s-smile float-md-left gray-light mr-4" style="font-size: 6rem;"></i>  
      <p>We've done the research and have already chosen the best attractions and activities for you.  You have a leg up on everyone else who has been spending countless hours doing their own research.  Simply put...we wish we were on this vacation with you!</p>
    </div>
  </div>
</div>

@stop

@section('scripts')
<script>

</script>
@stop
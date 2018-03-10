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
          <h1 class="mb-2 white-color">How does it work?</h1>
          <h2 class="mt-0 mb-2 white-color"><strong>Discounted. Simple. <span class="dp-warning">Best Vacation Ever.</span></strong></h2>               
        </div>
    </div>
  </div>
</section>

{{-- Page Content --}}
<div class="container padding-bottom-3x mb-1 mt-5">

  <div class="row padding-bottom-2x">
    <div class="col-md-4 text-center">
      <img class="d-block w-270 mx-auto rounded mb-3 hidden-sm-down" src="/img/holder-540x540.jpg" alt="100% Profits to Get Kids Outdoors">
      <h4 class="hidden-sm-down"><a href="{{ route('foundation') }}">100% Profits to<br>Get Kids Outdoors</a></h4>
    </div>
    <div class="col-md-8 text-md-left text-center">
      <h2 class="mb-5">You <strong>save money</strong> on items that should already be on your <strong>must-do</strong> list.</h2>
      <div class="mt-30 hidden-md-up"></div>
      <hr>
      <h3 class="mb-30">Purchase the Get Outside Pass</h3>
      <i class="pe-7s-credit float-md-left gray-light mr-4" style="font-size: 6rem;"></i>  
      <p>If you like the discounts in a Pass, click "Buy the $26 Pass".  You will be taken to a simple and secure checkout page to create a basic profile and pay for the Pass.  You will then be immediately taken to your purchased pass so that you can start to make reservations today!</p>
      <hr >
      <h3 class="mb-30">Present to Vendor</h3>
      <i class="pe-7s-mouse float-md-left gray-light mr-4" style="font-size: 6rem;"></i>
      <h5>Book Online</h5>
      <p>Many Get Outside Pass vendors are capable of taking bookings online and redeeming the discount via a code in their reservation system.  Get Outside Pass will generate a new code for every year that you can place into your booking engine.  The Get Outside Pass member will receive this code when they purchase the Get Outside Pass to use with your system.</p>   
      <i class="pe-7s-call float-md-left gray-light mr-4" style="font-size: 6rem;"></i>      
      <h5>Book by Phone</h5>
      <p>Very similar to the online booking systems for vendors.  Get Outside Pass will generate a new code every year that can be used by the Get Outside Pass member when they call in to make reservations.  The visitor will receive this code when they purchase the Get Outside Pass.  The vendor will simply need to know the code each year so that they can confirm the discount.</p> 
      <i class="pe-7s-phone float-md-left gray-light mr-4" style="font-size: 6rem;"></i>
      <h5>Show Pass on Phone</h5>
      <p>Get Outside Pass holders will be able to login using their phone or iPad and view their active passes.  Each pass will have contain the name of the passholder, the active pass, and the discount code in an easy to view display.  This will be able to be shown to the vendor at their place of business during ticket purchasing or booking.</p>
      <i class="pe-7s-print float-md-left gray-light mr-4" style="font-size: 6rem;"></i>
      <h5>Print It</h5>
      <p>For the larger vendors that may not be restricted by availaiblity (resorts, museums, restaurants, etc.), Get Outside Pass holders may simply present the printed pass at the vendor's place of business.  The pass will have the full name and contact info of the pass holder in case the vendor wants to confirm the identity by checking another form of ID.</p>
      <hr>
      <h3 class="mb-30">Save Money</h3>
      <i class="pe-7s-piggy float-md-left gray-light mr-4" style="font-size: 6rem;"></i>  
      <p>Well, yeah...that's the point!  You probably understand this already, but the whole reason behind the Get Outside Pass is so that you can save money on the best attractions and activities during your vacation.  We'd like to think that you can use at least one discount per day!</p>
      <hr>
      <h3 class="mb-30">Have the Best Vacation Ever</h3>
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
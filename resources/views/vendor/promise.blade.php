@extends('_layouts.body')

@section('meta-page')
  <title>Get Outside Network - The Vendor Promise</title>
  <meta name="description" content="One Pass. Multiple Discounts. Save money and don't miss a thing during your National Park Vacation." />
  <meta name="keywords" content="national parks, travel, discounts, coupons, attractions, activities, things to do, Get Outside Network">
@stop

@section('meta-og')
  <meta property="og:type" content="article"/>
  <meta property="og:title" content="Get Outside Network - The Vendor Promise"/>
  <meta property="og:url" content="{{ Request::url() }}"/>
  <meta property="og:image" content="{{ url('/img/destinations/yellowstone-1200x630.jpg') }}"/>
  <meta property="og:site_name" content="Get Outside Network"/>
  <meta property="og:description" content="One Pass. Multiple Discounts. Save money and don't miss a thing during your National Park Vacation."/>
  <meta property="og:locale" content="en_US"/>
@stop

@section('content')

{{-- Hero Slider --}}
<section class="hero-slider mb-6" style="background-image: url(/img/destinations/yellowstone-1920x580.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-lg-8 padding-bottom-2x text-md-left text-center hero-overlay">
        <div class="hero-text">
          <h1 class="mb-2 white-color">Vendor Promise to Visitors</h1>
          <h2 class="mt-0 mb-2 white-color"><strong>Your commitment to the G.O. Pass traveler.</strong></h2>               
        </div>
    </div>
  </div>
</section>

{{-- Page Content --}}
<div class="container padding-bottom-2x mb-2">
  <div class="row">
    {{-- Side Menu --}}
    <div class="col-md-4">
      @include('/vendor/_inc.nav')
      <div class="padding-bottom-3x hidden-md-up"></div>
    </div>
    {{-- Content --}}
    <div class="col-md-8 text-md-left text-center">
      <div class="mt-30 hidden-md-up"></div>
      <h1>The Vendor Promise <small>Happy Travelers</small></h1>
      <h3>As a Get Outside Network vendor, you are making a promise to the G.O. Pass holders.</h3>
      <hr>
      <h3>Discounted Access <small>Save money.</small></h3>
      <i class="pe-7s-piggy float-md-left gray-light mr-4" style="font-size: 6rem;"></i>
      <p>As a vendor, I will redeem all current offers in my agreement with Get Outside Pass for current G.O. Yellowstone Pass holders. I have provided discounts on one or more of my services and/or products and I will accept the G.O. Yellowstone Pass for the entirety of the pass season. In short, if you have a pass, you have a discount with us and we are happy to have you here!</p>
      <hr>
      <h3>Incredible Customer Service <small>Friendly and helpful.</small></h3>
      <i class="pe-7s-smile float-md-left gray-light mr-4" style="font-size: 6rem;"></i>
      <p>As a vendor, I am committed to provide one of the best customer service experiences out there!  I treat all of my customers with great respect and will do my best to meet expectations and create incredible memories.  I will do what I can to make G.O. Yellowstone Pass holders feel like family.  And, not the long lost cousin type of family!</p>
      <hr>
      <h3>No Hassle Bookings <small>Painless and simple.</small></h3>
      <i class="pe-7s-magic-wand float-md-left gray-light mr-4" style="font-size: 6rem;"></i>
      <p>As a vendor, I agree to have a simple and hassle free booking and reservation system in place for all G.O. Yellowstone Pass holders.  Whether booking online or over the phone with a G.O. Yellowstone Pass code, or taken at a front desk or ticket window, presenting the G.O. Yellowstone Pass will be a quick and painless procedure.</p>
      <hr>
      <h3>Knowledgeable Staff <small>We know the Get Outside traveler.</small></h3>
      <i class="pe-7s-info float-md-left gray-light mr-4" style="font-size: 6rem;"></i>
      <p>As a vendor, I will ensure that all staff are aware of the agreement and discount with the Get Outside Pass. When G.O. Yellowstone Pass holders present their pass in order to receive the discount offer, all employees will know what they are talking about and be ready to assist them with the no-hassle redemption.</p>
    </div>
  </div>
</div>

@stop

@section('scripts')
<script>

</script>
@stop
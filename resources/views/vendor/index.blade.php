@extends('_layouts.body')

@section('meta-page')
  <title>Get Outside Pass - Vendor Info</title>
  <meta name="description" content="One Pass. Multiple Discounts. Save money and don't miss a thing during your National Park Vacation." />
  <meta name="keywords" content="national parks, travel, discounts, coupons, attractions, activities, things to do, Get Outside Pass">
@stop

@section('meta-og')
  <meta property="og:type" content="article"/>
  <meta property="og:title" content="Get Outside Pass - Vendor Info"/>
  <meta property="og:url" content="{{ Request::url() }}"/>
  <meta property="og:image" content="{{ url('/img/destinations/yellowstone-1200x630.jpg') }}"/>
  <meta property="og:site_name" content="Get Outside Pass"/>
  <meta property="og:description" content="One Pass. Multiple Discounts. Save money and don't miss a thing during your National Park Vacation."/>
  <meta property="og:locale" content="en_US"/>
@stop

@section('content')

{{-- Hero Slider --}}
<section class="hero-slider mb-6" style="background-image: url(/img/destinations/glacier-1920x580.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-lg-8 padding-bottom-2x text-md-left text-center hero-overlay">
        <div class="hero-text">
          <h1 class="mb-2 white-color">Vendor <span class="dp-warning">/</span> Why be a vendor?</h1>
          <h2 class="mt-0 mb-2 white-color"><strong>Exclusive network of the best travel providers.</strong></h2>               
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
      <h1>Why join Get Outside Pass?</h1>
      <h3>With so many options, why do you need one more marketing partner?  We've outlined what our current vendors find valuable in their relationship with us at Get Outside Pass. </h3>
      <hr>
      <h3>Exclusive Group <small>Only the best vendors.</small></h3>
      <i class="pe-7s-diamond float-md-left gray-light mr-4" style="font-size: 6rem;"></i>      
      <p>We're picky.  We like to hand-select the vendors in each region using one simple rule.  Is this the trip that we'd want to take if we had a few days to explore during our well deserved vacation?  We strive to work with the best in class operators, resorts, restaurants and activity providers in each area.  We place a heavy weight on those that encompass the culture and character of each unique destination.</p>
      <hr>
      <h3>New Marketing Partner <small>Reach more potential visitors.</small></h3>
      <i class="pe-7s-plugin float-md-left gray-light mr-4" style="font-size: 6rem;"></i>  
      <p>Grow your reach into the broader region through what could be called a "cooperative marketing" program.  We get in front of the visitor while they are planning their travel to introduce the Get Outside Pass, and you, an exclusive vendor.  Through online and social media marketing, advertisements in regional print publications, and our network of travel journalists and bloggers, we are doing everything we can to get in front of the vistitor and get them to your front door.</p>
      <hr>
      <h3>The Get Outside Community <small>Happy travelers at your door.</small></h3>
      <i class="pe-7s-users float-md-left gray-light mr-4" style="font-size: 6rem;"></i>  
      <p>The Get Outside Community of outdoor travelers is growing and we can introduce you to them.  We are cultivating a group of travelers who enjoy the outdoors and have a love of the National Parks.  They are discerning travelers who enjoy that we are curating the best vendors in the region for them to make the most of their outdoor vacation.  So...join us, and let them discover your incredible experience during their visit.</p>
      <hr>
      <h3>No Fees <small>No direct costs.</small></h3>
      <i class="pe-7s-piggy float-md-left gray-light mr-4" style="font-size: 6rem;"></i>  
      <p>There are no sign up fees and no commissions to pay - EVER.  Of course, if it isn't obvious yet, each of the visitors that we send your way will be looking to save a bit of money by presenting their Get Outside Pass in exchange for discount.</p>
      <hr>
      <h3>100% to the Kids <small>Profits go to getting kids outdoors.</small></h3>
      <img class="d-block w-200 ml-5 float-md-right rounded mb-5" src="/img/foundation/everykidinapark.png" alt="Open OutDoors for Kids - National Park Foundation">
      <p>We have brought our love of the outdoors and experience in digital marketing for the travel industry into a place where we can make a difference.  What better place than to focus on the children of the world who will become the ambassadors of the natural world.  We founded the Get Outside Pass as a place to have fun as we commit 100% of our profits to getting kids outdoors - less "screen time" and more "green time".</p>
      <h5><a href="/foundation">Learn more <i class="fa fa-arrow-right"></i></a></h5>
    </div>
  </div>
</div>

@stop

@section('scripts')
<script>

feather.replace()

</script>
@stop
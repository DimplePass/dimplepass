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
Vendor <span class="dp-warning">/</span> Why be a vendor?
@stop

@section('content')

{{-- Hero Slider --}}
<section class="hero-slider mb-6" style="background-image: url(/img/destinations/glacier-1920x580.jpg);">
    <div class="item">
      <div class="container padding-top-10x">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-12 padding-bottom-2x text-md-left text-center">
            <div class="from-bottom">
              <h1 class="mb-0 pt-1"><strong class="dp-white">@yield('logo-tag')</strong></h1>
              <div class="h4 mt-0 mb-4 gray-lighter">Exclusive network of the best travel providers in the region.</div>
          </div>
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
      <h1>Why join Dimple Pass?</h1>
      <h3>With so many options, why do you need one more marketing partner?  We've outlined what our current vendors find valuable in their relationship with us at Dimple Pass. </h3>
      <hr>
      <h3>Exclusive Group <small>Only the best vendors.</small></h3>
      <i class="pe-7s-diamond float-md-left gray-light mr-4" style="font-size: 6rem;"></i>      
      <p>We're picky.  We like to hand-select the vendors in each region using one simple rule.  Is this the trip that we'd want to take if we had a few days to explore during our well deserved vacation?  We strive to work with the best in class operators, resorts, restaurants and activity providers in each area.  We place a heavy weight on those that emcompass the culture and character of each unique destination.</p>
      <hr>
      <h3>New Marketing Partner <small>Reach more potential visitors.</small></h3>
      <i class="pe-7s-plugin float-md-left gray-light mr-4" style="font-size: 6rem;"></i>  
      <p>Grow your reach into the broader reagion through what could be called a "cooperative marketing" program.  We get in front of the visitor while they are planning their travel to introduce the Dimple Pass, and you, an exclusive vendor.  Through online and social media marketing, advertisements in regional print publications, and our network of travel journalists and bloggers, we are doing everyting we can to get in front of the vistior and get them to your front door.</p>
      <hr>
      <h3>The Dimple Community <small>Happy travelers at your door.</small></h3>
      <i class="pe-7s-users float-md-left gray-light mr-4" style="font-size: 6rem;"></i>  
      <p>The Dimple Community of outdoor travelers is growing and we can introduce you to them.  We are cultivating a group of travelers who enjoy the outdoors and have a love of the National Parks.  They are discerning travlers who enjoy that we are curating the best vendors in the region for them to make the most of their outdoor vacation.  So...join us, and let them discover your incredible experience during their visit.</p>
      <hr>
      <h3>No Fees <small>No direct costs.</small></h3>
      <i class="pe-7s-piggy float-md-left gray-light mr-4" style="font-size: 6rem;"></i>  
      <p>There are no sign up fees and no commissions to pay - EVER.  Of course, if it isn't obvious yet, each of the visitors that we send your way will be looking to save a bit of money by presenting their Dimple Pass in exchange for discount.  However, we'd like to think that the discount you provide would be less than your normal marketing costs to acquire the same visitor.  You've got nothing to lose and more visitors to gain.</p>
      <hr>
      <h3>100% to the Kids <small>Profits go to getting kids outdoors.</small></h3>
      <img class="d-block w-200 ml-5 float-md-right rounded mb-5" src="/img/foundation/everykidinapark.png" alt="Open OutDoors for Kids - National Park Foundation">
      <p>We have brought our love of the outdoors and experience in digital marketing for the travel industry into a place where we can make a difference.  What better place than to focus on the children of the world who will become the ambassadors of the natural world.  We founded the Dimple Pass as a place to have fun as we commit 100% of our profits to getting kids outdoors - less "screen time" and more "green time".</p>
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
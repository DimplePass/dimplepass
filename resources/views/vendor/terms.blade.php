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
Vendor <span class="dp-warning">/</span> Terms & Conditions
@stop

@section('content')

{{-- Hero Slider --}}
<section class="hero-slider mb-6" style="background-image: url(/img/destinations/yellowstone-1920x580.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-lg-8 padding-bottom-2x text-md-left text-center hero-overlay">
        <div class="hero-text">
          <h1 class="mb-2 white-color">@yield('logo-tag')</h1>
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
      @include('/vendor/_inc.nav')
      <div class="padding-bottom-3x hidden-md-up"></div>
    </div>
    {{-- Content --}}
    <div class="col-md-8 text-md-left text-center">
      <div class="mt-30 hidden-md-up"></div>
      <h1>The Small Print <small>But, not much of it.</small></h1>
      <h3>These are the basic requirements that are set forth in the annual agreement between Dimple Pass and the Vendor.</h3>
      <hr>
      <h3>Yearly Commitment <small>Annual agreement.</small></h3>
      <i class="pe-7s-pen float-md-left gray-light mr-4" style="font-size: 6rem;"></i>
      <p>Each agreement contains at least one discount which must be redeemable for the entire Dimple Pass season.  If someone buys a pass in May with the expectation of redeeming it during the August vacation, we are not able to cancel the agreement in the middle of the season.  This would create a bad situation for both Dimple Pass and the Vendor.  Let's keep those online reviews in tip-top shape!</p>
      <hr>
      <h3>Pass Redemption <small>Must allow one of these.</small></h3>
      <i class="pe-7s-mouse float-md-left gray-light mr-4" style="font-size: 6rem;"></i>
      <h5>Book Online</h5>
      <p>Many Dimple Pass vendors are capable of taking bookings online and redeeming the discount via a code in ther reservation system.  Dimple Pass will generate a new code for every year that you can place into your booking engine.  The Dimple Pass member will receive this code when they purchase the Dimple Pass to use with your system.</p>   
      <i class="pe-7s-call float-md-left gray-light mr-4" style="font-size: 6rem;"></i>      
      <h5>Book by Phone</h5>
      <p>Very similar to the online booking systems for vendors.  Dimple Pass will generate a new code every year that can be used by the Dimple Pass member when they call in to make reservations.  The visitor will receive this code when they purchase the Dimple Pass.  The vendor will simply need to know the code each year so that they can confirm the discount.</p> 
      <i class="pe-7s-print float-md-left gray-light mr-4" style="font-size: 6rem;"></i>
      <h5>Print It</h5>
      <p>For the larger vendors that may not be restricted by availablity (resorts, museums, restaurants, etc.), Dimple Pass holders may simpply present the printed pass at the vendor's place of business.  The pass will have the full name and contact info of the pass holder in case the vendor wants to confirm the identity by checking another form of ID.</p>
      <hr>
      <h3>Annual Renewal and Review <small>Is everyone happy?</small></h3>
      <i class="pe-7s-graph1 float-md-left gray-light mr-4" style="font-size: 6rem;"></i>
      <p>At the end of every year, we will review how things went during the past season.  This is the time when we can really take the time to update the program for the next season and do everything we can to remove any hurdles or hiccups that presented themselves along the way.  We will also sign a new agreement for the coming year.</p>
      <hr>
      <h3>Reporting <small>Yearly Dimple visitor counts.</small></h3>
      <i class="pe-7s-calculator float-md-left gray-light mr-4" style="font-size: 6rem;"></i>
      <p>We realize that not all vendors may have this capability.  Yet, we would love to know the actual number of Diimple Pass holders that visited your business each season.  Even better if we can hone it down to the specific month.  Yet, if you are not able to provide us with that data easily, no problem.</p>
      <hr>
      <h3>Sample Agreement <small>A preview for your review.</small></h3>
      <i class="pe-7s-news-paper float-md-left gray-light mr-4" style="font-size: 6rem;"></i>
      <p>This is the agreement that we have with Vendors.  There are a few different requirements to be met in the partnership.  Each clearly outlined discount is added as an Attachment.</p>
      <h5><a href="/pdf/SampleAgreement.pdf" target="_blank">View Sample Agreement <i class="fa fa-arrow-right"></i></a></h5>
    </div>
  </div>
</div>

@stop

@section('scripts')
<script>

</script>
@stop
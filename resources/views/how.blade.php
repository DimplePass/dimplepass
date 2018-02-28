@extends('_layouts.body')

@section('meta-page')
  <title>The Dimple Pass | Save Money on National Park Travel</title>
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
How does it work?
@stop

@section('content')

{{-- Hero Slider --}}
<section class="hero-slider" style="background-image: url(/img/destinations/grand-canyon-1920x580.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-lg-8 padding-bottom-2x text-md-left text-center hero-overlay">
        <div class="hero-text">
          <h1 class="mb-2 white-color">@yield('logo-tag')</h1>
          <h2 class="mt-0 mb-2 white-color"><strong>Discounted. Simple. <span class="dp-warning">Best Vacation Ever.</span></strong></h2>               
        </div>
    </div>
  </div>
</section>

{{-- Page Content --}}
<div class="container padding-bottom-3x mb-1 mt-5">

  <div class="row padding-bottom-2x">
    <div class="col-md-4">
      <img class="d-block w-270 mx-auto rounded mb-3" src="/img/holder-540x540.jpg" alt="">
    </div>
    <div class="col-md-8 text-md-left text-center">
      <img src="/img/logo/logo.png" alt="Dimple Pass" class="float-right">
      <h2 class="mb-5">You <strong>save money</strong> on items that should already be on your <strong>must-do</strong> list.</h2>
      <div class="mt-30 hidden-md-up"></div>
      <hr>
      <h3 class="mb-30">Purchase the Dimple Pass</h3>
      <i class="pe-7s-credit float-md-left gray-light mr-4" style="font-size: 6rem;"></i>  
      <p>Chuck pork belly tri-tip turducken meatloaf, pig short ribs capicola jerky t-bone cow. Pork chop chuck jerky landjaeger venison cupim alcatra turkey ribeye tail ham hock buffalo tenderloin tongue. Cow filet mignon chicken, tri-tip swine meatloaf capicola pork loin kielbasa pork belly hamburger jowl fatback salami. Leberkas shank jowl, venison landjaeger jerky tri-tip.</p>
      <hr >
      <h3 class="mb-30">Present to Vendor</h3>
      <i class="pe-7s-mouse float-md-left gray-light mr-4" style="font-size: 6rem;"></i>
      <h5>Book Online</h5>
      <p>Many Dimple Pass vendors are capable of taking bookings online and redeeming the discount via a code in their reservation system.  Dimple Pass will generate a new code for every year that you can place into your booking engine.  The Dimple Pass member will receive this code when they purchase the Dimple Pass to use with your system.</p>   
      <i class="pe-7s-call float-md-left gray-light mr-4" style="font-size: 6rem;"></i>      
      <h5>Book by Phone</h5>
      <p>Very similar to the online booking systems for vendors.  Dimple Pass will generate a new code every year that can be used by the Dimple Pass member when they call in to make reservations.  The visitor will receive this code when they purchase the Dimple Pass.  The vendor will simply need to know the code each year so that they can confirm the discount.</p> 
      <i class="pe-7s-phone float-md-left gray-light mr-4" style="font-size: 6rem;"></i>
      <h5>Show Pass on Phone</h5>
      <p>Dimple Pass holders will be able to login using their phone or iPad and view their active passes.  Each pass will have contain the name of the passholder, the active pass, and the discount code in an easy to view display.  This will be able to be shown to the vendor at their place of business during ticket purchasing or booking.</p>
      <i class="pe-7s-print float-md-left gray-light mr-4" style="font-size: 6rem;"></i>
      <h5>Print It</h5>
      <p>For the larger vendors that may not be restricted by availaiblity (resorts, museums, restaurants, etc.), Dimple Pass holders may simply present the printed pass at the vendor's place of business.  The pass will have the full name and contact info of the pass holder in case the vendor wants to confirm the identity by checking another form of ID.</p>
      <hr>
      <h3 class="mb-30">Save Money</h3>
      <i class="pe-7s-piggy float-md-left gray-light mr-4" style="font-size: 6rem;"></i>  
      <p>Chuck pork belly tri-tip turducken meatloaf, pig short ribs capicola jerky t-bone cow. Pork chop chuck jerky landjaeger venison cupim alcatra turkey ribeye tail ham hock buffalo tenderloin tongue. Cow filet mignon chicken, tri-tip swine meatloaf capicola pork loin kielbasa pork belly hamburger jowl fatback salami. Leberkas shank jowl, venison landjaeger jerky tri-tip.</p>
      <hr>
      <h3 class="mb-30">Have the Best Vacation Ever</h3>
      <i class="pe-7s-smile float-md-left gray-light mr-4" style="font-size: 6rem;"></i>  
      <p>Chuck pork belly tri-tip turducken meatloaf, pig short ribs capicola jerky t-bone cow. Pork chop chuck jerky landjaeger venison cupim alcatra turkey ribeye tail ham hock buffalo tenderloin tongue. Cow filet mignon chicken, tri-tip swine meatloaf capicola pork loin kielbasa pork belly hamburger jowl fatback salami. Leberkas shank jowl, venison landjaeger jerky tri-tip.</p>
    </div>
  </div>
</div>

@stop

@section('scripts')
<script>

</script>
@stop
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
              <div class="h1 mb-2 pt-1"><strong class="dp-white">@yield('logo-tag')</strong></div>
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
      <h3>With so many other opportunities available, why do you need one more marketing partner?  We kind of think it is a no brainer to sign up and gain access to the Dimple Community of travelers.  Yet, we've outlined below what our current vendors find valuable in their relationship with us at Dimple Pass. </h3>
      <hr>
      <h3>Exclusive Group <small>Only the best vendors.</small></h3>
      <p>We're picky.  We like to hand-select the vendors in each region using one simple rule.  Is this the trip that we'd want to take if we had a few days to a week to explore during our well deserved vacation?  We strive to work with the best in class operators, resorts, restaurants and activity providers in each area.  We place a heavy weight on those that emcompass the culture and character of each unique destination.</p>
      <hr>
      <h3>New Advertising Channel <small>Reach more potential visitors.</small></h3>
      <p>Chuck pork belly tri-tip turducken meatloaf, pig short ribs capicola jerky t-bone cow. Pork chop chuck jerky landjaeger venison cupim alcatra turkey ribeye tail ham hock buffalo tenderloin tongue. Cow filet mignon chicken, tri-tip swine meatloaf capicola pork loin kielbasa pork belly hamburger jowl fatback salami. Leberkas shank jowl, venison landjaeger jerky tri-tip.</p>
      <hr>
      <h3>The Dimple Community <small>Happy travelers at your door.</small></h3>
      <p>Chuck pork belly tri-tip turducken meatloaf, pig short ribs capicola jerky t-bone cow. Pork chop chuck jerky landjaeger venison cupim alcatra turkey ribeye tail ham hock buffalo tenderloin tongue. Cow filet mignon chicken, tri-tip swine meatloaf capicola pork loin kielbasa pork belly hamburger jowl fatback salami. Leberkas shank jowl, venison landjaeger jerky tri-tip.</p>
      <hr>
      <h3>No Fees <small>No direct costs.</small></h3>
      <p>Chuck pork belly tri-tip turducken meatloaf, pig short ribs capicola jerky t-bone cow. Pork chop chuck jerky landjaeger venison cupim alcatra turkey ribeye tail ham hock buffalo tenderloin tongue. Cow filet mignon chicken, tri-tip swine meatloaf capicola pork loin kielbasa pork belly hamburger jowl fatback salami. Leberkas shank jowl, venison landjaeger jerky tri-tip.</p>
      <hr>
      <h3>100% to the Kids <small>Profits go to getting kids outdoors.</small></h3>
      <p>Chuck pork belly tri-tip turducken meatloaf, pig short ribs capicola jerky t-bone cow. Pork chop chuck jerky landjaeger venison cupim alcatra turkey ribeye tail ham hock buffalo tenderloin tongue. Cow filet mignon chicken, tri-tip swine meatloaf capicola pork loin kielbasa pork belly hamburger jowl fatback salami. Leberkas shank jowl, venison landjaeger jerky tri-tip.</p>
    </div>
  </div>
</div>

@stop

@section('scripts')
<script>

</script>
@stop
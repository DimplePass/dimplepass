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

{{-- Main Slider --}}
<section class="hero-slider" style="background-image: url(/img/destinations/yosemite-1920x580.jpg);">
    <div class="item">
      <div class="container padding-top-10x">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-12 padding-bottom-2x text-md-left text-center">
            <div class="from-bottom">
              <div class="h1 mb-2 pt-1"><strong class="dp-white">@yield('logo-tag')</strong></div>
              <div class="h4 mt-0 mb-4 gray-lighter">discounted. simple. best vacation ever.</div>
          </div>
        </div>
      </div>
    </div>
</section>

<!-- Page Content-->
<div class="container padding-bottom-3x mb-1 mt-5">

  <div class="row padding-bottom-2x">
    <div class="col-md-5">
      <img class="d-block w-270 mx-auto rounded mb-3" src="/img/holder-540x540.jpg" alt="">
    </div>
    <div class="col-md-7 text-md-left text-center">
      <div class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between">
        <div class="step">
          <div class="step-icon-wrap">
            <div class="step-icon"><i class="pe-7s-credit"></i></div>
          </div>
          <h4 class="step-title"><strong class="dp-warning">1</strong> Purchase a Pass</h4>
        </div>
        <div class="step">
          <div class="step-icon-wrap">
            <div class="step-icon"><i class="pe-7s-print"></i></div>
          </div>
          <h4 class="step-title"><strong class="dp-warning">2</strong> Print it</h4>
        </div>
        <div class="step">
          <div class="step-icon-wrap">
            <div class="step-icon"><i class="pe-7s-id"></i></div>
          </div>
          <h4 class="step-title"><strong class="dp-warning">3</strong> Present to Vendor</h4>
        </div>
        <div class="step">
          <div class="step-icon-wrap">
            <div class="step-icon"><i class="pe-7s-piggy"></i></div>
          </div>
          <h4 class="step-title"><strong class="dp-warning">4</strong> Save Money</h4>
        </div>
      </div>
      <div class="mt-30 hidden-md-up"></div>
      <h2 class="dp-warning">You save money on items that should already be on your hit list.</h2>
      <div class="mb-4 mt-4"><hr></div>
      <h2>Purchase the Dimple Pass</h2>
      <p>Chuck pork belly tri-tip turducken meatloaf, pig short ribs capicola jerky t-bone cow. Pork chop chuck jerky landjaeger venison cupim alcatra turkey ribeye tail ham hock buffalo tenderloin tongue. Cow filet mignon chicken, tri-tip swine meatloaf capicola pork loin kielbasa pork belly hamburger jowl fatback salami. Leberkas shank jowl, venison landjaeger jerky tri-tip.</p>
      <h2>Print the Pass</h2>
      <p>Chuck pork belly tri-tip turducken meatloaf, pig short ribs capicola jerky t-bone cow. Pork chop chuck jerky landjaeger venison cupim alcatra turkey ribeye tail ham hock buffalo tenderloin tongue. Cow filet mignon chicken, tri-tip swine meatloaf capicola pork loin kielbasa pork belly hamburger jowl fatback salami. Leberkas shank jowl, venison landjaeger jerky tri-tip.</p>
      <h2>Present to Vendor</h2>
      <p>Chuck pork belly tri-tip turducken meatloaf, pig short ribs capicola jerky t-bone cow. Pork chop chuck jerky landjaeger venison cupim alcatra turkey ribeye tail ham hock buffalo tenderloin tongue. Cow filet mignon chicken, tri-tip swine meatloaf capicola pork loin kielbasa pork belly hamburger jowl fatback salami. Leberkas shank jowl, venison landjaeger jerky tri-tip.</p>   
      <h2>Save Money</h2>
      <p>Chuck pork belly tri-tip turducken meatloaf, pig short ribs capicola jerky t-bone cow. Pork chop chuck jerky landjaeger venison cupim alcatra turkey ribeye tail ham hock buffalo tenderloin tongue. Cow filet mignon chicken, tri-tip swine meatloaf capicola pork loin kielbasa pork belly hamburger jowl fatback salami. Leberkas shank jowl, venison landjaeger jerky tri-tip.</p>
      <h2>Have the Best Vacation Ever</h2>
      <p>Chuck pork belly tri-tip turducken meatloaf, pig short ribs capicola jerky t-bone cow. Pork chop chuck jerky landjaeger venison cupim alcatra turkey ribeye tail ham hock buffalo tenderloin tongue. Cow filet mignon chicken, tri-tip swine meatloaf capicola pork loin kielbasa pork belly hamburger jowl fatback salami. Leberkas shank jowl, venison landjaeger jerky tri-tip.</p>
    </div>
  </div>
</div>

@stop

@section('scripts')
<script>

</script>
@stop
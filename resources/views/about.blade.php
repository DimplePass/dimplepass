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
Our Story
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
              <div class="h4 mt-0 mb-4 gray-lighter">How did we get here and where are we headed.</div>
          </div>
        </div>
      </div>
    </div>
</section>

{{-- Page Content --}}
<div class="container padding-bottom-2x mb-2">
  <div class="row padding-bottom-2x">
    <div class="col-md-5">
      <img class="d-block w-270 mx-auto rounded mb-3" src="/img/holder-540x540.jpg" alt="">
    </div>
    <div class="col-md-7 text-md-left text-center">
      <div class="mt-30 hidden-md-up"></div>
      <h2>A little heading here</h2>
      <h3>Bacon ipsum dolor amet hamburger pork loin kevin t-bone sirloin jerky cupim turkey short ribs brisket flank pastrami doner.</h3>
      <div class="mb-4 mt-4"><hr></div>
      <h3>Some more important stuff.</h3>
      <p>Chuck pork belly tri-tip turducken meatloaf, pig short ribs capicola jerky t-bone cow. Pork chop chuck jerky landjaeger venison cupim alcatra turkey ribeye tail ham hock buffalo tenderloin tongue. Cow filet mignon chicken, tri-tip swine meatloaf capicola pork loin kielbasa pork belly hamburger jowl fatback salami. Leberkas shank jowl, venison landjaeger jerky tri-tip.</p>
    </div>
  </div>
</div>

@stop

@section('scripts')
<script>

</script>
@stop
@extends('_layouts.body')

@section('meta-page')
  <title>The Get Outside Pass Story</title>
  <meta name="description" content="One Pass. Multiple Discounts. Save money and don't miss a thing during your National Park Vacation." />
  <meta name="keywords" content="national parks, travel, discounts, coupons, attractions, activities, things to do, Get Outside Network">
@stop

@section('meta-og')
  <meta property="og:type" content="article"/>
  <meta property="og:title" content="The Get Outside Pass Story"/>
  <meta property="og:url" content="{{ Request::url() }}"/>
  <meta property="og:image" content="{{ url('/img/destinations/yellowstone-1200x630.jpg') }}"/>
  <meta property="og:site_name" content="Get Outside Network"/>
  <meta property="og:description" content="One Pass. Multiple Discounts. Save money and don't miss a thing during your National Park Vacation."/>
  <meta property="og:locale" content="en_US"/>
@stop

@section('content')

{{-- Hero Slider --}}
<section class="hero-slider mb-6" style="background-image: url(/img/destinations/grand-canyon-1920x580.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-lg-8 padding-bottom-2x text-md-left text-center hero-overlay">
        <div class="hero-text">
          <h1 class="mb-2 white-color">The Get Outside Pass Story</h1>
          <h2 class="mt-0 mb-2 white-color"><strong>How did we get here?</strong></h2>               
        </div>
    </div>
  </div>
</section>

{{-- Page Content --}}
<div class="container padding-bottom-2x mb-2">
  <div class="row padding-bottom-2x">
    <div class="col-md-5">
      <img class="d-block w-270 mx-auto rounded mb-3 hidden-sm-down" src="/img/features/grand-canyon-havasu-540x540.jpg" alt="Havasu Falls in Grand Canyon National Park">
    </div>
    <div class="col-md-7 text-md-left text-center">
      <div class="mt-30 hidden-md-up"></div>
      <h2>Passion for the Outdoors</h2>
      <h3>We are lifelong adventurers looking to do something for the future of the outdoors.</h3>
      <div class="mb-4 mt-4"><hr></div>
      <h3>The Past</h3>
      <p>We are a small group of explorers who have worked together in the outdoor travel marketing industry for 56 cumulative years.  We even worked together for most of those years bringing solutions to both vendors and visitors in outdoor destinations.  Our focus included national parks and the ski and summer resorts throughout most of the west and a few gems back east.  Needless to say, we've learned a lot over the years and we've brought that knowledge to Get Outside Pass.</p>
      <hr>
      <h3>The Present</h3>
      <p>We wanted to continue working together on something fresh - something that exploited each of our individual talents and allowed us to thrive into areas of true passion.  Something that was simple in concept, but rich and complex in value.  We think the Get Outside Pass solves many of the root problems that travelers and vendors navigate each day and we can't wait to continue learning as we grow.  To top it all off, we are going to give 100% of our profits to organizations that <a href="{{ route('foundation') }}">get kids outdoors</a>.</p>
      <hr>
      <h3>The Future</h3>
      <p>We are starting modestly by introducing only a few national park passes.  We plan to learn from our experience this year and evolve from there.  Our goal is to listen closely to both visitors and vendors and continue to solve real problems for each of them.</p>
    </div>
  </div>
</div>

@stop

@section('scripts')
<script>

</script>
@stop
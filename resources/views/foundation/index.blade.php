@extends('_layouts.body')

@section('meta-page')
  <title>Dimple Pass - National Parks Discount Cards</title>
  <meta name="description" content="One Pass. Multiple Discounts. Save money and don't miss a thing during your National Park Vacation." />
  <meta name="keywords" content="national parks, travel, discounts, coupons, attractions, activities, things to do, dimple pass">
@stop

@section('meta-og')
  <meta property="og:type" content="article"/>
  <meta property="og:title" content="Dimple Pass - National Parks Discount Cards"/>
  <meta property="og:url" content="{{ Request::url() }}"/>
  <meta property="og:image" content="{{ url('/img/destinations/yellowstone-1200x630.jpg') }}"/>
  <meta property="og:site_name" content="Dimple Pass"/>
  <meta property="og:description" content="One Pass. Multiple Discounts. Save money and don't miss a thing during your National Park Vacation."/>
  <meta property="og:locale" content="en_US"/>
@stop

@section('content')

{{-- Hero Slider --}}
<section class="hero-slider" style="background-image: url(/img/foundation/kidsoutdoors-1920x580.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-lg-8 padding-bottom-2x text-md-left text-center hero-overlay">
        <div class="hero-text">
          <h1 class="mb-2 white-color">100 Profits to Kids</h1>
          <h2 class="mt-0 mb-2 white-color"><strong>We donate 100% of our Profits to Get Kids Outdoors</strong></h2>               
        </div>
    </div>
  </div>
</section>

{{-- Page Content --}}
<div class="container padding-bottom-2x mb-2 mt-5">
  <div class="row padding-bottom-2x">
    <div class="col-md-4 text-center">
      <aside class="sticky">
        <img class="d-block w-270 mx-auto rounded mb-3 hidden-sm-down" src="/img/features/kid-logfly-540x540.jpg" alt="100% Profits to Get Kids Outdoors">
        <h3 class="gray">
          Less screen time.<br>
          More green time!
        </h3>
      </aside> 
    </div>
    <div class="col-md-8 text-md-left text-center">
      <div class="mt-30 hidden-md-up"></div>

      <h2>Dimple Pass commits 100% of our profits to get kids outdoors.</h2>
      <p>Yes, we have to pay the bills, yet we do that modestly and then give 100% of our profits to get kids outdoors.  Our founders made a life change after the birth of their first child to start Dimple Pass.  Children have less and less opportunity to get outside and experience the growth, independence and discovery that occurs in the great outdoors.  We've teamed up with the two organizations below in order to contribute to a future with more 'green time' and less 'screen time'.</p>
      
      <hr>

      <a href="https://www.bigcitymountaineers.org" target="_blank">
        <img class="d-block w-270 m-3 rounded mb-5 float-right" src="/img/foundation/bigcitymountaineers.png" alt="Big City Mountaineers">
      </a>
      <h3>Building Better Futures in the Great Outdoors</h3>
      <p>At BCM, we work alongside the transformative powers of Mother Nature to leave a lasting impact on the lives of under-resourced youth. Our wilderness expeditions bring kids out of their comfort zones and into the wild, where they develop the confidence needed for more promising futures.</p>
      <p>Our programs focus on improving the self-esteem, sense of responsibility, group communication and decision-making skills of nearly 1,000 youth annually. We engage youth in 7 cities across the country including Boston, Denver, Miami, Minneapolis, Portland, San Francisco, and Seattle. Learn more about our programs by watching the video below.</p>
      <h4><a href="https://www.bigcitymountaineers.org" target="_blank">Learn more about Big City Mountaineers <i class="fa fa-arrow-right"></i></a></h4>

      <hr>

      <a href="https://www.nationalparks.org/our-work/campaigns-initiatives/open-outdoors-kids" target="_blank">
        <img class="d-block w-270 rounded m-3 float-right" src="/img/foundation/everykidinapark.png" alt="Ever Kid in a Park">
      </a>
      <h3>Creating pathways for kids to enjoy, understand and connect with nature in exciting ways by facilitating outdoor activity, experiential learning, and cultural heritage exercises.</h3>
      <p>Open OutDoors for Kids is an initiative from the National Park Foundation to connect more kids to their national parks through fun and engaging activities. Children today are more disconnected from their natural and cultural heritage than ever before. Open OutDoors for Kids is changing that—building on a child’s innate wonder and curiosity about the natural world.</p>
      <p>National parks are gateways to self-discovery and learning and Open OutDoors for Kids is making sure all kids from across the country get the chance to experience them. Learn more about NPF's work with the Every Kid in a Park initiative, to see how you and your family can enjoy our national parks.</p>
      <h4><a href="https://www.nationalparks.org/our-work/campaigns-initiatives/open-outdoors-kids" target="_blank">Learn more about Open Outdoors for Kids <i class="fa fa-arrow-right"></i></a></h4>

    </div>
  </div>
</div>

@stop

@section('scripts')
<script>

</script>
@stop
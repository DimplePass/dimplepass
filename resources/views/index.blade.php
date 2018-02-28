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
Stop Planning. Start Playing. Save Money.
@stop

@section('content')

{{-- Hero Slider --}}
<section class="hero-slider" style="background-image: url(/img/destinations/yellowstone-1920x580.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-lg-8 padding-bottom-2x text-md-left text-center hero-overlay">
        <div class="hero-text">
          <h1 class="mb-2 white-color">Save money. Don't miss a thing.</h1>
          <h2 class="mt-0 mb-2 white-color"><strong>National Parks <span class="dp-warning">Discount Card</span></strong></h2>               
        </div>
    </div>
  </div>
</section>

{{-- Pass Cards --}}
<section class="container padding-top-3x">
  <div class="row">
    @foreach ($passes as $p)
    <div class="col-md-4 col-sm-6">
      <div class="card mb-30"><a class="card-img-tiles" href="{{ route('passes.show', $p->slug) }}">
          <div class="inner">
            <div class="main-img"><img src="/img/destinations/{{ $p->slug }}-315x278.jpg" alt="{{ $p->name }}"></div>
            <div class="thumblist"><img src="/img/destinations/{{ $p->slug }}-1-155x137.jpg" alt="{{ $p->name }}"><img src="/img/destinations/{{ $p->slug }}-2-155x137.jpg" alt="{{ $p->name }}"></div>
          </div></a>
        <div class="card-body text-center">
          <h4 class="card-title">{{ $p->name }}</h4>
          <a class="btn btn-primary" href="{{ route('passes.show', $p->slug) }}"><strong>{{ count($p->discounts) }}</strong> Discounts</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</section>

{{-- The Dimple Pass Commitment --}}
<section class="bg-faded padding-top-3x padding-bottom-3x mt-5">
  <div class="container">
    <h3 class="text-center mb-30 pb-2">Our Commitment to Your Vacation</h3>
    <div class="row commitmentFooter">
      <div class="col-md-3 col-sm-6 text-center mb-30">
        <a href="/thebest">
          <i class="w-90 dp-warning img-thumbnail mx-auto mb-3 pe-7s-camera"></i>
        </a>
        <h6>The Best Attractions</h6>
        <p class="text-muted margin-bottom-none">We strive to include only the best vendors available.</p>
         <p><a href="/thebest">Learn More</a></p>
      </div>
      <div class="col-md-3 col-sm-6 text-center mb-30">
        <a href="/vendor/promise">
          <i class="w-90 dp-warning img-thumbnail mx-auto mb-3 pe-7s-id"></i>
        </a>
        <h6>Hassle Free Redemption</h6>
        <p class="text-muted margin-bottom-none">We work with vendors to ensure redeeming your pass is hassle-free.</p>
        <p><a href="/vendor/promise">Learn More</a></p>
      </div>
      <div class="col-md-3 col-sm-6 text-center mb-30">
        <a href="/guarantee">
          <i class="w-90 dp-warning img-thumbnail mx-auto mb-3 pe-7s-umbrella"></i>
        </a>
        <h6>Money Back Guarantee</h6>
        <p class="text-muted margin-bottom-none">Not satisfied? We'll return money within 30 days of travel.</p>
         <p><a href="/guarantee">Learn More</a></p>
      </div>
      <div class="col-md-3 col-sm-6 text-center mb-30">
        <a href="/foundation">
          <i class="w-90 dp-warning img-thumbnail mx-auto mb-3 pe-7s-sun"></i>
        </a>
        <h6>100% to get Kids Outdoors</h6>
        <p class="text-muted margin-bottom-none">100% of our profits go to programs that get kids outdoors.</p>
         <p><a href="/foundation">Learn More</a></p>
      </div>
    </div>
  </div>
</section>

@stop

@section('scripts')
<script>

</script>
@stop
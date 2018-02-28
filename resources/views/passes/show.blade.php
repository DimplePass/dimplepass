@extends('_layouts.body')

@section('meta-page')
  <title>The Dimple Pass | Save Money on National Park Travel</title>
  <meta name="description" content="Meta Description Here" />
@stop

@section('meta-og')
  <meta property="og:type" content="article"/>
  <meta property="og:title" content="{{ $pass->name }} Dimple Pass"/>
  <meta property="og:url" content="{{ Request::url() }}"/>
  <meta property="og:image" content="OG Image URL Here."/>
  <meta property="og:site_name" content="Dimple Pass"/>
  <meta property="og:description" content="OG Description Here."/>
  <meta property="og:locale" content="en_US"/>
@stop

@section('logo-tag')
{{ $pass->name }} National Park
@stop

@section('content')

{{-- Hero Slider --}}
<section class="hero-slider" style="background-image: url(/img/destinations/{{ $pass->slug }}-1920x580.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-lg-8 padding-bottom-2x text-md-left text-center hero-overlay">
        <div class="hero-text">
          <h1 class="mb-2 white-color">The Best of @yield('logo-tag')</h1>
          <h2 class="mt-0 mb-2 white-color"><strong>One Pass. <span class="dp-warning">{{ count($pass->discounts) }} Discounts.</span></strong></h2>               
        </div>
    </div>
  </div>
</section>

{{-- Page Content --}}
<div class="container padding-bottom-3x mb-1 mt-5">
  <div class="row">
    {{-- Vendor Discounts --}}
    <div class="col-xl-9 col-lg-9 col-md-9 order-md-2">
      {{-- Dimple Pass CTA Bar --}}
      <div class="shop-toolbar padding-bottom-1x mb-2">
        <div class="column">
          <h2 class="mb-0"><strong>The {{ $pass->name }} Dimple Pass</strong></h2>
          <h3 class="mb-0 dp-warning">Summer {{ $pass->start->format('Y') }} <small>{{ $pass->start->format('F jS, Y') }} - {{ $pass->end->format('F jS, Y') }}</small></h3>
          <h6 class="mt-o">Dates may vary per vendor.</h6>
        </div>
        <div class="column">
          @if (Auth::user())
            <h2><strong></strong><a href="{{ route('checkout.payment') }}" class="btn btn-primary btn-lg btn-block">Buy the <strong>${{ round($pass->price) }}</strong> pass</a></h2>
          @else
            <h2><strong></strong><a href="{{ route('checkout.index') }}" class="btn btn-primary btn-lg btn-block">Buy the <strong>${{ round($pass->price) }}</strong> pass</a></h2>
          @endif
        </div>
      </div>
      {{-- Vendor Listing --}}
      @forelse ($pass->discounts->shuffle() as $d)
        <div class="product-card product-list city1">
          <a class="product-thumb" href="#">
            {{-- <div class="product-badge text-danger">50% Off</div> --}}
            <img src="/img/discounts/yellowstone/{{ $d->vendor->id }}-{{ $d->id }}-450x290.jpg" alt="">
          </a>
          <div class="product-info">
            <h3 class="product-title">
              {{ $d->vendor->name }} <small>{{ $d->vendor->city }}, {{ $d->vendor->state }}</small>
            </h3>
            <p class="hidden-xs-down">{{ $d->description }}</p>
            <div class="product-buttons">
              <h4><i class="icon-tag dp-success"></i> {{ round($d->percent*100) }}% Off {{ $d->name }} <small>(limit {{ $d->limit }})</small></h4>
              {!! $d->rates !!}
              <ul class="list-unstyled text-sm">
                <li><span class="opacity-50">Season:</span> {{ $d->start->format('F jS, Y') }} - {{ $d->end->format('F jS, Y') }}</li>
                {!! $d->hours !!}
                @if ($d->reservations_required == 1)
                  <li class="dp-danger">Reservations Required</li>
                @endif
                @if ($d->limited_availability == 1)
                  <li class="dp-danger">Limited Availability - Book Early!</li>
                @endif
                <li><a href="{{ $d->url }}" target="_blank">Visit Website</a></li>
              </ul>
            </div>
          </div>
        </div>
      @empty
        <h3><strong>The 2018  pass will be available in mid-April.</strong></h3>
      @endforelse
    </div>
    {{-- Sidebar --}}
    <div class="col-xl-3 col-lg-3 col-md-3 order-md-1">
      <div class="sticky">
        <aside class="sidebar">
          {{-- Filters --}}
          @include('/passes/_inc/filters')
        </aside>
  			<hr class="mb-5 hidden-sm-down">
  			<aside class="text-center">
          @if (Auth::user())
            <h2><strong></strong><a href="{{ route('checkout.payment') }}" class="btn btn-primary btn-lg btn-block">Buy the <strong>${{ round($pass->price) }}</strong> pass</a></h2>
          @else
            <h2><strong></strong><a href="{{ route('checkout.index') }}" class="btn btn-primary btn-lg btn-block">Buy the <strong>${{ round($pass->price) }}</strong> pass</a></h2>
          @endif
        	<h5><a href="/how">How does it work?</a></h5>				
  			</aside>
      </div>
    </div>
  </div>
</div>

@stop

@section('scripts')
<script>

$("#filters :checkbox").click(function() {
  $(".product-card").fadeOut('fast');
  $("#filters :checkbox:checked").each(function() {
    $("." + $(this).val()).fadeIn('fast');
  });
});

</script>
@stop
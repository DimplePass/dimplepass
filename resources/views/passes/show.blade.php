@extends('_layouts.body')

@section('meta-page')
  <title>{{ $pass->name }} Pass</title>
  <meta name="description" content="One Pass. {{ count($pass->discounts) }} Discounts. Save money and don't miss a thing in {{ $pass->destinations->first()->name }}." />
  <meta name="keywords" content="{{ $pass->name }}, national park, travel, discounts, coupons, attractions, activities, things to do, Get Outside Pass, g.o. pass">
@stop

@section('meta-og')
  <meta property="og:type" content="article"/>
  <meta property="og:title" content="{{ $pass->name }} Pass"/>
  <meta property="og:url" content="{{ Request::url() }}"/>
  <meta property="og:image" content="{{ url('/img/destinations/' . $pass->destinations->first()->slug .'-1200x630.jpg') }}"/>
  <meta property="og:site_name" content="Get Outside Pass"/>
  <meta property="og:description" content="One Pass. {{ count($pass->discounts) }} Discounts. Save money and don't miss a thing in {{ $pass->destinations->first()->name }}."/>
  <meta property="og:locale" content="en_US"/>
@stop

@section('content')

{{-- Hero Slider --}}
<section class="hero-slider" style="background-image: url(/img/destinations/{{ $pass->destinations->first()->slug }}-1920x580.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-10 padding-bottom-2x text-md-left text-center hero-overlay">
        <div class="hero-text">
          <h2 class="mb-2 white-color"><strong>Save Money.</strong></h2>
          <h1 class="mb-2 text-warning">{{ $pass->destinations->first()->name }}'s Top Attractions and Activities.</h1>
          @if (count($pass->discounts))
            <h2 class="mt-0 mb-2 white-color"><strong>Exclusive Discounts!</strong></h2>   
          @else
            <h2 class="mt-0 mb-2 white-color"><strong>{{ $pass->name }} Pass is available <span class="dp-warning">May 15th.</span></strong></h2>   
          @endif           
        </div>
      </div>
    </div>
  </div>
</section>

{{-- Show Pass if actively selling. --}}
@if (count($pass->discounts))

{{-- Page Content --}}
<div class="container padding-bottom-3x mb-1 mt-5">
  <div class="row">
    {{-- Vendor Discounts --}}
    <div class="col-xl-9 col-lg-9 col-md-9 order-md-2">
      {{-- Get Outside Pass CTA Bar --}}
      <div class="shop-toolbar padding-bottom-1x mb-2">
        <div class="column">
          <h2 class="mb-1"><strong>The {{ $pass->name }} Pass</strong></h2>
          <h4 class="text-warning"><strong>$16</strong> gets you discounts on the best attractions and activities.</h4>
          <h6 class="mb-0">{{ $pass->start->format('F jS, Y') }} - {{ $pass->end->format('F jS, Y') }} <small>Dates vary per vendor.</small></h6>
        </div>
        <div class="column">
          @if (Auth::user())
            <h2><strong></strong><a href="{{ route('checkout.payment', ['pass_id' => $pass->id]) }}" class="btn btn-primary btn-xl btn-block" onClick="ga('send', 'event', 'BuyPass-TopRight', '{{ Request::path() }}', '{{ $pass->id }}');">Buy the <strong>${{ number_format($pass->price/100, 0, '.', ',') }}</strong> pass</a></h2>
          @else
            <h2><strong></strong><a href="{{ route('checkout.register', ['pass_id' => $pass->id]) }}" class="btn btn-primary btn-xl btn-block" onClick="ga('send', 'event', 'BuyPass-TopRight', '{{ Request::path() }}', '{{ $pass->id }}');">Buy the <strong>${{ number_format($pass->price/100, 0, '.', ',') }}</strong> pass</a></h2>
          @endif
        </div>
      </div>
      {{-- Vendor Listing --}}
      @foreach ($pass->discounts->shuffle() as $d)
        <div class="product-card product-list {{ str_slug("$d->city, $d->state", "-") }}">
          <a class="product-thumb" href="#">
            {{-- <div class="product-badge text-danger">50% Off</div> --}}
            <img src="/img/discounts/yellowstone/{{ $d->vendor->id }}-{{ $d->id }}-450x290.jpg" alt="">
          </a>
          <div class="product-info">
            <h3 class="product-title">
              {{ $d->vendor->name }} <small>{{ $d->city }}, {{ $d->state }}</small>
            </h3>
            <p class="hidden-xs-down">{{ $d->description }}</p>
            <div class="product-buttons">
              @if ($d->percent > 1)
                <h3><i class="icon-tag dp-success"></i> <strong>${{ round($d->percent) }} Off {{ $d->name }}</strong> <small>(limit {{ $d->limit }})</small></h3>
              @else
                <h3><i class="icon-tag dp-success"></i> <strong>{{ round($d->percent*100) }}% Off {{ $d->name }}</strong> <small>(limit {{ $d->limit }})</small></h3>
              @endif
              {!! $d->rates !!}
              <ul class="list-unstyled text-sm">
                <li><span class="opacity-50">Season:</span> {{ $d->start->format('F jS, Y') }} - {{ $d->end->format('F jS, Y') }}</li>
                {!! $d->hours !!}
                @if ($d->fine_print)
                  <li>{{ $d->fine_print }}</li>
                @endif
                @if ($d->reservations_required == 1)
                  <li class="dp-danger">Reservations Required</li>
                @endif
                @if ($d->limited_availability == 1)
                  <li class="dp-danger">Limited Availability - Book Early!</li>
                @endif
                <li><a href="{{ $d->url }}" target="_blank" onClick="ga('send', 'event', 'ToSite-VisitWebsite', '{{ Request::path() }}', '{{ $d->id }}');">Visit Website</a></li>
              </ul>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    {{-- Sidebar --}}
    <div class="col-xl-3 col-lg-3 col-md-3 order-md-1">
      <aside class="sidebar mb-5 text-center text-md-left">
        <img src="/img/phonePass.png" alt="Get Outside Pass on Phone" class="mb-5">
        <h4><strong><a href="/how">How does it work?</a></strong></h4>
        <h5 class="gray">4 Easy Ways to Redeem</h5>   
        <h6><i class="pe-7s-mouse text-warning"></i> Book Online</h6>
        <h6><i class="pe-7s-call text-warning"></i> Book by Phone</h6>
        <h6><i class="pe-7s-phone text-warning"></i> Show Pass on Phone</h6>
        <h6><i class="pe-7s-print text-warning"></i> Show Printed Pass</h6> 
      </aside>
      <div class="sticky">
        <aside class="sidebar">
          {{-- Filters --}}
          @include('/passes/_inc/filters')
        </aside>
  			<hr class="mb-5 hidden-sm-down">
  			<aside class="text-center">
          @if (Auth::user())
            <h2><strong></strong><a href="{{ route('checkout.payment', ['pass_id' => $pass->id]) }}" class="btn btn-primary btn-xl btn-block" onClick="ga('send', 'event', 'BuyPass-LeftSticky', '{{ Request::path() }}', '{{ $pass->id }}');">Buy the <strong>${{ number_format($pass->price/100, 0, '.', ',') }}</strong> pass</a></h2>
            <h5 class="text-warning">Early Bird Rate</h5>
            <h6>Buy today and save as we continue to add more offers.</h6>
            <h6><strong>$36 after May 15th</strong></h6>
          @else
            <h2><strong></strong><a href="{{ route('checkout.register', ['pass_id' => $pass->id]) }}" class="btn btn-primary btn-xl btn-block" onClick="ga('send', 'event', 'BuyPass-LeftSticky', '{{ Request::path() }}', '{{ $pass->id }}');">Buy the <strong>${{ number_format($pass->price/100, 0, '.', ',') }}</strong> pass</a></h2>
            <h5 class="text-warning">Early Bird Rate</h5>
            <h6>Buy today and save as we continue to add more offers.</h6>
            <h6><strong>$36 after May 15th</strong></h6>
          @endif		
  			</aside> 
      </div>
    </div>
  </div>
</div>

@endif

@stop

@section('scripts')
<script>

//////////
/// On Page Load
//////////

$(function() {

  /// Exit Popup
    bioEp.init({
      width: 600,
      height: 450,
      html: '<a href="/foundation" target="_blank"><img src="/img/dontblowit.jpg" alt="Don\'t Blow It!" /></a>',
      cookieExp: 0
    });

});



// Checkbox towns filter.
$("#filters :checkbox").click(function() {
  $(".product-card").fadeOut('fast');
  $("#filters :checkbox:checked").each(function() {
    $("." + $(this).val()).fadeIn('fast');
  });
});

</script>
@stop
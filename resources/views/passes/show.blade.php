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
          <h2 class="mt-0 mb-2 white-color"><strong>{{ $pass->name }} Pass</strong></h2>  
          @if (count($pass->discounts))
            <h3 class="text-warning"><strong>Unlock discounts on {{ $pass->destinations->first()->short_name }}'s Top Activities.</strong></h3>
          @else
            <h3 class="text-warning"><strong>Available <span class="dp-warning">June 15th.</span></strong></h3>
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
    <div class="col-xl-9 col-lg-9 col-md-9 order-md-2">

      {{-- Get Outside Pass CTA Bar --}}
      <div class="shop-toolbar padding-bottom-1x mb-2">
        <div class="column">
          <h3 class="mb-1"><strong>All profits go to programs that Get Kids Outdoors!</strong></h3>
          <h3 class="mb-1">Your <strong class="text-warning">${{ number_format($pass->price/100, 0, '.', ',') }} pass</strong> unlocks <strong class="text-warning">{{ count($pass->discounts) }} discounts</strong>{{--  for up to <strong class="text-warning">5 people</strong> --}}.</h3>
          <h6 class="mb-0">Valid {{ $pass->start->format('F jS, Y') }} - {{ $pass->end->format('F jS, Y') }} <small>Dates vary per vendor.</small></h6>
        </div>
        <div class="column">
            <h2 class="mb-1"><strong></strong><a href="{{ route('checkout.payment', ['pass_id' => $pass->id]) }}" class="btn btn-primary btn-xl btn-block" onClick="ga('send', 'event', 'BuyPass-TopRight', '{{ Request::path() }}', '{{ $pass->id }}');">Get the Pass</a></h2>
            <h6 class="mt-1 text-center">Good for up to 5 people</h6>
        </div>
      </div>

     


      {{-- Vendor Listing --}}
      @foreach ($pass->discounts->where('active', '=', 1)->shuffle() as $d)
        <div class="product-card product-list {{ str_slug("$d->city, $d->state", "-") }}">
          <a class="product-thumb" href="#">
            {{-- <div class="product-badge text-danger">50% Off</div> --}}
            <img src="/img/discounts/{{ $pass->destinations->first()->slug }}/{{ $d->vendor->id }}-{{ $d->id }}-450x290.jpg" alt="">
          </a>
          <div class="product-info">
            <h3 class="product-title">
              {{ $d->vendor->name }} <small>{{ $d->city }}, {{ $d->state }}</small>
            </h3>
            <div class="product-buttons">
              @if (is_null($d->percent))
                <h3><i class="icon-tag dp-success"></i> <strong>{{ $d->name }}</strong></h3>
              @elseif ($d->percent > .99)
                <h3><i class="icon-tag dp-success"></i> <strong>${{ $d->percent }} Off {{ $d->name }}</strong></h3>
              @else
                <h3><i class="icon-tag dp-success"></i> <strong>{{ round($d->percent*100) }}% Off {{ $d->name }}</strong></h3>
              @endif
              {!! $d->rates !!}
              <p><a href="#details_{{ $d->id }}" data-toggle="collapse" onClick="ga('send', 'event', 'Expand-DiscountDetails', '{{ Request::path() }}', '{{ $d->id }}');">Details <i class="fa fa-chevron-down"></i></a></p>
              <div class="collapse" id="details_{{ $d->id }}">
                <p class="hidden-xs-down">{{ $d->description }}</p>
                <ul class="list-unstyled text-sm">
                  <li><span class="opacity-50">Season:</span> {{ $d->start->format('F jS, Y') }} - {{ $d->end->format('F jS, Y') }}</li>
                  {!! $d->hours !!}
                  @if ($d->fine_print)
                    <li>{{ $d->fine_print }}</li>
                  @endif
                    <li><span class="opacity-50">Limit:</span> {{ $d->limit }}</li>
                  @if ($d->reservations_required == 1 && $d->limited_availability == 0)
                    <li class="dp-danger">Reservations Required</li>
                  @elseif ($d->reservations_required == 0 && $d->limited_availability == 1)
                    <li class="dp-danger">Limited Availability - Book Early!</li>
                  @elseif ($d->reservations_required == 1 && $d->limited_availability == 1)
                    <li class="dp-danger">Reservations Required <span class="gray-darker">|</span> Limited Availability - Book Early!</li> 
                  @endif
                  <li><a href="{{ $d->url }}" target="_blank" onClick="ga('send', 'event', 'ToSite-VisitWebsite', '{{ Request::path() }}', '{{ $d->id }}');">Visit Website</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    {{-- Sidebar --}}
    <div class="col-xl-3 col-lg-3 col-md-3 order-md-1">
     {{-- <aside class="sidebar mb-5 text-center text-md-left">
        <img src="/img/phonePass.png" alt="Get Outside Pass on Phone" class="mb-5">
        <h4><strong><a href="/how">How does it work?</a></strong></h4>
        <h5 class="gray">Buy. Redeem. Save.</h5>   
      </aside> --}}
      <div class="sticky">
        <aside class="sidebar">
          {{-- Filters --}}
          @include('/passes/_inc/filters')
        </aside>
  			<hr class="mb-5 hidden-sm-down">
  			<aside class="text-center">
            <h2><strong></strong><a href="{{ route('checkout.payment', ['pass_id' => $pass->id]) }}" class="btn btn-primary btn-xl btn-block" onClick="ga('send', 'event', 'BuyPass-LeftSticky', '{{ Request::path() }}', '{{ $pass->id }}');">Get the Pass</a></h2>
            <h6 class="mt-1 text-center">Good for up to 5 people</h6>
  			</aside> 
      </div>
    </div>
  </div>
</div>

{{-- Testimonials --}}
<div class="bg-secondary">
  <div class="container testimonials">
   <h4 class="gray-darker">What you're saying...</h4>
    <div class="row">
      <div class="col-md-4">
        <blockquote class="margin-top-1x margin-bottom-1x">
          <p><em>The pass is very reasonably priced! I ended up saving $32.50 over 6 days, so it more than paid for itself…</em></p>
          <cite>Susan</cite>
        </blockquote>
      </div>
      <div class="col-md-4">
        <blockquote class="margin-top-1x margin-bottom-1x">
          <p><em>Love this young company. Great value and getting new businesses hooked in all the time. Keep up the good work!</em></p>
          <cite>Janet - Los Angeles, CA</cite>
        </blockquote>
      </div>
      <div class="col-md-4">
        <blockquote class="margin-top-1x margin-bottom-1x">
          <p><em>100% of their profits go to helping kids get outdoors! Brilliant! So proud of them!!</em></p>
          <cite>Kate - Oakland, CA</cite>
        </blockquote>
      </div>
    </div>
  </div>
</div>



<div class="footerDrawer">
  <div class="open">
    <h3 class="white-color"><small><i class="fa fa-chevron-down white-color"></i></small> <strong>Buy Pass Now for $18!</strong></h3>
  </div>
  <div class="content">
    <h4><strong>Help us celebrate National Get Outdoors Day.</strong></h4>
    <h5><strong>Save 50%</strong> on pass purchase until June 9th!</h5>
    <a href="{{ route('checkout.payment', ['pass_id' => $pass->id, 'discount' => '1800']) }}" class="btn btn-primary btn-rounded btn-lg mt-3">Buy for $18</a>
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

// If Yellowstone Pass
@if ($pass->id == 1)

  // Open/Close on click.
  $('.footerDrawer .open').on('click', function() {
    $('.footerDrawer .content').slideToggle();
    setTimeout(function(){
      $('#launcher').fadeToggle();
    }, 300);
  });
  
  // Open after 20 seconds.
  // setTimeout(function(){
  //   $('.footerDrawer .open').show();
  //   $('.footerDrawer .content').slideToggle();
  //   $('#launcher').hide();
  // }, 20000);

@endif

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
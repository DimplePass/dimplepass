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
  <div class="header-profits">
    <div class="container">
      <div class="text-center float-right">
        <a href="/foundation">
          <img src="/img/foundation/headerkids.jpg" class="d-block mx-auto img-thumbnail rounded-circle mb-1" alt="Get Kids Outdoors">
          <h5 class="white-color hidden-xs-down btn btn-sm btn-primary">Learn More <i class="fa fa-arrow-right"></i></h5>
        </a>
      </div>
      <h1>All Profits to programs that Get Kids Outdoors.</h1>
    </div>
  </div>
  <div class="container hidden-lg-down">
    <div class="row">
      <div class="col-md-10 padding-bottom-2x text-md-left text-center hero-overlay">
        <div class="hero-text">
          <h2 class="mt-0 mb-2 white-color"><strong>{{ $pass->name }} Pass</strong></h2>
          @if (count($pass->discounts) == 0)
            <h4 class="white-color">Available April 15th for Summer 2019.</h4>
            <h5 class="white-color">View a sample of the savings on last year's passes in <a class="white-color" href="/yellowstone/passes/go-yellowstone-summer-2018/">Yellowstone</a> and <a class="white-color" href="/glacier/passes/go-glacier-summer-2018/">Glacier</a>.</h5>
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

      {{-- Mobile --}}
      <div class="mb-5">
        <h1 class="hidden-xl-up mt-0 mb-0"><strong>{{ $pass->name }} Pass</strong></h1>  
        @if (count($pass->discounts))
          <h2 class="mt-2 mb-0"><strong class="text-warning">${{ number_format($pass->price/100, 0, '.', ',') }} pass</strong> unlocks <strong class="text-warning">{{ count($pass->discounts) }} discounts</strong> for up to <strong class="text-warning">5 people</strong>.</h2>
        @else
          <h2 class="mt-2 mb-0 text-warning"><strong>Available <span class="dp-warning">Summer 2019.</span></strong></h2>
        @endif
        <h3 class="mt-2 mb-0"><strong>Available immediately upon purchase!</strong></h3>  
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
      @if ($pass->id == 3)
      <hr>
      <div class="col-sm-12">
        <h2>Thank you to our 2018 vendors.</h2>
        <h4>We expect to see them again in 2019 and will be adding them in the week's ahead.</h4>
        <ul>
          <li>Wild West Yellowstone Rodeo</li>
          <li>National Museum of Wildlife Art</li>
          <li>Yellowstone Giant Screen Theatre</li>
          <li>Dornan's</li>
          <li>Fly Jackson Hole</li>
          <li>Wilderness Trails, Inc.</li>
          <li>Big Sky Resort</li>
          <li>Jackson Hole Playhouse</li>
          <li>Montana Whitewater</li>
          <li>Yellowstone Aerial Adventures</li>
          <li>Grand Targhee Resort</li>
          <li>Jackson Hole Mountain Resort</li>
          <li>Diamond P Ranch</li>
          <li>Rocky Mountain Rotors</li>
          <li>Barker-Ewing Scenic Float Trips</li>
          <li>Yellowstone Historic Center</li>
          <li>Grizzly & Wolf Discovery Center</li>
        </ul>
      </div> 
      @endif
      @if ($pass->id == 4)
      <hr>
      <div class="col-sm-12">
        <h2>Thank you to our 2018 vendors.</h2>
        <h4>We expect to see them again in 2019 and will be adding them in the week's ahead.</h4>
        <ul>
          <li>Swan Mountain Outfitters</li>
          <li>Amazing Fun Center</li>
          <li>Glacier Raft Company</li>
          <li>The Museum at Central School</li>
          <li>Conrad Mansion Museum</li>
          <li>Glacier Raft Company</li>
          <li>Glacier Highline</li>
          <li>Great Northern Brewing</li>
        </ul>
      </div> 
       @endif 
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
  			<hr class="mb-5 hidden-lg-down">
  			<aside class="text-center hidden-lg-down">
            <h2><a href="{{ route('checkout.payment', ['pass_id' => $pass->id]) }}" class="btn btn-primary btn-xl btn-block" onClick="ga('send', 'event', 'BuyPass-LeftSticky', '{{ Request::path() }}', '{{ $pass->id }}');">Get your <strong>${{ number_format($pass->price/100, 0, '.', ',') }}</strong> Pass</a></h2>
            <h2>Early Bird Rate</h2>
            @if ($pass->id == 3)
              <h6 class="text-center gray">$16 starting May 1st</h6>
            @endif
            @if ($pass->id == 4)
              <h6 class="text-center gray">$12 starting May 1st</h6>
            @endif
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

<div class="stickyFooter hidden-xl-up">
    <a href="{{ route('checkout.payment', ['pass_id' => $pass->id]) }}" onClick="ga('send', 'event', 'BuyPass-StickyFooter', '{{ Request::path() }}', '{{ $pass->id }}');">
      <h3 class="white-color"><strong>Get your <strong>${{ number_format($pass->price/100, 0, '.', ',') }}</strong> Pass <i class="fa fa-arrow-right"></i></strong></h3>
      <h6 class="mt-1 text-center dp-info">Good for up to 5 people.</h6>
    </a>
</div>

@endif

@stop

@section('scripts')

{{-- MailChimp Popup --}}
<script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us18.list-manage.com","uuid":"5e0fce7e4132ef1c8a2a97272","lid":"008eacf5d6"}) })</script>

<script>

// Checkbox towns filter.
$("#filters :checkbox").click(function() {
  $(".product-card").fadeOut('fast');
  $("#filters :checkbox:checked").each(function() {
    $("." + $(this).val()).fadeIn('fast');
  });
});

</script>
@stop
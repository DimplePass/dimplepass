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
            <h4 class="white-color">Available soon for Summer 2019.</h4>
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

    {{-- Right Listings  --}}
    <div class="col-xl-8 col-lg-8 col-md-8 order-md-2" id="rightOffers">

      {{-- Mobile --}}
      <div class="mb-5">
        <h1 class="hidden-xl-up mt-0 mb-0"><strong>{{ $pass->name }} Pass</strong></h1>
        <div id="valuePropLargeMap">
          @if (count($pass->discounts))
            <h2 class="mt-2 mb-0"><strong class="text-warning">${{ number_format($pass->price/100, 0, '.', ',') }} pass</strong> unlocks <strong class="text-warning">{{ count($pass->discounts->where('active',1)) }} discounts</strong> for up to <strong class="text-warning">5 people</strong>.</h2>
          @else
            <h2 class="mt-2 mb-0 text-warning"><strong>Available <span class="dp-warning">Summer 2019.</span></strong></h2>
          @endif
          <h4 class="mt-2 mb-0"><strong>Available immediately so you can start booking today!</strong></h4>  
        </div>
      </div>

{{--       <div class="well">
        <div class="col-md-4">
          <div class="form-group{{ $errors->has('numAdults') ? ' has-error' : '' }}">
              {!! Form::label('numAdults', '# Adults') !!}
              {!! Form::text('numAdults', null, ['class' => 'form-control']) !!}
              <small class="text-danger">{{ $errors->first('numAdults') }}</small>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group{{ $errors->has('numChildren') ? ' has-error' : '' }}">
              {!! Form::label('numChildren', '# Children') !!}
              {!! Form::text('numChildren', null, ['class' => 'form-control']) !!}
              <small class="text-danger">{{ $errors->first('numChildren') }}</small>
          </div>
        </div>
        <div class="col-md-4">
          <h3><small># discounts</small> <span id="numDiscounts">-</span></h3>
          <h3><small>Regular Price</small> <span id="regularPrice">-</span></h3>
          <h3><small>Your Price</small> <span id="yourPrice"></span></h3>
          <h3><small>Total Savings</small>  <span id="totalSavings"></span></h3>
        </div>
      </div> --}}

      {{-- Vendor Listing --}}
      @foreach ($pass->discounts->where('active', '=', 1)->shuffle() as $d)
        <div class="col-sm-12" id="discount-{{ $d->id }}">
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
        </div>
      @endforeach
      {{-- Yellowstone Vendor Outreach --}}
      @if ($pass->id == 3)
      <hr>
      <div class="col-sm-12">
        <h2>Thank you to our 2018 vendors.</h2>
        <h4>We expect to see them again in 2019 and will be adding them in the week's ahead.</h4>
        <ul>
          <li>Wild West Yellowstone Rodeo</li>
          <li>Yellowstone Giant Screen Theatre</li>
          <li>Wilderness Trails, Inc.</li>
          <li>Big Sky Resort</li>
          <li>Jackson Hole Playhouse</li>
          <li>Yellowstone Aerial Adventures</li>
          <li>Jackson Hole Mountain Resort</li>
          <li>Diamond P Ranch</li>
          <li>Barker-Ewing Scenic Float Trips</li>
        </ul>
      </div> 
      @endif
      {{-- Glacier Vendor Outreach --}}
      @if ($pass->id == 4)
      <hr>
      <div class="col-sm-12">
        <h2>Thank you to our 2018 vendors.</h2>
        <h4>We expect to see them again in 2019 and will be adding them in the week's ahead.</h4>
        <ul>
          <li>Amazing Fun Center</li>
          <li>Glacier Raft Company</li>
          <li>Conrad Mansion Museum</li>
          <li>Glacier Raft Company</li>
          <li>Glacier Highline</li>
        </ul>
      </div>
       @endif
      {{-- Zion Vendor Outreach --}}
       @if ($pass->id == 6)
       <hr>
       <div class="col-sm-12">
        <h3 class="text-warning mb-0">More vendors coming soon.</h3>
         <h4>We will be adding these adventures in the next few weeks.</h4>
         <ul>
           <li>Zip Lines</li>
           <li>UTV/ATV Rentals</li>
           <li>Horseback Rides</li>
           <li>Hiking Tours</li>
           <li>Canyoneering Guides</li>
           <li>Bike Rentals</li>
           <li>Dining</li>
           <li>and more...</li>
         </ul>
       </div> 
        @endif
      {{-- Great Smoky Mountains Vendor Outreach --}}
       @if ($pass->id == 8)
       <hr>
       <div class="col-sm-12">
        <h3 class="text-warning mb-0">More vendors coming soon.</h3>
         <h4>We will be adding these adventures in the next few weeks.</h4>
         <ul>
           <li>Zip Lines</li>
           <li>Whitewater Rafting</li>
           <li>Mountain Coasters</li>
           <li>Adventure Parks</li>
           <li>Chairlift Rides</li>
           <li>Tram Rides</li>
           <li>Scenic Float Trips</li>
           <li>Tubing</li>
           <li>Bike Rentals</li>
           <li>Dining</li>
           <li>and more...</li>
         </ul>
       </div> 
        @endif 
    </div>

    {{-- Left Sidebar --}}
    <div class="col-xl-4 col-lg-4 col-md-4 order-md-1" id="leftMap">

      <div id="valuePropSmallMap" class="text-center mb-4">
        @if (count($pass->discounts))
          <h2 class="mt-2 mb-0"><strong class="text-warning">${{ number_format($pass->price/100, 0, '.', ',') }} pass</strong> unlocks <strong class="text-warning">{{ count($pass->discounts->where('active',1)) }} discounts</strong> for up to <strong class="text-warning">5 people</strong>.</h2>
        @else
          <h2 class="mt-2 mb-0 text-warning"><strong>Available <span class="dp-warning">Summer 2019.</span></strong></h2>
        @endif
        <h4 class="mt-2 mb-0"><strong>Available immediately so you can start booking today!</strong></h4>  
      </div>
      
      <aside class="sidebar">
        <div id="destinationMap_wrapper">
            <div id="destinationMap_canvas" class="mapping"></div>
        </div>
        <ul class="list-inline hidden-sm hidden-xs text-right" id="sizeMap">
          <li><a href="" id="resetMap" class="nounderline">reset <i class="fa fa-refresh"></i></a></li>
          <li><a href="" id="sizeMapSmall" class="nounderline">small map <i class="fa fa-search-minus"></i></a></li>
          <li><a href="" id="sizeMapLarge" class="nounderline">large map <i class="fa fa-search-plus"></i></a></li>
        </ul>
      </aside>
      <div class="sticky">
        <aside class="sidebar">
          {{-- Filters --}}
          @include('/passes/_inc/filters')
        </aside>
  			<hr class="mb-5 hidden-lg-down hideLargeMap">
  			<aside class="text-center hidden-lg-down">
            @if ($pass->id == 1)
              <h6 class="text-center text-warning">You are viewing last year's GO Yellowstone Summer Pass</h6>
              <h2><a href="/yellowstone/passes/go-yellowstone-2019" class="btn btn-primary btn-xl btn-block" onClick="ga('send', 'event', 'BuyPass-LeftSticky', '{{ Request::path() }}', '3');">View the 2019 Pass</a></h2>
            @elseif ($pass->id == 2)
              <h6 class="text-center text-warning">You are viewing last year's GO Glacier Summer Pass</h6>
              <h2><a href="/glacier/passes/go-glacier-2019" class="btn btn-primary btn-xl btn-block" onClick="ga('send', 'event', 'BuyPass-LeftSticky', '{{ Request::path() }}', '3');">View the 2019 Pass</a></h2>
            @else
              <h2><a href="{{ route('checkout.payment', ['pass_id' => $pass->id]) }}" class="btn btn-primary btn-xl btn-block" onClick="ga('send', 'event', 'BuyPass-LeftSticky', '{{ Request::path() }}', '{{ $pass->id }}');">Get your <strong>${{ number_format($pass->price/100, 0, '.', ',') }}</strong> Pass</a></h2>
              <div class="hideLargeMap">
                <h2>Early Bird Rate</h2>
                @if ($pass->id == 3)
                  <h6 class="text-center gray">$16 starting May 1st</h6>
                @endif
                @if ($pass->id == 4)
                  <h6 class="text-center gray">$12 starting May 1st</h6>
                @endif
                @if ($pass->id == 6)
                  <h6 class="text-center gray">$16 starting April 1st</h6>
                @endif
                @if ($pass->id == 8)
                  <h6 class="text-center gray">$16 starting April 1st</h6>
                @endif
                <h6 class="mt-1 text-center">Good for up to 5 people</h6>
              </div>
            @endif
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
{{-- Google Maps Marker Clusterer --}}
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>

{{-- Multiple Markets Test --}}
{{-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="../../maptest.json"></script>
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script> --}}

<script>

/////////
/// Towns Filter
/////////

$("#filters :checkbox").click(function() {
  $(".product-card").fadeOut('fast');
  $("#filters :checkbox:checked").each(function() {
    $("." + $(this).val()).fadeIn('fast');
  });
});

/////////
/// Expand Map
/////////

$('#sizeMapLarge').click(function (e) {
  e.preventDefault();
  $('#rightOffers').attr('class', 'col-sm-12 col-md-12 m-t-3 order-md-2');
  // $('#rightOffers').children('div').attr('class', 'col-sm-6 col-md-6');
  $('#leftMap').attr('class', 'col-sm-12 col-md-12 order-md-1');
  $('#sizeMapSmall').show();
  $('#sizeMapLarge').hide();
  $('#filters').hide();
  $('#resetMap').show();
  $('.hideLargeMap').hide();
  $('#valuePropLargeMap').hide();
  $('#valuePropSmallMap').show();
  $('#destinationMap_wrapper').css({'height': '600px' });
  initialize();
});

$('#sizeMapSmall').click(function (e) {
  e.preventDefault();
  $('#rightOffers').attr('class', 'col-sm-12 col-md-8 order-md-2');
  // $('#rightOffers').children('div').attr('class', 'col-sm-12 col-md-12');
  $('#leftMap').attr('class', 'col-sm-12 col-md-4 order-md-1');
  $('#sizeMapSmall').hide();
  $('#sizeMapLarge').show();
  $('#filters').show();
  $('#resetMap').hide();
  $('#valuePropLargeMap').show();
  $('#valuePropSmallMap').hide();
  $('#destinationMap_wrapper').css({'height': '400px' });
  initialize();
});

/// Hide map specific items on Page Load.
$('#sizeMapSmall').hide();
$('#valuePropSmallMap').hide();
$('#resetMap').hide();


//////////
/// Destination Map with Offers
/// https://wrightshq.com/playground/placing-multiple-markers-on-a-google-map-using-api-3/
//////////

$(function($) {
  // Asynchronously Load the map API 
  var script = document.createElement('script');
  script.src = "//maps.googleapis.com/maps/api/js?key=AIzaSyCtqYOh4F3zeGI_Tf4nlXjNZ95j5J7Kdrg&callback=initialize";
  document.body.appendChild(script);
});

/// Initialize Map for initial load.
function initialize(newMarkers, newInfoWindowContent) {

    var map;
    var bounds = new google.maps.LatLngBounds();

    var mapOptions = {
        mapTypeId: 'roadmap',
        controlSize: 24,
    };

    // Create Markers
    if(newMarkers) {
      markers = [];
      markers = newMarkers;
    } else {
      markers = [
          @foreach ($pass->discounts->where('active', '=', 1) as $d)
            ['{{ $d->name }}', {{ $d->latitude }}, {{ $d->longitude }}],
          @endforeach
      ];
    }
                    
    // Info Window Content
    if(newInfoWindowContent) {
      infoWindowContent = [];
      infoWindowContent = newInfoWindowContent;
    } else {
      infoWindowContent = [
        @foreach ($pass->discounts->where('active', '=', 1) as $d)
          @if ($d->percent > .99)
            ['<div class="property clearfix"><div class="image"><div class="content"><a href="{{ $d->url }}" target="_blank"><i class="fa fa-external-link"></i></a><img src="/img/discounts/{{ $pass->destinations->first()->slug }}/{{ $d->vendor->id }}-{{ $d->id }}-450x290.jpg" alt="{{ $d->name }}" width="300" class="img-responsive"><span class="label-name">{{ $d->name }}</span><span class="label-discount">${{ $d->percent }} Off</span></div></div></div>'],
          @else
            ['<div class="property clearfix"><div class="image"><div class="content"><a href="{{ $d->url }}" target="_blank"><i class="fa fa-external-link"></i></a><img src="/img/discounts/{{ $pass->destinations->first()->slug }}/{{ $d->vendor->id }}-{{ $d->id }}-450x290.jpg" alt="{{ $d->name }}" width="300" class="img-responsive"><span class="label-name">{{ $d->name }}</span><span class="label-discount">{{ round($d->percent*100) }}% Off</span></div></div></div>'],
          @endif
        @endforeach
      ];
    }
                    
    // Display the map on the page
    map = new google.maps.Map(document.getElementById("destinationMap_canvas"), mapOptions);
        
    // Display infowindow on the map
    var infoWindow = new google.maps.InfoWindow({
      maxWidth: 340
    }), marker, i;
    
    var image = {
      // url: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
      // url: 'https://www.getoutsidepass.com/img/map/pin.png',
      // This marker is 20 pixels wide by 32 pixels high.
      size: new google.maps.Size(parseFloat(20), parseFloat(32)),
      // The origin for this image is (0, 0).
      // origin: new google.maps.Point(0, 0),
      // The anchor for this image is the base of the flagpole at (0, 32).
      // anchor: new google.maps.Point(0, 32)
    };

    // Loop through the array of markers & place each one on the map  
    for( i = 0; i < markers.length; i++ ) {
        // Set the position and bounds for zoom level and placement
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        // Create the marker
        marker = new google.maps.Marker({
            position: position,
            map: map,
            icon: image,
            title: markers[i][0]
        });
        
        // Create an infoWindow for each marker  
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                // map.setCenter(marker.getPosition());
                infoWindow.open(map, marker);
            }
        })(marker, i));
        // Close the infoWindow when clicking elsewhere on the map
        google.maps.event.addListener(map, "click", function(){
          infoWindow.close();
        });

        // Automatically center the map and zoom to fit all markers
        map.fitBounds(bounds);
    }

    // Add a marker clusterer to manage the markers.
    var markerCluster = new MarkerClusterer(map, markers);

    // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        // this.setZoom(9);
        google.maps.event.removeListener(boundsListener);
    });;

    $("#resetMap").click(function(e) {
        e.preventDefault();
        infoWindow.close();
        map.fitBounds(bounds);
    })
    
}

// Multiple Markets Test that Works

// function initialize() {
//   var center = new google.maps.LatLng(37.4419, -122.1419);
//   var map = new google.maps.Map(document.getElementById('destinationMap_canvas'), {
//     zoom: 3,
//     center: center,
//     mapTypeId: google.maps.MapTypeId.ROADMAP
//   });
//   var markers = [];
//   for (var i = 0; i < 100; i++) {
//     var dataPhoto = data.photos[i];
//     var latLng = new google.maps.LatLng(dataPhoto.latitude,
//         dataPhoto.longitude);
//     var marker = new google.maps.Marker({
//       position: latLng
//     });
//     markers.push(marker);
//     console.log(markers);
//   }
//   var markerCluster = new MarkerClusterer(map, markers);
// }
// google.maps.event.addDomListener(window, 'load', initialize);

</script>
@stop
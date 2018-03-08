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

{{-- Destination Map --}}
<div class="padding-bottom-3x">
      @include('_layouts._inc.destinationmap')
</div>

{{-- Pass Cards --}}
<section class="container">
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

@stop

@section('scripts')
<script>

//////////
/// Destination Map with Destinations
/// https://wrightshq.com/playground/placing-multiple-markers-on-a-google-map-using-api-3/
//////////

jQuery(function($) {
    // Asynchronously Load the map API 
    var script = document.createElement('script');
    script.src = "//maps.googleapis.com/maps/api/js?key=AIzaSyAqb3fT3SbMSDMggMEK7fJOIkvamccLrjA&callback=initialize";
    document.body.appendChild(script);
});

function initialize() {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        mapTypeId: 'roadmap',
        scrollwheel: false
    };
                    
    // Display a map on the page
    map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
    map.setTilt(45);
        
    // Multiple Markers
    var markers = [
			@foreach ($passes as $p)
        ['{{ $p->name }}', {{ $p->destinations->first()->latitude }}, {{ $p->destinations->first()->longitude }}],
			@endforeach
    ];

    // Info Window Content
    var infoWindowContent = [
			@foreach ($passes as $p)
				['<div class="info-box"><a href="{{ route('passes.show', $p->slug) }}" onclick="ga(\'send\', \'event\', \'Destinations-Map\', \'Image\', \'glacier\', 1);"><img src="/img/destinations/{{ $p->slug }}-315x278.jpg" style="max-width:260px; margin-bottom:16px;" alt="" /></a><h5><strong>{{ $p->name }}</strong></h5><a href="{{ route('passes.show', $p->slug) }}" class="btn btn-primary btn-sm" onclick="ga(\'send\', \'event\', \'Destinations-Map\', \'View Discounts\', \'{{ $p->slug }}\', 1);">View {{ count($p->discounts) }} Discounts <i class="icon-arrow-right"></i></a></div>'],
			@endforeach
    ];
        
    // Display multiple markers on a map
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    
    // Loop through our array of markers & place each one on the map  
    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            icon: 'img/map/pin.png',
            title: markers[i][0]
        });
        
        // Allow each marker to have an info window    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

        // Automatically center the map fitting all markers on the screen
        map.fitBounds(bounds);
    }

    google.maps.event.addListener(map, "click", function(){
      infoWindow.close();
    });

    // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        // this.setZoom(9);
        google.maps.event.removeListener(boundsListener);
    });

    $("#resetMap").click(function(e) {
        e.preventDefault();
        infoWindow.close();
        map.fitBounds(bounds);
    })
    
}

</script>

@stop
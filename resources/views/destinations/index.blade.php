@extends('_layouts.body')

@section('meta-page')
  <title>Get Outside Pass - National Parks Discount Cards</title>
  <meta name="description" content="One Pass. Multiple Discounts. Save money and don't miss a thing during your National Park Vacation." />
  <meta name="keywords" content="national parks, travel, discounts, coupons, attractions, activities, things to do, Get Outside Pass">
@stop

@section('meta-og')
  <meta property="og:type" content="article"/>
  <meta property="og:title" content="Get Outside Pass - National Parks Discount Cards"/>
  <meta property="og:url" content="{{ Request::url() }}"/>
  <meta property="og:image" content="{{ url('/img/destinations/yellowstone-1200x630.jpg') }}"/>
  <meta property="og:site_name" content="Get Outside Pass"/>
  <meta property="og:description" content="One Pass. Multiple Discounts. Save money and don't miss a thing during your National Park Vacation."/>
  <meta property="og:locale" content="en_US"/>
@stop

@section('content')

{{-- Destination Map --}}
@include('_layouts._inc.destinationmap')

{{-- Pass Cards --}}
@include('_layouts._inc.passcards')

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
    script.src = "//maps.googleapis.com/maps/api/js?key=AIzaSyCtqYOh4F3zeGI_Tf4nlXjNZ95j5J7Kdrg&callback=initialize";
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
		@foreach ($destinations as $d)
            @foreach ($d->passes as $p)
                ['{{ $p->name }}', {{ $p->destinations->first()->latitude }}, {{ $p->destinations->first()->longitude }}],
            @endforeach
		@endforeach
    ];

    // Info Window Content
    var infoWindowContent = [
		@foreach ($destinations as $d)
            @foreach ($d->passes as $p)
                @if(count($p->discounts) == 0)
				    ['<div class="info-box"><a href="{{ route('destinations.passes.show', [$d->slug, $p->slug]) }}" onclick="ga(\'send\', \'event\', \'Destinations-Map\', \'Image\', \'glacier\', 1);"><img src="/img/destinations/{{ $d->slug }}-315x278.jpg" style="max-width:260px; margin-bottom:16px;" alt="" /></a><h5><strong>{{ $d->name }}</strong></h5><a href="{{ route('destinations.passes.show',[$d->slug,$p->slug]) }}" class="btn btn-primary btn-sm" onclick="ga(\'send\', \'event\', \'Destinations-Map\', \'View Discounts\', \'{{ $p->slug }}\', 1);">Available Summer 2019 <i class="icon-arrow-right"></i></a></div>'],
			    @else
                    ['<div class="info-box"><a href="{{ route('destinations.passes.show', [$d->slug, $p->slug]) }}" onclick="ga(\'send\', \'event\', \'Destinations-Map\', \'Image\', \'glacier\', 1);"><img src="/img/destinations/{{ $d->slug }}-315x278.jpg" style="max-width:260px; margin-bottom:16px;" alt="" /></a><h5><strong>{{ $d->name }}</strong></h5><a href="{{ route('destinations.passes.show',[$d->slug,$p->slug]) }}" class="btn btn-primary btn-sm" onclick="ga(\'send\', \'event\', \'Destinations-Map\', \'View Discounts\', \'{{ $p->slug }}\', 1);">View {{ count($p->discounts) }} Discounts <i class="icon-arrow-right"></i></a></div>'],
                @endif
            @endforeach
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
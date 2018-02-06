@extends('_layouts.body')

@section('meta-page')
  <title>Vendor Promise</title>
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
The National Parks
@stop

@section('content')

{{-- Main Slider --}}
{{-- <section class="hero-slider" style="background-image: url(/img/hero-slider/main-bg1.jpg);">
    <div class="item">
      <div class="container padding-top-7x">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-12 padding-bottom-2x text-md-left text-center">
            <div class="from-bottom">
              <div class="h1 mb-2 pt-1"><strong class="dp-white">@yield('logo-tag')</strong></div>
              <div class="h4 mt-0 mb-4 gray-lighter">Destinations in the Dimple Network.</div>
          </div>
        </div>
      </div>
    </div>
</section> --}}

<!-- Page Title-->
<div class="page-title">
  <div class="container">
    <div class="column">
      <h1>Dimple Pass Destinations</h1>
    </div>
    <div class="column">
      <ul class="breadcrumbs">
        <li><a href="/">Home</a>
        </li>
        <li class="separator">&nbsp;</li>
        <li>Dimple Pass Destinations</li>
      </ul>
    </div>
  </div>
</div>

{{-- Destination Map --}}
<div class="container padding-bottom-3x mb-1 mt-5">
  <div class="row">
    <div class="col-sm-12">
      @include('_layouts._inc.destinationmap')
    </div>  
  </div>
</div>

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
      ['Glacier National Park', 48.50640500, -113.98780200,],
      ['Yellowstone National Park', 44.598885, -110.499898,],
      ['Yosemite National Park', 37.72411100, -119.63195100,],
    ];

    // Info Window Content
    var infoWindowContent = [
      ['<div class="info-box"><a href="/parks/glacier" onclick="ga(\'send\', \'event\', \'Homepage-Map\', \'Image\', \'glacier\', 1);"><img src="/img/destinations/glacier-1920x580.jpg" style="max-width:100%; margin-bottom:10px;" alt="" /></a><h4><strong>Glacier National Park</strong></h4><p class="m-t-1">Vast Mountain Valleys, Glacial Lakes, Epic Hikes, and Historic Lodges.</p><a href="/parks/glacier" class="btn btn-primary" onclick="ga(\'send\', \'event\', \'Homepage-Map\', \'View Discounts\', \'glacier\', 1);">View 16 Discounts <i class="icon-arrow-right"></i></a></div>'],
      ['<div class="info-box"><a href="/parks/yellowstone" onclick="ga(\'send\', \'event\', \'Homepage-Map\', \'Image\', \'yellowstone\', 1);"><img src="/img/destinations/yellowstone-1920x580.jpg" style="max-width:100%; margin-bottom:10px;" alt="" /></a><h4><strong>Yellowstone National Park</strong></h4><p class="m-t-1">America\'s first National Park.  Geysers and Wildlife in a vast mountain landscape.</p><a href="/parks/yellowstone" class="btn btn-primary" onclick="ga(\'send\', \'event\', \'Homepage-Map\', \'View Discounts\', \'yosemite\', 1);">View 14 Discounts <i class="icon-arrow-right"></i></a></div>'],
      ['<div class="info-box"><a href="/parks/yosemite" onclick="ga(\'send\', \'event\', \'Homepage-Map\', \'Image\', \'yosemite\', 1);"><img src="/img/destinations/yosemite-1920x580.jpg" style="max-width:100%; margin-bottom:10px;" alt="" /></a><h4><strong>Yosemite National Park</strong></h4><p class="m-t-1">Massive granite walls, stunning waterfalls, endless trails.</p><a href="/parks/yosemite" class="btn btn-primary" onclick="ga(\'send\', \'event\', \'Homepage-Map\', \'View Discounts\', \'yosemite\', 1);">View 19 Discounts <i class="icon-arrow-right"></i></a></div>'],
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
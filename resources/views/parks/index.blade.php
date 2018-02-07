@extends('_layouts.body')

@section('meta-page')
  <title>Dimple Pass - National Park Destinations</title>
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

{{-- Destination Map --}}
<div class="padding-bottom-3x">
      @include('_layouts._inc.destinationmap')
</div>

<div class="container padding-bottom-3x">
  <div class="row">
    <div class="col-sm-12">
      <div class="card-deck">
        <div class="card margin-bottom-1x">
          <a href="/parks/glacier">
            <img class="card-img-top" src="/img/destinations/glacier-315x278.jpg" alt="Glacier National Park">
          </a>
          <div class="card-body">
            <h4 class="card-title">Glacier</h4>
            <p class="card-text dp-warning"><strong>$346</strong> savings</p>
          </div>
          <div class="card-footer text-muted"><a href="/parks/glacier">View 16 Discounts</a></div>
        </div>
        <div class="card margin-bottom-1x">
          <a href="/parks/grandcanyon">
            <img class="card-img-top" src="/img/destinations/grandcanyon-315x278.jpg" alt="Grand Canyon National Park">
          </a>
          <div class="card-body">
            <h4 class="card-title">Grand Canyon</h4>
            <p class="card-text dp-warning">Coming Soon</p>
          </div>
          <div class="card-footer text-muted"><a href="/parks/grandcanyon">View 16 Discounts</a></div>
        </div>
        <div class="card margin-bottom-1x">
          <a href="/parks/yellowstone">
            <img class="card-img-top" src="/img/destinations/yellowstone-315x278.jpg" alt="Yellowstone National Park">
          </a>
          <div class="card-body">
            <h4 class="card-title">Yellowstone</h4>
            <p class="card-text dp-warning"><strong>$289</strong> savings</p>
          </div>
          <div class="card-footer text-muted"><a href="/parks/yellowstone">View 16 Discounts</a></div>
        </div>
        <div class="card margin-bottom-1x">
          <a href="/parks/yosemite">
            <img class="card-img-top" src="/img/destinations/yosemite-315x278.jpg" alt="Yosemite National Park">
          </a>
          <div class="card-body">
            <h4 class="card-title">Yosemite</h4>
            <p class="card-text dp-warning"><strong>$294</strong> savings</p>
          </div>
          <div class="card-footer text-muted"><a href="/parks/yosemite">View 16 Discounts</a></div>
        </div>
        <div class="card margin-bottom-1x">
          <a href="/parks/zion">
            <img class="card-img-top" src="/img/destinations/zion-315x278.jpg" alt="Zion National Park">
          </a>
          <div class="card-body">
            <h4 class="card-title">Zion</h4>
            <p class="card-text dp-warning">Coming Soon</p>
          </div>
          <div class="card-footer text-muted"><a href="/parks/zion">View 16 Discounts</a></div>
        </div>
      </div>
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
      ['Grand Canyon National Park', 36.056595, -112.125092,],
      ['Yellowstone National Park', 44.598885, -110.499898,],
      ['Yosemite National Park', 37.72411100, -119.63195100,],
      ['Zion National Park', 37.317207, -113.022537,],
    ];

    // Info Window Content
    var infoWindowContent = [
      ['<div class="info-box"><a href="/parks/glacier" onclick="ga(\'send\', \'event\', \'Homepage-Map\', \'Image\', \'glacier\', 1);"><img src="/img/destinations/glacier-315x278.jpg" style="max-width:260px; margin-bottom:16px;" alt="" /></a><h5><strong>Glacier National Park</strong></h5><h6 class="dp-warning">$346 savings</h6><a href="/parks/glacier" class="btn btn-primary btn-sm" onclick="ga(\'send\', \'event\', \'Homepage-Map\', \'View Discounts\', \'glacier\', 1);">View 16 Discounts <i class="icon-arrow-right"></i></a></div>'],
      ['<div class="info-box"><a href="/parks/grandcanyon" onclick="ga(\'send\', \'event\', \'Homepage-Map\', \'Image\', \'grandcanyon\', 1);"><img src="/img/destinations/grandcanyon-315x278.jpg" style="max-width:260px; margin-bottom:16px;" alt="" /></a><h5><strong>Grand Canyon National Park</strong></h5><h6 class="dp-warning">Coming Soon</h6><a href="/parks/grandcanyon" class="btn btn-primary btn-sm" onclick="ga(\'send\', \'event\', \'Homepage-Map\', \'View Discounts\', \'grandcanyon\', 1);">View 19 Discounts <i class="icon-arrow-right"></i></a></div>'],
      ['<div class="info-box"><a href="/parks/yellowstone" onclick="ga(\'send\', \'event\', \'Homepage-Map\', \'Image\', \'yellowstone\', 1);"><img src="/img/destinations/yellowstone-315x278.jpg" style="max-width:260px; margin-bottom:16px;" alt="" /></a><h5><strong>Yellowstone National Park</strong></h5><h6 class="dp-warning">$294 savings</h6><a href="/parks/yellowstone" class="btn btn-primary btn-sm" onclick="ga(\'send\', \'event\', \'Homepage-Map\', \'View Discounts\', \'yosemite\', 1);">View 14 Discounts <i class="icon-arrow-right"></i></a></div>'],
      ['<div class="info-box"><a href="/parks/yosemite" onclick="ga(\'send\', \'event\', \'Homepage-Map\', \'Image\', \'yosemite\', 1);"><img src="/img/destinations/yosemite-315x278.jpg" style="max-width:260px; margin-bottom:16px;" alt="" /></a><h5><strong>Yosemite National Park</strong></h5><h6 class="dp-warning">$294 savings</h6><a href="/parks/yosemite" class="btn btn-primary btn-sm" onclick="ga(\'send\', \'event\', \'Homepage-Map\', \'View Discounts\', \'yosemite\', 1);">View 19 Discounts <i class="icon-arrow-right"></i></a></div>'],
      ['<div class="info-box"><a href="/parks/zion" onclick="ga(\'send\', \'event\', \'Homepage-Map\', \'Image\', \'zion\', 1);"><img src="/img/destinations/zion-315x278.jpg" style="max-width:260px; margin-bottom:16px;" alt="" /></a><h5><strong>Zion National Park</strong></h5><h6 class="dp-warning">$294 savings</h6><a href="/parks/zion" class="btn btn-primary btn-sm" onclick="ga(\'send\', \'event\', \'Homepage-Map\', \'View Discounts\', \'zion\', 1);">View 19 Discounts <i class="icon-arrow-right"></i></a></div>'],

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
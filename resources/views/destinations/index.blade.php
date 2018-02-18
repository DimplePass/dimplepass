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

{{-- Destination Cards --}}
<section class="container">
  {{-- <h3 class="text-center mb-30">Top National Parks</h3> --}}
  <div class="row">
    <div class="col-md-4 col-sm-6">
      <div class="card mb-30"><a class="card-img-tiles" href="/d/glacier">
          <div class="inner">
            <div class="main-img"><img src="/img/destinations/glacier-315x278.jpg" alt="Category"></div>
            <div class="thumblist"><img src="/img/destinations/glacier-bus-155x137.jpg" alt="Category"><img src="/img/destinations/glacier-kayak-155x137.jpg" alt="Category"></div>
          </div></a>
        <div class="card-body text-center">
          <h4 class="card-title">Glacier</h4>
          <a class="btn btn-primary" href="/d/glacier">View <strong>16</strong> Discounts</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6">
      <div class="card mb-30"><a class="card-img-tiles" href="/d/grandcanyon">
          <div class="inner">
            <div class="main-img"><img src="/img/destinations/grandcanyon-315x278.jpg" alt="Category"></div>
            <div class="thumblist"><img src="/img/destinations/grandcanyon-horse-155x137.jpg" alt="Category"><img src="/img/destinations/grandcanyon-falls-155x137.jpg" alt="Category"></div>
          </div></a>
        <div class="card-body text-center">
          <h4 class="card-title">Grand Canyon</h4>
          <a class="btn btn-primary" href="/d/grandcanyon">View <strong>16</strong> Discounts</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6">
      <div class="card mb-30"><a class="card-img-tiles" href="/d/yellowstone">
          <div class="inner">
            <div class="main-img"><img src="/img/destinations/yellowstone-315x278.jpg" alt="Yellowstone National Park"></div>
            <div class="thumblist"><img src="/img/destinations/yellowstone-falls-155x137.jpg" alt="Category"><img src="/img/destinations/yellowstone-bison-155x137.jpg" alt="Category"></div>
          </div></a>
        <div class="card-body text-center">
          <h4 class="card-title">Yellowstone</h4>
          <a class="btn btn-primary" href="/d/yellowstone">View <strong>16</strong> Discounts</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6">
      <div class="card mb-30"><a class="card-img-tiles" href="/d/yosemite">
          <div class="inner">
            <div class="main-img"><img src="/img/destinations/yosemite-315x278.jpg" alt="Category"></div>
            <div class="thumblist"><img src="/img/destinations/yosemite-trees-155x137.jpg" alt="Category"><img src="/img/destinations/yosemite-falls-155x137.jpg" alt="Category"></div>
          </div></a>
        <div class="card-body text-center">
          <h4 class="card-title">Yosemite</h4>
          <a class="btn btn-primary" href="/d/yosemite">View <strong>16</strong> Discounts</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6">
      <div class="card mb-30"><a class="card-img-tiles" href="/d/zion">
          <div class="inner">
            <div class="main-img"><img src="/img/destinations/zion-315x278.jpg" alt="Category"></div>
            <div class="thumblist"><img src="/img/destinations/zion-overlook-155x137.jpg" alt="Category"><img src="/img/destinations/zion-subway-155x137.jpg" alt="Category"></div>
          </div></a>
        <div class="card-body text-center">
          <h4 class="card-title">Zion</h4>
          <a class="btn btn-primary" href="/d/zion">View <strong>16</strong> Discounts</a>
        </div>
      </div>
    </div>
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
      ['Glacier National Park', 48.50640500, -113.98780200,],
      ['Grand Canyon National Park', 36.056595, -112.125092,],
      ['Yellowstone National Park', 44.598885, -110.499898,],
      ['Yosemite National Park', 37.72411100, -119.63195100,],
      ['Zion National Park', 37.317207, -113.022537,],
    ];

    // Info Window Content
    var infoWindowContent = [
      ['<div class="info-box"><a href="/d/glacier" onclick="ga(\'send\', \'event\', \'Homepage-Map\', \'Image\', \'glacier\', 1);"><img src="/img/destinations/glacier-315x278.jpg" style="max-width:260px; margin-bottom:16px;" alt="" /></a><h5><strong>Glacier National Park</strong></h5><a href="/d/glacier" class="btn btn-primary btn-sm" onclick="ga(\'send\', \'event\', \'Homepage-Map\', \'View Discounts\', \'glacier\', 1);">View 16 Discounts <i class="icon-arrow-right"></i></a></div>'],
      ['<div class="info-box"><a href="/d/grandcanyon" onclick="ga(\'send\', \'event\', \'Homepage-Map\', \'Image\', \'grandcanyon\', 1);"><img src="/img/destinations/grandcanyon-315x278.jpg" style="max-width:260px; margin-bottom:16px;" alt="" /></a><h5><strong>Grand Canyon National Park</strong></h5><a href="/d/grandcanyon" class="btn btn-primary btn-sm" onclick="ga(\'send\', \'event\', \'Homepage-Map\', \'View Discounts\', \'grandcanyon\', 1);">View 19 Discounts <i class="icon-arrow-right"></i></a></div>'],
      ['<div class="info-box"><a href="/d/yellowstone" onclick="ga(\'send\', \'event\', \'Homepage-Map\', \'Image\', \'yellowstone\', 1);"><img src="/img/destinations/yellowstone-315x278.jpg" style="max-width:260px; margin-bottom:16px;" alt="" /></a><h5><strong>Yellowstone National Park</strong></h5><a href="/d/yellowstone" class="btn btn-primary btn-sm" onclick="ga(\'send\', \'event\', \'Homepage-Map\', \'View Discounts\', \'yosemite\', 1);">View 14 Discounts <i class="icon-arrow-right"></i></a></div>'],
      ['<div class="info-box"><a href="/d/yosemite" onclick="ga(\'send\', \'event\', \'Homepage-Map\', \'Image\', \'yosemite\', 1);"><img src="/img/destinations/yosemite-315x278.jpg" style="max-width:260px; margin-bottom:16px;" alt="" /></a><h5><strong>Yosemite National Park</strong></h5><a href="/d/yosemite" class="btn btn-primary btn-sm" onclick="ga(\'send\', \'event\', \'Homepage-Map\', \'View Discounts\', \'yosemite\', 1);">View 19 Discounts <i class="icon-arrow-right"></i></a></div>'],
      ['<div class="info-box"><a href="/d/zion" onclick="ga(\'send\', \'event\', \'Homepage-Map\', \'Image\', \'zion\', 1);"><img src="/img/destinations/zion-315x278.jpg" style="max-width:260px; margin-bottom:16px;" alt="" /></a><h5><strong>Zion National Park</strong></h5><a href="/d/zion" class="btn btn-primary btn-sm" onclick="ga(\'send\', \'event\', \'Homepage-Map\', \'View Discounts\', \'zion\', 1);">View 19 Discounts <i class="icon-arrow-right"></i></a></div>'],

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
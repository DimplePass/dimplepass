@extends('_layouts.body')

@section('meta-page')
  <title>Get Outside Pass - My Passes</title>
  <meta name="description" content="One Pass. Multiple Discounts. Save money and don't miss a thing during your National Park Vacation." />
  <meta name="keywords" content="national parks, travel, discounts, coupons, attractions, activities, things to do, Get Outside Pass">
@stop

@section('meta-og')
  <meta property="og:type" content="article"/>
  <meta property="og:title" content="Get Outside Pass - My Passes"/>
  <meta property="og:url" content="{{ Request::url() }}"/>
  <meta property="og:image" content="{{ url('/img/destinations/yellowstone-1200x630.jpg') }}"/>
  <meta property="og:site_name" content="Get Outside Pass"/>
  <meta property="og:description" content="One Pass. Multiple Discounts. Save money and don't miss a thing during your National Park Vacation."/>
  <meta property="og:locale" content="en_US"/>
@stop

@section('content')

{{-- Page Content --}}
<div class="container padding-bottom-3x mb-2 mt-5">
  <div class="row">
    <div class="col-lg-4">
      <div class="sticky">
        <aside class="user-info-wrapper">
          <div class="user-cover" style="background-image: url(/img/account/user-cover-img.jpg);">
            {{-- <div class="info-label" data-toggle="tooltip" title="You currently have 290 Reward Points to spend"><i class="icon-medal"></i>290 points</div> --}}
          </div>
          <div class="user-info">
            <div class="user-avatar"><a class="edit-avatar" href="#"></a><img src="/img/account/user-ava.jpg" alt="User"></div>
            <div class="user-data">
              <h4>{{ (isset(Auth::user()->firstname)) ? Auth::user()->firstname : null }} {{ (isset(Auth::user()->lastname)) ? Auth::user()->lastname : null }}</h4>
              <span>Joined {{ (isset(Auth::user()->created_at)) ? Auth::user()->created_at->format('F j, Y') : null }}</span>
            </div>
          </div>
        </aside>
        <nav class="list-group">
          <a class="list-group-item with-badge active" href="{{ route('member.show', Auth::user()) }}"><i class="icon-tag"></i>My Passes<span class="badge badge-primary badge-pill">5</span></a>
          <a class="list-group-item" href="{{ route('member.edit', Auth::user()) }}"><i class="icon-head"></i>My Profile</a>
        </nav>
      </div>
    </div>
    <div class="col-lg-8">
      <div class="padding-top-2x mt-2 hidden-lg-up"></div>
      {{-- Pass Title --}}
      <h2>2018 Yellowstone Get Outside Pass <small class="dp-success">Active</small></h2>

      {{-- Book Early Call to Action --}}
      <h5 class="mb-4"> Items with the alarm <i class="pe-7s-alarm dp-danger"></i> should be booked as soon as possible due to limited availability.</h5>

      {{-- Discounts Grouped by Location --}}

      <div class="passCity">
        <h5 class="mb-3">Big Sky, Montana</h5>
        <div class="col-sm-12">
          <div class="passDiscount">
            <h6>Vendor Name<small> | <span class="dp-warning">20% Off Tram Ride</span> <small>(limit 4) | Redeem with Printed Pass</small></small></h6>
            <p>123 Any Street, Anytown, ST  83414 | 800-555-1212 | <a href="mailto:email@vendorsite.com">email@vendorsite.com</a> | <a href="http://www.vendorsite.com">www.vendorsite.com</a></p>
          </div>
          <div class="passDiscount">
            <h6>Vendor Name<small> | <span class="dp-warning">20% Off Tram Ride</span> <small>(limit 4) | Redeem with Printed Pass</small></small></h6>
            <p>123 Any Street, Anytown, ST  83414 | 800-555-1212 | <a href="mailto:email@vendorsite.com">email@vendorsite.com</a> | <a href="http://www.vendorsite.com">www.vendorsite.com</a></p>
          </div>
          <div class="passDiscount">
            <h6>Vendor Name<small> | <span class="dp-warning">20% Off Tram Ride</span> <small><small>(limit 4) | <span class="dp-danger">Reservation Required</span> | Phone Call | Code: 18DPJELLY</small></small></small></h6>
            <p>123 Any Street, Anytown, ST  83414 | 800-555-1212 | <a href="mailto:email@vendorsite.com">email@vendorsite.com</a> | <a href="http://www.vendorsite.com">www.vendorsite.com</a></p>
          </div>
        </div> 
      </div> 

      <div class="passCity">
        <h5 class="mb-3">Cody, Wyoming</h5>
        <div class="col-sm-12">
          <div class="passDiscount">
            <h6>Vendor Name<small> | <span class="dp-warning">20% Off Tram Ride</span> <small>(limit 4) | <span class="dp-danger">Reservation Required</span> | Book Online or Call <i class="pe-7s-alarm dp-danger"></i> | Code: 18DPJELLY</small></small></h6>
            <p>123 Any Street, Anytown, ST  83414 | 800-555-1212 | <a href="mailto:email@vendorsite.com">email@vendorsite.com</a> | <a href="http://www.vendorsite.com">www.vendorsite.com</a></p>
          </div>
          <div class="passDiscount">
            <h6>Vendor Name<small> | <span class="dp-warning">20% Off Tram Ride</span> <small>(limit 4) | Redeem with Printed Pass</small></small></h6>
            <p>123 Any Street, Anytown, ST  83414 | 800-555-1212 | <a href="mailto:email@vendorsite.com">email@vendorsite.com</a> | <a href="http://www.vendorsite.com">www.vendorsite.com</a></p>
          </div>
        </div> 
      </div> 
      
      <div class="passCity">
        <h5 class="mb-3">Jackson, Wyoming</h5>
        <div class="col-sm-12">
          <div class="passDiscount">
            <h6>Vendor Name<small> | <span class="dp-warning">20% Off Tram Ride</span> <small>(limit 4) | Redeem with Printed Pass</small></small></h6>
            <p>123 Any Street, Anytown, ST  83414 | 800-555-1212 | <a href="mailto:email@vendorsite.com">email@vendorsite.com</a> | <a href="http://www.vendorsite.com">www.vendorsite.com</a></p>
          </div>
          <div class="passDiscount">
            <h6>Vendor Name<small> | <span class="dp-warning">20% Off Tram Ride</span> <small>(limit 4) | <span class="dp-danger">Reservation Required</span> | Book Online or Call <i class="pe-7s-alarm dp-danger"></i> | Code: 18DPJELLY</small></small></h6>
            <p>123 Any Street, Anytown, ST  83414 | 800-555-1212 | <a href="mailto:email@vendorsite.com">email@vendorsite.com</a> | <a href="http://www.vendorsite.com">www.vendorsite.com</a></p>
          </div>
          <div class="passDiscount">
            <h6>Vendor Name<small> | <span class="dp-warning">20% Off Tram Ride</span> <small>(limit 4) | Redeem with Printed Pass</small></small></h6>
            <p>123 Any Street, Anytown, ST  83414 | 800-555-1212 | <a href="mailto:email@vendorsite.com">email@vendorsite.com</a> | <a href="http://www.vendorsite.com">www.vendorsite.com</a></p>
          </div>
          <div class="passDiscount">
            <h6>Vendor Name<small> | <span class="dp-warning">20% Off Tram Ride</span> <small>(limit 4) | Redeem with Printed Pass</small></small></h6>
            <p>123 Any Street, Anytown, ST  83414 | 800-555-1212 | <a href="mailto:email@vendorsite.com">email@vendorsite.com</a> | <a href="http://www.vendorsite.com">www.vendorsite.com</a></p>
          </div>
          <div class="passDiscount">
            <h6>Vendor Name<small> | <span class="dp-warning">20% Off Tram Ride</span> <small>(limit 4) | <span class="dp-danger">Reservation Required</span> | Phone Call | Code: 18DPJELLY</small></small></h6>
            <p>123 Any Street, Anytown, ST  83414 | 800-555-1212 | <a href="mailto:email@vendorsite.com">email@vendorsite.com</a> | <a href="http://www.vendorsite.com">www.vendorsite.com</a></p>
          </div>
        </div> 
      </div>

      <div class="passCity">
        <h5 class="mb-3">West Yellowstone, Montana</h5>
        <div class="col-sm-12">
          <div class="passDiscount">
            <h6>Vendor Name<small> | <span class="dp-warning">20% Off Tram Ride</span> <small>(limit 4) | Redeem with Printed Pass</small></small></h6>
            <p>123 Any Street, Anytown, ST  83414 | 800-555-1212 | <a href="mailto:email@vendorsite.com">email@vendorsite.com</a> | <a href="http://www.vendorsite.com">www.vendorsite.com</a></p>
          </div>
          <div class="passDiscount">
            <h6>Vendor Name<small> | <span class="dp-warning">20% Off Tram Ride</span> <small>(limit 4) | <span class="dp-danger">Reservation Required</span> | Book Online or Call <i class="pe-7s-alarm dp-danger"></i> | Code: 18DPJELLY</small></small></h6>
            <p>123 Any Street, Anytown, ST  83414 | 800-555-1212 | <a href="mailto:email@vendorsite.com">email@vendorsite.com</a> | <a href="http://www.vendorsite.com">www.vendorsite.com</a></p>
          </div>
          <div class="passDiscount">
            <h6>Vendor Name<small> | <span class="dp-warning">20% Off Tram Ride</span> <small>(limit 4) | Redeem with Printed Pass</small></small></h6>
            <p>123 Any Street, Anytown, ST  83414 | 800-555-1212 | <a href="mailto:email@vendorsite.com">email@vendorsite.com</a> | <a href="http://www.vendorsite.com">www.vendorsite.com</a></p>
          </div>
          <div class="passDiscount">
            <h6>Vendor Name<small> | <span class="dp-warning">20% Off Tram Ride</span> <small>(limit 4) | Redeem with Printed Pass</small></small></h6>
            <p>123 Any Street, Anytown, ST  83414 | 800-555-1212 | <a href="mailto:email@vendorsite.com">email@vendorsite.com</a> | <a href="http://www.vendorsite.com">www.vendorsite.com</a></p>
          </div>
        </div> 
      </div>
    </div>
  </div>
</div>

@stop

@section('scripts')
<script>

</script>
@stop
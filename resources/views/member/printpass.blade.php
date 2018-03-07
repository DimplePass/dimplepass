<!DOCTYPE html>
<html lang="en">
    
<head>
  <meta charset="utf-8">
  <title>The Dimple Pass | Save Money on National Park Travel</title>  
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content="Dimple Pass - National Park Discounts">
  <meta name="keywords" content="">
  <meta name="author" content="Dimple Pass">    
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  {{-- Laravel Mix created file --}}
  <link href="{{ url ('/css/printpass.css') }}" rel="stylesheet" type="text/css" media="screen">

  {{-- Style --}}
  <style>

    /*
    Styles for PDF Pass Printing
    -------------------------------------------------------------*/

    /*Brand colors*/
    .dp-white       {color: #FFFFFF;}
    .dp-black       {color: #000000;}
    .dp-primary     {color: #0F8B8D;}
    .dp-secondary   {color: #0c5354}
    .dp-info        {color: #143642;}
    .dp-success     {color: #00b055;}
    .dp-warning     {color: #EC9A29;}
    .dp-danger      {color: #A8201A;}

    /*Grayscale*/
    .gray-darker    {color: #374250;}
    .gray-dark      {color: #606975;}
    .gray           {color: #9da9b9;}
    .gray-light     {color: #e1e7ec;}
    .gray-lighter   {color: #f5f5f5;}
    .white-color    {color: #ffffff;}
    .black-color    {color: #000000;}

    /*Body*/
    body {
      background-position: center;
      background-color: #ffffff;
      background-repeat: no-repeat;
      background-size: cover;
      color: #333333;
      font-family: "Maven Pro", Helvetica, Arial, sans-serif;
      font-size: 11px;
      font-weight: normal;
      text-transform: none;
      line-height: 1.5;
    }
    p {
      font-size: 9px;
      margin-top: 0px !important;
      /*margin-bottom: 0px !important;*/
    }

    /*Utilities*/
    a {
      color: #0F8B8D;
    }
    hr {
      margin-top: 20px;
      margin-bottom: 20px;
      color: #e1e7ec;
    }  
    small {
      font-size: 8px;
    }

    /*Margins*/
    .m-x-0 {
      margin-top: 0 !important;
      margin-bottom: 0 !important;
    }
    .m-b-1 {
      margin-bottom: 1em !important;
    }

    /*Grid Structure*/
    .column {
        float: left;
        width: 50%;
    }
    .row:after {
        content: "";
        display: table;
        clear: both;
    }
    .text-right {
      text-align: right;
    }
    .text-center {
      text-align: center;
    }

    /*Header*/
    .header-1 {
      float: left;
      width: 25%;
    }
    .header-2 {
      float: left;
      width: 60%;
    }
    .header-3 {
      float: left;
      width: 14%;
    }

    /*Discounts*/
    .discounts {
      margin-left: 26px;
      margin-right: 26px;
    }

  </style>

</head>

<body> 

  {{-- Header --}}
  <div class="row">
    <div class="header-1">
      <img src="/img/logo/logo.png" alt="Dimple Pass" width="200px">
    </div>
    <div class="header-2 text-right">
      <h1 class="m-x-0">{{ (isset(Auth::user()->firstname)) ? Auth::user()->firstname : null }} {{ (isset(Auth::user()->lastname)) ? Auth::user()->lastname : null }}</h1>
      <h6 class="m-x-0">{{ Auth::user()->email }} | {{ Auth::user()->phone }} | {{ Auth::user()->city }}, {{ Auth::user()->state }}  {{ Auth::user()->zip }}</h6>
      <p class="m-x-0">Purchased on {{ (isset(Auth::user()->created_at)) ? Auth::user()->created_at->format('F j, Y') : null }}</p>
      <p class="m-x-0 gray-dark"><small>Please show ID when presenting a printed pass.</small></p>
    </div>
    <div class="header-3 text-right">
      <img src="/img/pdf/QR.png" alt="QR Code" width="75px">
    </div>
  </div>

  {{-- Separator --}}
  <hr>

  {{-- Pass Title --}}
  <img src="/img/destinations/yellowstone-1920x580.jpg" alt="2018 Yellowstone Summer" class="m-b-1">
  <div class="row">
    <div class="column">
      <h1 class="m-x-0">2018 Yellowstone Summer</h1>
    </div>
    <div class="column">
      <h1 class="m-x-0 text-right"> CODE: <span class="dp-primary">18YNP-GEYSER</span></h1>
    </div>  
  </div>

  {{-- Separator --}}
  <hr>

  <h1 class="m-x-0">The Discounts</h1>
  
  {{-- Book Early Call to Action --}}
  <h4 class="dp-danger"> Items with the alarm <img src="/img/pdf/alarm.png" width="15px" alt="Alarm"> should be booked as soon as possible as they may have limited availability.</h4>

  {{-- Discounts Grouped by Town --}}

  <h3>Big Sky, Montana</h3>
  <div class="discounts">
    <h5 class="m-x-0">Vendor Name<small> | <span class="dp-primary">20% Off Tram Ride</span> (limit 4) | Redeem with Printed Pass</small></h5>
    <p>123 Any Street, Anytown, ST  83414 | 800-555-1212 | email@vendorsite.com | www.vendorsite.com</p>
    <h5 class="m-x-0">Vendor Name<small> | <span class="dp-primary">20% Off Tram Ride</span> (limit 4) | Redeem with Printed Pass</small></h5>
    <p>123 Any Street, Anytown, ST  83414 | 800-555-1212 | email@vendorsite.com | www.vendorsite.com</p>
    <h5 class="m-x-0">Vendor Name<small> | <span class="dp-primary">20% Off Tram Ride</span> (limit 4) | Redeem with Printed Pass</small></h5>
    <p>123 Any Street, Anytown, ST  83414 | 800-555-1212 | email@vendorsite.com | www.vendorsite.com</p>
    <h5 class="m-x-0">Vendor Name<small> | <span class="dp-primary">20% Off Tram Ride</span> (limit 4) | Redeem with Printed Pass</small></h5>
    <p>123 Any Street, Anytown, ST  83414 | 800-555-1212 | email@vendorsite.com | www.vendorsite.com</p>
    <h5 class="m-x-0">Vendor Name<small> | <span class="dp-primary">20% Off Tram Ride</span> (limit 4) | Redeem with Printed Pass</small></h5>
    <p>123 Any Street, Anytown, ST  83414 | 800-555-1212 | email@vendorsite.com | www.vendorsite.com</p>
    <h5 class="m-x-0">Vendor Name<small> | <span class="dp-primary">20% Off Tram Ride</span> (limit 4) | Redeem with Printed Pass</small></h5>
    <p>123 Any Street, Anytown, ST  83414 | 800-555-1212 | email@vendorsite.com | www.vendorsite.com</p>
  </div>

  <h3>Cody, Wyoming</h3>
  <div class="discounts">
    <h5 class="m-x-0">Vendor Name<small> | <span class="dp-primary">20% Off Tram Ride</span> (limit 4) | Redeem with Printed Pass</small></h5>
    <p>123 Any Street, Anytown, ST  83414 | 800-555-1212 | email@vendorsite.com | www.vendorsite.com</p>
    <h5 class="m-x-0">Vendor Name<small> | <span class="dp-primary">20% Off Tram Ride</span> (limit 4) | Redeem with Printed Pass</small></h5>
    <p>123 Any Street, Anytown, ST  83414 | 800-555-1212 | email@vendorsite.com | www.vendorsite.com</p>
    <h5 class="m-x-0">Vendor Name<small> | <span class="dp-primary">20% Off Tram Ride</span> (limit 4) | Redeem with Printed Pass</small></h5>
    <p>123 Any Street, Anytown, ST  83414 | 800-555-1212 | email@vendorsite.com | www.vendorsite.com</p>
  </div>

  <h3>Jackson Hole, Wyoming</h3>
  <div class="discounts">
    <h5 class="m-x-0">Vendor Name<small> | <span class="dp-primary">20% Off Tram Ride</span> (limit 4) | Redeem with Printed Pass</small></h5>
    <p>123 Any Street, Anytown, ST  83414 | 800-555-1212 | email@vendorsite.com | www.vendorsite.com</p>
    <h5 class="m-x-0">Vendor Name<small> | <span class="dp-primary">20% Off Tram Ride</span> (limit 4) | Redeem with Printed Pass</small></h5>
    <p>123 Any Street, Anytown, ST  83414 | 800-555-1212 | email@vendorsite.com | www.vendorsite.com</p>
    <h5 class="m-x-0">Vendor Name<small> | <span class="dp-primary">20% Off Tram Ride</span> (limit 4) | Redeem with Printed Pass</small></h5>
    <p>123 Any Street, Anytown, ST  83414 | 800-555-1212 | email@vendorsite.com | www.vendorsite.com</p>
    <h5 class="m-x-0">Vendor Name<small> | <span class="dp-primary">20% Off Tram Ride</span> (limit 4) | Redeem with Printed Pass</small></h5>
    <p>123 Any Street, Anytown, ST  83414 | 800-555-1212 | email@vendorsite.com | www.vendorsite.com</p>
    <h5 class="m-x-0">Vendor Name<small> | <span class="dp-primary">20% Off Tram Ride</span> (limit 4) | Redeem with Printed Pass</small></h5>
    <p>123 Any Street, Anytown, ST  83414 | 800-555-1212 | email@vendorsite.com | www.vendorsite.com</p>
    <h5 class="m-x-0">Vendor Name<small> | <span class="dp-primary">20% Off Tram Ride</span> (limit 4) | Redeem with Printed Pass</small></h5>
    <p>123 Any Street, Anytown, ST  83414 | 800-555-1212 | email@vendorsite.com | www.vendorsite.com</p>
    <h5 class="m-x-0">Vendor Name<small> | <span class="dp-primary">20% Off Tram Ride</span> (limit 4) | Redeem with Printed Pass</small></h5>
    <p>123 Any Street, Anytown, ST  83414 | 800-555-1212 | email@vendorsite.com | www.vendorsite.com</p>
    <h5 class="m-x-0">Vendor Name<small> | <span class="dp-primary">20% Off Tram Ride</span> (limit 4) | Redeem with Printed Pass</small></h5>
    <p>123 Any Street, Anytown, ST  83414 | 800-555-1212 | email@vendorsite.com | www.vendorsite.com</p>
    <h5 class="m-x-0">Vendor Name<small> | <span class="dp-primary">20% Off Tram Ride</span> (limit 4) | Redeem with Printed Pass</small></h5>
    <p>123 Any Street, Anytown, ST  83414 | 800-555-1212 | email@vendorsite.com | www.vendorsite.com</p>
  </div>

  <h3>West Yellowstone, Montana</h3>
  <div class="discounts">
    <h5 class="m-x-0">Vendor Name<small> | <span class="dp-primary">20% Off Tram Ride</span> (limit 4) | Redeem with Printed Pass</small></h5>
    <p>123 Any Street, Anytown, ST  83414 | 800-555-1212 | email@vendorsite.com | www.vendorsite.com</p>
    <h5 class="m-x-0">Vendor Name<small> | <span class="dp-primary">20% Off Tram Ride</span> (limit 4) | Redeem with Printed Pass</small></h5>
    <p>123 Any Street, Anytown, ST  83414 | 800-555-1212 | email@vendorsite.com | www.vendorsite.com</p>
    <h5 class="m-x-0">Vendor Name<small> | <span class="dp-primary">20% Off Tram Ride</span> (limit 4) | Redeem with Printed Pass</small></h5>
    <p>123 Any Street, Anytown, ST  83414 | 800-555-1212 | email@vendorsite.com | www.vendorsite.com</p>
    <h5 class="m-x-0">Vendor Name<small> | <span class="dp-primary">20% Off Tram Ride</span> (limit 4) | Redeem with Printed Pass</small></h5>
    <p>123 Any Street, Anytown, ST  83414 | 800-555-1212 | email@vendorsite.com | www.vendorsite.com</p>
    <h5 class="m-x-0">Vendor Name<small> | <span class="dp-primary">20% Off Tram Ride</span> (limit 4) | Redeem with Printed Pass</small></h5>
    <p>123 Any Street, Anytown, ST  83414 | 800-555-1212 | email@vendorsite.com | www.vendorsite.com</p>
    <h5 class="m-x-0">Vendor Name<small> | <span class="dp-primary">20% Off Tram Ride</span> (limit 4) | Redeem with Printed Pass</small></h5>
    <p>123 Any Street, Anytown, ST  83414 | 800-555-1212 | email@vendorsite.com | www.vendorsite.com</p>
  </div>

  {{-- Separator --}}
  <hr>

  {{-- Footer --}}
  <div class="row">
    <div class="column">
      <img src="/img/logo/logo.png" alt="Dimple Pass" width="200px">
    </div>
    <div class="column text-right">
      <h2 class="m-x-0">Help During Your Vacation?</h2>
      <h4 class="m-x-0">800-555-1212 | help@dimplepass.com</h4>
      <p class="m-x-0">Mon- Fri: 9am-5pm | Sat & Sun: 10am-4pm</p>
      <p>Please let us know activities and attractions you'd like to see added!</p>
    </div>
  </div>

</body>

</html>


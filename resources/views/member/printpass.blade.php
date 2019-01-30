<!DOCTYPE html>
<html lang="en">
    
<head>
  <meta charset="utf-8">
  <title>The Get Outside Pass | Save Money on National Park Travel</title>  
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content="Get Outside Pass - National Park Discounts">
  <meta name="keywords" content="">
  <meta name="author" content="Get Outside Pass">    
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  {{-- Laravel Mix created file --}}
  <link href="{{ url ('/css/printpass.css') }}" rel="stylesheet" type="text/css" media="screen">

  {{-- Style --}}
  <style>

    /*
    Styles for PDF Pass Printing
    -------------------------------------------------------------*/

    /*Brand colors*/
    .go-white       {color: #FFFFFF;}
    .go-black       {color: #000000;}
    .go-primary     {color: #0F8B8D;}
    .go-secondary   {color: #0c5354}
    .go-info        {color: #143642;}
    .go-success     {color: #00b055;}
    .go-warning     {color: #EC9A29;}
    .go-danger      {color: #A8201A;}

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
    h3 {
      font-size: 1.1rem;
    }
    h5 {
      font-size: .9rem;
      font-weight: normal;
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
    .mx-0 {
      margin-top: 0 !important;
      margin-bottom: 0 !important;
    }
    .mb-1 {
      margin-bottom: 1em !important;
    }
    .mb-0 {
      margin-bottom: 0 !important;
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
      <img src="/img/logo/logo.png" alt="Get Outside Pass" width="200px">
    </div>
    <div class="header-2 text-right">
      <h1 class="mx-0">{{ (isset(Auth::user()->firstname)) ? Auth::user()->firstname : null }} {{ (isset(Auth::user()->lastname)) ? Auth::user()->lastname : null }}</h1>
      <h6 class="mx-0">{{ Auth::user()->email }} | {{ Auth::user()->phone ? Auth::user()->phone : null }} | {{ Auth::user()->city ? Auth::user()->city : null }}, {{ Auth::user()->state }}  {{ Auth::user()->zip }}</h6>
      <p class="mx-0">Purchased on {{ (isset(Auth::user()->created_at)) ? Auth::user()->created_at->format('F j, Y') : null }}</p>
      <p class="mx-0 gray-dark"><small>Please show ID when presenting a printed pass.</small></p>
    </div>
    <div class="header-3 text-right">
      <img src="/img/pdf/QR.png" alt="QR Code" width="75px">
    </div>
  </div>

  {{-- Separator --}}
  <hr>

  {{-- Pass Title --}}
  <img src="/img/destinations/{{ $pass->destinations->first()->slug }}-1920x580.jpg" alt="2018 {{ $pass->destinations->first()->name }} Summer" class="mb-1">
  <div class="row">
    <div class="column">
      <h1 class="mx-0">{{ $pass->name }} {{ $pass->start->format('Y') }}</h1>
    </div>
    <div class="column">
      <h1 class="mx-0 text-right"> Code: <span class="go-primary">{{ $pass->code }}</span></h1>
    </div>  
  </div>

  {{-- Separator --}}
  <hr>

  <div class="row">
    <h5><strong class="go-danger">Important!</strong> - We recommend booking early for discounts that require a reservation as they can fill up during peak travel times.  We also suggest taking this printed pass with you during your travels as many attractions are located where there is no cell service.</h5>
  </div>

  {{-- Discounts Grouped by Town --}}
  @foreach ($pass->discounts->where('active', '=', 1)->groupBy('town') as $k => $v)
  <div class="discounts">
    <h4 class="mb-3 go-warning"><strong>{{ $k }}</strong></h4>
    @foreach ($v as $v)
      @if (is_null($v->percent))
        <h5 class="mb-0"><strong>{{ $v->name }}</strong> <small> | {{ $v->vendor->name }}</small></h5>
      @elseif ($v->percent > .99)
        <h5 class="mb-0"><strong>${{ $v->percent }} Off {{ $v->name }}</strong> <small> | {{ $v->vendor->name }}</small></h5>
      @else
        <h5 class="mb-0"><strong>{{ round($v->percent*100) }}% Off {{ $v->name }}</strong> <small> | {{ $v->vendor->name }}</small></h5>
      @endif
      <p class="mb-0 gray">Valid {{ $v->start->format('F d, Y') }} to {{ $v->end->format('F d, Y') }}</p>
      <p>
      Redeem By: 
      @if ($v->redeem_online == 1)
        <span class="go-success ml-1"><i class="fa fa-globe"></i> Online</span> | 
      @endif
      @if ($v->redeem_phone == 1)
        <span class="go-success ml-1"><i class="fa fa-phone"></i> Phone Call</span> | 
      @endif
      @if ($v->redeem_showphone == 1)
        <span class="go-success ml-1"><i class="fa fa-mobile"></i> View Pass on Phone</span> | 
      @endif
      @if ($v->redeem_showprint == 1)
        <span class="go-success ml-1"><i class="fa fa-print"></i> Printed Pass</span> | 
      @endif
      <small>Limit {{ $v->limit }}</small>
      @if ($v->reservations_required == 1)
         | <span class="go-danger">Reservations Required</span>
      @endif
      @if ($v->limited_availability == 1)
         | <span class="go-danger">Book Early - Limited Availability</span>
      @endif
      <br>
      {{ (isset($v->address1)) ? $v->address1 : $v->vendor->address1 }}, {{ (isset($v->city)) ? $v->city : $v->vendor->city }}, {{ (isset($v->state)) ? $v->state : $v->vendor->state }}  {{ (isset($v->zip)) ? $v->zip : $v->vendor->zip }}<br>
      {{ (isset($v->phone)) ? $v->phone : $v->vendor->phone }} | <a href="mailto:{{ $v->vendor->email }}">{{ $v->vendor->email }}</a> | <a href="{{ $v->url }}" target="_blank">{{ $v->url }}</a></p>
    @endforeach
  </div>
  @endforeach

  {{-- Separator --}}
  <hr>

  {{-- Footer --}}
  <div class="row">
    <div class="column">
      <img src="/img/logo/logo.png" alt="Get Outside Pass" width="200px">
    </div>
    <div class="column text-right">
      <h2 class="mx-0">Help During Your Vacation?</h2>
      <h4 class="mx-0">307-690-9788 | help@getoutsidepass.com</h4>
      <p class="mx-0">Mon- Fri: 9am-5pm | Sat & Sun: 10am-4pm</p>
      <p>Please let us know activities and attractions you'd like to see added!</p>
    </div>
  </div>

</body>

</html>


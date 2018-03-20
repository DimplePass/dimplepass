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
          <a class="list-group-item with-badge active" href="{{ route('member.show', Auth::user()) }}"><i class="icon-tag"></i>My Passes<span class="badge badge-primary badge-pill">{{ count(Auth::user()->purchases) }}</span></a>
          <a class="list-group-item" href="{{ route('member.edit', Auth::user()) }}"><i class="icon-head"></i>My Profile</a>
        </nav>
      </div>
    </div>
    <div class="col-lg-8">
      <div class="padding-top-2x mt-2 hidden-lg-up"></div>
      
      {{-- Pass Title --}}
      <h2><strong>{{ $purchase->pass->first()->name }} 
        @if (Carbon\Carbon::now()->between(Carbon\Carbon::parse($purchase->pass->first()->start), Carbon\Carbon::parse($purchase->pass->first()->end)))
          <small class="dp-success">Active</small>
        @elseif (Carbon\Carbon::now() < (Carbon\Carbon::parse($purchase->pass->first()->start)))
          <small class="text-warning">Upcoming</small>
        @else
          <small class="text-danger">Expired</small><br>
        @endif
      </strong></h2>
      <h2>Discount Code: {{ $purchase->pass->first->code }}</h2>

      <h4 class="gray">{{ $purchase->pass->first()->start->format('F d, Y') }} - {{ $purchase->pass->first()->end->format('F d, Y') }} <small class="text-danger">Dates vary per discount.</small></h4>

      {{-- Book Early Call to Action --}}
      <h6 class="mb-4"> Items with the alarm <i class="pe-7s-alarm dp-danger"></i> should be booked as soon as possible due to limited availability.</h6>

      {{-- Discounts Grouped by Location --}}
      <div class="passCity">
        <h5 class="mb-3">Big Sky, Montana</h5>
        <div class="col-sm-12">
          @foreach ($purchase->pass->first()->discounts as $d)
          <div class="passDiscount">
            <h6>{{ $d->vendor->name }}<small> | <span class="dp-warning">{{ round($d->percent*100) }}% Off {{ $d->name }}</span> <small>(limit {{ $d->limit }})</small></small></h6>
            <p>Redeem with Printed Pass
            @if ($d->reservations_required == 1)
               | <span class="text-danger">Reservations Required</span>
            @endif
            @if ($d->limited_availability == 1)
               | <span class="text-danger">Book Early - Limited Availability</span>
            @endif
            <br>
            {{ (isset($d->address1)) ? $d->address1 : $d->vendor->address1 }}, {{ (isset($d->city)) ? $d->city : $d->vendor->city }}, {{ (isset($d->state)) ? $d->state : $d->vendor->state }}  {{ (isset($d->zip)) ? $d->zip : $d->vendor->zip }}<br>
            {{ (isset($d->phone)) ? $d->phone : $d->vendor->phone }} | <a href="mailto:{{ $d->vendor->email }}">{{ $d->vendor->email }}</a><br>
            <a href="{{ $d->url }}" target="_blank">{{ $d->url }}</a></p>
          </div>
          @endforeach
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
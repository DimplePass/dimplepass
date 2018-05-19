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
      <div class="sticky">
        <aside class="mt-4 text-center">
          <h1 class="img-thumbnail mx-auto w-200 bg-gray-lighter"><strong class="dp-success">{{ $pass->first()->code }}</strong></h1>
          <h5 class="mx-5">Use this code at the ticket window or when making reservations.</h5>
          <h2 class="mt-5 hidden-xs-down"><a href="{{ route('member.passes.print', [Auth::user(), $pass]) }}" target="_blank" class="btn btn-lg btn-rounded btn-primary btn-block"><i class="icon-printer"> Print Your Pass</i></a></h2>
        </aside>
      </div>
    </div>
    <div class="col-lg-8">
      <div class="padding-top-2x mt-2 hidden-lg-up"></div>
      
      {{-- Pass Title --}}
      <h2><strong>{{ $pass->first()->name }} Pass
        @if (Carbon\Carbon::now() > (Carbon\Carbon::parse($pass->first()->end)))
          <small class="text-danger">Expired</small>
        @endif
      </strong></h2>

      <h5 class="gray">{{ $pass->first()->start->format('F d, Y') }} - {{ $pass->first()->end->format('F d, Y') }} <small class="text-danger">Dates may vary per offer.</small></h5>

      <h6><strong class="text-danger">Important!</strong> - We recommend booking early for discounts that require a reservation as they can fill up during peak travel times.  We also suggest taking a printed pass with you during your travels as many attractions are located where there is no cell service. <a href="{{ route('member.passes.print', [Auth::user(), $pass]) }}" target="_blank">Print Your Pass</i></a></h6>

      <h4 class="mt-4"><strong>{{ count($pass->discounts) }} exclusive discounts</strong></h4>

      {{-- Discounts Grouped by Location --}}
      @foreach ($pass->discounts->where('active', '=', 1)->sortBy('town')->groupBy('town') as $k => $v)
        <div class="passCity mt-4">
            <h4 class="mb-3 dp-warning"><strong>{{ $k }}</strong></h4>
            <div class="col-sm-12">
              @foreach ($v as $v)
              <div class="passDiscount">
                @if (is_null($v->percent))
                  <h3><i class="icon-tag dp-success"></i> <strong>{{ $v->name }}</strong></h3>
                @elseif ($v->percent > .99)
                  <h3><i class="icon-tag dp-success"></i> <strong>${{ $v->percent }} Off {{ $v->name }}</strong></h3>
                @else
                  <h3><i class="icon-tag dp-success"></i> <strong>{{ round($v->percent*100) }}% Off {{ $v->name }}</strong></h3>
                @endif
                <p class="hidden-xs-down">{{ $v->description }}</p>
                <p class="mb-0">Valid {{ $v->start->format('F d, Y') }} to {{ $v->end->format('F d, Y') }}</p>
                <p>
                @if ($v->reservations_required == 1)
                  <span class="text-danger">Reservations Required</span>
                @endif
                @if ($v->limited_availability == 1)
                   | <span class="text-danger">Book Early - Limited Availability</span>
                @endif
                @if ($v->reservations_required || $v->limited_availability)
                  <br>
                @endif
                Redeem By: 
                @if ($v->redeem_online == 1)
                  <span class="dp-success ml-1 pointer" data-toggle="tooltip" title="Click on the link below to make an online booking. When prompted, enter the code {{ $pass->first()->code }}. The system will automatically apply our discount."><i class="fa fa-globe"></i> Online</span>
                @endif
                @if ($v->redeem_phone == 1)
                  <span class="dp-success ml-1 pointer" data-toggle="tooltip" title="Call the number below to make a reservation over the phone. Let the reservationist know that you have a {{ $pass->first()->name }} Pass. You will be prompted to share the code {{ $pass->first()->code }} and your name."><i class="fa fa-phone"></i> Phone Call</span>
                @endif
                @if ($v->redeem_showphone == 1)
                  <span class="dp-success ml-1 pointer" data-toggle="tooltip" title="Simply view your pass on your phone internet browser. You’ll have a link to this pass in your confirmation email so just keep it handy OR, better yet, bookmark it. When you arrive at the attraction or activity, simply go to the ticket window and show them this screen on your phone. You may be required to show your ID as well."><i class="fa fa-mobile"></i> Show Pass on Phone</span>
                @endif
                @if ($v->redeem_showprint == 1)
                  <span class="dp-success ml-1 pointer" data-toggle="tooltip" title="Print your pass using the button on the left. When you arrive at the attraction or activity, simply go to the ticket window and say you have a {{ $pass->first()->name }} Pass and show them the paper copy of your pass. You may be required to show your ID as well."><i class="fa fa-print"></i> Printed Pass</span>
                @endif
                <small>(limit {{ $v->limit }})</small>
                <br>
                {{ (isset($v->address1)) ? $v->address1 : $v->vendor->address1 }}, {{ (isset($v->city)) ? $v->city : $v->vendor->city }}, {{ (isset($v->state)) ? $v->state : $v->vendor->state }}  {{ (isset($v->zip)) ? $v->zip : $v->vendor->zip }}<br>
                {{ (isset($v->phone)) ? $v->phone : $v->vendor->phone }} | <a href="mailto:{{ $v->vendor->email }}">{{ $v->vendor->email }}</a><br>
                <a href="{{ $v->url }}" target="_blank">{{ $v->url }}</a></p>
              </div>
              @endforeach
            </div> 
        </div> 
      @endforeach

    </div>
  </div>
</div>

@stop

@section('scripts')
<script>

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

</script>
@stop
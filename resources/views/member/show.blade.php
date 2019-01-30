@extends('_layouts.body')

@section('meta-page')
  <title>Get Outside Pass - My Account</title>
  <meta name="description" content="One Pass. Multiple Discounts. Save money and don't miss a thing during your National Park Vacation." />
  <meta name="keywords" content="national parks, travel, discounts, coupons, attractions, activities, things to do, Get Outside Pass">
@stop

@section('meta-og')
  <meta property="og:type" content="article"/>
  <meta property="og:title" content="Get Outside Pass - My Account"/>
  <meta property="og:url" content="{{ Request::url() }}"/>
  <meta property="og:image" content="{{ url('/img/destinations/yellowstone-1200x630.jpg') }}"/>
  <meta property="og:site_name" content="Get Outside Pass"/>
  <meta property="og:description" content="One Pass. Multiple Discounts. Save money and don't miss a thing during your National Park Vacation."/>
  <meta property="og:locale" content="en_US"/>
@stop

@section('content')

{{-- Page Title --}}
<div class="page-title hidden-sm-down">
  <div class="container">
    <div class="column">
      <h1>My Passes: {{ (!is_null(Auth::user()->firstname)) ? Auth::user()->firstname : null }} {{ (!is_null(Auth::user()->lastname)) ? Auth::user()->lastname : null }}</h1>
    </div>
    <div class="column">
      <ul class="breadcrumbs">
        <li><a href="/">Home</a>
        </li>
        <li class="separator">&nbsp;</li>
        <li>My Passes</li>
      </ul>
    </div>
  </div>
</div>

<div class="hidden-sm-up mt-5"></div>

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
            <div class="user-avatar"><a class="edit-avatar" href="#"></a><img src="/img/account/user-ava.jpg" alt="{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}"></div>
            <div class="user-data">
              <h4>{{ (!is_null(Auth::user()->firstname)) ? Auth::user()->firstname : null }} {{ (!is_null(Auth::user()->lastname)) ? Auth::user()->lastname : null }}</h4>
              <span>Joined {{ (!is_null(Auth::user()->created_at)) ? Auth::user()->created_at->format('F j, Y') : null }}</span>
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

      {{-- Payment Confirmation --}}
{{--       @if(Session::has('status'))
      <div class="col-sm-12 mb-5" id="success">
        <h3>Welcome to Get Outside Pass.  <small>Your pass will appear below.</small></h3>
      </div>
      @endif --}}

      <div class="table-responsive">
        <table class="table table-hover margin-bottom-none">
          <thead>
            <tr>
              <th>Pass</th>
              <th>Status</th>
              <th>Redeem</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($user->passes as $p)
              <tr>
                <td>
                  <h5 class="mb-0">{{ $p->name }} {{ $p->start->format('Y') }}</h5>
                  {{ count($p->discounts) }} discounts
                </td>
                <td>
                  @if (Carbon\Carbon::now()->between(Carbon\Carbon::parse($p->start), Carbon\Carbon::parse($p->end)))
                    <span class="text-success">Active</span><br>
                  @elseif (Carbon\Carbon::now() < (Carbon\Carbon::parse($p->start)))
                    <span class="text-warning">Upcoming</span><br>
                  @else
                    <span class="text-danger">Expired</span><br>
                  @endif
                  <small>{{ $p->start->format('F d, Y') }} - {{ $p->end->format('F d, Y') }}</small>
                </td>
                <td>
                  @if (Carbon\Carbon::now() <= Carbon\Carbon::parse($p->end))
                    <a href="{{ route('member.passes', [Auth::user(), $p]) }}" class="btn btn-sm btn-primary"><i class="icon-eye"> View</i></a>
                    <a href="{{ route('member.passes.print', [Auth::user(), $p]) }}" target="_blank" class="btn btn-sm btn-primary"><i class="icon-printer"> Print</i></a>
                  @else
                    <p class="text-danger">Pass has expired.</p>
                  @endif
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@stop

@section('scripts')
<script>

</script>
@stop
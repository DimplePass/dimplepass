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
<div class="page-title">
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
              <h4>{{ (!is_null(Auth::user()->firstname)) ? Auth::user()->firstname : null }} {{ (!is_null(Auth::user()->lastname)) ? Auth::user()->lastname : null }}</h4>
              <span>Joined {{ (!is_null(Auth::user()->created_at)) ? Auth::user()->created_at->format('F j, Y') : null }}</span>
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
            <tr>
              <td>
                <h5 class="mb-0">G.O. Yellowstone </h5>
                18 discounts
              </td>
              <td>
                <span class="text-success">Active</span><br>
                <small>May 15, 2018 - October 15, 2018</small>
              </td>
              <td>
                <a href="/member/pass" class="btn btn-sm btn-primary"><i class="icon-eye"> View</i></a>
                <a href="/member/printpass" target="_blank" class="btn btn-sm btn-primary"><i class="icon-printer"> Print</i></a>
              </td>
            </tr>
            <tr>
              <td>
                <h5 class="mb-0">G.O. Glacier</h5>
                <p>18 discounts</p>
              </td>
              <td>
                <span class="text-success">Active</span><br>
                <small>May 15, 2018 - October 15, 2018</small>
              </td>
              <td>
                <a href="/member/pass" class="btn btn-sm btn-primary"><i class="icon-eye"> View</i></a>
                <a href="/member/printpass" target="_blank" class="btn btn-sm btn-primary"><i class="icon-printer"> Print</i></a>
              </td>
            </tr>
            <tr>
              <td>
                <h5 class="mb-0">G.O. Yosemite</h5>
                <p>18 discounts</p>
              </td>
              <td>
                <span class="text-warning">Expired</span><br>
                <small>May 15, 2017 - October 15, 2017</small>
              </td>
              <td>-</td>
            </tr>
            <tr>
              <td>
                <h5 class="mb-0">G.O. Zion</h5>
                <p>18 discounts</p>
              </td>
              <td>
                <span class="text-warning">Expired</span><br>
                <small>May 15, 2016 - October 15, 2016</small>
              </td>
              <td>-</td>
            </tr>
            <tr>
              <td>
                <h5 class="mb-0">G.O. Grand Canyon</h5>
                <p>18 discounts</p>
              </td>
              <td>
                <span class="text-warning">Expired</span><br>
                <small>May 15, 2016 - October 15, 2016</small>
              </td>
              <td>-</td>
            </tr>
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
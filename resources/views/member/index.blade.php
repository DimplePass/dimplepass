@extends('_layouts.body')

@section('meta-page')
  <title>The Dimple Pass | Save Money on National Park Travel</title>
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
My Passes
@stop

@section('content')

{{-- Page Title --}}
<div class="page-title">
  <div class="container">
    <div class="column">
      <h1>My Passes: Happy GoLucky</h1>
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
              <h4>Happy GoLucky</h4>
              <span>Joined February 06, 2017</span>
            </div>
          </div>
        </aside>
        <nav class="list-group">
          <a class="list-group-item with-badge active" href="/member/"><i class="icon-tag"></i>My Passes<span class="badge badge-primary badge-pill">5</span></a>
          <a class="list-group-item" href="/member/edit"><i class="icon-head"></i>My Profile</a>
        </nav>
      </div>
    </div>
    <div class="col-lg-8">
      <div class="padding-top-2x mt-2 hidden-lg-up"></div>
      <div class="table-responsive">
        <table class="table table-hover margin-bottom-none">
          <thead>
            <tr>
              <th>Park</th>
              <th>Status</th>
              <th>Redeem</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <h5 class="mb-0">Yellowstone</h5>
                18 discounts
              </td>
              <td>
                <span class="text-success">Active</span><br>
                <small>May 15, 2018 - October 15, 2018</small>
              </td>
              <td><a href="/member/pass" class="btn btn-sm btn-primary"><i class="icon-eye"> View</i></a><a href="#" class="btn btn-sm btn-primary"><i class="icon-printer"> Print</i></a></td>
            </tr>
            <tr>
              <td>
                <h5 class="mb-0">Glacier</h5>
                <p>18 discounts</p>
              </td>
              <td>
                <span class="text-success">Active</span><br>
                <small>May 15, 2018 - October 15, 2018</small>
              </td>
              <td><a href="/member/pass" class="btn btn-sm btn-primary"><i class="icon-eye"> View</i></a><a href="#" class="btn btn-sm btn-primary"><i class="icon-printer"> Print</i></a></td>
            </tr>
            <tr>
              <td>
                <h5 class="mb-0">Yosemite</h5>
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
                <h5 class="mb-0">Zion</h5>
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
                <h5 class="mb-0">Grand Canyon</h5>
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
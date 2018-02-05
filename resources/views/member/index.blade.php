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
Account : Happy GoLucky
@stop

@section('content')

<!-- Page Title-->
<div class="page-title">
  <div class="container">
    <div class="column">
      <h1>My Account</h1>
    </div>
    <div class="column">
      <ul class="breadcrumbs">
        <li><a href="/">Home</a>
        </li>
        <li class="separator">&nbsp;</li>
        <li>My Account</li>
      </ul>
    </div>
  </div>
</div>
<!-- Page Content-->
<div class="container padding-bottom-3x mb-2">
  <div class="row">
    <div class="col-lg-4">
      <aside class="user-info-wrapper">
        <div class="user-cover" style="background-image: url(/img/account/user-cover-img.jpg);">
          <div class="info-label" data-toggle="tooltip" title="You currently have 290 Reward Points to spend"><i class="icon-medal"></i>290 points</div>
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
    <div class="col-lg-8">
      <div class="padding-top-2x mt-2 hidden-lg-up"></div>
      <div class="table-responsive">
        <table class="table table-hover margin-bottom-none">
          <thead>
            <tr>
              <th>Park</th>
              <th>Status</th>
              <th>Date Purchased</th>
              <th>Redeem</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>Yellowstone</strong></td>
              <td><span class="text-success">Active</span></td>
              <td>March 08, 2017</td>
              <td><a href="/member/pass"><i class="icon-eye"> View</i></a> | <a href="#"><i class="icon-printer"> Print</i></a></td>
            </tr>
            <tr>
              <td><strong>Glacier</strong></td>
              <td><span class="text-success">Active</span></td>
              <td>Feburary 21, 2018</td>
              <td><a href="/member/pass"><i class="icon-eye"> View</i></a> | <a href="#"><i class="icon-printer"> Print</i></a></td>
            </tr>
            <tr>
              <td><strong>Yosemite</strong></td>
              <td><span class="text-warning">Expired</span></td>
              <td>June 15, 2017</td>
              <td>-</td>
            </tr>
            <tr>
              <td><strong>Zion</strong></td>
              <td><span class="text-warning">Expired</span></td>
              <td>May 17, 2016</td>
              <td>-</td>
            </tr>
            <tr>
              <td><strong>Grand Canyon</strong></td>
              <td><span class="text-warning">Expired</span></td>
              <td>April 10, 2015</td>
              <td>-</td>
            </tr>
          </tbody>
        </table>
      </div>
      <hr>
    </div>
  </div>
</div>

@stop

@section('scripts')
<script>

</script>
@stop
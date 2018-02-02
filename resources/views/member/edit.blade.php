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
Happy GoLucky
@stop

@section('content')

<!-- Happy GoLucky-->
<div class="page-title">
  <div class="container">
    <div class="column">
      <h1>Happy GoLucky</h1>
    </div>
    <div class="column">
      <ul class="breadcrumbs">
        <li><a href="/">Home</a>
        </li>
        <li class="separator">&nbsp;</li>
        <li>Happy GoLucky</li>
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
        <a class="list-group-item active" href="/member/edit"><i class="icon-head"></i>My Profile</a>
        <a class="list-group-item with-badge" href="/member/"><i class="icon-tag"></i>My Passes<span class="badge badge-primary badge-pill">5</span></a>
      </nav>
    </div>
    <div class="col-lg-8">
      <div class="padding-top-2x mt-2 hidden-lg-up"></div>
      <form class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="account-fn">First Name</label>
            <input class="form-control" type="text" id="account-fn" value="Happy" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="account-ln">Last Name</label>
            <input class="form-control" type="text" id="account-ln" value="GoLucky" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="account-email">E-mail Address</label>
            <input class="form-control" type="email" id="account-email" value="happy@golucky.com" disabled>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="account-phone">Phone Number</label>
            <input class="form-control" type="text" id="account-phone" value="(307) 690-9788" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="account-pass">New Password</label>
            <input class="form-control" type="password" id="account-pass">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="account-confirm-pass">Confirm Password</label>
            <input class="form-control" type="password" id="account-confirm-pass">
          </div>
        </div>
        <div class="col-12">
          <hr class="mt-2 mb-3">
          <div class="d-flex flex-wrap justify-content-between align-items-center">
            <div class="custom-control custom-checkbox d-block">
              <input class="custom-control-input" type="checkbox" id="subscribe_me" checked>
              <label class="custom-control-label" for="subscribe_me">Subscribe me to Newsletter</label>
            </div>
            <button class="btn btn-primary margin-right-none" type="button" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="icon-circle-check" data-toast-title="Success!" data-toast-message="Your profile updated successfuly.">Update Profile</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

@stop

@section('scripts')
<script>

</script>
@stop
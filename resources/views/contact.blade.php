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
Contact Us
@stop

@section('content')

{{-- Hero Slider --}}
<section class="hero-slider mb-6" style="background-image: url(/img/destinations/zion-1920x580.jpg);">
    <div class="item">
      <div class="container padding-top-10x">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-12 padding-bottom-2x text-md-left text-center">
            <div class="from-bottom">
              <div class="h1 mb-2 pt-1"><strong class="dp-white">@yield('logo-tag')</strong></div>
              <div class="h4 mt-0 mb-4 gray-lighter">We are happy to help.</div>
          </div>
        </div>
      </div>
    </div>
</section>

{{-- Page Content --}}
<div class="container padding-bottom-2x mb-2">
  <div class="row padding-bottom-2x">
    <div class="col-md-5">
      <img class="d-block w-270 mx-auto rounded mb-3" src="/img/holder-540x540.jpg" alt="">
    </div>
    <div class="col-md-7 text-md-left text-center">
      <div class="mt-30 hidden-md-up"></div>
      <h2>Mailing Address</h2>
      <p>Dimple Pass<br>130 Yellow Rose Dr.<br>Alta, WY  83414</p>
      <h3>Phone</h3>
      <p>(307) 690-9788</p>
      <h3>Email Us</h3>
      <p class="text-muted mb-30">We normally respond within 1 business day.<br>Most popular questions appear on our <a href="/faqs">Frequestly Asked Questions</a> page.</p>
      <form class="row" method="post">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="help_name">Your Name</label>
            <input class="form-control form-control-rounded" type="text" id="help_name" required>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="help_email">Your Email</label>
            <input class="form-control form-control-rounded" type="email" id="help_email" required>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="help_subject">Subject</label>
            <input class="form-control form-control-rounded" type="text" id="help_subject" required>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="help_category">Category</label>
            <select class="form-control form-control-rounded" id="help_category">
              <option>-- Please choose --</option>
              <option>Having Login Troubles</option>
              <option>My Passes</option>
              <option>Having Trouble Redeeming</option>
              <option>Having Trouble Making a Reservation</option>
              <option>Want a Refund</option>
              <option>Other</option>}
              option
            </select>
          </div>
        </div>
        <div class="col-12">
          <div class="form-group">
            <label for="help_question">Question </label>
            <textarea class="form-control form-control-rounded" id="help_question" rows="8" required></textarea>
          </div>
        </div>
        <div class="col-12 text-right">
          <button class="btn btn-primary btn-rounded" type="submit">Submit Your Question <i class="icon-arrow-right"></i></button>
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
@extends('_layouts.body')

@section('meta-page')
  <title>Get Outside Pass - Contact Us</title>
  <meta name="description" content="One Pass. Multiple Discounts. Save money and don't miss a thing during your National Park Vacation." />
  <meta name="keywords" content="national parks, travel, discounts, coupons, attractions, activities, things to do, Get Outside Pass">
@stop

@section('meta-og')
  <meta property="og:type" content="article"/>
  <meta property="og:title" content="Get Outside Pass - Contact Us"/>
  <meta property="og:url" content="{{ Request::url() }}"/>
  <meta property="og:image" content="{{ url('/img/destinations/yellowstone-1200x630.jpg') }}"/>
  <meta property="og:site_name" content="Get Outside Pass"/>
  <meta property="og:description" content="One Pass. Multiple Discounts. Save money and don't miss a thing during your National Park Vacation."/>
  <meta property="og:locale" content="en_US"/>
@stop

@section('content')

{{-- Hero Slider --}}
<section class="hero-slider mb-6" style="background-image: url(/img/destinations/zion-1920x580.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-lg-8 padding-bottom-2x text-md-left text-center hero-overlay">
        <div class="hero-text">
          <h1 class="mb-2 white-color">Contact Us</h1>
          <h2 class="mt-0 mb-2 white-color"><strong>Let us know how we can help.</strong></h2>               
        </div>
    </div>
  </div>
</section>

{{-- Page Content --}}
<div class="container padding-bottom-2x mb-2">
  <div class="row padding-bottom-2x">
    <div class="col-md-4">
      <img class="d-block w-270 mx-auto rounded mb-3 hidden-sm-down" src="/img/features/zion-path-540x540.jpg" alt="Hiking in Zion National Park">
    </div>
    <div class="col-md-8 text-md-left text-center">
      <div class="mt-30 hidden-md-up"></div>
      <h2>Mailing Address</h2>
      <p>Get Outside Pass<br>P.O. Box ????<br>Wilson, WY  83014</p>
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
          <div class="form-group{{ $errors->has('help_type') ? ' has-error' : '' }}">
              {!! Form::label('help_type', 'Type') !!}
              {!! Form::select('help_type', $helpTypes, null, ['id' => 'help_type', 'class' => 'form-control form-control-rounded', 'required' => 'required', 'placeholder' => '-- Please choose --']) !!}
              <small class="text-danger">{{ $errors->first('help_type') }}</small>
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
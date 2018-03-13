@extends('_layouts.body')

@section('meta-page')
  <title>Get Outside Pass - Vendor Application</title>
  <meta name="description" content="One Pass. Multiple Discounts. Save money and don't miss a thing during your National Park Vacation." />
  <meta name="keywords" content="national parks, travel, discounts, coupons, attractions, activities, things to do, Get Outside Pass">
@stop

@section('meta-og')
  <meta property="og:type" content="article"/>
  <meta property="og:title" content="Get Outside Pass - Vendor Application"/>
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
          <h1 class="mb-2 white-color">Vendor <span class="dp-warning">/</span> Application</h1>
          <h2 class="mt-0 mb-2 white-color"><strong>Why would you be a great Get Outside Pass provider?</strong></h2>               
        </div>
    </div>
  </div>
</section>

{{-- Page Content --}}
<div class="container padding-bottom-2x mb-2">
  <div class="row">
    {{-- Side Menu --}}
    <div class="col-md-4">
      @include('/vendor/_inc.nav')
      <div class="padding-bottom-3x hidden-md-up"></div>
    </div>
    {{-- Content --}}
    <div class="col-md-8 text-md-left text-center">
      <div class="mt-30 hidden-md-up"></div>
      <h1>Vendor Application</h1>
      <h4>Although we pride ourselves in knowing the best of the best out there and hand selecting our vendors, we may have missed a gem or two.  Please drop a line to let us know if you are interested in becoming a part of the Get Outside Pass in your region.</h4>
      <hr>

      {!! Form::open(['method' => 'POST', 'route' => 'vendor.application.process', 'class' => 'form-horizontal']) !!}
      
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group{{ $errors->has('vendor') ? ' has-error' : '' }}">
                {!! Form::label('vendor', 'Vendor Name') !!}
                {!! Form::text('vendor', null, ['class' => 'form-control form-control-rounded', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('vendor') }}</small>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                {!! Form::label('url', 'Website') !!}
                {!! Form::text('url', null, ['class' => 'form-control form-control-rounded', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('url') }}</small>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                {!! Form::label('location', 'Location') !!}
                {!! Form::text('location', null, ['class' => 'form-control form-control-rounded', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('location') }}</small>
            </div> 
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group{{ $errors->has('years') ? ' has-error' : '' }}">
                {!! Form::label('years', 'Years in Business') !!}
                {!! Form::text('years', null, ['class' => 'form-control form-control-rounded', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('years') }}</small>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group{{ $errors->has('occupancy') ? ' has-error' : '' }}">
                {!! Form::label('occupancy', 'Occupancy Per Day') !!}
                {!! Form::text('occupancy', null, ['class' => 'form-control form-control-rounded', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('occupancy') }}</small>
            </div> 
          </div>
          <div class="col-md-4">
            <div class="form-group{{ $errors->has('existingDiscounts') ? ' has-error' : '' }}">
                {!! Form::label('existingDiscounts', 'Currently Offering Discounts?') !!}
                {!! Form::text('existingDiscounts', null, ['class' => 'form-control form-control-rounded', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('existingDiscounts') }}</small>
            </div> 
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group{{ $errors->has('about') ? ' has-error' : '' }}">
                {!! Form::label('about', 'About the Business') !!}
                {!! Form::textarea('about', null, ['class' => 'form-control form-control-rounded', 'required' => 'required', 'placeholder' => 'What makes you unique and stand out from the crowd?', 'rows' => '5']) !!}
                <small class="text-danger">{{ $errors->first('about') }}</small>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group{{ $errors->has('discounts') ? ' has-error' : '' }}">
                {!! Form::label('discounts', 'What discounts would you like to offer?') !!}
                {!! Form::textarea('discounts', null, ['class' => 'form-control form-control-rounded', 'required' => 'required', 'placeholder' => 'Tell us a bit about your discount offer(s).', 'rows' => '5']) !!}
                <small class="text-danger">{{ $errors->first('discounts') }}</small>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                {!! Form::label('name', 'Contact Name') !!}
                {!! Form::text('name', null, ['class' => 'form-control form-control-rounded', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('name') }}</small>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                {!! Form::label('email', 'Your Email') !!}
                {!! Form::text('email', null, ['class' => 'form-control form-control-rounded', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('email') }}</small>
            </div> 
          </div>
          <div class="col-md-4">
            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                {!! Form::label('phone', 'Your Phone') !!}
                {!! Form::text('phone', null, ['class' => 'form-control form-control-rounded', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('phone') }}</small>
            </div> 
          </div>
        </div>
       
         <hr>

        <div class="text-center">
          <h4 class="text-center">We look forward to learning more and will be in touch soon!</h4>
          {!! Form::submit("Send Application", ['class' => 'btn btn-success btn-lg mt-3']) !!}
        </div>    
      
      {!! Form::close() !!}


    </div>
  </div>
</div>

@stop

@section('scripts')
<script>

</script>
@stop
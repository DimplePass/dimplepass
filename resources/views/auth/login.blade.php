@extends('_layouts.body')

@section('meta-page')
  <title>Get Outside Pass - National Parks Discount Cards</title>
  <meta name="description" content="One Pass. Multiple Discounts. Save money and don't miss a thing during your National Park Vacation." />
  <meta name="keywords" content="national parks, travel, discounts, coupons, attractions, activities, things to do, Get Outside Pass">
@stop

@section('meta-og')
  <meta property="og:type" content="article"/>
  <meta property="og:title" content="Get Outside Pass - National Parks Discount Cards"/>
  <meta property="og:url" content="{{ Request::url() }}"/>
  <meta property="og:image" content="{{ url('/img/destinations/yellowstone-1200x630.jpg') }}"/>
  <meta property="og:site_name" content="Get Outside Pass"/>
  <meta property="og:description" content="One Pass. Multiple Discounts. Save money and don't miss a thing during your National Park Vacation."/>
  <meta property="og:locale" content="en_US"/>
@stop

@section('content')

{{-- Hero Slider --}}
<section class="hero-slider" style="background-image: url(/img/destinations/grand-canyon-1920x580.jpg);">
    <div class="item">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-12 padding-bottom-2x text-md-left text-center">
            <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3 ">
              <div class="row login-overlay">
                <div class="col-sm-12">

                  <h1><strong class="dp-white">Login</strong></h1>

                  {!! Form::open(['method' => 'POST', 'route' => 'login', 'class' => 'form-horizontal', 'id' => 'loginForm']) !!}
          
                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                      {!! Form::label('email', 'Email') !!}
                      {!! Form::text('email', old('email'), ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Email']) !!}
                      <small class="text-danger">{{ $errors->first('email') }}</small>
                  </div>
                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                      {!! Form::label('password', 'Password') !!}
                      {!! Form::password('password', ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Password']) !!}
                      <small class="text-danger">{{ $errors->first('password') }}</small>
                  </div>
                  <div class="form-group">
                      <div class="checkbox{{ $errors->has('remember') ? ' has-error' : '' }}">
                          <label for="remember">
                              {!! Form::checkbox('remember', '1', null, ['id' => 'remember']) !!} Remember Me
                          </label>
                      </div>
                      <small class="text-danger">{{ $errors->first('remember') }}</small>
                  </div>

                  {!! Form::submit("Let's Go", ['class' => 'btn btn-success']) !!}
                  <a href="{{ route('password.request') }}" class="btn btn-secondary">Forgot Password</a>

                  {!! Form::close() !!}

                </div>  
              </div>                          
            </div>      
        </div>
      </div>
    </div>
</section>

@stop

@section('scripts')
<script>

//////////
/// Form Validation
/// http://formvalidation.io/settings/
//////////

$(function () {
    $('#loginForm').formValidation({
        framework: 'bootstrap',
        icon: {
          valid: 'glyphicon glyphicon-ok',
          invalid: 'glyphicon glyphicon-remove',
          validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
          email: {
            validators: {
              notEmpty: {
                message: 'Email is required.'
              }
            }
          },
          password: {
            validators: {
              notEmpty: {
                message: 'A password is required.'
              }
            }
          },
        }
    });
});

</script>
@stop
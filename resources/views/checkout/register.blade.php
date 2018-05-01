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

{{-- Start Form --}}
{!! Form::open(['route' => ['checkout.payment.store'],'method' => 'POST', 'id' => 'checkoutRegister', 'class' => 'interactive-credit-card']) !!}
{{-- Form::hidden('pass_id', $pass->id) --}}

{{-- Page Content --}}
<div class="container padding-bottom-3x mb-2">
  <div class="row mt-5">
    <div class="col-lg-8">

        <h1 class="text-bold">WooHoo! <small class="text-warning">Purchase Successful</small></h1>

        <div class="card mt-3">
          <div class="card-header" role="tab">
            <h3><strong>Please create a password.</strong></h3>
          </div>
          <div class="card-body">
            {{-- Start Form --}}
            {!! Form::open(['method' => 'POST', 'route' => 'checkout.register.store', 'id' => 'checkoutRegister', 'class' => 'interactive-credit-card']) !!}
            {!! Form::hidden('user_id', $user->id) !!}
              <div class="row">
                <div class="col-sm-12 mb-3">
                  <h4>Your Username: <strong>{{ $user->email }}</strong></h4>
                </div>
{{--                 <div class="col-sm-12">
                  <h4>Password</h4>
                </div> --}}
                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                      {!! Form::label('password', 'Password <i class="pe-7s-leaf dp-warning"></i> <small class="gray">to access your pass in the future</small>', [], false) !!}
                      {!! Form::password('password', ['class' => 'form-control form-control-rounded', 'required' => 'required']) !!}
                      <small class="text-danger">{{ $errors->first('password') }}</small>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('confirmPassword') ? ' has-error' : '' }}">
                      {!! Form::label('confirmPassword', 'Re-enter Password <i class="pe-7s-leaf dp-warning"></i>', [], false) !!}
                      {!! Form::password('confirmPassword',['class' => 'form-control form-control-rounded', 'required' => 'required']) !!}
                      <small class="text-danger">{{ $errors->first('confirmPassword') }}</small>
                  </div>
                </div>
                <div class="col-sm-12">
                  {!! Form::button('Create Password and View Pass <i class="icon-arrow-right"></i></a>', ['type' => 'submit', 'class' => 'btn btn-primary btn-lg']) !!}
                </div>    
              </div>
            {{-- End Form --}}
            {!! Form::close() !!}
          </div>
        </div>

    </div>

    {{-- Sidebar --}}
    <div class="col-lg-4">
      <div class="sticky">
        <aside class="user-info-wrapper">
          <div class="user-cover" style="background-image: url(/img/account/user-cover-img.jpg);">
            {{-- <div class="info-label" data-toggle="tooltip" title="You currently have 290 Reward Points to spend"><i class="icon-medal"></i>290 points</div> --}}
          </div>
          <div class="user-info">
            <div class="user-avatar"><a class="edit-avatar" href="#"></a><img src="/img/account/user-ava.jpg" alt="User"></div>
            <div class="user-data">
              <h4>{{ $user->firstname ? $user->firstname : null }} {{ $user->lastname ? $user->lastname : null }}</h4>
              <span>Joined {{ $user->created_at ? $user->created_at->format('F j, Y') : null }}</span>
            </div>
          </div>
        </aside>
{{--         <nav class="list-group">
          <a class="list-group-item with-badge" href="{{ route('member.show', $user) }}"><i class="icon-tag"></i>My Passes<span class="badge badge-primary badge-pill">{{ count($user->purchases) }}</span></a>
          <a class="list-group-item active" href="{{ route('member.edit', $user) }}"><i class="icon-head"></i>My Profile</a>
        </nav> --}}
      </div>
    </div>

  </div>
</div>

{{-- End Form --}}
{!! Form::close() !!}

@stop

@section('scripts')
<script>

//////////
/// Form Validation
/// http://formvalidation.io/settings/
//////////
$(function () {
  $('#checkoutRegister').formValidation({
    framework: 'bootstrap',
    excluded: ':disabled',
    fields: {
      password: {
        validators: {
          notEmpty: {
            message: 'A password is required.'
          }
        }
      },
      confirmPassword: {
        validators: {
          notEmpty: {
            message: 'Password confirmation is required.'
          },
          identical: {
            field: 'password',
            message: 'Passwords do not match.'
          }
        }
      }
    }
  });
});

</script>
@stop
@extends('_layouts.body')

@section('meta-page')
  <title>Dimple Pass - National Parks Discount Cards</title>
  <meta name="description" content="One Pass. Multiple Discounts. Save money and don't miss a thing during your National Park Vacation." />
  <meta name="keywords" content="national parks, travel, discounts, coupons, attractions, activities, things to do, dimple pass">
@stop

@section('meta-og')
  <meta property="og:type" content="article"/>
  <meta property="og:title" content="Dimple Pass - National Parks Discount Cards"/>
  <meta property="og:url" content="{{ Request::url() }}"/>
  <meta property="og:image" content="{{ url('/img/destinations/yellowstone-1200x630.jpg') }}"/>
  <meta property="og:site_name" content="Dimple Pass"/>
  <meta property="og:description" content="One Pass. Multiple Discounts. Save money and don't miss a thing during your National Park Vacation."/>
  <meta property="og:locale" content="en_US"/>
@stop

@section('content')

{{-- Start Form --}}
{!! Form::open(['action' => 'CheckoutController@checkoutPaymentStore','method' => 'POST', 'class' => 'interactive-credit-card', 'id' => 'checkoutPayment']) !!}

{{-- Page Content --}}
<div class="container padding-bottom-3x mb-2">
  <div class="row mt-5">

    <div class="col-lg-8">

      {{-- Checkout Steps --}}
      <div class="checkout-steps hidden-xs-down">
        <a class="active" href="/checkout/payment">2. Payment</a>
        <a class="completed" href="/checkout"><span class="step-indicator icon-circle-check"></span><span class="angle"></span>1. My Profile</a>
      </div>

        {{-- Credit Card --}}
        <div class="card">
          <div class="card-header" role="tab">
            <h6>
              <i class="fa fa-cc-amex"></i>
              <i class="fa fa-cc-discover"></i>
              <i class="fa fa-cc-jcb"></i>
              <i class="fa fa-cc-mastercard"></i>
              <i class="fa fa-cc-visa"></i>
            </h6>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group{{ $errors->has('number') ? ' has-error' : '' }}">
                    {!! Form::text('number', null, ['class' => 'form-control form-control-rounded', 'required' => 'required', 'placeholder' => 'Card Number']) !!}
                    <small class="text-danger">{{ $errors->first('number') }}</small>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group{{ $errors->has('expiry') ? ' has-error' : '' }}">
                    {!! Form::text('expiry', null, ['class' => 'form-control form-control-rounded', 'required' => 'required', 'placeholder' => 'MM/YY']) !!}
                    <small class="text-danger">{{ $errors->first('expiry') }}</small>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group{{ $errors->has('cvc') ? ' has-error' : '' }}">
                    {!! Form::text('cvc', null, ['class' => 'form-control form-control-rounded', 'required' => 'required', 'placeholder' => 'CVC']) !!}
                    <small class="text-danger">{{ $errors->first('cvc') }}</small>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="card-wrapper"></div>
              </div>
              <div class="col-md-7">
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    {!! Form::text('name', null, ['class' => 'form-control form-control-rounded', 'required' => 'required', 'placeholder' => 'Name on Card']) !!}
                    <small class="text-danger">{{ $errors->first('name') }}</small>
                </div>
              </div>
              <div class="col-md-5">
                <div class="form-group{{ $errors->has('zipcode') ? ' has-error' : '' }}">
                    {!! Form::text('zipcode', null, ['class' => 'form-control form-control-rounded', 'required' => 'required', 'placeholder' => 'Zip Code']) !!}
                    <small class="text-danger">{{ $errors->first('zipcode') }}</small>
                </div>
              </div>
            </div>
          </div>
        </div>

        {{-- Checkout Step Buttons --}}
        <div class="checkout-footer mt-5">
          <a class="btn btn-outline-secondary float-left m-2" href="/checkout"><i class="icon-arrow-left"></i><span class="hidden-xs-down"> Profile</span></a>
          {!! Form::button('Place Order <i class="icon-arrow-right"></i></a>', ['type' => 'submit', 'class' => 'btn btn-primary float-right m-2']) !!}
        </div>

    </div>

    {{-- Sidebar --}}
    <div class="col-lg-4 hidden-xs-down">

      <aside class="user-info-wrapper">
        <div class="user-cover" style="background-image: url(/img/account/user-cover-img.jpg);">
          {{-- <div class="info-label" data-toggle="tooltip" title="You currently have 290 Reward Points to spend"><i class="icon-medal"></i>290 points</div> --}}
        </div>
        <div class="user-info">
          <div class="user-avatar"><a class="edit-avatar" href="#"></a><img src="/img/account/user-ava.jpg" alt="User"></div>
          <div class="user-data">
            <h4>{{ (isset(Auth::user()->firstname)) ? Auth::user()->firstname : null }} {{ (isset(Auth::user()->lastname)) ? Auth::user()->lastname : null }}</h4>
            <span>Joined {{ (isset(Auth::user()->created_at)) ? Auth::user()->created_at->format('F j, Y') : null }}</span>
          </div>
        </div>
      </aside>
      <nav class="list-group mb-4">
        <a class="list-group-item with-badge" href="{{ route('member.show', Auth::user()) }}"><i class="icon-tag"></i>My Passes<span class="badge badge-primary badge-pill">5</span></a>
        <a class="list-group-item" href="{{ route('member.edit', Auth::user()) }}"><i class="icon-head"></i>My Profile</a>
      </nav>

      @include('/checkout/_inc/ordersummary')
    </div>

  </div>
</div>

    {{-- End Form --}}
    {!! Form::close() !!}

@stop

@section('scripts')
<script>

//////////
/// On Page Load
//////////

$(function() {

  /// Add total of all passes.
  addTotalDue();

});

//////////
/// Direct Donation sync and math.
//////////

$('.donate4').on('click', function() {
  if($(this).is(':checked')) {
    $('.donate4').prop('checked', true);
    $('#dropdown-donate4').show();
  } else {
    $('.donate4').prop('checked', false);
    $('#dropdown-donate4').hide();
  }
  // Fire donation math.
  addTotalDue();
});

//////////
/// Update Pass Count in Header after removal
//////////

function passCountSubtract() {
  var count = Number($('#count').text());
  count--;
  $(".count").text(count).fadeIn(1200);
}

//////////
/// Add total due and display
//////////

function addTotalDue() {
  // Add total of passes.
  totalPasses = 0;
  $('.passFee').each(function(){
      totalPasses += parseFloat($(this).text());  // Or this.innerHTML, this.innerText
  });
  // Add donation.
  if ($('#donate4').is(':checked')) {
    var donateAmount = 4;
  } else {
    var donateAmount = 0;
  }
  $('.donateAmount').text(addCommas(roundTo(donateAmount, 0)));
  // Add total of passes and donation.
  var total = totalPasses + donateAmount; 
  $('.totalDue').text(addCommas(roundTo(total, 0)));
}

//////////
/// Adds Number Commas and decimal point.
//////////

function addCommas(nStr) {
  nStr += '';
  x = nStr.split('.');
  x1 = x[0];
  x2 = x.length > 1 ? '.' + x[1] : '';
  var rgx = /(\d+)(\d{3})/;
  while (rgx.test(x1)) {
    x1 = x1.replace(rgx, '$1' + ',' + '$2');
  }
  return x1 + x2;
}

//////////
/// Rounds current calculations.
//////////

function roundTo(num, places) {
  var calc = (Math.round(num * (Math.pow(10, places))) / (Math.pow(10, places)));
  return calc.toFixed(2);
}

//////////
/// Form Validation
/// http://formvalidation.io/settings/
//////////

$(function () {
  $('#checkoutPayment').formValidation({
    framework: 'bootstrap',
    excluded: ':disabled',
    fields: {
      number: {
        validators: {
          notEmpty: {
            message: 'What is the credit card number?'
          }
        }
      },
      name: {
        validators: {
          notEmpty: {
            message: 'What is the name on the card?'
          }
        }
      },
      expiry: {
        validators: {
          notEmpty: {
            message: 'Required'
          }
        }
      },
      cvc: {
        validators: {
          notEmpty: {
            message: 'Required'
          }
        }
      },
      zipcode: {
        validators: {
          notEmpty: {
            message: 'How about a Zip Code?'
          }
        }
      },
    }
  });
});

</script>
@stop
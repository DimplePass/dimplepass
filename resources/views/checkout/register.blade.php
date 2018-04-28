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
{!! Form::open(['action' => 'CheckoutController@registerUser','method' => 'POST', 'id' => 'checkoutRegister', 'class' => 'interactive-credit-card']) !!}
{!! Form::hidden('pass_id', $pass->id) !!}

{{-- Page Content --}}
<div class="container padding-bottom-3x mb-2">
  <div class="row mt-5">
    <div class="col-lg-8">

        <h3 class="text-bold">Your pass will be available immediately.</h3>

        <div class="card mt-3">
          <div class="card-header" role="tab">
            <h6>
              <i class="fa fa-cc-visa"></i>
              <i class="fa fa-cc-mastercard"></i>
              <i class="fa fa-cc-amex"></i>
              <i class="fa fa-cc-discover"></i>
              <i class="fa fa-cc-diners-club"></i>
            </h6>
          </div>
          <div class="card-body">
            <div class="row">

            </div>
          </div>
        </div>

    </div>

    {{-- Sidebar --}}
    <div class="col-lg-4">
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
/// Promo Code Validation
//////////

$('#promo').on('blur', function() {
  var activePromos = ['000000', '111111', '222222', '333333'];
  var promo = $(this).val();
  if (jQuery.inArray(promo, activePromos)!='-1') {
      alert('Active Promo');
  } else {
      alert('No way Jose');
  }  
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
  $('#checkoutRegister').formValidation({
    framework: 'bootstrap',
    excluded: ':disabled',
    fields: {
      firstname: {
        validators: {
          notEmpty: {
            message: 'What is your first name?'
          }
        }
      },
      lastname: {
        validators: {
          notEmpty: {
            message: 'What is you last name?'
          }
        }
      },
      email: {
        trigger: 'blur',
        validators: {
          notEmpty: {
            message: 'Email is required.'
          }
        }
      },
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
      address: {
        validators: {
          notEmpty: {
            message: 'What is your address?'
          }
        }
      },
      city: {
        validators: {
          notEmpty: {
            message: 'What city?'
          }
        }
      },
      state: {
        validators: {
          notEmpty: {
            message: 'Which state?'
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
      }
    }
  });
});

</script>
@stop
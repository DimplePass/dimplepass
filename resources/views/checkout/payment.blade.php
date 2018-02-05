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
Page Title
@stop

@section('content')

<!-- Page Content-->
<div class="container padding-bottom-3x mb-2">
  <div class="row mt-5">
    <!-- Checkout Adress-->
    <div class="col-xl-9 col-lg-8">
      <div class="checkout-steps">
        <a href="/checkout/review">3. Review</a>
        <a class="active" href="/checkout/payment"><span class="angle"></span>2. Payment</a>
        <a class="completed" href="/checkout"><span class="step-indicator icon-circle-check"></span><span class="angle"></span>1. Billing Address</a>
      </div>

{{--       <aside class="user-info-wrapper">
        <div class="user-cover" style="background-image: url(/img/account/user-cover-img.jpg);">
          <div class="info-label" data-toggle="tooltip" title="You currently have 290 Reward Points to spend"><i class="icon-medal"></i>290 points</div>
        </div>
        <div class="user-info">
          <div class="user-avatar"><a class="edit-avatar" href="#"></a><img src="/img/account/user-ava.jpg" alt="User"></div>
					<column class="col-sm-5">
	          <div class="user-data">
	            <h4>Happy GoLucky</h4>
	            <span>Joined February 06, 2017</span>
	          </div>
					</column>
					<column class="col-sm-5">
	          <div class="user-data">
							<h6><a href="#">happy@golucky.com</a></h6>
							<h6>(307) 690-9788</h6>
							<h6>130 Yellow Rose Dr., Alta, WY  83414</h6>
	          </div>
					</column>
        </div>
      </aside> --}}

      <h4 class="mt-4">Payment Info</h4>
      <hr class="padding-bottom-1x">
        <div class="card">
          <div class="card-header" role="tab">
            <h6>We accept following credit cards:&nbsp;<img class="d-inline-block align-middle" src="/img/credit-cards.png" style="width: 120px;" alt="Cerdit Cards"></h6>
          </div>
          <div class="card-body">
            <form class="interactive-credit-card row">
              <div class="form-group col-md-4">
                <input class="form-control" type="text" name="number" placeholder="Card Number" required>
              </div>
              <div class="form-group col-md-4">
                <input class="form-control" type="text" name="name" placeholder="Name on Card" required>
              </div>
              <div class="form-group col-md-2">
                <input class="form-control" type="text" name="expiry" placeholder="MM/YY" required>
              </div>
              <div class="form-group col-md-2">
                <input class="form-control" type="text" name="cvc" placeholder="CVC" required>
              </div>
              <div class="col-sm-6">
                {{-- <button class="btn btn-outline-primary btn-block margin-top-none" type="submit">Submit</button> --}}
              </div>
            </form>
            <div class="card-wrapper"></div>
          </div>
        </div>
      <div class="checkout-footer margin-top-1x">
        <div class="column"><a class="btn btn-outline-secondary" href="/checkout"><i class="icon-arrow-left"></i><span class="hidden-xs-down">&nbsp;Back</span></a></div>
        <div class="column"><a class="btn btn-primary" href="/checkout/review"><span class="hidden-xs-down">Continue&nbsp;</span><i class="icon-arrow-right"></i></a></div>
      </div>
    </div>
    <!-- Sidebar          -->
    <div class="col-xl-3 col-lg-4">
      <aside class="sidebar">
        <div class="padding-top-2x hidden-lg-up"></div>
        <!-- Order Summary Widget-->
        <section class="widget widget-order-summary">
          <h3 class="widget-title">Order Summary</h3>
          <table class="table">
            <tr>
              <td>Glacier</td>
              <td class="text-medium">$<span class="passFee">26.00</span></td>
            </tr>
            <tr>
              <td>Yellowstone</td>
              <td class="text-medium">$<span class="passFee">26.00</span></td>
            </tr>
            <tr>
              <td>
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="donate4">
                  <label class="custom-control-label dp-warning" for="donate4">Add $4 to get kids outdoors.</label>
                  <p><a href="#"><i class="pe-7s-help1"></i> What is this?</a></p> 
                </div>
              </td>     
              <td  class="text-medium">$<span id="donateAmount" class="donateAmount">0</span></td>   
            </tr>       
            <tr>
              <td></td>
              <td class="text-lg text-medium">$<span id="totalDue" class="totalDue"></span></td>
            </tr>
          </table>
        </section>
      </aside>
    </div>
  </div>
</div>

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
/// Add direct donation to total on checkbox click.
//////////

$('#donate4').on('click', function() {
  addDonation();
});

//////////
/// Add direct donation to total
//////////

function addDonation() {
  if ($('#donate4').is(':checked')) {
    var donateAmount = 4;
  } else {
    var donateAmount = 0;
  }
  $('.donateAmount').text(addCommas(roundTo(donateAmount, 0)));
  var total = totalPasses + donateAmount;
  $('.totalDue').text(addCommas(roundTo(total, 0)));
}

//////////
/// Add total due and display
//////////

function addTotalDue() {
  totalPasses = 0;
  $('.passFee').each(function(){
      totalPasses += parseFloat($(this).text());  // Or this.innerHTML, this.innerText
  });
  $('.totalDue').text(addCommas(roundTo(totalPasses, 0)));
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

</script>
@stop
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
        <a href="/checkout/payment">2. Payment</a>
        <a class="active" href="/checkout"><span class="angle"></span>1. Billing Address</a>
      </div>

      <div class="padding-top-2x mt-2 hidden-lg-up"></div>
      <h4>Billing Address</h4>
      <hr class="padding-bottom-1x">

      {{-- Start Form --}}
      <form class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="account-fn">First Name <span class="dp-warning"><i class="pe-7s-leaf"></i></span></label>
            <input class="form-control" type="text" id="account-fn" value="Happy" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="account-ln">Last Name <span class="dp-warning"><i class="pe-7s-leaf"></i></span></label>
            <input class="form-control" type="text" id="account-ln" value="GoLucky" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="account-email">E-mail Address <span class="dp-warning"><i class="pe-7s-leaf"></i></span></label>
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
            <label for="checkout-address1">Address 1 <span class="dp-warning"><i class="pe-7s-leaf"></i></span></label>
            <input class="form-control" type="text" id="checkout-address1">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="checkout-address2">Address 2</label>
            <input class="form-control" type="text" id="checkout-address2">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="checkout-city">City <span class="dp-warning"><i class="pe-7s-leaf"></i></span></label>
            <select class="form-control" id="checkout-city">
              <option>Choose city</option>
              <option>Amsterdam</option>
              <option>Berlin</option>
              <option>Geneve</option>
              <option>New York</option>
              <option>Paris</option>
            </select>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="checkout-zip">ZIP Code <span class="dp-warning"><i class="pe-7s-leaf"></i></span></label>
            <input class="form-control" type="text" id="checkout-zip">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="checkout-country">Country</label>
            <select class="form-control" id="checkout-country">
              <option>Choose country</option>
              <option>Australia</option>
              <option>Canada</option>
              <option>France</option>
              <option>Germany</option>
              <option>Switzerland</option>
              <option>USA</option>
            </select>
          </div>
        </div>
      </form>
  
      <div class="checkout-footer margin-top-1x">
        <div class="column">{{-- <a class="btn btn-outline-secondary" href="checkout-shipping.html"><i class="icon-arrow-left"></i><span class="hidden-xs-down">&nbsp;Back</span></a> --}}</div>
        <div class="column"><a class="btn btn-primary" href="/checkout/payment"><span class="hidden-xs-down">Continue&nbsp;</span><i class="icon-arrow-right"></i></a></div>
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
              <td  class="text-medium">$<span id="donateAmount">0</span></td>   
            </tr>       
            <tr>
              <td></td>
              <td class="text-lg text-medium">$<span id="totalDue"></span></td>
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
  $('#donateAmount').text(addCommas(roundTo(donateAmount, 0)));
  var total = totalPasses + donateAmount;
  $('#totalDue').text(addCommas(roundTo(total, 0)));
}

//////////
/// Add total due and display
//////////

function addTotalDue() {
  totalPasses = 0;
  $('.passFee').each(function(){
      totalPasses += parseFloat($(this).text());  // Or this.innerHTML, this.innerText
  });
  $('#totalDue').text(addCommas(roundTo(totalPasses, 0)));
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
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

{{-- Page Content --}}
<div class="container padding-bottom-3x mb-2">
  <div class="row mt-5">

    <div class="col-xl-9 col-lg-8">

      {{-- Checkout Steps --}}
      <div class="checkout-steps hidden-xs-down">
        <a class="active" href="/checkout/review">3. Review</a>
        <a class="completed" href="/checkout/payment"><span class="angle"></span><span class="step-indicator icon-circle-check"></span> 2. Payment</a>
        <a class="completed" href="/checkout"><span class="step-indicator icon-circle-check"></span><span class="angle"></span>1. My Profile</a>
      </div>

      {{-- Member Profile --}}
      <aside class="user-info-wrapper mb-5">
        <div class="user-cover" style="background-image: url(/img/account/user-cover-img.jpg);">
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
      </aside>

      {{-- Cart --}}
      <div class="table-responsive shopping-cart mt-5">
        <table class="table">
          <thead>
            <tr>
              <th>Dimple Pass Destinations</th>
              <th class="text-center">Price</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr class="data-passid-1">
              <td>
                <div class="product-item"><a class="product-thumb" href="/parks/yellowstone"><img src="/img/destinations/yellowstone-300x300.jpg" alt="Yellowstone Dimple Pass"></a>
                  <div class="product-info">
                    <h4 class="product-title"><a href="/parks/yellowstone">Yellowstone</a></h4>
										<span>Save up to <em>$289</em></span>
										<span>Good at 14 of the top attractions and activities in Yellowstone.</span>
                  </div>
                </div>
              </td>
              <td class="text-center text-lg text-medium">$26.00</td>
              <td class="text-center"><a class="btn btn-outline-primary btn-sm removePass" href="#" data-passid="passid-1">Remove</a></td>
            </tr>
            <tr class="data-passid-2">
              <td>
                <div class="product-item"><a class="product-thumb" href="/parks/yellowstone"><img src="/img/destinations/yosemite-300x300.jpg" alt="Yellowstone Dimple Pass"></a>
                  <div class="product-info">
                    <h4 class="product-title"><a href="/parks/yellowstone">Yosemite</a></h4>
										<span>Save up to <em>$289</em></span>
										<span>Good at 14 of the top attractions and activities in Yosemite.</span>
                  </div>
                </div>
              </td>
              <td class="text-center text-lg text-medium">$26.00</td>
              <td class="text-center"><a class="btn btn-outline-primary btn-sm removePass" href="#" data-passid="passid-2">Remove</a></td>
            </tr>
            <tr>
              <td>row 1</td>
              <td>row 1</td> 
              <td>
                <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" id="donate4">
                <label class="custom-control-label dp-warning" for="donate4">Add $4 to get kids outdoors.</label>
                <p><a href="#"><i class="pe-7s-help1"></i> What is this?</a></p> 
              </div>
              </td>  
            </tr>     
          </tbody>
        </table>
      </div>
      <div class="shopping-cart-footer">
        <div class="column"></div>
        <div class="column text-lg text-right">Subtotal: <span class="text-medium">$<span class="totalDue">0</span></span></div>
      </div>
      <div class="checkout-footer margin-top-1x hidden-xs-down">
        <div class="column"><a class="btn btn-outline-secondary" href="/payment"><i class="icon-arrow-left"></i><span class="hidden-xs-down"> Profile</span></a></div>
        <div class="column"><a class="btn btn-primary" href=""><span class="hidden-xs-down">Complete Order</span> <i class="icon-arrow-right"></i></a></div>
      </div>
    </div>
    {{-- Sidebar --}}
    <div class="col-xl-3 col-lg-4 hidden-xs-down">
      @include('/checkout/_inc/ordersummary')
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
/// Remove pass
//////////

$('.removePass').on('click', function() {
  // Get Pass ID.
  var passid = $(this).data('passid');
  // Submit Ajax to remove item from cart.

  // Remove pass from table.
  $(this).closest('tr').fadeOut(1400);
  // Remove pass from header drop down and order summary.
  $('.data-passid-' + passid + '').fadeOut(1400);
  // Update total number in cart in header.
  passCountSubtract();
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
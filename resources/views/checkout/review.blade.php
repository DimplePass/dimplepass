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
              <th width="20%"></th>
            </tr>
          </thead>
          <tbody>
            <tr class="passid-1">
              <td>
                <div class="product-item"><a class="product-thumb" href="/parks/yellowstone"><img src="/img/destinations/yellowstone-300x300.jpg" alt="Yellowstone Dimple Pass" class="rounded"></a>
                  <div class="product-info">
                    <h4 class="product-title"><a href="/parks/yellowstone">Yellowstone</a></h4>
										<span>Good at 14 of the top attractions and activities in Yellowstone.</span>
                  </div>
                </div>
              </td>
              <td class="text-right text-lg text-medium">$26.00</td>
              <td class="text-center"><a class="btn btn-outline-primary btn-sm removePass" href="#" data-passid="1">Remove</a></td>
            </tr>
            <tr class="passid-2">
              <td>
                <div class="product-item"><a class="product-thumb" href="/parks/yellowstone"><img src="/img/destinations/yosemite-300x300.jpg" alt="Yosemite Dimple Pass" class="rounded"></a>
                  <div class="product-info">
                    <h4 class="product-title"><a href="/parks/yellowstone">Yosemite</a></h4>
										<span>Good at 14 of the top attractions and activities in Yosemite.</span>
                  </div>
                </div>
              </td>
              <td class="text-right text-lg text-medium">$26.00</td>
              <td class="text-center"><a class="btn btn-outline-primary btn-sm removePass" href="#" data-passid="2">Remove</a></td>
            </tr>
            <tr>
              <td>
                <div class="product-item"><a class="product-thumb" href="/foundation"><img src="/img/foundation/everykidinapark-215x215.png" alt="Open OutDoors for Kids"></a>
                  <div class="product-info">
                    <h4 class="product-title"><a href="/foundation">$4 Direct Donation to Get Kids Outdoors.</a></h4>
                    <span>National Park Foundation - Open OutDoors for Kids program.</span>
                  </div>
                </div>
              </td>
              <td CLASS="text-right text-lg text-medium">$<span class="donateAmount">0.00</span></td> 
              <td>
                <div class="custom-control custom-checkbox">
                <input class="custom-control-input pointer donate4" type="checkbox">
                <label class="custom-control-label pointer dp-warning" for="donate4">Add $4 Donation</label>
                <p><a href="#">What is this?</a></p> 
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
        <div class="column"><a class="btn btn-outline-secondary" href="/checkout/payment"><i class="icon-arrow-left"></i><span class="hidden-xs-down"> Payment</span></a></div>
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
/// Remove pass
//////////

$('.removePass').on('click', function(e) {
    e.preventDefault();
  // Get Pass ID.
  var passid = $(this).data('passid');
  // Submit Ajax to remove item from cart.

  // Remove pass from table.
  $(this).closest('tr').remove();
  // Remove pass from header drop down and order summary.
  $('.passid-' + passid + '').remove();
  // Update total number in cart in header.
  passCountSubtract();
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

</script>
@stop
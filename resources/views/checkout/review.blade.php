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
    <div class="col-xl-9 col-lg-8">
      <div class="checkout-steps">
        <a class="active" href="/checkout/review">3. Review</a>
        <a class="completed" href="/checkout/payment"><span class="angle"></span><span class="step-indicator icon-circle-check"></span>2. Payment</a>
        <a class="completed" href="/checkout"><span class="step-indicator icon-circle-check"></span><span class="angle"></span>1. Billing Address</a>
      </div>
      <div class="ml-3">
        <ul class="list-unstyled">
          <li><h4><span class="text-muted">Passholder:</span> Happy GoLucky</h4></li>
          <li><h6><span class="text-muted">Email:</span> happy@golucky.com</h6></li>
					<li><h6><span class="text-muted">Phone:</span> (307) 690-9788</h6></li>
        </ul>
      </div>
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
            <tr>
              <td>
                <div class="product-item"><a class="product-thumb" href="/parks/yellowstone"><img src="/img/destinations/yellowstone-300x300.jpg" alt="Yellowstone Dimple Pass"></a>
                  <div class="product-info">
                    <h4 class="product-title"><a href="/parks/yellowstone">Yellowstone<small>x 1</small></a></h4>
										<span>Save up to <em>$289</em></span>
										<span>Good at 14 of the top attractions and activities in Yellowstone.</span>
                  </div>
                </div>
              </td>
              <td class="text-center text-lg text-medium">$26.00</td>
              <td class="text-center"><a class="btn btn-outline-primary btn-sm" href="#">Remove</a></td>
            </tr>
            <tr>
              <td>
                <div class="product-item"><a class="product-thumb" href="/parks/yellowstone"><img src="/img/destinations/yosemite-300x300.jpg" alt="Yellowstone Dimple Pass"></a>
                  <div class="product-info">
                    <h4 class="product-title"><a href="/parks/yellowstone">Yosemite<small>x 1</small></a></h4>
										<span>Save up to <em>$289</em></span>
										<span>Good at 14 of the top attractions and activities in Yosemite.</span>
                  </div>
                </div>
              </td>
              <td class="text-center text-lg text-medium">$26.00</td>
              <td class="text-center"><a class="btn btn-outline-primary btn-sm" href="#">Remove</a></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="shopping-cart-footer">
        <div class="column"></div>
        <div class="column text-lg">Subtotal: <span class="text-medium">$52.00</span></div>
      </div>
			<div class="text-right">
        <h5>Payment method</h5>
        <ul class="list-unstyled">
          <li><span class="text-muted">Credit Card:</span>**** **** **** 5300</li>
          <li><span class="text-muted">Billing Address:</span> 44 Shirley Ave. West Chicago, IL 60185, USA</li>
        </ul>
			</div>
      <div class="checkout-footer margin-top-1x">
        <div class="column"><a class="btn btn-outline-secondary" href="/checkout/payment"><i class="icon-arrow-left"></i><span class="hidden-xs-down"> Back</span></a></div>
        <div class="column"><a class="btn btn-primary" href="/member"><span class="hidden-xs-down">Complete Order</span> <i class="icon-arrow-right"></i></a></div>
      </div>
    </div>
    <!-- Sidebar -->
    <div class="col-xl-3 col-lg-4">
      <aside class="sidebar">
        <div class="padding-top-2x hidden-lg-up"></div>
        <!-- Order Summary Widget-->
        <section class="widget widget-order-summary">
          <h3 class="widget-title">Order Summary</h3>
          <table class="table">
            <tr>
              <td>Glacier</td>
              <td class="text-medium">$26</td>
            </tr>
            <tr>
              <td>Yellowstone</td>
              <td class="text-medium">$26</td>
            </tr>
            <tr>
							<td>
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="donate4">
                  <label class="custom-control-label dp-warning" for="donate4">Add $4 to get kids outdoors.</label>
									<p><a href="#"><i class="pe-7s-help1"></i> What is this?</a></p> 
                </div>
							</td>			
              <td  class="text-medium">$0</td>   
            </tr>       
            <tr>
              <td></td>
              <td class="text-lg text-medium">$52.00</td>
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

</script>
@stop
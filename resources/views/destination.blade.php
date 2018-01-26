@extends('_layouts.body')

@section('meta-page')
  <title>Meta Title Here</title>
  <meta name="description" content="Meta Description Here" />
@stop

@section('meta-og')
  <meta property="og:type" content="article"/>
  <meta property="og:title" content="OG Title Here"/>
  <meta property="og:url" content="{{ Request::url() }}"/>
  <meta property="og:image" content="OG Image URL Here."/>
  <meta property="og:site_name" content="Adventure Pass"/>
  <meta property="og:description" content="OG Description Here."/>
  <meta property="og:locale" content="en_US"/>
@stop

@section('logo-tag')
Logo Tag Here
@stop

@section('content')

    <!-- Off-Canvas Wrapper-->
    <div class="offcanvas-wrapper">
      <!-- Page Title-->
      <div class="page-title">
        <div class="container">
          <div class="column">
            <h1>Adventure Pass - Destinations</h1>
          </div>
          <div class="column">
            <ul class="breadcrumbs">
              <li><a href="index.html">Home</a>
              </li>
              <li class="separator">&nbsp;</li>
              <li>Destinations</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Page Content-->
      <div class="container padding-bottom-2x mb-2">
        <div class="row">
          <!-- Categories-->
          <div class="col-md-9 order-md-2">
            <!-- Promo banner-->
            <div class="alert alert-image-bg alert-dismissible fade show text-center mb-4" style="background-image: url(img/banners/alert-bg.jpg);"><span class="alert-close text-white" data-dismiss="alert"></span>
              <div class="h3 text-medium text-white padding-top-1x padding-bottom-1x"><i class="icon-clock" style="font-size: 33px; margin-top: -5px;"></i>&nbsp;&nbsp;Check our Limited Offers. Save up to 50%&nbsp;&nbsp;&nbsp;
                <div class="mt-3 hidden-xl-up"></div><a class="btn btn-primary" href="#">View Offers</a>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="card mb-30"><a class="card-img-tiles" href="shop-grid-ls.html">
                    <div class="inner">
                      <div class="main-img"><img src="img/shop/categories/01.jpg" alt="Category"></div>
                      <div class="thumblist"><img src="img/shop/categories/02.jpg" alt="Category"><img src="img/shop/categories/03.jpg" alt="Category"></div>
                    </div></a>
                  <div class="card-body text-center">
                    <h4 class="card-title">Clothing</h4>
                    <p class="text-muted">Starting from $49.99</p><a class="btn btn-outline-primary btn-sm" href="shop-grid-ls.html">View Products</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card mb-30"><a class="card-img-tiles" href="shop-grid-ls.html">
                    <div class="inner">
                      <div class="main-img"><img src="img/shop/categories/04.jpg" alt="Category"></div>
                      <div class="thumblist"><img src="img/shop/categories/05.jpg" alt="Category"><img src="img/shop/categories/06.jpg" alt="Category"></div>
                    </div></a>
                  <div class="card-body text-center">
                    <h4 class="card-title">Shoes</h4>
                    <p class="text-muted">Starting from $56.00</p><a class="btn btn-outline-primary btn-sm" href="shop-grid-ls.html">View Products</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card mb-30"><a class="card-img-tiles" href="shop-grid-ls.html">
                    <div class="inner">
                      <div class="main-img"><img src="img/shop/categories/07.jpg" alt="Category"></div>
                      <div class="thumblist"><img src="img/shop/categories/08.jpg" alt="Category"><img src="img/shop/categories/09.jpg" alt="Category"></div>
                    </div></a>
                  <div class="card-body text-center">
                    <h4 class="card-title">Bags</h4>
                    <p class="text-muted">Starting from $27.00</p><a class="btn btn-outline-primary btn-sm" href="shop-grid-ls.html">View Products</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card mb-30"><a class="card-img-tiles" href="shop-grid-ls.html">
                    <div class="inner">
                      <div class="main-img"><img src="img/shop/categories/10.jpg" alt="Category"></div>
                      <div class="thumblist"><img src="img/shop/categories/11.jpg" alt="Category"><img src="img/shop/categories/12.jpg" alt="Category"></div>
                    </div></a>
                  <div class="card-body text-center">
                    <h4 class="card-title">Hats</h4>
                    <p class="text-muted">Starting from $14.50</p><a class="btn btn-outline-primary btn-sm" href="shop-grid-ls.html">View Products</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card mb-30"><a class="card-img-tiles" href="shop-grid-ls.html">
                    <div class="inner">
                      <div class="main-img"><img src="img/shop/categories/13.jpg" alt="Category"></div>
                      <div class="thumblist"><img src="img/shop/categories/14.jpg" alt="Category"><img src="img/shop/categories/15.jpg" alt="Category"></div>
                    </div></a>
                  <div class="card-body text-center">
                    <h4 class="card-title">Sunglasses</h4>
                    <p class="text-muted">Starting from $35.99</p><a class="btn btn-outline-primary btn-sm" href="shop-grid-ls.html">View Products</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card mb-30"><a class="card-img-tiles" href="shop-grid-ls.html">
                    <div class="inner">
                      <div class="main-img"><img src="img/shop/categories/16.jpg" alt="Category"></div>
                      <div class="thumblist"><img src="img/shop/categories/17.jpg" alt="Category"><img src="img/shop/categories/18.jpg" alt="Category"></div>
                    </div></a>
                  <div class="card-body text-center">
                    <h4 class="card-title">Watches</h4>
                    <p class="text-muted">Starting from $79.99</p><a class="btn btn-outline-primary btn-sm" href="shop-grid-ls.html">View Products</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Sidebar          -->
          <div class="col-md-3 order-md-1">
            <aside class="sidebar">
              <div class="padding-top-1x hidden-md-up"></div>
              <section class="widget widget-categories">
                <h3 class="widget-title">Popular Brands</h3>
                <ul>
                  <li><a href="#">Adidas</a><span>(254)</span></li>
                  <li><a href="#">Bilabong</a><span>(39)</span></li>
                  <li><a href="#">Brooks</a><span>(205)</span></li>
                  <li><a href="#">Calvin Klein</a><span>(128)</span></li>
                  <li><a href="#">Cole Haan</a><span>(104)</span></li>
                  <li><a href="#">Columbia</a><span>(217)</span></li>
                  <li><a href="#">New Balance</a><span>(95)</span></li>
                  <li><a href="#">Nike</a><span>(310)</span></li>
                  <li><a href="#">Nine West</a><span>(134)</span></li>
                  <li><a href="#">Oakley</a><span>(73)</span></li>
                  <li><a href="#">Puma</a><span>(446)</span></li>
                  <li><a href="#">Scechers</a><span>(87)</span></li>
                  <li><a href="#">Tommy Bahama</a><span>(42)</span></li>
                  <li><a href="#">Tommy Hilfiger</a><span>(289)</span></li>
                  <li><a href="#">Valentino</a><span>(68)</span></li>
                </ul>
              </section>
            </aside>
          </div>
        </div>
      </div>
      <!-- Site Footer-->
      <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <!-- Contact Info-->
              <section class="widget widget-light-skin">
                <h3 class="widget-title">Get In Touch With Us</h3>
                <p class="text-white">Phone: 00 33 169 7720</p>
                <ul class="list-unstyled text-sm text-white">
                  <li><span class="opacity-50">Monday-Friday:</span>9.00 am - 8.00 pm</li>
                  <li><span class="opacity-50">Saturday:</span>10.00 am - 6.00 pm</li>
                </ul>
                <p><a class="navi-link-light" href="#">support@unishop.com</a></p><a class="social-button shape-circle sb-facebook sb-light-skin" href="#"><i class="socicon-facebook"></i></a><a class="social-button shape-circle sb-twitter sb-light-skin" href="#"><i class="socicon-twitter"></i></a><a class="social-button shape-circle sb-instagram sb-light-skin" href="#"><i class="socicon-instagram"></i></a><a class="social-button shape-circle sb-google-plus sb-light-skin" href="#"><i class="socicon-googleplus"></i></a>
              </section>
            </div>
            <div class="col-lg-3 col-md-6">
              <!-- Mobile App Buttons-->
              <section class="widget widget-light-skin">
                <h3 class="widget-title">Our Mobile App</h3><a class="market-button apple-button mb-light-skin" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">App Store</span></a><a class="market-button google-button mb-light-skin" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">Google Play</span></a><a class="market-button windows-button mb-light-skin" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">Windows Store</span></a>
              </section>
            </div>
            <div class="col-lg-3 col-md-6">
              <!-- About Us-->
              <section class="widget widget-links widget-light-skin">
                <h3 class="widget-title">About Us</h3>
                <ul>
                  <li><a href="#">Careers</a></li>
                  <li><a href="#">About Unishop</a></li>
                  <li><a href="#">Our Story</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Our Blog</a></li>
                </ul>
              </section>
            </div>
            <div class="col-lg-3 col-md-6">
              <!-- Account / Shipping Info-->
              <section class="widget widget-links widget-light-skin">
                <h3 class="widget-title">Account &amp; Shipping Info</h3>
                <ul>
                  <li><a href="#">Your Account</a></li>
                  <li><a href="#">Shipping Rates & Policies</a></li>
                  <li><a href="#">Refunds & Replacements</a></li>
                  <li><a href="#">Taxes</a></li>
                  <li><a href="#">Delivery Info</a></li>
                  <li><a href="#">Affiliate Program</a></li>
                </ul>
              </section>
            </div>
          </div>
          <hr class="hr-light mt-2 margin-bottom-2x">
          <div class="row">
            <div class="col-md-7 padding-bottom-1x">
              <!-- Payment Methods-->
              <div class="margin-bottom-1x" style="max-width: 615px;"><img src="img/payment_methods.png" alt="Payment Methods">
              </div>
            </div>
            <div class="col-md-5 padding-bottom-1x">
              <div class="margin-top-1x hidden-md-up"></div>
              <!--Subscription-->
              <form class="subscribe-form" action="//rokaux.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=1194bb7544" method="post" target="_blank" novalidate>
                <div class="clearfix">
                  <div class="input-group input-light">
                    <input class="form-control" type="email" name="EMAIL" placeholder="Your e-mail"><span class="input-group-addon"><i class="icon-mail"></i></span>
                  </div>
                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div style="position: absolute; left: -5000px;" aria-hidden="true">
                    <input type="text" name="b_c7103e2c981361a6639545bd5_1194bb7544" tabindex="-1">
                  </div>
                  <button class="btn btn-primary" type="submit"><i class="icon-check"></i></button>
                </div><span class="form-text text-sm text-white opacity-50">Subscribe to our Newsletter to receive early discount offers, latest news, sales and promo information.</span>
              </form>
            </div>
          </div>
          <!-- Copyright-->
          <p class="footer-copyright">© All rights reserved. Made with &nbsp;<i class="icon-heart text-danger"></i><a href="http://rokaux.com/" target="_blank"> &nbsp;by rokaux</a></p>
        </div>
      </footer>
    </div>
    <!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="icon-arrow-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>

@stop

@section('scripts')
<script>

</script>
@stop
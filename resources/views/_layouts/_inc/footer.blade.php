  {{-- Site Footer --}}
  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          {{-- Contact Info --}}
          <section class="widget widget-light-skin">
            <h3 class="widget-title">Get Outside Pass</h3>
            <p class="text-white">Phone: (307) 690-9788</p>
            <ul class="list-unstyled text-sm text-white">
              <li><span class="opacity-50">Monday-Friday:</span>9.00 am - 8.00 pm</li>
              <li><span class="opacity-50">Saturday:</span>10.00 am - 6.00 pm</li>
            </ul>
            <p><a class="navi-link-light" href="mailto:info@getoutsidepass.com">info@getoutsidepass.com</a></p>
            <p><a class="navi-link-light" href="{{ route('utility.contact') }}">Contact Us</a></p>
            <a class="social-button shape-circle sb-facebook sb-light-skin" href="https://www.facebook.com/getoutsidepass/" target="_blank"><i class="socicon-facebook"></i></a>
            <a class="social-button shape-circle sb-twitter sb-light-skin" href="https://twitter.com/getoutsidepass" target="_blank"><i class="socicon-twitter"></i></a>
            <a class="social-button shape-circle sb-instagram sb-light-skin" href="https://www.instagram.com/getoutsidepass/" target="_blank"><i class="socicon-instagram"></i></a>
          </section>
        </div>
        <div class="col-lg-3 col-md-6">
          {{-- About Us --}}
          <section class="widget widget-links widget-light-skin">
            <h3 class="widget-title">About Us</h3>
            <ul>
              <li><a href="{{ route('utility.about') }}">Our Story</a></li>
              <li><a href="{{ route('foundation') }}">100% to Kids</a></li>
              <li><a href="{{ route('utility.thebest') }}">The Best Attractions</a></li>
              <li><a href="{{ route('utility.faqs') }}">FAQs</a></li>
            </ul>
          </section>
        </div>
        <div class="col-lg-3 col-md-6">
          {{-- Account / Shipping Info --}}
          <section class="widget widget-links widget-light-skin">
            <h3 class="widget-title">Pass Holders</h3>
            <ul>
              <li><a href="{{ route('member.show', Auth::user()) }}">My Passes</a></li>
              <li><a href="{{ route('member.edit', Auth::user()) }}">My Profile</a></li>
              <li><a href="{{ route('utility.guarantee') }}">Money Back Guarantee</a></li>
              <li><a href="{{ route('member.terms') }}">Terms & Conditions</a></li>
            </ul>
          </section>
        </div>
        <div class="col-lg-3 col-md-6">
          {{-- For Vendors --}}
          <section class="widget widget-links widget-light-skin">
            <h3 class="widget-title">For Vendors</h3>
            <ul>
              <li><a href="/vendor/">Become a Vendor</a></li>
              <li><a href="/vendor/promise">The Vendor Promise</a></li>
            </ul>
          </section>
        </div>
      </div>
      <hr class="hr-light mt-2 margin-bottom-2x">
      <div class="row">
        <div class="col-md-7 padding-bottom-1x">
          {{-- Payment Methods --}}
          <div class="paymentCards margin-bottom-1x" style="max-width: 615px;">
            <i class="fa fa-cc-visa"></i>
            <i class="fa fa-cc-mastercard"></i>
            <i class="fa fa-cc-amex"></i>
            <i class="fa fa-cc-discover"></i>
            <i class="fa fa-cc-diners-club"></i>
          </div>
        </div>
        <div class="col-md-5 padding-bottom-1x">
          <div class="margin-top-1x hidden-md-up"></div>
          {{-- Subscription --}}
          <form class="subscribe-form" action="" method="post" target="_blank" novalidate>
            <div class="clearfix">
              <div class="input-group input-light">
                <input class="form-control" type="email" name="EMAIL" placeholder="Your e-mail"><span class="input-group-addon"><i class="icon-mail"></i></span>
              </div>
              {{-- real people should not fill this in and expect good things - do not remove this or risk form bot signups --}}
              <div style="position: absolute; left: -5000px;" aria-hidden="true">
                <input type="text" name="b_c7103e2c981361a6639545bd5_1194bb7544" tabindex="-1">
              </div>
              <button class="btn btn-primary" type="submit"><i class="icon-check"></i></button>
            </div><span class="form-text text-sm text-white opacity-50">Subscribe to receive new Get Outside Pass offers and the latest news.</span>
          </form>
        </div>
      </div>
      {{-- Copyright --}}
      <p class="footer-copyright">© 2018 - All rights reserved. Made with &nbsp;<i class="icon-heart text-danger"></i> &nbsp;by the Get Outside Pass.</p>
    </div>
  </footer>
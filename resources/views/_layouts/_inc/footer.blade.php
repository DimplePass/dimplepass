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
              @if (Auth::user())
                <li><a href="{{ route('member.show', Auth::user()) }}">My Passes</a></li>
                <li><a href="{{ route('member.edit', Auth::user()) }}">My Profile</a></li>
              @else
                <li><a href="{{ route('login') }}">Login</a></li>
              @endif
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
          <div id="mc_embed_signup">
            <form action="https://getoutsidepass.us18.list-manage.com/subscribe/post?u=5e0fce7e4132ef1c8a2a97272&amp;id=008eacf5d6" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
              <div id="mc_embed_signup_scroll clearfix">
                  <div class="mc-field-group input-group input-light">
                    <input type="email" value="" name="EMAIL" class="form-control required email" id="mce-EMAIL" placeholder="Your email" tabindex="-1"><span class="input-group-addon"><i class="icon-mail"></i></span>
                  </div>
                  <span class="form-text text-sm text-white opacity-50">Subscribe to receive new Get Outside Pass offers and the latest news.</span>
                  <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_5e0fce7e4132ef1c8a2a97272_008eacf5d6" tabindex="-1" value=""></div>
                  <button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary">Subscribe <i class="icon-check"></i></button>
                  <div id="mce-responses">
                    <div class="response" id="mce-error-response" style="display:none"></div>
                    <div class="response" id="mce-success-response" style="display:none"></div>
                  </div><!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              </div>
            </form>
          </div>
        </div>
      </div>
      {{-- Copyright --}}
      <p class="footer-copyright">© 2018 - All rights reserved. Made with &nbsp;<i class="icon-heart text-danger"></i> &nbsp;by the Get Outside Pass.</p>
    </div>
  </footer>
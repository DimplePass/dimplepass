    {{-- Off-Canvas Category Menu --}}
    <div class="offcanvas-container" id="shop-categories">
      @if (Auth::user())
        <a class="account-link" href="{{ route('member.show', Auth::user()) }}">
          <div class="user-ava">
            <img src="/img/account/user-ava-md.jpg" alt="{{ (!is_null(Auth::user()->firstname)) ? Auth::user()->firstname : null }} {{ (!is_null(Auth::user()->lastname)) ? Auth::user()->lastname : null }}">
          </div>
          <div class="user-info">
            <h6 class="user-name">{{ (!is_null(Auth::user()->firstname)) ? Auth::user()->firstname : null }} {{ (!is_null(Auth::user()->lastname)) ? Auth::user()->lastname : null }}</h6>
            <span class="text-sm text-white opacity-60">{{ (!is_null(Auth::user()->created_at)) ? Auth::user()->created_at->format('F j, Y') : null }}</span>
          </div>
        </a>
      @else
      <a class="account-link" href="{{ route('login') }}">
        <div class="user-ava">
          <img src="/img/account/user-ava-md.jpg" alt="">
        </div>
        <div class="user-info">
          <h6 class="user-name">Login</h6>
        </div>
      </a> 
      @endif
      <nav class="offcanvas-menu">
        <ul class="menu">
          <li class="active"><span><a href="/"><span>Home</span></a></span></li>
          <li class="has-children"><span><a href="{{ route('passes.index') }}"><span>Destinations</span></a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li><a href="{{ route('passes.show', 'glacier') }}">Glacier</a></li>
              <li><a href="{{ route('passes.show', 'grand-canyon') }}">Grand Canyon</a></li>
              <li><a href="{{ route('passes.show', 'yellowstone') }}">Yellowstone</a></li>
              <li><a href="{{ route('passes.show', 'yosemite') }}">Yosemite</a></li>
              <li><a href="{{ route('passes.show', 'zion') }}">Zion</a></li>
            </ul>
          </li>
          <li><span><a href="/how">How does it Work?</a></span></li>
          <li><span><a href="/foundation">100% to Kids</a></span></li>
          <li><span><a href="/faqs">FAQs</a></span></li>
        </ul>
      </nav>
    </div>
    {{-- Off-Canvas Mobile Menu --}}
    <div class="offcanvas-container" id="mobile-menu">
      @if (Auth::user())
        <a class="account-link" href="{{ route('member.show', Auth::user()) }}">
          <div class="user-ava">
            <img src="/img/account/user-ava-md.jpg" alt="{{ (!is_null(Auth::user()->firstname)) ? Auth::user()->firstname : null }} {{ (!is_null(Auth::user()->lastname)) ? Auth::user()->lastname : null }}">
          </div>
          <div class="user-info">
            <h6 class="user-name">{{ (!is_null(Auth::user()->firstname)) ? Auth::user()->firstname : null }} {{ (!is_null(Auth::user()->lastname)) ? Auth::user()->lastname : null }}</h6>
            <span class="text-sm text-white opacity-60">{{ (!is_null(Auth::user()->created_at)) ? Auth::user()->created_at->format('F j, Y') : null }}</span>
          </div>
        </a>
      @else
      <a class="account-link" href="{{ route('login') }}">
        <div class="user-ava">
          <img src="/img/account/user-ava-md.jpg" alt="">
        </div>
        <div class="user-info">
          <h6 class="user-name">Login</h6>
        </div>
      </a> 
      @endif   
      <nav class="offcanvas-menu">
        <ul class="menu">
          <li class="active"><span><a href="/"><span>Home</span></a></span></li>
          <li class="has-children"><span><a href="{{ route('passes.index') }}"><span>Destinations</span></a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li><a href="{{ route('passes.show', 'glacier') }}">Glacier</a></li>
              <li><a href="{{ route('passes.show', 'grand-canyon') }}">Grand Canyon</a></li>
              <li><a href="{{ route('passes.show', 'yellowstone') }}">Yellowstone</a></li>
              <li><a href="{{ route('passes.show', 'yosemite') }}">Yosemite</a></li>
              <li><a href="{{ route('passes.show', 'zion') }}">Zion</a></li>
            </ul>
          </li>
          <li><span><a href="/how">How does it Work?</a></span></li>
          <li><span><a href="/foundation">100% to Kids</a></span></li>
          <li><span><a href="/faqs">FAQs</a></span></li>
        </ul>
      </nav>
    </div>
    {{-- Navbar --}}
    {{-- Remove "navbar-sticky" class to make navigation bar scrollable with the page. --}}
    <header class="navbar navbar-sticky">
      {{-- Search --}}
      <form class="site-search" method="get">
        <input type="text" name="site_search" placeholder="Find your park...">
        <div class="search-tools"><span class="clear-search">Clear</span><span class="close-search"><i class="icon-cross"></i></span></div>
      </form>
      <div class="site-branding">
        <div class="inner">
          {{-- Off-Canvas Toggle (#shop-categories) --}}<a class="offcanvas-toggle cats-toggle" href="#shop-categories" data-toggle="offcanvas"></a>
          {{-- Off-Canvas Toggle (#mobile-menu) --}}<a class="offcanvas-toggle menu-toggle" href="#mobile-menu" data-toggle="offcanvas"></a>
          {{-- Site Logo --}}<a class="site-logo" href="/"><img src="/img/logo/logo.png" alt="Dimple Pass"></a>
        </div>
      </div>
      {{-- Main Navigation --}}
      <nav class="site-menu">
        <ul>
          <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/"><span>Home</span></a></li>
          <li class="has-megamenu {{ Request::is('d*') ? 'active' : '' }}"><a href="{{ route('passes.index') }}"><span>Destinations</span></a>
            <ul class="mega-menu">
              <li>
                <section class="promo-box" style="background-image: url(/img/destinations/glacier-300x300.jpg);">
                  {{-- Choose between .overlay-dark (#000) or .overlay-light (#fff) with default opacity of 50%. You can overrride default color and opacity values via 'style' attribute. --}}<span class="overlay-dark" style="opacity: .45;"></span>
                  <div class="promo-box-content text-center padding-top-3x padding-bottom-3x">
                    <h4 class="text-light text-thin text-shadow">24 discounts</h4>
                    <a class="btn btn-sm btn-primary" href="{{ route('passes.show', 'glacier') }}">
                      <h3 class="text-bold text-light text-shadow">Glacier</h3>
                    </a>
                  </div>
                </section>
              </li>
              <li><span class="mega-menu-title">Top National Parks</span>
                <ul class="sub-menu">
                  <li><a href="{{ route('passes.show', 'glacier') }}">Glacier</a></li>
                  <li><a href="{{ route('passes.show', 'grand-canyon') }}">Grand Canyon</a></li>
                  <li><a href="{{ route('passes.show', 'yellowstone') }}">Yellowstone</a></li>
                  <li><a href="{{ route('passes.show', 'yosemite') }}">Yosemite</a></li>
                  <li><a href="{{ route('passes.show', 'zion') }}">Zion</a></li>
                  <li><a href="{{ route('passes.index') }}"><span class="dp-primary"><strong>VIEW ALL</strong> <i class="icon-arrow-right"></i></span></a></li>
                </ul>
              </li>
              <li>
                <section class="promo-box" style="background-image: url(/img/destinations/yellowstone-300x300.jpg);"><span class="overlay-dark" style="opacity: .4;"></span>
                  <div class="promo-box-content text-center padding-top-3x padding-bottom-3x">
                    <h4 class="text-light text-thin text-shadow">22 discounts</h4>
                    <a class="btn btn-sm btn-primary" href="{{ route('passes.show', 'yellowstone') }}">
                      <h3 class="text-bold text-light text-shadow">Yellowstone</h3>
                    </a>
                  </div>
                </section>
              </li>
              <li>
                <section class="promo-box" style="background-image: url(/img/destinations/yosemite-300x300.jpg);">
                  {{-- Choose between .overlay-dark (#000) or .overlay-light (#fff) with default opacity of 50%. You can overrride default color and opacity values via 'style' attribute. --}}<span class="overlay-dark" style="opacity: .45;"></span>
                  <div class="promo-box-content text-center padding-top-3x padding-bottom-3x">
                    <h4 class="text-light text-thin text-shadow">28 discounts</h4>
                    <a class="btn btn-sm btn-primary" href="{{ route('passes.show', 'yosemite') }}">
                      <h3 class="text-bold text-light text-shadow">Yosemite</h3>
                    </a>
                  </div>
                </section>
              </li>
            </ul>
          </li>
          <li class="{{ Request::is('how*') ? 'active' : '' }}"><a href="/how"><span>How does it work?</span></a></li>
          <li class="{{ Request::is('foundation*') ? 'active' : '' }}"><a href="/foundation"><span>100% to Kids</span></a></li>
        </ul>
      </nav>
      {{-- Toolbar --}}
      <div class="toolbar">
        <div class="inner">
          <div class="tools">
            {{-- <div class="search"><i class="icon-search"></i></div> --}}
            <div class="account"><a href="{{ route('member.show', Auth::user()) }}"></a><i class="icon-head"></i>
              <ul class="toolbar-dropdown">
                @if (Auth::user())
                  <li class="sub-menu-user">
                    <div class="user-ava">
                      <img src="/img/account/user-ava-sm.jpg" alt="{{ (!is_null(Auth::user()->firstname)) ? Auth::user()->firstname : null }} {{ (!is_null(Auth::user()->lastname)) ? Auth::user()->lastname : null }}">
                    </div>
                    <div class="user-info">
                      <h6 class="user-name">{{ (!is_null(Auth::user()->firstname)) ? Auth::user()->firstname : null }} {{ (!is_null(Auth::user()->lastname)) ? Auth::user()->lastname : null }}</h6><span class="text-xs text-muted">{{ (!is_null(Auth::user()->created_at)) ? Auth::user()->created_at->format('F j, Y') : null }}</span>
                    </div>
                  </li>
                  <li><a href="{{ route('member.show', Auth::user()) }}">My Passes <span class="badge badge-primary badge-pill">2</span></a></li>
                  <li><a href="{{ route('member.edit', Auth::user()) }}">My Profile</a></li>
                  <li class="sub-menu-separator"></li>
                  <li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i class="icon-unlock"></i>Logout</a></li>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                  @else
                    <li><a href="{{ route('login') }}">Login</a></li>
                  @endif
              </ul>
            </div>
            <div class="cart">
              @if (Auth::user())
                <a href="/checkout/payment"></a>
              @else
                <a href="/checkout"></a>
              @endif
              <i class="icon-bag"></i>
              <span id="count" class="count">2</span>
              <span class="subtotal">$<span class="totalDue">52</span></span>
              <div class="toolbar-dropdown">
                <div class="dropdown-product-item passid-1"><span class="dropdown-product-remove" data-passid="1"><i class="icon-cross"></i></span><a class="dropdown-product-thumb" href="{{ route('passes.show', 'yellowstone') }}"><img src="/img/destinations/yellowstone-300x300.jpg" alt="Product"></a>
                  <div class="dropdown-product-info"><a class="dropdown-product-title" href="{{ route('passes.show', 'yellowstone') }}">Yellowstone</a><span class="dropdown-product-details">$26</span></div>
                </div>
                <div class="dropdown-product-item passid-2"><span class="dropdown-product-remove" data-passid="2"><i class="icon-cross"></i></span><a class="dropdown-product-thumb" href="{{ route('passes.show', 'yosemite') }}"><img src="/img/destinations/yosemite-300x300.jpg" alt="Product"></a>
                  <div class="dropdown-product-info"><a class="dropdown-product-title" href="{{ route('passes.show', 'yosemite') }}">Yosemite</a><span class="dropdown-product-details">$26</span></div>
                </div>
                <div class="dropdown-product-item donate4" id="dropdown-donate4"><span class="dropdown-product-remove" data-donate4="1"><i class="icon-cross"></i></span><a class="dropdown-product-thumb" href="/foundation"><img src="/img/foundation/everykidinapark-215x215.png" alt="Product"></a>
                  <div class="dropdown-product-info"><a class="dropdown-product-title" href="/foundation">Donation</a><span class="dropdown-product-details">$4</span></div>
                </div>
                <div class="toolbar-dropdown-group">
                  <div class="column"><span class="text-lg">Total:</span></div>
                  <div class="column text-right text-lg text-medium">$<span class="totalDue">52</span></div>
                </div>
                <div class="toolbar-dropdown-group">
                  {{-- <div class="column"><a class="btn btn-sm btn-block btn-secondary" href="/checkout">View Cart</a></div> --}}
                  @if (Auth::user())
                    <div class="column"><a class="btn btn-sm btn-block btn-primary" href="{{ route('checkout.payment') }}">Checkout</a></div>
                  @else
                    <div class="column"><a class="btn btn-sm btn-block btn-primary" href="{{ route('checkout.index') }}">Checkout</a></div>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
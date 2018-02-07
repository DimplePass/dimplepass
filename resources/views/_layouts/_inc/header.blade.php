    {{-- Off-Canvas Category Menu --}}
    <div class="offcanvas-container" id="shop-categories">
      <a class="account-link" href="/member">
        <div class="user-ava"><img src="/img/account/user-ava-md.jpg" alt="Happy Golucky">
        </div>
        <div class="user-info">
          <h6 class="user-name">Happy Golucky</h6><span class="text-sm text-white opacity-60">290 Reward points</span>
        </div>
      </a>
      <nav class="offcanvas-menu">
        <ul class="menu">
          <li class="active"><span><a href="/"><span>Home</span></a></span></li>
          <li class="has-children"><span><a href="/parks"><span>Destinations</span></a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li><a href="/parks/glacier">Glacier</a></li>
              <li><a href="/parks/comingsoon">Grand Teton</a></li>
              <li><a href="/parks/comingsoon">Great Smoky Mountains</a></li>
              <li><a href="/parks/yellowstone">Yellowstone</a></li>
              <li><a href="/parks/yosemite">Yosemite</a></li>
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
      <a class="account-link" href="/member">
        <div class="user-ava"><img src="/img/account/user-ava-md.jpg" alt="Happy Golucky">
        </div>
        <div class="user-info">
          <h6 class="user-name">Happy Golucky</h6><span class="text-sm text-white opacity-60">290 Reward points</span>
        </div>
      </a>
      <nav class="offcanvas-menu">
        <ul class="menu">
          <li class="active"><span><a href="/"><span>Home</span></a></span></li>
          <li class="has-children"><span><a href="#"><span>Destinations</span></a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li><a href="/parks/glacier">Glacier</a></li>
              <li><a href="/parks/grandcanyon">Grand Canyon</a></li>
              <li><a href="/parks/yellowstone">Yellowstone</a></li>
              <li><a href="/parks/yosemite">Yosemite</a></li>
              <li><a href="/parks/zion">Zion</a></li>
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
        <input type="text" name="site_search" placeholder="Type to search...">
        <div class="search-tools"><span class="clear-search">Clear</span><span class="close-search"><i class="icon-cross"></i></span></div>
      </form>
      <div class="site-branding">
        <div class="inner">
          {{-- Off-Canvas Toggle (#shop-categories) --}}<a class="offcanvas-toggle cats-toggle" href="#shop-categories" data-toggle="offcanvas"></a>
          {{-- Off-Canvas Toggle (#mobile-menu) --}}<a class="offcanvas-toggle menu-toggle" href="#mobile-menu" data-toggle="offcanvas"></a>
          {{-- Site Logo --}}<a class="site-logo" href="/"><img src="/img/logo/logo-dimple.png" alt="Dimple Pass"></a>
        </div>
      </div>
      {{-- Main Navigation --}}
      <nav class="site-menu">
        <ul>
          <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/"><span>Home</span></a></li>
          <li class="has-megamenu {{ Request::is('parks*') ? 'active' : '' }}"><a href="/parks"><span>Destinations</span></a>
            <ul class="mega-menu">
              <li>
                <section class="promo-box" style="background-image: url(/img/destinations/glacier-300x300.jpg);">
                  {{-- Choose between .overlay-dark (#000) or .overlay-light (#fff) with default opacity of 50%. You can overrride default color and opacity values via 'style' attribute. --}}<span class="overlay-dark" style="opacity: .45;"></span>
                  <div class="promo-box-content text-center padding-top-3x padding-bottom-3x">
                    <h4 class="text-light text-thin text-shadow">save up to $346</h4>
                    <a class="btn btn-sm btn-primary" href="/parks/glacier">
                      <h3 class="text-bold text-light text-shadow">Glacier</h3>
                    </a>
                  </div>
                </section>
              </li>
              <li><span class="mega-menu-title">Top National Parks</span>
                <ul class="sub-menu">
                  <li><a href="/parks/glacier">Glacier</a></li>
                  <li><a href="/parks/grandcanyon">Grand Canyon</a></li>
                  <li><a href="/parks/yellowstone">Yellowstone</a></li>
                  <li><a href="/parks/yosemite">Yosemite</a></li>
                  <li><a href="/parks/zion">Zion</a></li>
                  <li><a href="/parks"><span class="dp-primary"><strong>VIEW ALL</strong> <i class="icon-arrow-right"></i></span></a></li>
                </ul>
              </li>
              <li>
                <section class="promo-box" style="background-image: url(/img/destinations/yellowstone-300x300.jpg);"><span class="overlay-dark" style="opacity: .4;"></span>
                  <div class="promo-box-content text-center padding-top-3x padding-bottom-3x">
                    <h4 class="text-light text-thin text-shadow">save up to $289</h4>
                    <a class="btn btn-sm btn-primary" href="/parks/yellowstone">
                      <h3 class="text-bold text-light text-shadow">Yellowstone</h3>
                    </a>
                  </div>
                </section>
              </li>
              <li>
                <section class="promo-box" style="background-image: url(/img/destinations/yosemite-300x300.jpg);">
                  {{-- Choose between .overlay-dark (#000) or .overlay-light (#fff) with default opacity of 50%. You can overrride default color and opacity values via 'style' attribute. --}}<span class="overlay-dark" style="opacity: .45;"></span>
                  <div class="promo-box-content text-center padding-top-3x padding-bottom-3x">
                    <h4 class="text-light text-thin text-shadow">save up to $294</h4>
                    <a class="btn btn-sm btn-primary" href="/parks/yosemite">
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
            <div class="search"><i class="icon-search"></i></div>
            <div class="account"><a href="/member"></a><i class="icon-head"></i>
              <ul class="toolbar-dropdown">
                <li class="sub-menu-user">
                  <div class="user-ava"><img src="/img/account/user-ava-sm.jpg" alt="Happy Golucky">
                  </div>
                  <div class="user-info">
                    <h6 class="user-name">Happy Golucky</h6><span class="text-xs text-muted">290 Reward points</span>
                  </div>
                </li>
                  <li><a href="/member">My Passes</a></li>
                  <li><a href="/member/edit">My Profile</a></li>
                <li class="sub-menu-separator"></li>
                <li><a href="#"> <i class="icon-unlock"></i>Logout</a></li>
              </ul>
            </div>
            <div class="cart">
              <a href="/checkout"></a>
              <i class="icon-bag"></i>
              <span class="count">2</span>
              <span class="subtotal">$<span class="totalDue">52</span></span>
              <div class="toolbar-dropdown">
                <div class="dropdown-product-item"><span class="dropdown-product-remove"><i class="icon-cross"></i></span><a class="dropdown-product-thumb" href="/parks/yellowstone"><img src="/img/destinations/yellowstone-300x300.jpg" alt="Product"></a>
                  <div class="dropdown-product-info"><a class="dropdown-product-title" href="/parks/yellowstone">Yellowstone</a><span class="dropdown-product-details">1 x $26</span></div>
                </div>
                <div class="dropdown-product-item"><span class="dropdown-product-remove"><i class="icon-cross"></i></span><a class="dropdown-product-thumb" href="/parks/yosemite"><img src="/img/destinations/yosemite-300x300.jpg" alt="Product"></a>
                  <div class="dropdown-product-info"><a class="dropdown-product-title" href="/parks/yosemite">Yosemite</a><span class="dropdown-product-details">1 x $26</span></div>
                </div>
                <div class="toolbar-dropdown-group">
                  <div class="column"><span class="text-lg">Total:</span></div>
                  <div class="column text-right"><span class="text-lg text-medium">$52</span></div>
                </div>
                <div class="toolbar-dropdown-group">
                  {{-- <div class="column"><a class="btn btn-sm btn-block btn-secondary" href="/checkout">View Cart</a></div> --}}
                  <div class="column"><a class="btn btn-sm btn-block btn-primary" href="/checkout">Checkout</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
<nav class="list-group sticky">
  <a class="list-group-item {{ Request::is('vendor') ? 'active' : '' }}" href="/vendor">Why be a vendor?</a>
  <a class="list-group-item {{ Request::is('vendor/promise') ? 'active' : '' }}" href="/vendor/promise">The Vendor Promise</a>
  <a class="list-group-item {{ Request::is('vendor/terms') ? 'active' : '' }}" href="/vendor/terms">Terms &amp; Conditions</a>
  <a class="list-group-item {{ Request::is('vendor/application') ? 'active' : '' }}" class="" href="/vendor/application">Vendor Application</a>
</nav>
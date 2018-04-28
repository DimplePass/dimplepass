<!DOCTYPE html>
<html lang="en">
    
    @include('_layouts._inc.head')

    <body>

      <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5SB6P5L"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->

      {{-- Yield Body --}}
      @yield('body')

	    {{-- JavaScript (jQuery) libraries, and plugins --}}
			<script src="{{ mix('/js/app.js') }}" type="text/javascript"></script>

      {{-- Page Specific JS --}}
      @yield('scripts')

		</div>

    </body>

</html>

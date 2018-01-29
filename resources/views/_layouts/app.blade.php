<!DOCTYPE html>
<html lang="en">
    
    @include('_layouts._inc.head')

    <body>

      {{-- Yield Body --}}
      @yield('body')

    	{{-- @TODO-BJ - Get Webpack working correctly so that we can remove these and use the Laravel Mix asset. --}}
			{{-- JavaScript (jQuery) libraries, plugins and custom scripts --}}
	    <script src="js/vendor.min.js"></script>
	    <script src="js/scripts.min.js"></script>

	    {{-- JavaScript (jQuery) libraries, and plugins --}}
			{{-- <script src="{{ mix('/js/app.js') }}" type="text/javascript"></script> --}}
      {{-- Page Specific JS --}}
      @yield('scripts')

    </body>

</html>

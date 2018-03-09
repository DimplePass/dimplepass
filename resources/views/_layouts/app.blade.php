<!DOCTYPE html>
<html lang="en">
    
    @include('_layouts._inc.head')

    <body>

      {{-- Yield Body --}}
      @yield('body')

	    {{-- JavaScript (jQuery) libraries, and plugins --}}
			<script src="{{ mix('/js/app.js') }}" type="text/javascript"></script>

      {{-- Page Specific JS --}}
      @yield('scripts')

		</div>

    </body>

</html>

<!DOCTYPE html>
<html lang="en">
    
    @include('_layouts._inc.head')

    <body>

        {{-- Yield Body --}}
        @yield('body')

        {{-- Javascript --}}
        {{-- @TODO-BJ - Move JS to use webpack (mix.js), rather than Vanilla JS
        https://laravel.com/docs/5.4/mix#working-with-scripts --}}
        {{-- <script src="{{ mix('/js/app.js') }}"></script> --}}

		    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
		    <script src="js/vendor.min.js"></script>
		    <script src="js/scripts.min.js"></script>

        {{-- Page Specific JS --}}
        @yield('scripts')

    </body>

</html>

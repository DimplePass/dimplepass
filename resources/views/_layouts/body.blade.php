@extends('_layouts.app')

@section('body')

	{{-- Header --}}
	@include('_layouts._inc.header')

	{{-- Off-Canvas Wrapper --}}
	<div class="offcanvas-wrapper">

		{{-- Content --}}
		@yield('content')

		{{-- Footer --}}
		@include('_layouts._inc.footer')

	</div>

	{{-- Back To Top Button --}}
	{{-- <a class="scroll-to-top-btn" href="#"><i class="icon-arrow-up"></i></a> --}}

	{{-- Backdrop --}}
	<div class="site-backdrop"></div>

	{{-- 100% to Kids Modal --}}
	<div class="modal fade" id="modalDonate" tabindex="-1" role="dialog">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h3 class="modal-title">Send $4 to programs that Get Kids Outdoors.</h3>
	        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	      </div>
	      <div class="modal-body">
					<img class="w-270 rounded mr-4 hidden-sm-down float-left" src="/img/features/kid-logfly-540x540.jpg" alt="100% Profits to Get Kids Outdoors">
					<h4 class="mb-3">Yes, we have to pay the bills, yet we do that modestly and then give 100% of our profits to get kids outdoors.</h4>
					<p>When you select '<span class="dp-warning">Add $4 to get kids outdoors</span>', four dollars is sent directly to these programs on top of our annual profit donation.</p>
					<p>Children have less and less opportunity to get outside and experience the growth, independence and discovery that occurs in the great outdoors. Thank you for your contribution to a future with more 'green time' and less 'screen time'.</p>
					<h5><a href="{{ route('foundation') }}" target="_blank">Learn More <i class="fa fa-arrow-right"></i></a></h5>
	      </div>
	    </div>
	  </div>
	</div>

@stop
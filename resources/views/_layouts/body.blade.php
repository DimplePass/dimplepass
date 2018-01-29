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
	<a class="scroll-to-top-btn" href="#"><i class="icon-arrow-up"></i></a>
	{{-- Backdrop --}}
	<div class="site-backdrop"></div>

@stop
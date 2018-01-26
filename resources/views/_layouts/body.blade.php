@extends('_layouts.app')

@section('body')

	{{-- Header --}}
	@include('_layouts._inc.header')

	{{-- Nav Bar --}}
	{{-- @include('_layouts._inc.navbar') --}}

	{{-- Content --}}
	@yield('content')

	{{-- Footer --}}
	{{-- @include('_layouts._inc.footer') --}}

@stop
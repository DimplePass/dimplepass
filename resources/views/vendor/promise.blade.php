@extends('_layouts.body')

@section('meta-page')
  <title>Vendor Promise</title>
  <meta name="description" content="Meta Description Here" />
@stop

@section('meta-og')
  <meta property="og:type" content="article"/>
  <meta property="og:title" content="OG Title Here"/>
  <meta property="og:url" content="{{ Request::url() }}"/>
  <meta property="og:image" content="OG Image URL Here."/>
  <meta property="og:site_name" content="Dimple Pass"/>
  <meta property="og:description" content="OG Description Here."/>
  <meta property="og:locale" content="en_US"/>
@stop

@section('logo-tag')
The Vendor Promise
@stop

@section('content')

{{-- Main Slider --}}
<section class="hero-slider" style="background-image: url(/img/destinations/grandcanyon-1920x580.jpg);">
    <div class="item">
      <div class="container padding-top-10x">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-12 padding-bottom-2x text-md-left text-center">
            <div class="from-bottom">
              <div class="h1 mb-2 pt-1"><strong class="dp-white">@yield('logo-tag')</strong></div>
              <div class="h4 mt-0 mb-4 gray-lighter">A commitment to Dimple travelers.</div>
          </div>
        </div>
      </div>
    </div>
</section>

@stop

@section('scripts')
<script>

</script>
@stop
@extends('_layouts.body')

@section('meta-page')
  <title>The Dimple Pass | Save Money on National Park Travel</title>
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
Contact Us
@stop

@section('content')

<!-- Page Title-->
<div class="page-title">
  <div class="container">
    <div class="column">
      <h1>Contact Us</h1>
    </div>
    <div class="column">
      <ul class="breadcrumbs">
        <li><a href="/">Home</a>
        </li>
        <li class="separator">&nbsp;</li>
        <li>Contact Us</li>
      </ul>
    </div>
  </div>
</div>
<!-- Page Content-->
<div class="container padding-bottom-2x mb-2">
  <div class="row padding-bottom-2x">
    <div class="col-md-5">
      <img class="d-block w-270 mx-auto rounded mb-3" src="/img/holder-540x540.jpg" alt="">
    </div>
    <div class="col-md-7 text-md-left text-center">
      <div class="mt-30 hidden-md-up"></div>
      <h2>A little heading here</h2>
      <p>Bacon ipsum dolor amet hamburger pork loin kevin t-bone sirloin jerky cupim turkey short ribs brisket flank pastrami doner corned beef alcatra. Strip steak turducken biltong, landjaeger cow short ribs shank spare ribs jowl pork belly t-bone. Biltong shank capicola, doner ribeye pork chop venison bacon ham corned beef drumstick short ribs. Flank andouille pig meatball prosciutto picanha. Ball tip prosciutto strip steak shankle, tongue filet mignon ribeye pork shoulder venison chuck pork belly picanha.</p>
      <div class="mb-4 mt-4"><hr></div>
      <h3>Some more important stuff.</h3>
      <p>Chuck pork belly tri-tip turducken meatloaf, pig short ribs capicola jerky t-bone cow. Pork chop chuck jerky landjaeger venison cupim alcatra turkey ribeye tail ham hock buffalo tenderloin tongue. Cow filet mignon chicken, tri-tip swine meatloaf capicola pork loin kielbasa pork belly hamburger jowl fatback salami. Leberkas shank jowl, venison landjaeger jerky tri-tip.</p>
      <a class="btn btn-primary" href="/">Head on Home <i class="icon-arrow-right"></i></a>
    </div>
  </div>
</div>

@stop

@section('scripts')
<script>

</script>
@stop
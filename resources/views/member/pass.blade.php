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
My Yellowstone Park Pass
@stop

@section('content')

{{-- My Passes --}}
<div class="page-title">
  <div class="container">
    <div class="column">
      <h1>My Yellowstone Park Pass</h1>
    </div>
    <div class="column">
      <ul class="breadcrumbs">
        <li><a href="/">Home</a>
        </li>
        <li class="separator">&nbsp;</li>
        <li>My Yellowstone Park Pass</li>
      </ul>
    </div>
  </div>
</div>

{{-- Page Content --}}
<div class="container padding-bottom-2x mb-2">
  <div class="row padding-bottom-2x">
    <div class="col-md-5">
      <img class="d-block w-270 mx-auto rounded mb-3" src="/img/holder-540x540.jpg" alt="">
    </div>
    <div class="col-md-7 text-md-left text-center">
      <div class="mt-30 hidden-md-up"></div>
      <h2>Details of a currently active pass.</h2>
      <h3>Bacon ipsum dolor amet hamburger pork loin kevin t-bone sirloin jerky cupim turkey short ribs brisket flank pastrami doner.</h3>
      <div class="mb-4 mt-4"><hr></div>
      <h3>Some more important stuff.</h3>
      <p>Chuck pork belly tri-tip turducken meatloaf, pig short ribs capicola jerky t-bone cow. Pork chop chuck jerky landjaeger venison cupim alcatra turkey ribeye tail ham hock buffalo tenderloin tongue. Cow filet mignon chicken, tri-tip swine meatloaf capicola pork loin kielbasa pork belly hamburger jowl fatback salami. Leberkas shank jowl, venison landjaeger jerky tri-tip.</p>
    </div>
  </div>
</div>

@stop

@section('scripts')
<script>

</script>
@stop
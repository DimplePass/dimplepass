@extends('_layouts.body')

@section('meta-page')
  <title>Dimple Pass - FAQs</title>
  <meta name="description" content="One Pass. Multiple Discounts. Save money and don't miss a thing during your National Park Vacation." />
  <meta name="keywords" content="national parks, travel, discounts, coupons, attractions, activities, things to do, dimple pass">
@stop

@section('meta-og')
  <meta property="og:type" content="article"/>
  <meta property="og:title" content="Dimple Pass - FAQs"/>
  <meta property="og:url" content="{{ Request::url() }}"/>
  <meta property="og:image" content="{{ url('/img/destinations/yellowstone-1200x630.jpg') }}"/>
  <meta property="og:site_name" content="Dimple Pass"/>
  <meta property="og:description" content="One Pass. Multiple Discounts. Save money and don't miss a thing during your National Park Vacation."/>
  <meta property="og:locale" content="en_US"/>
@stop

@section('content')

{{-- Hero Slider --}}
<section class="hero-slider mb-6" style="background-image: url(/img/destinations/yellowstone-1920x580.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-lg-8 padding-bottom-2x text-md-left text-center hero-overlay">
        <div class="hero-text">
          <h1 class="mb-2 white-color">Frequently Asked Questions</h1>
          <h2 class="mt-0 mb-2 white-color"><strong>If you can't find the answer, just ask.</strong></h2>               
        </div>
    </div>
  </div>
</section>

{{-- Page Content --}}
<div class="container padding-bottom-3x">
  <div class="row">
    {{-- Side Images --}}
    <div class="col-md-4">
      <img class="d-block w-270 mx-auto rounded mb-3 hidden-sm-down" src="/img/features/yellowstone-bison-540x540.jpg" alt="Yellowstone Bison">
    </div>
    {{-- Content --}}
    <div class="col-md-8">
      <div class="mt-30 hidden-md-up"></div>
      <h2>The Most Popular Questions</h2>
      <h3>We will be adding to this as we learn more and more.</h3>
      <div class="mb-4 mt-4"><hr></div>
      <div class="card">
        <div class="card-header">
          <h6>How is the Dimple Pass delivered?</h6>
        </div>
        <div class="card-body">
          The pass will be available immediately after your purchase.  It will appear on your Member page and you can view the details of it by clicking on the pass.  There will also be a link to a PDF version fo the pass in case you want to print it out and take it with you.  We strongly encourage this as sometimes you may not be connected during your travels.  <a href="{{ route('utility.how') }}">Read more about how it works</a>.
        </div>
      </div>
      <div class="card mt-3">
        <div class="card-header">
          <h6>Should I make reservations ahead of time?</h6>
        </div>
         <div class="card-body">
            We recommend making reservations ahead of time for any offer that is flagged as "reservation required".  Booking early is always a good thing and will give you the best chance of the dates and times that work best for you.  Please note that some of the smaller provider do book up completely during peak travel seasons.
        </div>
      </div>
      <div class="card mt-3">
        <div class="card-header">
          <h6>What if a vendor does not accept my Dimple Pass?</h6>
        </div>
         <div class="card-body">
            Well, we haven't had that happen yet.  Yes, there will be the occassional instance where a new staff member may not be familiar with the Dimple Pass.  However, it usually just takes them asking a manager about it to sort things out. However, if you encounter a situation where you are unable to redeem your pass, please let us know as soon as possible.  We want to be able to contact the vendor quickly to curb any further misunderstandings.
        </div>
      </div>
      <div class="card mt-3">
        <div class="card-header">
          <h6>Are there limits to the number of people that can use the Dimple Pass?</h6>
        </div>
         <div class="card-body">
            Each vendor will set limits on the total number of people that can use the discount.  This will vary, and in some cases you may not be able to apply the discount to your entire party.  Yet, we thought this was better than having each person need to buy a Dimple Pass.  Bigger savings to you!
        </div>
      </div>
      <div class="card mt-3">
        <div class="card-header">
          <h6>Are you adding new destinations?</h6>
        </div>
         <div class="card-body">
            We will likely be adding new destinations for 2019.  At this time, we wanted to keep things manageable as we continue to learn what is valuable and what can be streamlined moving forward.  It's our first year and we are expecting some kinks!
        </div>
      </div>
      <div class="card mt-3">
        <div class="card-header">
          <h6>Do you offer refunds for cancelled trips?</h6>
        </div>
         <div class="card-body">
            We actually offer full refunds with no questions asked.  As long as it is within 30 days of you returning from travel, we will promptly process your refund.  <a href="{{ route('utility.guarantee') }}">Read more about our Money Back Guarantee here.</a>
        </div>
      </div>
      
      <h3 class="padding-top-2x">Haven't found the answer? Ask us.</h3>
      <p class="text-muted mb-30">We normally respond within 1 business day. Most popular questions will appear on this page.</p>
      <form class="row" method="post">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="help_name">Your Name</label>
            <input class="form-control form-control-rounded" type="text" id="help_name" required>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="help_email">Your Email</label>
            <input class="form-control form-control-rounded" type="email" id="help_email" required>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="help_subject">Subject</label>
            <input class="form-control form-control-rounded" type="text" id="help_subject" required>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group{{ $errors->has('help_type') ? ' has-error' : '' }}">
              {!! Form::label('help_type', 'Type') !!}
              {!! Form::select('help_type', $helpTypes, null, ['id' => 'help_type', 'class' => 'form-control form-control-rounded', 'required' => 'required', 'placeholder' => '-- Please choose --']) !!}
              <small class="text-danger">{{ $errors->first('help_type') }}</small>
          </div>
        </div>
        <div class="col-12">
          <div class="form-group">
            <label for="help_question">Question </label>
            <textarea class="form-control form-control-rounded" id="help_question" rows="8" required></textarea>
          </div>
        </div>
        <div class="col-12 text-right">
          <button class="btn btn-primary btn-rounded" type="submit">Submit Question</button>
        </div>
      </form>
    </div>
  </div>
</div>

@stop

@section('scripts')
<script>

</script>
@stop
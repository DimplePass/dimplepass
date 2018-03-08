@extends('_layouts.body')

@section('meta-page')
  <title>Dimple Pass - National Parks Discount Cards</title>
  <meta name="description" content="One Pass. Multiple Discounts. Save money and don't miss a thing during your National Park Vacation." />
  <meta name="keywords" content="national parks, travel, discounts, coupons, attractions, activities, things to do, dimple pass">
@stop

@section('meta-og')
  <meta property="og:type" content="article"/>
  <meta property="og:title" content="Dimple Pass - National Parks Discount Cards"/>
  <meta property="og:url" content="{{ Request::url() }}"/>
  <meta property="og:image" content="{{ url('/img/destinations/yellowstone-1200x630.jpg') }}"/>
  <meta property="og:site_name" content="Dimple Pass"/>
  <meta property="og:description" content="One Pass. Multiple Discounts. Save money and don't miss a thing during your National Park Vacation."/>
  <meta property="og:locale" content="en_US"/>
@stop

@section('content')

{{-- Hero Slider --}}
<section class="hero-slider" style="background-image: url(/img/foundation/kidsoutdoors-1920x580.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-lg-8 padding-bottom-2x text-md-left text-center hero-overlay">
        <div class="hero-text">
          <h1 class="mb-2 white-color">100 Profits to Kids</h1>
          <h2 class="mt-0 mb-2 white-color"><strong>We donate 100% of our Profits to Get Kids Outdoors</strong></h2>               
        </div>
    </div>
  </div>
</section>

{{-- Page Content --}}
<div class="container padding-bottom-2x mb-2 mt-5">
  <div class="row padding-bottom-2x">
    <div class="col-md-4 text-center">
      <aside class="sticky">
        <img class="d-block w-270 mx-auto rounded mb-5" src="/img/foundation/everykidinapark.png" alt="">
        <h2><a href="https://www.nationalparks.org/our-work/campaigns-initiatives/open-outdoors-kids" target="_blank" class="btn btn-primary btn-lg">Learn More About It <i class="icon-arrow-right"></i></a></h2>
      </aside> 
    </div>
    <div class="col-md-8 text-md-left text-center">
      <div class="mt-30 hidden-md-up"></div>

      <h2>Dimple Pass commits 100% of our profits to get kids outdoors.</h2>
      <p>Yes, we have to pay the bills, yet we do that modestly and then give 100% of our profits to get kids outdoors.  Our founders made a life change after the birth of their first child to start Dimple Pass.  There is nothing like seeing a child smile while discovering themselves as a part of their natural environment.  We've teamed up with the National Park Foundation and the Open Outdoors for Kids program in order to create more dimples out there.</p>
      
      <blockquote class="my-5">
        Open OutDoors for Kids creates pathways for kids to enjoy, understand and connect with nature in exciting ways by facilitating outdoor activity, experiential learning, and cultural heritage exercises.
      </blockquote>

      <p>Open OutDoors for Kids is an initiative from the National Park Foundation to connect more kids to their national parks through fun and engaging activities. Children today are more disconnected from their natural and cultural heritage than ever before. Open OutDoors for Kids is changing that—building on a child’s innate wonder and curiosity about the natural world.</p>
      <p>National parks are gateways to self-discovery and learning and Open OutDoors for Kids is making sure all kids from across the country get the chance to experience them. Learn more about NPF's work with the Every Kid in a Park initiative, to see how you and your family can enjoy our national parks.</p>

      <hr>

      <h3>Overcoming Obstacles</h3>
      <p>Research demonstrates that kids who spend time outdoors are healthier and do better in school. Kids who have opportunities for hands-on learning outdoors also demonstrate more interest in and are more proficient in science. Similarly, a young person's understanding of history improves after visiting sites of cultural significance.</p>
      <p>Yet with cutbacks in school funding for field trips and other barriers to access, kids today have fewer opportunities for experiential learning. At the same time, we are witnessing an epidemic of inactivity among children as they spend more time engaged in "screen time" as opposed to "green time," resulting in rising rates of obesity and other issues. Most at risk are children from underserved, urban communities.</p>

      <hr>

      <h3>Providing Opportunities</h3>
      <p>The National Park Foundation's Open Outdoors for Kids Initiative introduces and exposes kids — all kids — to experiential, outdoor experiences that promote physical and emotional health, civic engagement and long-term appreciation for nature. Using the spectacular and unparalleled resources of our nation's more than 400 national parks, the program's goal is to connect more children to their culture and heritage, enhance hands-on learning opportunities and deepen connections to the natural world.</p>

      <h5>Through focused programming in and out of parks, Open Outdoors for Kids addresses the following:</h5>
      <ul>
        <li><strong>ACCESS:</strong> Providing transportation, programming and free entry to the parks for children and teachers to experience hands-on, immersive learning.</li>
        <li><strong>RELEVANCY:</strong> Connecting kids and families to the parks through programs that make people's lives better. We establish emotional relevancy of the parks through cultural programs and encourage active, healthy lifestyles through recreational and restoration activities.</li>
        <li><strong>EDUCATION:</strong> Establish "in-park" opportunities for children to learn in our national parks, the world's largest outdoor classrooms. Unmatched as learning environments and living laboratories, national parks offer children, families and teachers a unique gateway to experience nature, history and culture, to learn about biodiversity and the environment, and to engage with each other in the great outdoors.</li>
      </ul>

      <hr>

      <h3>What does it mean to Open Outdoors for Kids?</h3>
      <ul>
        <li>It means creating pathways for kids to enjoy, understand and connect to nature, history and culture in ways that they might never have experienced otherwise.</li>
        <li>It means sending a child to a day camp where she’ll discover the joys of hiking Old Rag in Shenandoah National Park.</li>
        <li>It means training a science teacher in the Ozark National Scenic Riverways to bring water conservation to life back in the classroom.</li>
        <li>It means transporting a classroom of kids to the Charles Young Buffalo Soldiers National Monument, or the Santa Fe National Historical Trail, for a live, on-site history lesson.</li>
      </ul>

      <h4>Each door opened represents another kid newly connected to the outdoors, its majesty and history, and all of its possibilities.</h4>

    </div>
  </div>
</div>

@stop

@section('scripts')
<script>

</script>
@stop
{{-- Town Filter --}}
<section class="widget hidden-sm-down" id="filters">
  <h3 class="widget-title">Filter by Location</h3>
  @foreach ($towns as $t)
    <div class="custom-control custom-checkbox">
      <input class="custom-control-input" type="checkbox" id="{{ $t }}" value="{{ $t }}" onClick="ga('send', 'event', 'Filter-Town', '{{ Request::path() }}', '{{ $t }}');">
      <label class="custom-control-label" for="{{ $t }}">{{ $t }} <span class="text-muted">(3)</span></label>
    </div>
  @endforeach
</section>
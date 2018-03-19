{{-- Town Filter --}}
<section class="widget hidden-sm-down" id="filters">
  <h3 class="widget-title">Filter by Location</h3>
  @foreach ($towns as $k => $v)
    <div class="custom-control custom-checkbox">
      <input class="custom-control-input" type="checkbox" id="{{ $k }}" value="{{ str_slug("$k", "-") }}" onClick="ga('send', 'event', 'Filter-Town', '{{ Request::path() }}', '{{ $k }}');">
      <label class="custom-control-label" for="{{ $k }}">{{ $k }} <span class="text-muted">({{ $v }})</span></label>
    </div>
  @endforeach
</section>
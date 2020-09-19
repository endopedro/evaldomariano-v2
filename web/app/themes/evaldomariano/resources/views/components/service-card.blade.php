@php
  $featured_image = get_field('featured_image');
@endphp

<a href="{{ the_permalink() }}" class="service-card">
  <img class="service-card-image" src="{{ $featured_image }}" alt="">
  <h3 class="service-card-title">{{ the_title() }}</h3>
</a>

@php
  $icon = get_field('icon');
@endphp

<a href="{{ get_permalink() }}" class="service-item">
  <img src="{{ $icon }}" alt="" class="service-item-icon">
  <h5 class="service-item-title">{{ the_title() }}</h5>
</a>

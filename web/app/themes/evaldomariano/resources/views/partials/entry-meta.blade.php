@php
  $categories = get_the_category();
  $category = array_shift($categories);
  $date = get_the_date('j \d\e F \d\e Y');
  $author = get_the_author();
@endphp

<div class="entry-meta">
  <div class="item">
    <i class="fas fa-feather-alt"></i>
    <span class="name">{{ $author }}</span>
  </div>
  <div class="item">
    <i class="far fa-calendar-alt"></i>
    <span class="date">{{ $date }}</span>
  </div>
  <div class="item d-none d-md-block">
    @if (!empty( $categories))
      <i class="far fa-bookmark"></i>
      <a href="{{ get_category_link($category) }}" class="category">{{ $category->name }}</a>
    @endif
  </div>
</div>


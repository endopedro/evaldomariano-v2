<article @php post_class() @endphp>
  <div class="container">
    <h1 class="service-title">{!! get_the_title() !!}</h1>
    <div class="service-content">
      @php the_content() @endphp
    </div>
  </div>
</article>

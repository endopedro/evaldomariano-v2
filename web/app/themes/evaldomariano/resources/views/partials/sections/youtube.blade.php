@php
 $yt_video = get_field('highlighted_video');
@endphp
<section class="section section-youtube">
  <div class="container">

    <div class="section-title">
      <h2>Acompanhe meu canal no YouTube</h2>
    </div>

    <div class="youtube-video">
      {!! $yt_video['yt_video'] !!}
    </div>

  </div>
</section>

{{--@extends('layouts.app')--}}
@include('partials.head')
@include('partials.header')
{{--@include('partials.content-page')--}}

<div class="mt-40">
  
<article id="britt-post" @php(post_class()) >
    
    <?php 

    $images = get_field('gallery');
    $size = 'full'; // (thumbnail, medium, large, full or custom size)

    if( $images ): ?>
            <div class="mb-24 coolio">
            <?php foreach( $images as $image ): ?>
                
                  <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
              
            <?php endforeach; ?>
            </div>
        
    <?php endif; ?>
  <div class="entry-content">
    <h3 class="entry-title">{{ get_the_title() }}</h3>
    @include('partials/entry-meta')
    <div>test</div>
    @php(the_content())
  </div>
  {{--
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  @php(comments_template('/partials/comments.blade.php'))
  --}}
</article>
</div>

{{--
  Template Name: Press Template
--}}
@extends('layouts.app')
@include('partials.head')
@include('partials.header')

<?php /*
if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile;
else:
    
endif;
*/ ?>

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    {{--@include('partials.content-page')--}}
    <div class="row press-list-item press-item-1">
      <div class="press-item-content">
          <h3 class="press-title">Card title</h3>
          <h4 class="press-subtitle">Card subtitle</h4>
          <p class="press-text">You can use the cap image as an overlay for the body</p>
      </div>
    </div>
    <div class="row press-list-item press-item-2">
      <div class="press-item-content">
          <h3 class="press-title">Card title</h3>
          <h4 class="press-subtitle">Card subtitle</h4>
          <p class="press-text">You can use the cap image as an overlay for the body</p>
      </div>
    </div>
    <div class="row press-list-item press-item-3">
      <div class="press-item-content">
          <h3 class="press-title">Card title</h3>
          <h4 class="press-subtitle">Card subtitle</h4>
          <p class="press-text">You can use the cap image as an overlay for the body</p>
      </div>
    </div>
    <div class="row press-list-item press-item-4">
      <div class="press-item-content">
          <h3 class="press-title">Card title</h3>
          <h4 class="press-subtitle">Card subtitle</h4>
          <p class="press-text">You can use the cap image as an overlay for the body</p>
      </div>
    </div>
  @endwhile
@endsection
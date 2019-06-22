{{--
  Template Name: About Template
--}}
@extends('layouts.app')
@include('partials.head')
<div class="container">
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
    {{--@include('partials.page-header')--}}
    <div class="about-container page-content">
      <div class="about-content">@include('partials.content-page')</div>
      <div class="about-image-overlay">
        <div class="about-image" style="background-image:url({!! the_post_thumbnail_url() !!});"></div>
      </div>
    </div>
  @endwhile
@endsection
</div>
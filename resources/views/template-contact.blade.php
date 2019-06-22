{{--
  Template Name: Contact Template
--}}
@extends('layouts.app')
@include('partials.head')
<div class="container">
@include('partials.header')
@include('partials.content-page')

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
    <div class="contact-container page-container">
    @include('partials.content-page')
    </div>
  @endwhile
@endsection
</div>
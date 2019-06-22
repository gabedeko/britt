{{--
  Template Name: Porfolio Template
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
    @include('partials.content-page')
  @endwhile
@endsection


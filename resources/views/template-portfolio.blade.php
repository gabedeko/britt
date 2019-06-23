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
<div class="container">
  <div class="portfolio-item">
    <div  class="portfolio-overlay" style="background-image:url('https://previews.dropbox.com/p/thumb/AAd8Vv0NAVxFVMtfbAJFGyY0uU20m3q9ZQ50gYM-fY79asruU095VJ57QllqnW3skVPStV4W68J4ggSem9qAQdADt0aZManBe1WA_ZmZGZ_L2FzqelUb9uOxCN1IcStNhZPCqVU_W4F0Lv3Qk6W0qqNOGDyCnWm4yRVdaiQaQzVQwFxQFcolpHSbBm_2uh-SxVBVgp2KWe9mfFOOLeBUytVwEeHHyz04aOpi9ppHG7X9S7p1aMXkuWGJFukaCY8WfYbrnAvJsYiDgoVg7-TGjBe06B_QkMyhU_WfnX4lq8Yg7cXos5oQXC_Y9uxjLHLh9201l3W06z98rZnSGbDoZOx4/p.jpeg?fv_content=true&size_mode=5');">
      <div class="portfolio-box" >
        <div class="portfolio-box-content">
          <h2 class="portfolio-box-title">tincidunt leo condimentum</h2>
          <div class="portfolio-box-desc">
          Nulla varius libero non odio gravida, id sodales risus efficitur. 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
@endsection


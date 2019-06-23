{{--
  Template Name: Press Template
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
    @include('partials.page-header')
    {{--@include('partials.content-page')--}}
    
      <div class="press-item">
        <div  class="press-overlay" style="background-image:url('https://previews.dropbox.com/p/thumb/AAdfWAk-vCx8Nrw3p4Ng8e1K_H2ocGf4eCbL75hyTggyMtdYEF6JRSkoKJ_EvUaXyuS-J6k3zTfHGAG6El8Ar5o0U8IoHxqGagJ_ZCQARLwloMU3EVvIsqdDI-HJPs0IEPeQWbnh9EP8DHylAEhlq6N1YVFKF_Uf-QEa32nPWZQy19zAD01MwpUM8zgtwQdjCc6LDMdmKvRK1SH6-LQvyhyOVrxwqad5XX9Zb4HVAad6QuZzcXzNQdgPN_RJqSLnKLQp4jS8ZdOkba70u3LlYX3ZeNUFucdkgt5kJTCtMEa256IWO3jdtKPGt27xbdzBrOYNEf8G8sN2i_-L_ol7tRAk/p.jpeg?fv_content=true&size_mode=5');">
          <div class="press-box" >
            <a href="https://tribeza.com/treasure-hunter/" target="_blank" class="press-box-content">
              <h2 class="press-box-title">Tribeza</h2>
              <div class="press-box-desc">
              Treasure Hunter: Brittney Williams takes her eye for style to the round to antiques fair
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="press-item">
        <div  class="press-overlay" style="background-image:url('https://previews.dropbox.com/p/thumb/AAd8Vv0NAVxFVMtfbAJFGyY0uU20m3q9ZQ50gYM-fY79asruU095VJ57QllqnW3skVPStV4W68J4ggSem9qAQdADt0aZManBe1WA_ZmZGZ_L2FzqelUb9uOxCN1IcStNhZPCqVU_W4F0Lv3Qk6W0qqNOGDyCnWm4yRVdaiQaQzVQwFxQFcolpHSbBm_2uh-SxVBVgp2KWe9mfFOOLeBUytVwEeHHyz04aOpi9ppHG7X9S7p1aMXkuWGJFukaCY8WfYbrnAvJsYiDgoVg7-TGjBe06B_QkMyhU_WfnX4lq8Yg7cXos5oQXC_Y9uxjLHLh9201l3W06z98rZnSGbDoZOx4/p.jpeg?fv_content=true&size_mode=5');">
          <div class="press-box" >
            <a href="https://www.architecturaldigest.com/story/outdoor-voices-new-san-francisco-shop" target="_blank" class="press-box-content">
              <h2 class="press-box-title">Archectiectural Digest</h2>
              <div class="press-box-desc">
              Outdoor Voices' New San Francisco Shop Boasts a Tearoom, Waterfall, and More 
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  @endwhile
@endsection
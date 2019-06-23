<div class="card-columns">  
@while(have_posts()) @php(the_post())
        <a href="<?php echo get_permalink(); ?>" class="card britt-card">
            {!! the_post_thumbnail('full', array('class' => 'card-img-top')); !!}
            <div class="card-img-overlay">
                <div class="card-img-content">
                    <h3 class="card-title">{{ get_the_title() }}</h3>
                    <h4 class="card-subtitle"><?php the_field('location'); ?></h4>
                    <p class="card-text">
                        <?php 
                            $summary = get_field('description');
                            echo substr($summary, 0, 48); 
                        ?> ...</p>
                </div>
             </div>
        </a>
        @endwhile 
      <?php /*
      <div class="card britt-card">
      <img class="card-img-top" src="@asset('images/clarksaspen/MH_CLARKSASPEN_0034_FINAL.jpg')" alt="Card image top">
        <div class="card-img-overlay">
            <div class="card-img-content">
                <h3 class="card-title">Card title</h3>
                <h4 class="card-subtitle">Card subtitle</h4>
                <p class="card-text">You can use the cap image as an overlay for the body</p>
            </div>
        </div>
      </div>
      <div class="card britt-card">
      <img class="card-img-top" src="@asset('images/clarksaspen/MH_CLARKSASPEN_0123_FINAL.jpg')" alt="Card image top">
        <div class="card-img-overlay">
            <div class="card-img-content">
                <h3 class="card-title">Card title</h3>
                <h4 class="card-subtitle">Card subtitle</h4>
                <p class="card-text">You can use the cap image as an overlay for the body</p>
            </div>
        </div>
      </div>
      */ ?>
      
  </div>
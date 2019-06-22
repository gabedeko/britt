<?php /*<header class="banner">
  <div class="container">
    <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
*/ ?>


<header class="pen mt-24">
  <div class="pen__details">
    <h2><a class="brand title" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a></h2>
  </div>
  <div class="header-icons">
    {{--<img src="@asset('images/icons/instagram.svg')" />
    <img src="@asset('images/icons/twitter.svg')" />
    <img src="@asset('images/icons/email-outline.svg')" />--}}
    
    <nav data-action="expand" class="britt-header-nav">
    <div id="nav-icon3">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
		<div class="britt-header-nav-container">
			{{--<a href="#">Portfolio</a>
			<a href="#">About</a>
			<a href="#">Awards/Press</a>
      <a href="#">Contact</a>--}}
      {!! britt_nav('main-menu') !!}
		</div>
	</nav>
  </div>
  
</header>



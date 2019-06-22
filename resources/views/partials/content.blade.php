<article @php(post_class())>
  <header>
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
    @include('partials/entry-meta')
  </header>
  <p>@php(the_content())</p>
  <div class="entry-summary">
    @php(the_excerpt())
  </div>
</article>

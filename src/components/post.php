<?hh

final class :hp:post extends :x:element {
  use XHPHelpers;

  protected function render() {
    $post = <article id="post-{get_the_ID()}" class={get_post_class()}/>;

    if ( is_sticky() && is_home() && ! is_paged() ) :
      $post->appendChild(<div class="featured-post">
        {__( 'Featured post', 'hackpress' )}
      </div>;
    endif;

    $post->appendChild(<hp:entryHeader>
      <hp:entryTitle/>
      <hp:entryThumbnail/>
      <hp:commentsLink/>
    </hp:entryHeader>);

    if ( is_search() ) : // Only display Excerpts for Search
      $post->appendChild(<hp:entryExcerpt/>);
    else :
      $post->appendChild(<hp:entryContent/>);
    endif;

    $post->appendChild(<hp:entryMeta/>);

    return $post;
  }
}

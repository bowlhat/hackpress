<?hh
final class :hp:authorBio extends :x:element {
  use XHPHelpers;
  
  protected function render() {
    if ( is_singular() && get_the_author_meta( 'description' ) && is_multi_author() ) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries.
      $author_bio_avatar_size = apply_filters( 'twentytwelve_author_bio_avatar_size', 68 );
      $avatar = HTML(get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size ));

      return <div class="author-info">
        <div class="author-avatar">
          {$avatar}
        </div>
        <div class="author-description">
          <h2>{sprintf( __( 'About %s', 'hackpress' ), get_the_author() )}</h2>
          <p>{get_the_author_meta( 'description' )}</p>
          <div class="author-link">
            <a href={get_author_posts_url( get_the_author_meta( 'ID' ) ) )} rel="author">
              {HTML(sprintf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'hackpress' ), get_the_author() ))}
            </a>
          </div>
        </div>
      </div>;
    endif;
  }
}

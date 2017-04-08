<?hh
final class :hp:commentsLink extends :x:element {
  use XHPHelpers;
  
  protected function render() {
    if ( comments_open() ) {
      return <div class="comments-link">
          {HTML(get_comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'twentytwelve' ) . '</span>', __( '1 Reply', 'twentytwelve' ), __( '% Replies', 'twentytwelve' ) ))}
        </div>;
    }
  }
}

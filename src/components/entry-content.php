<?hh
final class :hp:entryContent extends :x:element {
  use XHPHelpers;

  protected function render() {
    $content = $this->getChildren();
    if ( ! $content ) {
      $content =
        {HTML(get_the_content())}
        {HTML(wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'hackpress' ), 'after' => '</div>', 'echo' => false ) ))};
    }
    return <div class="entry-content">{$content}</div>;
  }
}

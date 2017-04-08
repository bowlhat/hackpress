<?hh
final class :hp:entryThumbnail extends :x:element {
  use XHPHelpers;
  
  protected function render() {
    if ( ! post_password_required() && ! is_attachment() ) {
      return HTML(get_the_post_thumbnail());
    }
  }
}

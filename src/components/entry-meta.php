<?hh
final class \:hp:entryMeta extends :x:element {
  use XHPHelpers;
  
  protected function render() {
    return <footer class="entry-meta">
      <hp:authorBio/>
      <span class="edit-link"><a class="post-edit-link" href={get_edit_post_link()}>{__( 'Edit', 'twentytwelve' )}</a></span>
    </footer>;
  }
}

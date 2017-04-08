<?hh

final class :hp:page extends :x:element {
  use XHPHelpers;
  
  protected function render() {
    $thumbnail = '';
    if ( ! is_page_template( 'page-templates/front-page.php' ) ) {
      $thumbnail = <hp:entryThumbnail/>;
    }

    return <hp:article>
      <hp:entryHeader>
        <hp:entryTitle/>
        {$thumbnail}
      </hp:entryHeader>
      <hp:entryContent/>
      <hp:entryMeta/>
    </hp:article>;
  }
}

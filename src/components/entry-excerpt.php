<?hh
final class :hp:entryExcerpt extends :x:element {
  use XHPHelpers;

  protected function render() {
    return <div class="entry-summary">
      {HTML(get_the_excerpt())}
    </div>;
  }
}

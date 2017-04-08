<?hh
final class :hp:entryHeader extends :x:element {
  use XHPHelpers;
  
  protected function render() {
    return <header class="entry-header">
        {$this->getChildren()}
      </header>;
  }
}

<?hh
final class :hp:entryTitle extends :x:element {
  use XHPHelpers;

  protected function render() {
    $title = $this->getChildren();
    if ( ! $title ) {
      $title = get_the_title();
      if ( is_single() ) {
        $title = <a href={get_the_permalink()} rel="bookmark">{$title}</a>;
      }
    }

    return <h1 class="entry-title">{$title}</h1>;
  }
}

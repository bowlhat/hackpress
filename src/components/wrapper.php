<?hh // strict
final class :hp:wrapper extends :x:element {
  use XHPHelpers;

  protected function render(): XHPRoot {
    ob_start();
    wp_head();
    $head = HTML(ob_get_clean());
    ob_start();
    wp_footer();
    $foot = HTML(ob_get_clean());

    return <!DOCTYPE html>
      <html {language_attributes()}>
        <head>
          <meta charset={bloginfo( 'charset' )} />
          <meta name="viewport" content="width=device-width" />
          <title>{wp_title( '|', false, 'right' )}</title>
          <link rel="profile" href="http://gmpg.org/xfn/11" />
          <link rel="pingback" href={bloginfo( 'pingback_url' )} />
          {$head}
        </head>

        <body class={get_body_class()}>
          <div id="page">
            <div id="primary" class="site-content">
              <div id="content" role="main">
                {$this->getChildren()}
              </div>
            </div>
            <footer id="colophon" role="contentinfo">
              <div class="site-info">
                <a href={__( 'https://wordpress.org/', 'WordPress' )} title={__( 'Semantic Personal Publishing Platform', 'WordPress' )}>
                   {sprintf( __( 'Proudly powered by %s', 'twentytwelve' ), 'WordPress' )}
                </a>
              </div>
            </footer>
          </div>
          {$foot}
        </body>
      </html>;
  }
}

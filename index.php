<?hh // strict
namespace hackpress;

$wrapper = <hp:wrapper></hp:wrapper>;

if ( have_posts() ) :
  while( have_posts() ) : the_post();
    $wrapper->appendChild(<hp:post></hp:post>);
  endwhile;
else :
  if ( current_user_can( 'edit_posts' ) ) :
    $title = __( 'No posts to display', 'hackpress' );
    $msg = {__( 'Ready to publish your first post?', 'hackpress' )}
      <a href={get_admin_url( 'post-new.php' )}>{__( 'Get started here', 'hackpress' )}</a>;
  else :
    $title = __( 'Nothing Found', 'hackpress' );
    $msg = __( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'hackpress' );
  endif;

  $wrapper->appendChild(<article id="post-0" class="post no-results not-found">
      <hp:entryHeader>
        <hp:entryTitle>{$title}</hp:entryTitle>
      </hp:entryHeader>
      <hp:entryContent>
        <p>{$msg}</p>
        {HTML(get_search_form())}
      </hp:entryContent>
    </article>);
endif;

echo $wrapper;

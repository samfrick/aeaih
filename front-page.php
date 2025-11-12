<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>

<main>
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post();

      get_template_part('templates/sections/hero');
      get_template_part('templates/flex/actualities');
      get_template_part('templates/flex/presentation');

    endwhile;
  endif;
  ?>
</main>

<?php
get_footer();

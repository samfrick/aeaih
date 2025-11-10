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

    endwhile;
  endif;
  ?>
</main>

<?php
get_footer();

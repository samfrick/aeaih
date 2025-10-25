<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>

<section class="default section">
  <div class="-container">
    <h1 class="h1"><?= __('404') ?></h1>
    <p class="h3"><?= __('La page que vous cherchez n\'existe pas ou a été supprimée') ?></p>
  </div>
</section>

<?php
get_footer();
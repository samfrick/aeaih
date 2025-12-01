<?php 
$actualities = get_field('actualities');
?>

<section id="actualities" class="actualities flex flex-col items-center justify-center text-center py-16">
    <?php if ($actualities['actu_title']) : ?>
        <h2 class="text-5xl"><?= esc_html($actualities['actu_title']) ?></h2>
    <?php endif; ?>
    <?php if ($actualities['actu_subtitle']) : ?>
        <p class="text-xl"><?= esc_html($actualities['actu_subtitle']) ?></p>
    <?php endif; ?>
    <?php
    $btn_actu = $actualities['actu_btn_events'] ?? null;
    if ($btn_actu) :
        $page_id = url_to_postid($btn_actu);
                 if ($page_id) {
                     $titre_actu = get_the_title($page_id);
                 }
    ?>
        <a href="<?= esc_url($btn_actu) ?>" class="btn">Découvrir les actualités</a>
    <?php endif; ?>
</section>
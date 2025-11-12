<?php 
$actualities = get_field('actualities');
?>

<section id="actualities" class="actualities flex flex-col items-center justify-center text-center py-16 bg-cyan-700/50">
    <?php if ($actualities['actu_title']) : ?>
        <h2 class="text-5xl"><?= esc_html($actualities['actu_title']) ?></h2>
    <?php endif; ?>
    <?php if ($actualities['actu_subtitle']) : ?>
        <p class="text-xl"><?= esc_html($actualities['actu_subtitle']) ?></p>
    <?php endif; ?>
    <div class="actu-content flex flex-col items-center bg-white/10 backdrop-blur-sm border rounded-lg border-white/30 shadow-lg p-6 w-1/5 my-6">
        <?php if ($actualities['actu_image']) : ?>
            <img class="w-30 aspect-square" src="<?= esc_url($actualities['actu_image']['url']) ?>" alt="<?= esc_attr($actualities['actu_image']['alt']) ?>">
        <?php endif; ?>
        <?php if ($actualities['actu_description']) : ?>
            <p class="text-"><?= esc_html($actualities['actu_description']) ?></p>
        <?php endif; ?>
    </div>
    <?php
    $btn_actu = $actualities['actu_btn_events'] ?? null;
    if ($btn_actu) :
        $page_id = url_to_postid($btn_actu);
                 if ($page_id) {
                     $titre_actu = get_the_title($page_id);
                 }
    ?>
        <a href="<?= esc_url($btn_actu) ?>" class="btn border bg-white/10 backdrop-blur-sm border-white/30 shadow-lg py-2 px-4 rounded-lg">Découvrir les actualités</a>
    <?php endif; ?>
</section>
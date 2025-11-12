<?php 
$presentation = get_field('presentation');
?>

<section id="presentation" class="presentation flex flex-row items-center justify-center py-16">
    <?php if ($presentation['pres_image']) : ?>
        <img class="w-100 object-cover" src="<?= esc_url($presentation['pres_image']['url']) ?>" alt="<?= esc_attr($presentation['pres_image']['alt']) ?>">
    <?php endif; ?>
    <div>
        <?php if ($presentation['pres_presentation']) : ?>
            <p class="text-"><?= esc_html($presentation['pres_presentation']) ?></p>
        <?php endif; ?>
        <?php
        $btn_pres = $presentation['pres_btn_members'] ?? null;
        if ($btn_pres) :
            $page_id = url_to_postid($btn_pres);
                     if ($page_id) {
                         $titre_pres = get_the_title($page_id);
                     }
        ?>
            <a href="<?= esc_url($btn_pres) ?>" class="btn">En savoir plus</a>
        <?php endif; ?>
    </div>
</section>
<?php
$hero = get_field('hero');
?>

<section id="hero" class="hero relative flex flex-col items-center justify-center h-screen text-center text-white overflow-hidden">
    <?php if ($hero['hero_image']) : ?>
        <img data-animation="translation" data-animation-speed="2" data-animation-type="top" src="<?= $hero['hero_image']['url'] ?>" alt="<?= $hero['hero_image']['alt'] ?? 'image hero' ?>" class="hero-image absolute -z-10 brightness-30 object-cover"/>
    <?php endif; ?>
    <div class="hero-content">
        <?php if ($hero['hero_title']) : ?>
            <h1 class="text-5xl font-bold"><?= $hero['hero_title'] ?></h1>
        <?php endif; ?>
        <?php if ($hero['hero_subtitle']) : ?>
            <p class="text-xl"><?= $hero['hero_subtitle'] ?></p>
        <?php endif; ?>  
        <?php
        $btn_members = $hero['hero_btn_members'] ?? null;
        if ($btn_members) :
            $page_id = url_to_postid($btn_members);
            if ($page_id) {
                $titre_members = get_the_title($page_id);
            }
        ?>
            <a href="<?= esc_url($btn_members) ?>" class="btn btn-primary inline-block w-max">
                <?= esc_html($titre_members) ?>
            </a>
        <?php endif ?>
        <?php
        $btn_events = $hero['hero_btn_events'] ?? null;
        if ($btn_events) :
            $page_id = url_to_postid($btn_events);
            if ($page_id) {
                $titre_events = get_the_title($page_id);
            }
        ?>
            <a href="<?= esc_url($btn_events) ?>" class="btn btn-primary inline-block w-max">
                <?= esc_html($titre_events) ?>
            </a>
        <?php endif; ?>    
    </div>
</section>
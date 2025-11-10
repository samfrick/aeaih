<?php
$hero = get_field('hero');
?>

<section id="hero" class="hero relative text-white min-h-auto">
    <div class="relative overflow-hidden">
        <?php if ($hero['hero_image']) : ?>
            <div>
                <img data-animation="translation" data-animation-speed="2" data-animation-type="top" src="<?= $hero['hero_image']['url'] ?>" alt="image hero" class="hero-image h-[100vh] w-[100vw] object-cover"/>
            </div>
        <?php endif; ?>
        <div class="hero-content -container absolute top-0 left-0 right-0 bottom-0 flex flex-col justify-center gap-32 w-800">
            <?php if ($hero['hero_title']) : ?>
                <h1><?= $hero['hero_title'] ?></h1>
            <?php endif; ?>
            <?php if ($hero['hero_subtitle']) : ?>
                <p><?= $hero['hero_subtitle'] ?></p>
            <?php endif; ?>
            <!-- <?php if ($hero['hero_btn_members']) : ?>
                <a href="<?= $hero['hero_btn_members']['url'] ?>" class="btn btn-primary inline-block w-max" target="<?= $hero['hero_btn_members']['target'] ?>">
                    <?= $hero['hero_btn_members']['title'] ?>
                </a>
            <?php endif; ?>
            <?php if ($hero['hero_btn_events']) : ?>
                <a href="<?= $hero['hero_btn_events']['url'] ?>" class="btn btn-primary inline-block w-max" target="<?= $hero['hero_btn_events']['target'] ?>">
                    <?= $hero['hero_btn_events']['title'] ?>
                </a>
            <?php endif; ?> -->
        </div>
    </div>
</section>
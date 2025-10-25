<?php
$title = get_field('hero_title') ?: get_the_title();
$subtitle = get_field('hero_subtitle');
$image = get_field('hero_image');
$btn_members = get_field('hero_btn_members');
$btn_events = get_field('hero_btn_events');
?>

<section class="hero relative text-white min-h-auto">
    <div class="relative overflow-hidden">
        <?php if ($image): ?>
            <div>
                <img data-animation="translation" data-animation-speed="2" data-animation-type="top" src="<?= $image['url'] ?>" alt="image hero" class="hero-image h-[100vh] w-[100vw] object-cover"/>
            </div>
        <?php endif; ?>
        <div class="hero-content -container absolute top-0 left-0 right-0 bottom-0 flex flex-col justify-center gap-32 w-800">
            <?php if ($title): ?>
                <h1 class="h1 uppercase" data-animation="subtitle"><?= $title ?></h1>
            <?php endif; ?>
            <?php if ($subtitle): ?>
                <p class="p22" data-animation="paragraph" data-animation-delay="0.2"><?= $subtitle ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>
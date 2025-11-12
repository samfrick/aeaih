<?php
$hero = get_field('hero');
?>

<section id="hero" class="hero relative flex flex-col items-center justify-center h-screen text-white overflow-hidden">
    <?php if ($hero['hero_image']) : ?>
        <img data-animation="translation" data-animation-speed="2" data-animation-type="top" src="<?= $hero['hero_image']['url'] ?>" alt="<?= $hero['hero_image']['alt'] ?? 'image hero' ?>" class="hero-image absolute -z-10 brightness-40 h-screen w-screen object-cover"/>
    <?php endif; ?>
    <div class="hero-content w-1/3 flex flex-col items-center justify-center text-center">
        <?php if ($hero['hero_title']) : ?>
            <h1 class="text-5xl sm:text-7xl font-bold"><?= $hero['hero_title'] ?></h1>
        <?php endif; ?>
        <?php if ($hero['hero_subtitle']) : ?>
            <p class="text-md sm:text-xl"><?= $hero['hero_subtitle'] ?></p>
        <?php endif; ?>  

        <!-- Boutons -->
         <div class="hero-buttons mt-6 grid sm:grid-cols-2 gap-4 w-full">
             <?php
             $btn_members = $hero['hero_btn_members'] ?? null;
             if ($btn_members) :
                 $page_id = url_to_postid($btn_members);
                 if ($page_id) {
                     $titre_members = get_the_title($page_id);
                 }
             ?>
                 <a href="<?= esc_url($btn_members) ?>" class="btn">
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
                 <a href="<?= esc_url($btn_events) ?>" class="btn">
                     <?= esc_html($titre_events) ?>
                 </a>
             <?php endif; ?>
         </div>
    </div>
</section>
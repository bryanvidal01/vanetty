<?php
/*
Template Name: Galerie
*/

get_header();
?>

<div class="header-image" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/galerie-head.jpg');">
    <div class="header-image__text">
        Galerie
    </div>
</div>

<div class="strate strate-image-big">
    <div class="image">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/galerie-1.jpg" alt="">
    </div>

    <div class="bloc-text">
        <div class="inner-text">
            VANETTY IS A DJ & PRODUCER
        </div>
    </div>
</div>

<div class="strate strate-full-screen">
    <div class="image-full" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/galerie-2.jpg')" class="parallax" data-gravity="4"></div>
    <div class="image">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/galerie-3.jpg" alt="" class="parallax" data-gravity="0.3">
    </div>
</div>

<div class="strate strate-two-image">
    <div class="image-1">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/galerie-4.jpg" alt="" class="parallax" data-gravity="0.3">
    </div>
    <div class="image-2">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/galerie-5.jpg" alt="" class="parallax" data-gravity=".6">
    </div>
</div>
<div class="strate strate-two-image right">
    <div class="image-1">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/galerie-4.jpg" alt="" class="parallax" data-gravity="0.3">
    </div>
    <div class="image-2">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/galerie-5.jpg" alt="" class="parallax" data-gravity=".6">
    </div>
</div>

<div class="strate strate-full-screen">
    <div class="image-full" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/galerie-2.jpg')" class="parallax" data-gravity="4"></div>
    <div class="image">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/galerie-3.jpg" alt="" class="parallax" data-gravity="0.3">
    </div>
</div>



<canvas id="noise" class="noise"></canvas>

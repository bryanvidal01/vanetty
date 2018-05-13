<?php
/*
Template Name: Homepage
*/

get_header();
?>


<?php if(get_field('video_teaser')): ?>
    <div class="image-intro">
        <div class="close-popin">
            Retour à la home
        </div>
        <video id="video-bg" src="<?php echo get_field('video_teaser'); ?>" autoplay muted loop></video>
    </div>
<?php endif; ?>


<?php

$posts = get_field('articles');
$gravity = [55, 25, 30, 50, 30, 40, 60, 80, 50, 80];

if( $posts ): ?>
    <div class="container-points">
        <ul class="list-point">
            <li>
            <?php foreach( $posts as $key => $post): ?>
                <?php setup_postdata($post); ?>
                <a href="<?php echo get_the_permalink(); ?>" class="point" data-gravity="<?php echo $gravity[$key]; ?>">
                    <div class="point__button">
                        <div class="icon">
                            ”
                        </div>
                    </div>
                    <div class="point__content">
                        <div class="title">
                            <?php echo get_the_title(); ?>
                        </div>
                        <div class="date">
                            <?php echo get_the_date('j/m/Y') ?>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
            </li>
        </ul>
    <?php wp_reset_postdata(); ?>
    </div>
<?php endif; ?>


<?php if(get_field('news_star')): ?>
    <div class="actu-star">
        <?php echo get_field('news_star'); ?>
    </div>
<?php endif; ?>


<div class="link-video">
    <div class="container-svg">
        <svg height="70" width="70">
            <circle cx="35" cy="35" r="30" stroke="#888" class="circle-1" stroke-width="1"  />
            <circle cx="35" cy="35" r="30" stroke="#FFF" class="circle-2" stroke-width="1"  />
        </svg>
    </div>

    <div class="info-button">
        Maintenir pour voir
    </div>
</div>



<canvas id="noise" class="noise"></canvas>

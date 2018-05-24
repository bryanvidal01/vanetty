<?php
/*
Template Name: Audio
*/

get_header();
?>

<div class="header-image" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/galerie-head.jpg');">
    <div class="header-image__text">
        Discography
    </div>
</div>

<div class="container-discrography">
    <div class="list-drag">
        <ul class="list-pochettes">

            <?php
            $posts = get_field('list_discography');
            if( $posts ): ?>
                <?php foreach( $posts as $key => $post): ?>
                    <?php setup_postdata($post);
                        $title = get_the_title();
                        $pochette = get_field('pochette');
                    ?>
                    <li>
                        <div class="image-pochette parallax" data-gravity=".2" style="background-image: url('<?php echo wp_get_attachment_image_src($pochette, '1500x1500')[0]; ?>'); ">
                            <div class="link-video">
                                <div class="container-svg">
                                    <svg height="70" width="70">
                                        <circle cx="35" cy="35" r="30" stroke="#888" class="circle-1" stroke-width="1"></circle>
                                        <circle cx="35" cy="35" r="30" stroke="#FFF" class="circle-2" stroke-width="1"></circle>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="text-pochette parallax" data-gravity=".4">
                            <div class="inner-text">
                                <?php echo $title; ?>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>

                <?php wp_reset_postdata(); ?>
            <?php endif; ?>

        </ul>
    </div>
</div>


<canvas id="noise" class="noise"></canvas>

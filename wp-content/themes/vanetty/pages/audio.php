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
        <ul class="list-pochettes clearfix">
            <?php
            $posts = get_field('list_discography');
            if( $posts ): ?>
                <?php foreach( $posts as $key => $post): ?>
                    <?php setup_postdata($post);
                        $title = get_the_title();
                        $pochette = get_field('pochette');
                    ?>
                    <li>
                        <a href="<?php echo get_the_permalink(); ?>">
                            <div class="image-pochette parallax" style="background-image: url('<?php echo wp_get_attachment_image_src($pochette, '1500x1500')[0]; ?>'); ">
                            </div>
                            <div class="text-pochette parallax">
                                <div class="inner-text parallax" data-gravity=".1">
                                    <?php echo $title; ?>
                                </div>
                            </div>
                        </a>
                    </li>
                <?php endforeach; ?>

                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </ul>
    </div>

</div>


<canvas id="noise" class="noise"></canvas>

<?php
/*
Template Name: Galerie
*/

get_header();
the_post();

$imageIntroID = get_field('image_intro');
$imageIntroURL = wp_get_attachment_image_src($imageIntroID, '1300x900');
$textIntro = get_field('text_intro');
?>

<div class="header-image" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/galerie-head.jpg');">
    <div class="header-image__text">
        Galerie
    </div>
</div>

<div class="strate strate-image-big">
    <div class="image">
        <img src="<?php echo $imageIntroURL[0]; ?>" alt="Vanetty <?php echo get_the_title(); ?>">
    </div>

    <div class="bloc-text">
        <div class="inner-text">
            <?php echo $textIntro; ?>
        </div>
    </div>
</div>

<?php
// check if the flexible content field has rows of data
if( have_rows('strates') ):

     // loop through the rows of data
    while ( have_rows('strates') ) : the_row();

        if( get_row_layout() == 'strate_full' ):


            $image_full = get_sub_field('image_full');
            $image_full_url = wp_get_attachment_image_src($image_full, '2000x800')[0];
            $image_medium = get_sub_field('image_medium');
            $image_medium_url = wp_get_attachment_image_src($image_medium, '700x850')[0];

            $order = get_sub_field('order');

            $file_parts_medium = pathinfo( $image_medium_url );

            $addVideo = get_sub_field('add_video');

            if($addVideo){
                $isvideo = true;
                $videoUrl = get_sub_field('video_iframe');
            }else{
                $isvideo = false;
                $videoUrl = '';
            }

            ?>
            <div class="strate strate-full-screen">
                <div class="image-full" style="background-image: url('<?php echo $image_full_url ?>')"></div>
                <div class="image <?php if($isvideo): echo 'is-video'; endif; ?> parallax" data-video-url="<?php echo $videoUrl; ?>" data-gravity="0.3">
                    <?php if ($file_parts_medium['extension'] != 'gif' ): ?>
                        <img src="<?php echo $image_medium_url; ?>" alt="Vanetty <?php echo get_the_title(); ?>">
                    <?php else: ?>
                        <img src="<?php echo wp_get_attachment_image_src($image_medium, '')[0]; ?>" alt="Vanetty <?php echo get_the_title(); ?>">
                    <?php endif; ?>
                </div>
            </div>

        <?php elseif( get_row_layout() == 'strate-two-image' ):
            $image_big = get_sub_field('image_big');
            $image_medium = get_sub_field('image_medium');
            $order = get_sub_field('order');

        ?>
            <div class="strate strate-two-image <?php echo $order; ?>">
                <div class="image-1">
                    <img src="<?php echo wp_get_attachment_image_src($image_big, '700x850')[0]; ?>" alt="Vanetty <?php echo get_the_title(); ?>" class="parallax" data-gravity="0.3">
                </div>
                <div class="image-2">
                    <img src="<?php echo wp_get_attachment_image_src($image_medium, '700x850')[0]; ?>" alt="Vanetty <?php echo get_the_title(); ?>" class="parallax" data-gravity=".6">
                </div>
            </div>
        <?php endif;

    endwhile;

endif;

?>


<div class="video-galerie popin-news hidden">
    <a href="http://localhost:8888/vanetty" class="close-news"></a>
</div>


<canvas id="noise" class="noise"></canvas>

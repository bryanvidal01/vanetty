<?php

get_header();
the_post();
$imageID = get_field('thumbnail');
$imageURL = wp_get_attachment_image_src($imageID, '1000x1000');
$textIntro = get_field('texte_intro');
$textContent = get_field('texte_content');
?>


<div class="popin-news">
    <a href="<?php echo get_site_url(); ?>" class="close-news"></a>

    <div class="image-news" style="background-image: url('<?php echo $imageURL[0] ?>')">
        <div class="title-news">
            <?php echo get_the_title(); ?>
        </div>
        <div class="date">
            <?php echo get_the_date('j/m/Y') ?>
        </div>
    </div>
</div>

<div class="container container-single-news">
    <div class="row">
        <?php if ($textIntro): ?>
            <div class="col-sm-8 col-sm-offset-2">
                <div class="intro">
                    <?php echo $textIntro ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($textContent): ?>
            <div class="col-sm-8 col-sm-offset-2">
                <?php echo $textContent; ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<canvas id="noise" class="noise"></canvas>


<?php get_footer(); ?>

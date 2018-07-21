<?php
/*
Template Name: Dates
*/

get_header();

the_post();

?>

<div class="header-image" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/galerie-head.jpg');">
    <a href="<?php echo get_site_url(); ?>" class="close-news"></a>
    <div class="header-image__text">
        Dates
    </div>
</div>

<div class="container-dates">
    <ul class="list-dates clearfix">

        <?php
        if( have_rows('dates') ):

            while ( have_rows('dates') ) : the_row();
                $name = get_sub_field('name');
                $date = get_sub_field('date', false, false);
                $date = new DateTime($date);
                $archived = get_sub_field('archived');
            ?>
                <li class="<?php echo ($archived) ? 'is-archive' : ''; ?>" >
                    <?php echo $name; ?> - <span class="date"><?php echo $date->format('j M Y'); ?></span>
                </li>
            <?php endwhile;
        endif;

        ?>
    </ul>
</div>


<canvas id="noise" class="noise"></canvas>

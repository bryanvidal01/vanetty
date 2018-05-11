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
            <li>
                <div class="image-pochette parallax" data-gravity=".2" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/audio-1.jpg'); ">
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
                        Face To Face
                    </div>
                </div>
            </li>
            <li>
                <div class="image-pochette parallax" data-gravity=".2" style="background-image: url('https://i0.wp.com/brandnite.com/wp-content/uploads/2018/02/David-Guetta-at-FMIF-Pacha-Ibiza.jpg'); ">
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
                        The walking dream
                    </div>
                </div>
            </li>
            <li>
                <div class="image-pochette parallax" data-gravity=".2" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/audio-1.jpg'); ">
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
                        Face To Face
                    </div>
                </div>
            </li>
            <li>
                <div class="image-pochette parallax" data-gravity=".2" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/audio-1.jpg'); ">
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
                        Face To Face
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>


<canvas id="noise" class="noise"></canvas>

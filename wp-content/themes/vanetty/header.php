<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php if(is_page_template( 'pages/homepage.php' )): ?>
        <title><?php echo get_bloginfo('name'); ?></title>
    <?php else: ?>
        <title><?php echo get_the_title(); ?></title>
    <?php endif; ?>

    <link rel="stylesheet" href="https://use.typekit.net/rjn8dns.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/libs/jQuery.js" charset="utf-8"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/libs/jquery-ui.min.js" charset="utf-8"></script>
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/icon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/libs/gsap/TweenLite.min.js'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/libs/gsap/TweenMax.min.js'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/libs/gsap/TimelineLite.min.js'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/libs/gsap/TimelineMax.min.js'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/libs/gsap/scrollmagic.js'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/libs/gsap/easing/EasePack.min.js'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/libs/gsap/plugins/ScrollToPlugin.min.js'></script>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/wavesurfer.js/2.0.5/wavesurfer.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/functions.js" charset="utf-8"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/events.js" charset="utf-8"></script>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

      <div class="container-loader">
          <div class='loader loader2'>
           <div>
             <div>
               <div>
                 <div>
                   <div>
                     <div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
      </div>

      <div class="barre"></div>
      <div class="barre"></div>
      <div class="barre"></div>
      <div class="barre"></div>

      <div class="container-menu hidde" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/galerie-2.jpg');">
          <div class="menu">
              <?php wp_nav_menu(); ?>
          </div>
      </div>

      <div class="header">
          <a href="#" class="menu">
              Menu
          </a>

          <a href="" class="logo">
              Vanetty
          </a>
          <ul class="social">
              <li>
                  <a target="_blank" href="https://www.facebook.com/Vanettymusic/">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid" width="10" height="18" viewBox="0 0 10 18">
                          <path d="M9.635,3.257 C9.635,3.257 7.490,3.262 7.490,3.262 C7.168,3.263 6.418,3.778 6.419,4.354 C6.419,4.354 6.420,6.534 6.420,6.534 C6.420,6.534 9.637,6.527 9.637,6.527 C9.637,6.527 9.640,9.795 9.640,9.795 C9.640,9.795 6.423,9.803 6.423,9.803 C6.423,9.803 6.429,17.431 6.429,17.431 C6.429,17.431 3.212,17.438 3.212,17.438 C3.212,17.438 3.206,9.810 3.206,9.810 C3.206,9.810 -0.011,9.817 -0.011,9.817 C-0.011,9.817 -0.014,6.549 -0.014,6.549 C-0.014,6.549 3.203,6.541 3.203,6.541 C3.203,6.541 3.202,4.362 3.202,4.362 C3.200,1.958 5.301,-0.002 7.554,-0.007 C7.554,-0.007 9.632,-0.012 9.632,-0.012 C9.632,-0.012 9.635,3.257 9.635,3.257 Z" id="path-1" class="cls-2" fill-rule="evenodd"></path>
                      </svg>
                  </a>
              </li>
              <li>
                  <a target="_blank" href="https://www.instagram.com/vanettymusic/">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid" width="18" height="18" viewBox="0 0 18 18">
                          <path d="M2.136,0.034 C2.136,0.034 1.064,0.037 1.064,0.037 C0.471,0.038 -0.008,0.526 -0.008,1.128 C-0.008,1.128 -0.007,2.218 -0.007,2.218 C-0.007,2.218 -0.002,8.756 -0.002,8.756 C-0.002,8.756 0.003,15.294 0.003,15.294 C0.003,15.294 0.004,16.384 0.004,16.384 C0.005,16.987 0.485,17.473 1.078,17.471 C1.078,17.471 2.150,17.469 2.150,17.469 C2.150,17.469 15.018,17.439 15.018,17.439 C15.018,17.439 16.090,17.436 16.090,17.436 C16.682,17.436 17.162,16.947 17.161,16.344 C17.161,16.344 17.160,15.255 17.160,15.255 C17.160,15.255 17.155,8.716 17.155,8.716 C17.155,8.716 17.150,2.178 17.150,2.178 C17.150,2.178 17.149,1.089 17.149,1.089 C17.149,0.487 16.669,0.000 16.076,0.002 C16.076,0.002 15.004,0.004 15.004,0.004 C15.004,0.004 2.136,0.034 2.136,0.034 ZM8.575,6.557 C9.758,6.554 10.720,7.530 10.721,8.732 C10.722,9.933 9.762,10.913 8.578,10.916 C7.395,10.919 6.433,9.943 6.432,8.741 C6.431,7.540 7.392,6.560 8.575,6.557 ZM15.016,15.260 C15.016,15.260 2.148,15.289 2.148,15.289 C2.148,15.289 2.143,8.751 2.143,8.751 C2.143,8.751 4.287,8.747 4.287,8.747 C4.289,11.150 6.216,13.100 8.580,13.095 C10.945,13.089 12.868,11.131 12.866,8.726 C12.866,8.726 15.011,8.721 15.011,8.721 C15.011,8.721 15.016,15.260 15.016,15.260 ZM15.008,5.452 C15.008,5.452 11.791,5.460 11.791,5.460 C11.791,5.460 11.788,2.191 11.788,2.191 C11.788,2.191 15.005,2.183 15.005,2.183 C15.005,2.183 15.008,5.452 15.008,5.452 Z" id="path-1" class="cls-2" fill-rule="evenodd"></path>
                      </svg>
                  </a>
              </li>
              <li>
                  <a target="_blank" href="https://www.youtube.com/channel/UC4stsAgsu8foyYHT6QXX63w">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid" width="17" height="13" viewBox="0 0 17 13">
                          <path d="M14.342,0.006 C14.342,0.006 2.801,0.032 2.801,0.032 C1.259,0.036 -0.011,1.419 -0.010,3.086 C-0.010,3.086 -0.004,10.066 -0.004,10.066 C-0.003,11.746 1.270,13.112 2.811,13.108 C2.811,13.108 14.353,13.082 14.353,13.082 C15.898,13.079 17.154,11.707 17.153,10.027 C17.153,10.027 17.147,3.046 17.147,3.046 C17.146,1.380 15.887,0.003 14.342,0.006 ZM11.589,6.849 C11.589,6.849 6.913,9.758 6.913,9.758 C6.646,9.923 6.429,9.797 6.429,9.475 C6.429,9.475 6.424,3.648 6.424,3.648 C6.424,3.326 6.641,3.200 6.908,3.364 C6.908,3.364 11.588,6.250 11.588,6.250 C11.855,6.414 11.856,6.684 11.589,6.849 Z" id="path-1" class="cls-2" fill-rule="evenodd"></path>
                      </svg>
                  </a>
              </li>
          </ul>
      </div>

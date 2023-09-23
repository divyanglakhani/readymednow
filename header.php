<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ready_Med
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/font/font-style.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/developer.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/js_composer.css" />
  <!-- -------bootsrap CSS------------- -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css" />
  <!-- --font---------- -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
  <!-- ------------------font awesome------------------------- -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
  <!-- ----slick slider---- -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" />
  <title>Ready Med</title>
  <link rel="icon" type="image/png" sizes="64x64"
    href="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" />

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'readymednow'); ?></a>

    <head id="header">
      <!-- <div class="header-top d-none d-lg-block"> -->
      <?php
      $header = get_field('top_header', 'option');
      ?>
      <!-- <div class="sticky"> -->

      <div class="top-bar ">
        <p class="topBarDesc">
          <span>
            <?php echo $header['top_header_text']; ?>
            <a href="<?php echo $header['top_header_button_url']; ?>"
              class="topBarBtn"><?php echo $header['top_header_button_text']; ?></a></span>
        </p>
      </div>
      <?php
        $header1 = get_field('main_header', 'option');
        ?>
      <div class="main-header">
        <div class="container">
          <div class="header-bottom">
            <b class="screen-overlay"></b>
            <nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg navbar-light">
              <div class="container nav-cont">
                <a class="navbar-brand d-none d-lg-block bottom_left" href="index.html">
                  <img class="logo-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png">
                </a>

                <div class="offcanvas-header d-lg-none">
                  <button class="navbar-toggler btn-close"></button>
                </div>
                <?php
                wp_nav_menu(array('theme_location' => 'menu-1'));
                ?>
                <div class="bottom_right d-flex">
                  <div class="cart cart-1 min-768 top_nav_menu" bis_skin_checked="1">
                    <a href="https://readymednow.com/cart/" class="mini-cart dropdown-back"> <i
                        class="fa fa-shopping-cart" aria-hidden="true"></i><span
                        class="cart-items-count count">0</span></a>
                  </div>
                </div>
              </div>
            </nav>
            <nav class="mobile-navbar navbar d-lg-none navbar-expand-lg navbar-light">
              <div class="container">
                <a class="navbar-brand" href="#">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png ">
                </a>
                <div class="bottom_right d-flex">
                  <div class="cart min-768 top_nav_menu" bis_skin_checked="1">
                    <a href="https://readymednow.com/cart/" class="mini-cart dropdown-back"> <i
                        class="fa fa-shopping-cart" aria-hidden="true"></i><span
                        class="cart-items-count count">0</span></a>
                  </div>
                </div>
                <button data-trigger="#navbar_main" class="navbar-toggler" type="button">
                  <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
              </div>
            </nav>
          </div>
        </div>
      </div>
      </nav>
      <?php
              $bottom_header = get_field('left_bottom_header', 'option');
            ?>
      <div class="top-info">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 top_info_box d-flex left-top-info">
              <!-- <div class="top_info_box"> -->
              <a href="<?php echo $bottom_header['left_bottom_header_number_url']; ?>" class="link">
                <div class="icon">
                  <i class="fa fa-mobile" aria-hidden="true"></i>
                </div>
                <div class="text left-text-header">
                  <strong><?php echo $bottom_header['left_bottom_header_text']; ?><br />
                    <span><?php echo $bottom_header['left_bottom_header_number']; ?></span></strong>
                </div>
              </a>
            </div>
            <?php
              $bottom_header = get_field('right_bottom_header', 'option');
            ?>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 d-flex right-top-info">
              <div class="top_info_box linked">
                <a href="https://readymed.janeapp.com/#staff_member/2" class="link">
                  <div class="icon">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                  </div>
                  <div class="text">
                    <p>
                      <?php echo $bottom_header['right_bottom_header_text']; ?><br />
                      <b><span><?php echo $bottom_header['right_bottom_header_text2']; ?></span></b>
                    </p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

  </div>
  </head>
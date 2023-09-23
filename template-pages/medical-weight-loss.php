<?php /* Template Name: Medical Weight Loss */ ?>
<?php 
  get_header();
?>
<?php
$breadcrumbs = get_field('breadcrumbs');
?>
<div class="breadcrumbs">
  <div class="container">
    <div class="breadcrumbs1">
      <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Ready med."
          href="<?php echo $breadcrumbs['breadcrumbs_home_page_url']; ?>" class="home"><span
            property="name"><?php echo $breadcrumbs['breadcrumbs_home_page_name']; ?></span></a>
        <meta property="position" content="1">
      </span> &gt; <span
        class="post post-page current-item"><?php echo $breadcrumbs['breadcrumbs_current_page_name']; ?></span>
    </div>
    <h1><?php echo $breadcrumbs['breadcrumbs_current_page_name_heading']; ?></h1>
  </div>
</div>
<?php
$weight_loss_first_section = get_field('medical_weight_loss_first_section');
?>
<div class="second-section-weight-loss">
  <div class="continer">
    <?php echo $weight_loss_first_section['medical_weight_loss_first_section_heading']; ?>
  </div>
</div>
<?php
$weight_loss_first_section = get_field('medical_weight_loss_first_section');
?>
<div class="third-section-weight-loss">
  <div class="container">
    <p class="video">
      <video autoplay="autoplay" loop="loop" muted="" controls="controls"><span data-mce-type="bookmark"
          style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;" class="mce_SELRES_start">﻿</span>
        <source src="<?php echo $weight_loss_first_section['medical_weight_loss_first_section_video']; ?>"
          type="video/mp4">
        <source src="https://readymednow.com/wp-content/uploads/2023/01/What-Is-Medical-Weight-Loss.ogg"
          type="video/ogg">Your browser does not support the video tag.
      </video>
    </p>
    <p><?php echo $weight_loss_first_section['medical_weight_loss_first_section_content']; ?></p>
    <p>&nbsp;</p>
  </div>
</div>
<?php
$weight_loss_second_section = get_field('medical_weight_loss_second_section');
?>
<div class="fourth-section-weight-loss">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <h2 style="color: #ffffff;line-height: 44px;text-align: left">
          <?php echo $weight_loss_second_section['medical_weight_loss_second_section_heading']; ?></h2>
        <p><?php echo $weight_loss_second_section['medical_weight_loss_second_section_text']; ?></p>
      </div>
      <div class="col-lg-1">
        <div></div>
      </div>
      <div class="col-lg-4">
        <a class="new-patient-form"
          href="<?php echo $weight_loss_second_section['medical_weight_loss_second_section_button_url']; ?>"><?php echo $weight_loss_second_section['medical_weight_loss_second_section_button_text']; ?></a>
      </div>
    </div>
  </div>
</div>
<?php
$weight_loss_third_section = get_field('medical_weight_loss_third_section');
?>
<div class="fifth-section-weight-loss">
  <div class="container">
    <h3><?php echo $weight_loss_third_section['medical_weight_loss_second_section_heading']; ?></h3>
    <p><?php echo $weight_loss_third_section['medical_weight_loss_second_section_title']; ?></p>
    <?php echo $weight_loss_third_section['medical_weight_loss_second_section_content']; ?>
    <h3><?php echo $weight_loss_third_section['medical_weight_loss_second_section_heading2']; ?></h3>
  </div>
</div>
<div class="sixth-section-weight-loss">
  <div class="container">
    <?php if( have_rows('medical_weight_loss_fourth_section') ): ?>
    <?php while( have_rows('medical_weight_loss_fourth_section') ): the_row();
       $message = get_sub_field('medical_weight_loss_fourth_section'); ?>
    <div class="row">
      <div class="col-lg-6">
        <p><?php the_sub_field('medical_weight_loss_fourth_section_heading1'); ?></p>
        <img class="image1" src="<?php the_sub_field('medical_weight_loss_fourth_section_image1'); ?>" alt="">
      </div>
      <div class="col-lg-6">
        <p><?php the_sub_field('medical_weight_loss_fourth_section_heading2'); ?></p>
        <img src="<?php the_sub_field('medical_weight_loss_fourth_section_image2'); ?>" alt="">
      </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
    <?php
    $weight_loss_fifth_section = get_field('medical_weight_loss_fifth_section');
    ?>
    <p style="font-weight: normal;"><?php echo $weight_loss_fifth_section['medical_weight_loss_fifth_section_text']; ?>
    </p>
  </div>
</div>
<div class="seventh-section-weight-loss">
  <div class="container">
    <h3>
      <?php echo $weight_loss_fifth_section['medical_weight_loss_fifth_section_heading']; ?></h3>
    <a
      href="<?php echo $weight_loss_fifth_section['medical_weight_loss_fifth_section_button_url']; ?>"><?php echo $weight_loss_fifth_section['medical_weight_loss_fifth_section_button_text']; ?></a>
  </div>
</div>
<?php
get_footer();
?>
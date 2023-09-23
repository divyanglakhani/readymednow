<?php /* Template Name: Get Lasting Weight Loss Results */ ?>
<?php 
  get_header();
?>
<?php
$glwl_second_section = get_field('glwl_second_section');
?>
  <div class="second-section-lasting-wl">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 left-lasting-wl">
          <img class="left-image" style="width: 25%;" src="<?php echo $glwl_second_section['glwl_second_section_logo']; ?>" alt="">
          <div class="content">
            <h1><?php echo $glwl_second_section['glwl_second_section_heading']; ?></h1>
            <?php echo $glwl_second_section['glwl_second_section_content']; ?>
            <a class="button button-glwl" href="<?php echo $glwl_second_section['glwl_second_section_button_url']; ?>"> <?php echo $glwl_second_section['glwl_second_section_button_text']; ?></a>
          </div>
        </div>
        <div class="col-lg-7 right-lasting-wl">
          <p class="video"><video autoplay="autoplay" loop="loop" muted="" controls="controls" width="auto"
              height="300"><span data-mce-type="bookmark"
                style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;"
                class="mce_SELRES_start">﻿</span>
              <source src=" <?php echo $glwl_second_section['glwl_second_section_video']; ?>"
                type="video/mp4">
              <source src="https://readymednow.com/wp-content/uploads/2023/01/What-Is-Medical-Weight-Loss.ogg"
                type="video/ogg">Your browser does not support the video tag.
            </video></p>
        </div>
      </div>
    </div>
  </div>
  <?php
$glwl_third_section = get_field('glwl_third_section');
?>
  <div class="third-section-glwl">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="main-content-glwl-third" style="text-align: center;">
          <?php echo $glwl_third_section['glwl_third_section_main_content']; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="chat-section-glwl">
    <div class="container">
      <p style="text-align: center;"><iframe style="border: unset; background-color: #e3e3e3;"
          src="<?php echo $glwl_third_section['glwl_third_section_chat_section']; ?>" name="myIFrame"></iframe></p>
    </div>
  </div>
  <div class="fourth-section-glwl">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="content">
          <?php echo $glwl_third_section['glwl_third_section_content']; ?>
            <div class="button-glwl-fourth">
              <a class="button button-glwl" href="<?php echo $glwl_third_section['glwl_third_section_button_url']; ?>"><?php echo $glwl_third_section['glwl_third_section_button_text']; ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
get_footer();
?>
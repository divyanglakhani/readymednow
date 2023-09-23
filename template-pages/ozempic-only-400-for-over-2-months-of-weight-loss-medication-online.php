<?php /* Template Name: Ozempic Only 400 For Over 2 Months Of Weight Loss Medication Online */ ?>
<?php 
  get_header();
?>
<?php
$ozempic_second_section = get_field('ozempic_second_section');
?>
<div class="second-section-ozempic">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <p class="second-section-title-ozembic">
          <?php echo $ozempic_second_section['ozempic_second_section_title']; ?>
        </p>
        <p class="second-section-subtitle-ozembic">
          <?php echo $ozempic_second_section['ozempic_second_section_heading']; ?>
        </p>
        <div class="content">
          <?php echo $ozempic_second_section['ozempic_second_section_content']; ?>
          <div class="row second-row">
            <div class="col-lg-6">
              <a
                href="<?php echo $ozempic_second_section['ozempic_second_section_button1_url']; ?>"><?php echo $ozempic_second_section['ozempic_second_section_button1_text']; ?></a>
            </div>
            <div class="col-lg-6">
              <a
                href="<?php echo $ozempic_second_section['ozempic_second_section_button2_url']; ?>"><?php echo $ozempic_second_section['ozempic_second_section_button2_text']; ?></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-7">
        <img style="width: 100%" src="<?php echo $ozempic_second_section['ozempic_second_section_image']; ?>" alt="" />
      </div>
    </div>
  </div>
</div>
<div class="third-section-ozempic">
  <div class="container">
    <?php echo $ozempic_second_section['ozempic_second_section_title2']; ?>
    <div class="circle-ozompic">
      <?php
$ozempic_third_section = get_field('ozempic_third_section');
?>
      <div id="first-circle" class="common-circle">
        <img src="<?php echo $ozempic_third_section['ozempic_third_section_image1']; ?>" alt="" />
        <p style="text-align: center">
          <b><?php echo $ozempic_third_section['ozempic_third_section_content1']; ?></b>
        </p>
      </div>
      <div id="second-circle" class="common-circle">
        <img src="<?php echo $ozempic_third_section['ozempic_third_section_image2']; ?>" alt="" />
        <p style="text-align: center">
          <b><?php echo $ozempic_third_section['ozempic_third_section_content2']; ?></b>
        </p>
      </div>
      <div id="third-circle" class="common-circle">
        <img src="<?php echo $ozempic_third_section['ozempic_third_section_image3']; ?>" alt="" />
        <p style="text-align: center">
          <b><?php echo $ozempic_third_section['ozempic_third_section_content3']; ?></b>
        </p>
      </div>
      <div id="fourth-circle" class="common-circle">
        <img src="<?php echo $ozempic_third_section['ozempic_third_section_image4']; ?>" alt="" />
        <p style="text-align: center">
          <b><?php echo $ozempic_third_section['ozempic_third_section_content4']; ?></b>
        </p>
      </div>
      <div id="fifth-circle" class="common-circle">
        <img src="<?php echo $ozempic_third_section['ozempic_third_section_image5']; ?>" alt="" />
        <p style="text-align: center">
          <b><?php echo $ozempic_third_section['ozempic_third_section_content5']; ?></b>
        </p>
      </div>
    </div>
    <?php
$ozempic_fourth_section = get_field('ozempic_fourth_section');
?>
    <div style="padding: 20px 0">
      <div class="row">
        <div class="col-lg-6">
          <img style="width: 100%" src="<?php echo $ozempic_fourth_section['ozempic_fourth_section_image']; ?>"
            alt="" />
        </div>
        <div class="col-lg-6 right-section-ozembic-1">
          <p class="second-section-title-ozembic">
            <?php echo $ozempic_fourth_section['ozempic_fourth_section_title']; ?>
          </p>
          <p class="second-section-subtitle-ozembic">
            <?php echo $ozempic_fourth_section['ozempic_fourth_section_heading']; ?>
          </p>
          <?php echo $ozempic_fourth_section['ozempic_fourth_section_content']; ?>
          <div class="row third-row">
            <a
              href="<?php echo $ozempic_fourth_section['ozempic_fourth_section_button_url1']; ?>"><?php echo $ozempic_fourth_section['ozempic_fourth_section_button_text1']; ?></a>
            <a
              href="<?php echo $ozempic_fourth_section['ozempic_fourth_section_button_url2']; ?>"><?php echo $ozempic_fourth_section['ozempic_fourth_section_button_text2']; ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="fourth-section-ozempic">
  <div class="container">
    <div class="row">
      <?php if( have_rows('ozempic_fifth_section') ): ?>
      <?php while( have_rows('ozempic_fifth_section') ): the_row();
       $message = get_sub_field('ozempic_fifth_section'); ?>
      <div class="col-lg-4 text-center">
        <img style="width: 100%;" src="<?php the_sub_field('ozempic_fifth_section_image'); ?>" alt="" />
        <div class="content">
          <p class="steps" style="text-align: center"><?php the_sub_field('ozempic_fifth_section_title'); ?></p>
          <?php the_sub_field('ozempic_fifth_section_heading'); ?>
          <p class="step-content" style="text-align: center">
            <?php the_sub_field('ozempic_fifth_section_content'); ?>
          </p>
        </div>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <?php
$ozempic_sixth_section = get_field('ozempic_sixth_section');
?>
    <div class="text-center">
      <a style="text-align: center"
        href="<?php echo $ozempic_sixth_section['ozempic_sixth_section_button_url']; ?>"><?php echo $ozempic_sixth_section['ozempic_sixth_section_button_text']; ?></a>
    </div>
  </div>
</div>
<?php
get_footer();
?>
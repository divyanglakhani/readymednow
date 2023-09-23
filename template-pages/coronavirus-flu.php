<?php /* Template Name: Coronavirus Flu */ ?>
<?php 
  get_header();
?>
<?php
$corona_virus_first_section = get_field('corona_virus_first_section');
?>
<div class="second-section-corona second-section-telemedicine text-center">
  <div class="container">
    <img style="width: 60%;" src="<?php echo $corona_virus_first_section['corona_virus_first_section_image']; ?>"
      alt="">
    <div class="content">
      <?php echo $corona_virus_first_section['corona_virus_first_section_content']; ?>
      <div
        class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_border_width_2 vc_sep_pos_align_center vc_custom_1684393642773 wpb_animate_when_almost_visible wpb_bounceInLeft bounceInLeft vc_separator-has-text wpb_start_animation animated">
        <span class="vc_sep_holder vc_sep_holder_l"><span style="border-color:#00325d;"
            class="vc_sep_line"></span></span>
        <h4><strong><?php echo $corona_virus_first_section['corona_virus_first_section_middle_line_text']; ?></strong>
        </h4><span class="vc_sep_holder vc_sep_holder_r"><span style="border-color:#00325d;"
            class="vc_sep_line"></span></span>
      </div>
    </div>
    <div class="row second-section-telemedicine ">
      <?php if( have_rows('corona_virus_second_section') ): ?>
      <?php while( have_rows('corona_virus_second_section') ): the_row();
       $message = get_sub_field('corona_virus_second_section'); ?>
      <div class="col-lg-6">
        <div class="d-flex">
          <img style="width: 10%;" src="<?php the_sub_field('corona_virus_second_section_image'); ?>" alt="">
          <p><span style="color: #00ccff;"><b><?php the_sub_field('corona_virus_second_section_title'); ?></b></span>
          </p>
        </div>
        <?php the_sub_field('corona_virus_second_section_content'); ?>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <?php
$corona_virus_third_section = get_field('corona_virus_third_section');
?>
    <div class="row second-section-telemedicine">
      <div class="col-lg-6">
        <div class="d-flex">
          <img style="width: 10%;" src="<?php echo $corona_virus_third_section['corona_virus_third_section_image']; ?>"
            alt="">
          <p><span style="color: #00ccff;"><b>&nbsp;
                <?php echo $corona_virus_third_section['corona_virus_third_section_title']; ?></b></span></p>
        </div>
        <?php echo $corona_virus_third_section['corona_virus_third_section_content']; ?>
      </div>
      <div class="col-lg-6"></div>
    </div>
    <?php
$corona_virus_fourth_section = get_field('corona_virus_fourth_section');
?>
    <a class="button"
      href="<?php echo $corona_virus_fourth_section['corona_virus_fourth_section_button_url']; ?>"><?php echo $corona_virus_fourth_section['corona_virus_fourth_section_button_text']; ?></a>
    <div class="another-section-covid">
      <div class="container">

        <h2><?php echo $corona_virus_fourth_section['corona_virus_fourth_section_another_section_heading']; ?></h2>
        <div class="row">
          <?php if( have_rows('corona_virus_fifth_section') ): ?>
          <?php while( have_rows('corona_virus_fifth_section') ): the_row();
       $message = get_sub_field('corona_virus_fifth_section'); ?>
          <div class="col-lg-4">
            <div class="heading-another-section">
              <img src="<?php the_sub_field('corona_virus_fifth_section_image'); ?>" alt="">
              <?php the_sub_field('corona_virus_fifth_section_heading'); ?>
            </div>
            <div class="content">
              <?php the_sub_field('corona_virus_fifth_section_content'); ?>
            </div>
          </div>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
get_footer();
?>
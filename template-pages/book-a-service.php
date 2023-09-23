<?php /* Template Name: Book A Service */ ?>
<?php 
  get_header();
?>
<?php
$first_section_service = get_field('first_section_service');
?>
<div class="second-section-book-service">
  <div class="container">
    <p style="text-align: center">
      <span style="color: #000000"><?php echo $first_section_service['first_section_service_content']; ?></span>
    </p>
    <div class="row">
      <?php if( have_rows('first_section_service_repeater_section_one') ): ?>
      <?php while( have_rows('first_section_service_repeater_section_one') ): the_row();
       $message = get_sub_field('first_section_service_repeater_section_one'); ?>
      <div class="col-lg-4">
        <img src="<?php the_sub_field('first_section_service_repeater_section_one_image'); ?>" alt="" />
        <a href="#">
          <h4><b><?php the_sub_field('first_section_service_repeater_section_one_heading'); ?></b></h4>
        </a>
        <div class="content">
          <?php the_sub_field('first_section_service_repeater_section_one_content'); ?>
        </div>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="row">
      <?php if( have_rows('first_section_service_repeater_section_second') ): ?>
      <?php while( have_rows('first_section_service_repeater_section_second') ): the_row();
       $message = get_sub_field('first_section_service_repeater_section_second'); ?>
      <div class="col-lg-4">
        <img src="<?php the_sub_field('first_section_service_repeater_section_second_image'); ?>" alt="" />
        <a href="#">
          <h4><b><?php the_sub_field('first_section_service_repeater_section_second_heading'); ?></b></h4>
        </a>
        <div class="content">
          <?php the_sub_field('first_section_service_repeater_section_second_content'); ?>
        </div>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <?php
$first_section_service_repeater_section_third = get_field('first_section_service_repeater_section_third');
?>
    <div class="row">
      <div class="col-lg-4"></div>
      <div class="col-lg-4">
        <img
          src="<?php echo $first_section_service_repeater_section_third['first_section_service_repeater_section_third_image']; ?>"
          alt="" />
        <a href="#">
          <h4>
            <b><?php echo $first_section_service_repeater_section_third['first_section_service_repeater_section_third_heading']; ?></b>
          </h4>
        </a>
        <div class="content">
          <?php echo $first_section_service_repeater_section_third['first_section_service_repeater_section_third_content']; ?>
        </div>
      </div>
      <div class="col-lg-4"></div>
    </div>
  </div>
</div>
<?php
$second_section_service = get_field('second_section_service');
?>
<div class="third-section-book-service">
  <div class="container">
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
        <h5 style="padding: 20px">
          <?php echo $second_section_service['second_section_service_text']; ?>
          <a
            href="<?php echo $second_section_service['second_section_service_button_url']; ?>"><?php echo $second_section_service['second_section_service_button_text']; ?></a>
        </h5>
        <?php echo apply_shortcodes( '[contact-form-7 id="659" title="Book A Service Form"]' ); ?>
        <p style="font-size: 12px;"><?php the_field('contact_form_bottom_content'); ?></p>
      </div>
      <div class="col-lg-2"></div>
    </div>
  </div>
</div>
<?php
get_footer();
?>
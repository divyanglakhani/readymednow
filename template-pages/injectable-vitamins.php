<?php /* Template Name: Injectable Vitamins */ ?>
<?php 
  get_header();
?>
<?php
$injectable_first_section = get_field('injectable_first_section');
?>
<div class="second-section-vitamins">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <img src="<?php echo $injectable_first_section['injectable_first_section_image']; ?>" alt="" />
      </div>
      <div class="col-lg-6 content1">
        <?php echo $injectable_first_section['injectable_first_section_right_content']; ?>
      </div>
    </div>
    <?php echo $injectable_first_section['injectable_first_section_bottom_content']; ?>
  </div>
</div>
<div class="third-section-vitamins">
  <div class="container">
    <?php if( have_rows('injectable_second_section') ): ?>
    <?php while( have_rows('injectable_second_section') ): the_row();
       $message = get_sub_field('injectable_second_section'); ?>
    <h2><b><?php the_sub_field('injectable_second_section_heading'); ?></b></h2>
    <p>
      <strong><?php the_sub_field('injectable_second_section_content1'); ?></strong>
    </p>
    <div class="row">
      <div class="col-lg-3">
        <img src="<?php the_sub_field('injectable_second_section_image'); ?>" alt="" />
      </div>
      <div class="col-lg-9 content1">
        <?php the_sub_field('injectable_second_section_right_content'); ?>
      </div>
    </div>
    <?php the_sub_field('injectable_second_section_bottom_content'); ?>
    <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>
<?php
get_footer();
?>
<?php /* Template Name: Genetic */ ?>
<?php 
  get_header();
?>
<?php
$genetic_first_section = get_field('genetic_first_section');
?>
<div class="second-section-genetic second-section-telemedicine">
  <div class="container">
    <p style="text-align: center;" class="second-section-genetic-main-content"><b><span
          style="font-size: 14pt;"><?php echo $genetic_first_section['genetic_first_section_title']; ?></span></b></p>
    <div class="row">
      <div class="col-lg-6">
        <?php echo $genetic_first_section['genetic_first_section_content']; ?>
      </div>
      <div class="col-lg-6">
        <img style="width: 100%;" src="<?php echo $genetic_first_section['genetic_first_section_image']; ?>" alt="">
      </div>
    </div>
    <?php
$genetic_second_section = get_field('genetic_second_section');
?>
    <div class="row">
      <div class="col-lg-6">
        <img style="width: 100%;" src="<?php echo $genetic_second_section['genetic_second_section_image']; ?>" alt="">
      </div>
      <div class="col-lg-6">
        <?php echo $genetic_second_section['genetic_second_section_content']; ?>
      </div>
    </div>
    <?php
$genetic_third_section = get_field('genetic_third_section');
?>
    <div class="row">
      <div class="col-lg-6">
        <?php echo $genetic_third_section['genetic_third_section_content']; ?>
      </div>
      <div class="col-lg-6">
        <img style="width: 100%;" src="<?php echo $genetic_third_section['genetic_third_section_image']; ?>" alt="">
      </div>
    </div>
  </div>
</div>
<div class="third-section-genetic">
  <div class="container">
    <a class="button"
      href="<?php echo $genetic_third_section['genetic_third_section_button_url']; ?>"><?php echo $genetic_third_section['genetic_third_section_button_text']; ?></a>
  </div>
</div>
<?php
get_footer();
?>
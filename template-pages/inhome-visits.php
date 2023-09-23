<?php /* Template Name: Inhome Visits */ ?>
<?php 
  get_header();
?>
<?php
$inhome_visits_first_section = get_field('inhome_visits_first_section');
?>
<div class="second-section-inhome">
  <div class="container">
    <?php echo $inhome_visits_first_section['inhome_visits_first_section_content1']; ?>
  </div>
</div>
<div class="third-section-inhome second-section-telemedicine">
  <div class="container">
    <?php echo $inhome_visits_first_section['inhome_visits_first_section_content2']; ?>
  </div>
</div>
<?php
get_footer();
?>
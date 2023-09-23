<?php /* Template Name: Online Appointment */ ?>
<?php 
  get_header();
?>
<?php
$breadcrumbs = get_field('breadcrumbs');
?>
<div class="breadcrumbs online-appointment-breadcrumbs">
  <div class="container">
    <div class="breadcrumbs1 ">
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
$online_appointment_first_section = get_field('online_appointment_first_section');
?>
<div class="second-section-appointment">
  <div class="container">
    <p style="text-align: left;">
      <b><?php echo $online_appointment_first_section['online_appointment_first_section_content']; ?></b>
    </p>
    <a target="_blank" class="btn btn-primary"
      href="<?php echo $online_appointment_first_section['online_appointment_first_section_button_url']; ?>">
      <?php echo $online_appointment_first_section['online_appointment_first_section_button_text']; ?>
    </a>
  </div>
</div>
<div class="third-section-appointment">
  <div class="container">
    <img src="<?php echo $online_appointment_first_section['online_appointment_first_section_image']; ?>" alt="">
  </div>
</div>
<?php
get_footer();
?>
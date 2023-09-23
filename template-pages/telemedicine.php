<?php /* Template Name: Telemedicine */ ?>
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
$telemedicine_first_section = get_field('telemedicine_first_section');
?>
<div class="second-section-telemedicine">
  <div class="container">
    <h2 style="text-align: center;"><?php echo $telemedicine_first_section['telemedicine_first_section_heading']; ?>
    </h2>
    <div class="row">
      <div class="col-lg-6">
        <?php echo $telemedicine_first_section['telemedicine_first_section_left_content']; ?>
      </div>
      <div class="col-lg-6">
        <?php echo $telemedicine_first_section['telemedicine_first_section_right_content']; ?>
        <a
          href="<?php echo $telemedicine_first_section['telemedicine_first_section_button_url']; ?>"><?php echo $telemedicine_first_section['telemedicine_first_section_button_text']; ?></a>
      </div>
    </div>
  </div>
</div>
<div class="third-section-telemedicine" style="text-align: center;">
  <div class="container">
    <h3 style="text-align: center;"><?php echo $telemedicine_first_section['telemedicine_first_section_heading2']; ?>
    </h3>
    <img style="width: 70%;" src="<?php echo $telemedicine_first_section['telemedicine_first_section_image']; ?>"
      alt="">
  </div>
</div>
<div class="fourth-section-telemedicine second-section-telemedicine">
  <div class="container">
    <div class="row">
      <div class="col-lg-6" style="color: #868686;">
        <?php echo $telemedicine_first_section['telemedicine_first_section_left_content2']; ?>
      </div>
      <div class="col-lg-6" style="color: #868686;">
        <?php echo $telemedicine_first_section['telemedicine_first_section_right_content2']; ?>
      </div>
    </div>
  </div>
</div>
<?php
get_footer();
?>
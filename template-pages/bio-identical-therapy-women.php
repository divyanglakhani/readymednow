<?php /* Template Name: Bio Identical Therapy Women */ ?>
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
$bio_identical_therapy_women_second_section = get_field('bio_identical_therapy_women_second_section');
?>
<div class="second-section-therapy-women">
  <div class="container">
    <?php echo $bio_identical_therapy_women_second_section['bio_identical_therapy_women_second_section_heading']; ?>
    <p style="text-align: center;">
      <?php echo $bio_identical_therapy_women_second_section['bio_identical_therapy_women_second_section_video']; ?></p>
    <?php echo $bio_identical_therapy_women_second_section['bio_identical_therapy_women_second_section_content']; ?>
  </div>
  <div class="text-center">
    <a class="button"
      href="<?php echo $bio_identical_therapy_women_second_section['bio_identical_therapy_women_second_section_button_url']; ?>"><?php echo $bio_identical_therapy_women_second_section['bio_identical_therapy_women_second_section_button_text']; ?></a>
  </div>
</div>
<?php
get_footer();
?>
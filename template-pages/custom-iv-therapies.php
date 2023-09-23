<?php /* Template Name: Custom Iv Therapies */ ?>
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
$custom_iv_therapies_second_section = get_field('custom_iv_therapies_second_section');
?>
<div class="second-section-custom">
  <div class="container">
    <div class="content">
      <div class="elementor-element elementor-element-3f811a0f elementor-widget elementor-widget-heading"
        data-id="3f811a0f" data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
          <?php echo $custom_iv_therapies_second_section['custom_iv_therapies_second_section_heading']; ?>
        </div>
      </div>
      <p style="text-align: center;">
        <?php echo $custom_iv_therapies_second_section['custom_iv_therapies_second_section_video']; ?></p>
      <p>&nbsp;</p>
      <?php echo $custom_iv_therapies_second_section['custom_iv_therapies_second_section_content']; ?>
    </div>
    <div class="text-center">
      <a class="button"
        href="<?php echo $custom_iv_therapies_second_section['custom_iv_therapies_second_section_button_url']; ?>"><?php echo $custom_iv_therapies_second_section['custom_iv_therapies_second_section_button_text']; ?></a>
    </div>
  </div>
</div>
<?php
get_footer();
?>
<?php /* Template Name: Contact Us */ ?>

<?php 
  get_header();
?>
<?php
$breadcrumbs = get_field('breadcrumbs');
?>
<div class="breadcrumbs w-100 contact-us-breadcrubms-img">
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
$second_section_contact_us = get_field('second_section_contact_us');
?>
<div class="second-section-contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 left-contact">
        <ul>
          <li>
            <div class="text">
              <strong><?php echo $second_section_contact_us['second_section_contact_us_heading_office']; ?></strong>
              <?php echo $second_section_contact_us['second_section_contact_us_office_content']; ?>
            </div>
          </li>
          <li>
            <div class="text-1">
              <strong><?php echo $second_section_contact_us['second_section_contact_us_heading_email']; ?></strong>
              <p><a
                  href="<?php echo $second_section_contact_us['second_section_contact_us_email_url']; ?>"><?php echo $second_section_contact_us['second_section_contact_us_email']; ?></a>
              </p>
            </div>
          </li>
          <li>
            <div class="text">
              <strong><?php echo $second_section_contact_us['second_section_contact_us_heading_phone']; ?></strong>
              <?php echo $second_section_contact_us['second_section_contact_us_phone_number']; ?>
            </div>
          </li>
        </ul>
      </div>
      <div class="col-lg-8">
        <?php the_field('third_section_contact_us_map'); ?>
      </div>
    </div>
  </div>
</div>
<div class="third-section-contact">
  <div class="container">
    <h3><?php the_field('contact_form_text'); ?></h3>
    <?php echo apply_shortcodes( '[contact-form-7 id="629" title="Contact Us Form"]' ); ?>
  </div>
</div>
<?php
get_footer();
?>
<?php /* Template Name: New Patient Paperwork */ ?>

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
$new_patient_paperwork_first_section = get_field('new_patient_paperwork_first_section');
?>
<div class="second-section-paperwork">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <img src="<?php echo $new_patient_paperwork_first_section['new_patient_paperwork_first_section_image1']; ?>"
          alt="">
      </div>
      <div class="col-lg-6">
        <h1><?php echo $new_patient_paperwork_first_section['new_patient_paperwork_first_section_right_heading']; ?>
        </h1>
        <h5><?php echo $new_patient_paperwork_first_section['new_patient_paperwork_first_section_right_title']; ?></h5>
        <a onmouseleave="this.style.borderColor='#000000'; this.style.backgroundColor='transparent'; this.style.color='#000000'"
          onmouseenter="this.style.borderColor='#000000'; this.style.backgroundColor='#000000'; this.style.color='#ffffff';"
          style="border-color: rgb(0, 0, 0); color: rgb(0, 0, 0); background-color: transparent;"
          href="<?php echo $new_patient_paperwork_first_section['new_patient_paperwork_first_section_button_url']; ?>"
          title=""
          target="_blank"><?php echo $new_patient_paperwork_first_section['new_patient_paperwork_first_section_button_text']; ?></a>
      </div>
    </div>
  </div>
</div>
<div class="third-section-paperwork">
  <div class="container">
    <img src="<?php echo $new_patient_paperwork_first_section['new_patient_paperwork_first_section_image2']; ?>" alt="">
  </div>
</div>
<?php
get_footer();
?>
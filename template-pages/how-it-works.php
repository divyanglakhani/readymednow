<?php /* Template Name: How It Works*/ ?>
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
$how_it_work = get_field('how_it_works_first_section');
?>
<div class="third-section-works">
  <div class="container">
    <div class="third-section-works-img">
      <img src="<?php echo $how_it_work['how_it_works_first_section_image1']; ?>" alt="">
    </div>
    <div class="row">
      <div class="col-lg-6  content1">
        <?php echo $how_it_work['how_it_works_first_section_content']; ?>
      </div>
      <div class="col-lg-6">
        <img src="<?php echo $how_it_work['how_it_works_first_section_image2']; ?>" alt="" />
      </div>
    </div>
  </div>
</div>
<?php
get_footer();
?>
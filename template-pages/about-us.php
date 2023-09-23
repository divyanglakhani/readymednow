<?php /* Template Name: About Us */ ?>

<?php 
  get_header();
?>
<?php
$about_first = get_field('about_first_section');
?>
<div class="second-section-about-us">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 content1">
        <div class="content">
          <h3><?php echo $about_first['about_first_section_title1']; ?></h3>
          <p>
            <?php echo $about_first['about_first_section_text1']; ?>
          </p>
        </div>
      </div>
      <div class="col-lg-6">
        <img src="<?php echo $about_first['about_first_section_image1']; ?>" alt="" />
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <img src="<?php echo $about_first['about_first_section_image2']; ?>" alt="" />
      </div>
      <div class="col-lg-6 content1">
        <div class="content">
          <h3><?php echo $about_first['about_first_section_title2']; ?></h3>
          <p style="text-align: justify">
            <?php echo $about_first['about_first_section_text2']; ?>
          </p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 content1">
        <div class="content">
          <h3><?php echo $about_first['about_first_section_title3']; ?></h3>
          <p style="text-align: justify">
            <?php echo $about_first['about_first_section_text3']; ?>
          </p>
        </div>
      </div>
      <div class="col-lg-6">
        <img src="<?php echo $about_first['about_first_section_image3']; ?>" alt="" />
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <img src="<?php echo $about_first['about_first_section_left_image']; ?>" alt="" />
      </div>
      <div class="col-lg-6">
        <img src="<?php echo $about_first['about_first_section_right_image']; ?>" alt="" />
      </div>
    </div>
  </div>
</div>
<div class="third-section-about-us">
  <div class="container">
    <iframe id="da-iframe" allowfullscale="" src="<?php echo $about_first['about_first_section_video']; ?>"></iframe>
  </div>
</div>
<?php
$about_second = get_field('about_second_section');
?>
<div class="fourth-section-about-us">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h4><?php echo $about_second['about_second_section_text']; ?></h4>
      </div>
      <div class="col-lg-6">
        <a
          href="<?php echo $about_second['about_second_section_button_url']; ?>"><?php echo $about_second['about_second_section_button_text']; ?></a>
      </div>
    </div>
  </div>
</div>
<?php
get_footer();
?>
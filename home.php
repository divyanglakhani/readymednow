<?php /* Template Name: Home */ ?>

<?php
get_header();
?>
<?php
$slider = get_field('slider');
?>
<section id="slider-section">
  <div id="home-slider" class="slidder">
    <div class="slide">
      <img class="img-fluid banner" src="<?php echo $slider['slider_image']; ?>" alt="1-banner">
      <div class="slider-content">
        <rs-layer id="slider-5-slide-9-layer-1" data-type="text" data-color="#337ab7" data-rsp_ch="on"
          data-xy="x:c;y:m;yo:-119px,-101px,-81px,-72px;"
          data-text="w:normal;s:20,13,13,13;l:40,33,25,15;ls:1,0,0,0;fw:700;td:underline;"
          data-dim="w:253px,158px,153px,153px;minh:0px,none,none,none;" data-frame_999="o:0;st:w;" class="rs-layer"
          data-idcheck="true" data-stylerecorder="true" data-initialised="true"><?php echo $slider['slider_title']; ?>
        </rs-layer>
        <h1><?php echo $slider['slider_sub_title']; ?></h1>
        <a href="<?php echo $slider['slider_button_url']; ?>"><button
            class=" button discover-more"><?php echo $slider['slider_button_text']; ?></button></a>
      </div>
    </div>
    <div class="slide">
      <img class="img-fluid banner" src="<?php echo $slider['slider_image2']; ?>" alt="2-banner">
      <div class="left-slider-content">
        <h1><?php echo $slider['slider_title2']; ?></h1>
        <b><?php echo $slider['slider_sub_title2']; ?><br>
        </b>
        <a href="<?php echo $slider['slider_button_url2']; ?>"><button
            class="button discover-more"><?php echo $slider['slider_button_text2']; ?></button></a>
      </div>
    </div>
  </div>
</section>
<?php
$second_section = get_field('second_section_home');
?>
<div class="second-section-index">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 left-second-section-index">
        <div class="left-second-section-index-sub">
        <h4><?php echo $second_section['second_section_home_title']; ?></h4>
        <h2>
          <?php echo $second_section['second_section_home_heading']; ?>
        </h2>
        <p><?php echo $second_section['second_section_home_text']; ?></p>
        <a class="learn-more"
          href="<?php echo $second_section['second_section_home_button_url']; ?>"><?php echo $second_section['second_section_home_button_text']; ?></a>
      </div>
</div>

      <div class="col-lg-6 right-second-section-index">
        <?php if( have_rows('right_second_section_home') ): ?>
        <?php while( have_rows('right_second_section_home') ): the_row();
       $message = get_sub_field('right_second_section_home'); ?>
        <div class="row border-top">
          <div class="col-sm-6 top-left-img-second-index">
            <img src="<?php the_sub_field('right_second_section_home_image'); ?>" alt="">
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 top-right-content-second-index ">
            <h4><?php the_sub_field('right_second_section_home_title'); ?></h4>
            <p><?php the_sub_field('right_second_section_home_text'); ?></p>
            <a href="<?php the_sub_field('right_second_section_home_button_url'); ?>"><?php the_sub_field('right_second_section_home_button_text'); ?><i
                class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
          </div>
        </div>

        <?php endwhile; ?>
        <?php endif; ?>
      </div>

    </div>
  </div>
</div>
<?php
$third_section = get_field('third_section_home');
?>
<div class="third-section-index">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 left-third-index">
        <img src="<?php echo $third_section['third_section_home_image']; ?>" alt="">
      </div>
      <div class="col-lg-6 right-third-index">
        <div>
          <h4 style="align-items: center; font-size: 25px; color: #00325d; text-align: center;">
            <b><?php echo $third_section['third_section_home_title']; ?></b></h4>
          <h2 style="padding:10px 0;
              color: #00325d;
              text-align: center;
          "><b><?php echo $third_section['third_section_home_heading']; ?></b></h2>
          <p><?php echo $third_section['third_section_home_text']; ?></p>
          <a
            href="<?php echo $third_section['third_section_home_url']; ?>"><?php echo $third_section['third_section_home_button_text']; ?></a>

        </div>
      </div>
    </div>
  </div>
</div>
<?php
$fourth_section = get_field('fourth_section_home');
?>
<div class="fourth-section-index">
  <div class="vc_row wpb_row vc_inner vc_row-fluid appointment_row">
    <div class="wpb_column vc_column_container vc_col-sm-12">
      <div class="vc_column-inner">
        <div class="wpb_wrapper">
          <h2 style="color: #00325d;text-align: center" class="vc_custom_heading vc_custom_1684391376901">
            <?php echo $fourth_section['fourth_section_home_heading']; ?></h2>
          <div class="wpb_text_column wpb_content_element ">
            <div class="wpb_wrapper">
              <p style="text-align: center;"><?php echo $fourth_section['fourth_section_home_text']; ?></p>

            </div>
          </div>
          <div class="vc_btn3-container  home-about-us vc_btn3-center vc_custom_1684391382944"><a
              class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-round vc_btn3-style-classic vc_btn3-color-grey"
              href="<?php echo $fourth_section['fourth_section_home_button_url']; ?>"
              title=""><?php echo $fourth_section['fourth_section_home_button_text']; ?></a></div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
$fifth_section = get_field('fifth_section_home');
?>
<div class="fifth-section-index">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 left-fifth-section-index">
        <h4><?php echo $fifth_section['fifth_section_home_title']; ?></h4>
        <h2><?php echo $fifth_section['fifth_section_home_heading']; ?></h2>
        <?php echo $fifth_section['fifth_section_home_text']; ?>
        <a class="vc_btn3"
          href="<?php echo $fifth_section['fifth_section_home_url']; ?>"><?php echo $fifth_section['fifth_section_home_button_text']; ?></a>
      </div>
      <div class="col-lg-4 right-fifth-section-index">
        <div>
          <img src="<?php echo $fifth_section['fifth_section_home_video']; ?>" alt="">  
        </div>

      </div>
    </div>
  </div>
</div>
<?php
$sixth_section = get_field('sixth_section_home');
?>
<div class="vc_row wpb_row vc_row-fluid vc_custom_1684390389640">
  <div class="container">
    <div class="wpb_column vc_column_container vc_col-sm-3">
      <div class="vc_column-inner">
        <div class="wpb_wrapper">
          <div
            class="vc-hoverbox-wrapper  vc-hoverbox-shape--rounded vc-hoverbox-align--center vc-hoverbox-direction--default vc-hoverbox-width--100"
            ontouchstart="">
            <div class="vc-hoverbox">
              <div class="vc-hoverbox-inner">
                <div class="vc-hoverbox-block vc-hoverbox-front"
                  style="background-image: url(https://readymednow.com/wp-content/uploads/2020/05/Banner-3-1-1024x576.png);">
                  <div class="vc-hoverbox-block-inner vc-hoverbox-front-inner">
                  </div>
                </div>
                <div class="vc-hoverbox-block vc-hoverbox-back" style="background-color: #ebebeb;">
                  <div class="vc-hoverbox-block-inner vc-hoverbox-back-inner">
                    <h2 style="text-align:center"><?php echo $sixth_section['sixth_section_home_title1']; ?></h2>
                    <div class="vc_btn3-container vc_btn3-inline"><a
                        class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-grey"
                        href="<?php echo $sixth_section['sixth_section_home_button_url1']; ?>"
                        title="Telemedicine"><?php echo $sixth_section['sixth_section_home_button_text1']; ?></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="wpb_column vc_column_container vc_col-sm-3">
      <div class="vc_column-inner">
        <div class="wpb_wrapper">
          <div
            class="vc-hoverbox-wrapper  vc-hoverbox-shape--rounded vc-hoverbox-align--center vc-hoverbox-direction--default vc-hoverbox-width--100"
            ontouchstart="">
            <div class="vc-hoverbox">
              <div class="vc-hoverbox-inner">
                <div class="vc-hoverbox-block vc-hoverbox-front"
                  style="background-image: url(https://readymednow.com/wp-content/uploads/2021/02/Screenshot-2021-01-07-120745.jpg);">
                  <div class="vc-hoverbox-block-inner vc-hoverbox-front-inner">
                  </div>
                </div>
                <div class="vc-hoverbox-block vc-hoverbox-back" style="background-color: #ebebeb;">
                  <div class="vc-hoverbox-block-inner vc-hoverbox-back-inner">
                    <h2 style="text-align:center"><?php echo $sixth_section['sixth_section_home_title2']; ?></h2>
                    <div class="vc_btn3-container vc_btn3-inline"><a
                        class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-grey"
                        href="<?php echo $sixth_section['sixth_section_home_button_url2']; ?>"
                        title="Inhome Visits"><?php echo $sixth_section['sixth_section_home_button_text2']; ?></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="wpb_column vc_column_container vc_col-sm-3">
      <div class="vc_column-inner">
        <div class="wpb_wrapper">
          <div
            class="vc-hoverbox-wrapper  vc-hoverbox-shape--rounded vc-hoverbox-align--center vc-hoverbox-direction--default vc-hoverbox-width--100"
            ontouchstart="">
            <div class="vc-hoverbox">
              <div class="vc-hoverbox-inner">
                <div class="vc-hoverbox-block vc-hoverbox-front"
                  style="background-image: url(https://readymednow.com/wp-content/uploads/2020/05/first-solution.jpg);">
                  <div class="vc-hoverbox-block-inner vc-hoverbox-front-inner">

                  </div>
                </div>
                <div class="vc-hoverbox-block vc-hoverbox-back" style="background-color: #ebebeb;">
                  <div class="vc-hoverbox-block-inner vc-hoverbox-back-inner">
                    <h2 style="text-align:center"><?php echo $sixth_section['sixth_section_home_title3']; ?></h2>

                    <div class="vc_btn3-container vc_btn3-inline"><a
                        class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-grey"
                        href="<?php echo $sixth_section['sixth_section_home_button_url3']; ?>"
                        title="Genetic"><?php echo $sixth_section['sixth_section_home_button_text3']; ?></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="wpb_column vc_column_container vc_col-sm-3">
      <div class="vc_column-inner">
        <div class="wpb_wrapper">
          <div
            class="vc-hoverbox-wrapper  vc-hoverbox-shape--rounded vc-hoverbox-align--center vc-hoverbox-direction--default vc-hoverbox-width--100"
            ontouchstart="">
            <div class="vc-hoverbox">
              <div class="vc-hoverbox-inner">
                <div class="vc-hoverbox-block vc-hoverbox-front"
                  style="background-image: url(https://readymednow.com/wp-content/uploads/2020/11/corona-1024x576.jpg);">
                  <div class="vc-hoverbox-block-inner vc-hoverbox-front-inner">
                  </div>
                </div>
                <div class="vc-hoverbox-block vc-hoverbox-back" style="background-color: #ebebeb;">
                  <div class="vc-hoverbox-block-inner vc-hoverbox-back-inner">
                    <h2 style="text-align:center"><?php echo $sixth_section['sixth_section_home_title4']; ?></h2>

                    <div class="vc_btn3-container vc_btn3-inline"><a
                        class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-grey"
                        href="<?php echo $sixth_section['sixth_section_home_button_url4']; ?>"
                        title="Coronavirus"><?php echo $sixth_section['sixth_section_home_button_text4']; ?></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
$seventh_section = get_field('seventh_section_home');
?>
<div class="vc_row wpb_row vc_row-fluid vc_custom_1684390394090">
  <div class="container">
    <div class="e-medical-row wpb_column vc_column_container vc_col-sm-1/5">
      <div class="vc_column-inner">
        <div class="wpb_wrapper">
          <div
            class="vc-hoverbox-wrapper  vc-hoverbox-shape--rounded vc-hoverbox-align--center vc-hoverbox-direction--default vc-hoverbox-width--100"
            ontouchstart="">
            <div class="vc-hoverbox">
              <div class="vc-hoverbox-inner">
                <div class="vc-hoverbox-block vc-hoverbox-front"
                  style="background-image: url(https://readymednow.com/wp-content/uploads/2023/01/testosterone-therapy-for-men.jpg);">
                  <div class="vc-hoverbox-block-inner vc-hoverbox-front-inner">

                  </div>
                </div>
                <div class="vc-hoverbox-block vc-hoverbox-back" style="background-color: #ebebeb;">
                  <div class="vc-hoverbox-block-inner vc-hoverbox-back-inner">
                    <h2 style="text-align:center"><?php echo $seventh_section['seventh_section_home_text1']; ?></h2>

                    <div class="vc_btn3-container vc_btn3-inline"><a
                        class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-grey"
                        href="<?php echo $seventh_section['seventh_section_home_butotn_url1']; ?>"
                        title="Testosterone Therapy for Men"><?php echo $seventh_section['seventh_section_home_button_text1']; ?></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="e-medical-row wpb_column vc_column_container vc_col-sm-1/5">
      <div class="vc_column-inner">
        <div class="wpb_wrapper">
          <div
            class="vc-hoverbox-wrapper  vc-hoverbox-shape--rounded vc-hoverbox-align--center vc-hoverbox-direction--default vc-hoverbox-width--100"
            ontouchstart="">
            <div class="vc-hoverbox">
              <div class="vc-hoverbox-inner">
                <div class="vc-hoverbox-block vc-hoverbox-front"
                  style="background-image: url(https://readymednow.com/wp-content/uploads/2023/01/bioidentical-hormone-1024x576.jpg);">
                  <div class="vc-hoverbox-block-inner vc-hoverbox-front-inner">

                  </div>
                </div>
                <div class="vc-hoverbox-block vc-hoverbox-back" style="background-color: #ebebeb;">
                  <div class="vc-hoverbox-block-inner vc-hoverbox-back-inner">
                    <h2 style="text-align:center"><?php echo $seventh_section['seventh_section_home_text2']; ?></h2>

                    <div class="vc_btn3-container vc_btn3-inline"><a
                        class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-grey"
                        href="<?php echo $seventh_section['seventh_section_home_button_url2']; ?>"
                        title="Inhome Visits"><?php echo $seventh_section['seventh_section_home_button_text2']; ?></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="e-medical-row wpb_column vc_column_container vc_col-sm-1/5">
      <div class="vc_column-inner">
        <div class="wpb_wrapper">
          <div
            class="vc-hoverbox-wrapper  vc-hoverbox-shape--rounded vc-hoverbox-align--center vc-hoverbox-direction--default vc-hoverbox-width--100"
            ontouchstart="">
            <div class="vc-hoverbox">
              <div class="vc-hoverbox-inner">
                <div class="vc-hoverbox-block vc-hoverbox-front"
                  style="background-image: url(https://readymednow.com/wp-content/uploads/2023/01/medical-weight-loss.jpg);">
                  <div class="vc-hoverbox-block-inner vc-hoverbox-front-inner">

                  </div>
                </div>
                <div class="vc-hoverbox-block vc-hoverbox-back" style="background-color: #ebebeb;">
                  <div class="vc-hoverbox-block-inner vc-hoverbox-back-inner">
                    <h2 style="text-align:center"><?php echo $seventh_section['seventh_section_home_text3']; ?></h2>

                    <div class="vc_btn3-container vc_btn3-inline"><a
                        class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-grey"
                        href="<?php echo $seventh_section['seventh_section_home_button_url3']; ?>"
                        title="Genetic"><?php echo $seventh_section['seventh_section_home_button_text3']; ?></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="e-medical-row wpb_column vc_column_container vc_col-sm-1/5">
      <div class="vc_column-inner">
        <div class="wpb_wrapper">
          <div
            class="vc-hoverbox-wrapper  vc-hoverbox-shape--rounded vc-hoverbox-align--center vc-hoverbox-direction--default vc-hoverbox-width--100"
            ontouchstart="">
            <div class="vc-hoverbox">
              <div class="vc-hoverbox-inner">
                <div class="vc-hoverbox-block vc-hoverbox-front"
                  style="background-image: url(https://readymednow.com/wp-content/uploads/2023/01/custom-IV-therapy-1024x1024.jpg);">
                  <div class="vc-hoverbox-block-inner vc-hoverbox-front-inner">

                  </div>
                </div>
                <div class="vc-hoverbox-block vc-hoverbox-back" style="background-color: #ebebeb;">
                  <div class="vc-hoverbox-block-inner vc-hoverbox-back-inner">
                    <h2 style="text-align:center"><?php echo $seventh_section['seventh_section_home_text4']; ?></h2>

                    <div class="vc_btn3-container vc_btn3-inline"><a
                        class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-grey"
                        href="<?php echo $seventh_section['seventh_section_home_button__url4']; ?>"
                        title="Coronavirus"><?php echo $seventh_section['seventh_section_home_button_text4']; ?></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="e-medical-row wpb_column vc_column_container vc_col-sm-1/5">
      <div class="vc_column-inner">
        <div class="wpb_wrapper">
          <div
            class="vc-hoverbox-wrapper  vc-hoverbox-shape--rounded vc-hoverbox-align--center vc-hoverbox-direction--default vc-hoverbox-width--100"
            ontouchstart="">
            <div class="vc-hoverbox">
              <div class="vc-hoverbox-inner">
                <div class="vc-hoverbox-block vc-hoverbox-front"
                  style="background-image: url(https://readymednow.com/wp-content/uploads/2023/01/injectable-vitamins-1024x683.jpg);">
                  <div class="vc-hoverbox-block-inner vc-hoverbox-front-inner">

                  </div>
                </div>
                <div class="vc-hoverbox-block vc-hoverbox-back" style="background-color: #ebebeb;">
                  <div class="vc-hoverbox-block-inner vc-hoverbox-back-inner">
                    <h2 style="text-align:center"><?php echo $seventh_section['seventh_section_home_text5']; ?></h2>

                    <div class="vc_btn3-container vc_btn3-inline"><a
                        class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-grey"
                        href="<?php echo $seventh_section['seventh_section_home_button_url5']; ?>"
                        title="Coronavirus"><?php echo $seventh_section['seventh_section_home_button_text5']; ?></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
$eight_section = get_field('eight_section_home');
?>
<div class="sixth-section-index">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <i class="fa fa-heartbeat" aria-hidden="true"></i>
        <h3><?php echo $eight_section['eight_section_home_icon_text1']; ?></h3>
      </div>
      <div class="col-lg-4">
        <i class="fa fa-clock-o" aria-hidden="true"></i>
        <h3><?php echo $eight_section['eight_section_home_icon_text2']; ?></h3>
      </div>
      <div class="col-lg-4">
        <i class="fa fa-sun-o" aria-hidden="true"></i>
        <h3><?php echo $eight_section['eight_section_home_icon_text3']; ?></h3>
      </div>
    </div>
  </div>
</div>
<!-- start count stats -->
<?php
$ninth_section = get_field('ninth_section_home');
?>
<section id="counter-stats" class="wow fadeInRight" data-wow-duration="1.4s">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 d-flex stats">
        <div class="counting" data-count="2">0</div>
        <h5><?php echo $ninth_section['ninth_section_home_text1']; ?>
        </h5>
      </div>

      <div class="col-lg-3 d-flex stats">
        <div class="counting" data-count="32">0</div>
        <h5><?php echo $ninth_section['ninth_section_home_text2']; ?></h5>
      </div>

      <div class="col-lg-3 d-flex stats">
        <div class="counting" data-count="452">0</div>
        <h5><?php echo $ninth_section['ninth_section_home_text3']; ?></h5>
      </div>

      <div class="col-lg-3 d-flex stats">
        <div class="counting" data-count="8">0</div>
        <h5><?php echo $ninth_section['ninth_section_home_text4']; ?></h5>
      </div>


    </div>
    <!-- end row -->
  </div>
  <!-- end container -->

</section>

<!-- end cont stats -->
<?php
$tenth_section = get_field('tenth_section_home');
?>
<div class="seventh-section-index">

  <div class="container">
    <div class="row">
      <?php echo $tenth_section['tenth_section_home_iframe_map']; ?>
      <div class="col-lg-8">
        <p></p>
      </div>

      <div class="col-lg-4">
        <div class="vc_column-inner vc_custom_1443266080216">
          <div class="wpb_wrapper">
            <aside class="widget widget_contacts wpb_content_element vc_widgets vc_custom_1679145616541 style_1">
              <ul>
                <li>
                  <div class="text"><b><?php echo $tenth_section['tenth_section_home_location_heading']; ?></b>
                    <?php echo $tenth_section['tenth_section_home_location_text']; ?>
                  </div>
                  <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                </li>
                <li>
                  <div class="text home-email"><b><?php echo $tenth_section['tenth_section_home_email_heading']; ?></b>
                    <p><a
                        href="<?php echo $tenth_section['tenth_section_home_email_url']; ?>"><?php echo $tenth_section['tenth_section_home_email_text']; ?></a>
                    </p>
                  </div>
                  <div class="icon"><i class="fa fa-envelope-o"></i></div>
                </li>
                <li>
                  <div class="text"><b><?php echo $tenth_section['tenth_section_home_phone_heading']; ?></b>
                    <?php echo $tenth_section['tenth_section_home_phone_text']; ?>
                  </div>
                  <div class="icon"><i class="fa fa-mobile" aria-hidden="true"></i></div>
                </li>
              </ul>
            </aside>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>
<?php
get_footer();
?>
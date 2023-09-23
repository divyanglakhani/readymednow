<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ready_Med
 */

?>

<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <?php
$footer_left = get_field('left_footer', 'option');
?>
        <p>
          <?php echo $footer_left['left_footer_text']; ?> <a href="<?php echo $footer_left['left_footer_url']; ?>">Ready
            Med</a>
        </p>
      </div>
      <div class="col-lg-6">
        <div class="social-links">
          <?php
                            $social_follow = get_field('all_social_media', 'option');
                            foreach ($social_follow as $s_follow) :
                            ?>
          <?php if (($s_follow === 'Facebook') && !empty(get_field('s_facebook', 'option'))) { ?>
          <li><a href="<?php echo get_field('s_facebook', 'option'); ?>" target="_blank" data-sal="slide-up"
              data-sal-duration="500" data-sal-delay="100"><i class="fa fa-facebook-f"></i></a></li>
          <?php }
                                if (($s_follow === 'Linkedin') && !empty(get_field('s_linkedin', 'option'))) { ?>
          <li><a href="<?php echo get_field('s_linkedin', 'option'); ?>" target="_blank" data-sal="slide-up"
              data-sal-duration="500" data-sal-delay="400"><i class="fa fa-linkedin"></i></a></li>
          <?php }
                                if (($s_follow === 'Instagram') && !empty(get_field('s_instagram', 'option'))) { ?>
          <li><a href="<?php echo get_field('s_instagram', 'option'); ?>" target="_blank" data-sal="slide-up"
              data-sal-duration="500" data-sal-delay="500"><i class="fa fa-instagram"></i></a></li>
          <?php }
                                if (($s_follow === 'Youtube') && !empty(get_field('youtube', 'option'))) { ?>
          <li><a href="<?php echo get_field('youtube', 'option'); ?>" target="_blank" data-sal="slide-up"
              data-sal-duration="500" data-sal-delay="400"><i class="fa fa-youtube"></i></a></li>
          <?php }?>
          <?php 
                                if (($s_follow === 'Twitter') && !empty(get_field('twitter', 'option'))) { ?>
          <li><a href="<?php echo get_field('twitter', 'option'); ?>" target="_blank" data-sal="slide-up"
              data-sal-duration="500" data-sal-delay="400"><i class="fa fa-twitter"></i></a></li>
          <?php } ?>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
  </div>
</footer>

<?php wp_footer(); ?>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.min.js"></script>
<!-- Slick JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
</body>

</html>
<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

  <footer class="site-footer" id="colophon">

    <div class="<?php echo esc_html( $container ); ?>">

      <div class="row align-items-center">
        <!-- Left Column -->
        <div class="col-6 col-md-3 left-col">
          <nav class="contact-nav-footer icon-nav">
            <a href="#"><span class="fa fa-phone"></span></a>
            <a href="#"><span class="fa fa-envelope"></span></a>
            <a href="#"><span class="fa fa-map-marker"></span></a>
          </nav>
        </div><!--col end -->

        <!-- Middle Column -->
        <div class="col-12 col-md-6 middle-col">
          <h5 class="site-info">&copy; <?php echo date('Y'); ?> | Advantage Equipment Inspections</h5>
          <nav class="legal-links">
            <a href="#">Terms &amp; Conditions</a>
            <a href="#">Disclosure Statement</a>
          </nav>
        </div><!--col end -->

        <!-- Right Column -->
        <div class="col-6 col-md-3 right-col">
          <nav class="social-nav-footer icon-nav">
            <a href="#"><span class="fa fa-facebook"></span></a>
            <a href="#"><span class="fa fa-linkedin"></span></a>
            <a href="#"><span class="fa fa-youtube"></span></a>
            <a href="#"><span class="fa fa-twitter"></span></a>
          </nav>
        </div><!--col end -->

      </div><!-- row end -->

    </div><!-- container end -->

  </footer><!-- #colophon -->

</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript">
  // Select all links with hashes
  jQuery('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    javascript:void(0);
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      &&
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = jQuery(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        jQuery('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = jQuery(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
</script>

</body>

</html>

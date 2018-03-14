<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );

?>

<div class="wrapper" id="wrapper-404">

	<div class="<?php echo esc_html( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main">

					<section class="error-404 not-found">

						<div class="page-content">

							<h1 class="error-404-title">404</h1>

							<h2 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.',
							'understrap' ); ?></h2>

							<p>It looks like nothing was found at this location. Maybe we should go back to the <a href="<?php echo get_home_url(); ?>">homepage</a>?</p>

							<p><a class="btn btn-primary" href="<?php echo get_home_url(); ?>">Homepage</a></p>

						</div><!-- .page-content -->

					</section><!-- .error-404 -->

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>

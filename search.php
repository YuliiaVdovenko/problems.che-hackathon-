<?php
/**
 * The template for displaying search results pages.
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper padding-page" id="search-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<main class="site-main" id="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">

					<h1 class="page-title search-title text-center"><?php printf(
						/* translators:*/
						esc_html__( 'Результати пошуку для: %s', 'understrap' ),
						'<span class="search-title">' . get_search_query() . '</span>' ); ?></h1>

					</header><!-- .page-header -->

					<div class="col-md-6 offset-md-3 pb-5">
						<?php get_search_form(); ?>
					</div>

					<div class="d-flex flex-wrap justify-content-center">

						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>

							<?php
						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'loop-templates/content', 'search' );
						?>

					<?php endwhile; ?>

				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>
			</div>

		</main><!-- #main -->

		<!-- The pagination component -->
		<?php understrap_pagination(); ?>

	</div><!-- #primary -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>

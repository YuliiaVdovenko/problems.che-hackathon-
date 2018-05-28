<?php
/**
 * Search results partial template.
 *
 * @package understrap
 */

?>
<div class="col-md-6">
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="block-shadow p-5 mb-5">

	<header class="entry-header search-title pb-3">

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
		'</a></h2>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>

			<div class="entry-meta">

				<?php understrap_posted_on(); ?>

			</div><!-- .entry-meta -->

		<?php endif; ?>

	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_post_thumbnail(); ?>

		<a href="<?php the_permalink();?>" class="start-button d-inline-block my-3">
            <?= get_field('button_text')?>
        </a>

	</div><!-- .entry-summary -->

	
</div>

</article><!-- #post-## -->
</div>

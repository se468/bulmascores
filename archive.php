<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bulmascores
 */

get_header(); ?>
	<div id="primary" class="container mt-2 mb-2">
		<div class="columns">
		  	<div class="column is-two-thirds">
				<main id="main" class="site-main">
					

				<?php
				if ( have_posts() ) : ?>
					<header class="page-header mb-2">
						<?php
							the_archive_title( '<h1 class="title">', '</h1>' );
							the_archive_description( '<div class="archive-description">', '</div>' );
						?>
					</header><!-- .page-header -->
					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', get_post_type() );


						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>

				</main><!-- #main -->
			</div>
		  	<div class="column">
		  		<?php get_sidebar();?>
		  	</div>
		</div>
	</div><!-- #primary -->

<?php
get_footer();


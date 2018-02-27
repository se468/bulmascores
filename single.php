<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Bulmascores
 */

get_header(); ?>

	<div id="primary" class="container mt-2 mb-2">
		<div class="columns">
		  	<div class="column is-two-thirds">
				<main id="main" class="site-main mb-2">
				<?php
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content', get_post_type() );
				endwhile; 
				?>

				</main><!-- #main -->

				<div>
					
					<?php 
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>
				</div>
			</div>
		  	<div class="column">
		  		<?php get_sidebar();?>
		  	</div>
		</div>
	</div><!-- #primary -->

<?php
get_footer();

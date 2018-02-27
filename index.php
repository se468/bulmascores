<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bulmascores
 */

get_header(); ?>

	<div id="primary" class="container mt-2 mb-2">
		<div class="columns">
		  	<div class="column is-two-thirds">
		  		<?php
				if ( have_posts() ) :

					while ( have_posts() ) : the_post();
						
						get_template_part( 'template-parts/content', get_post_format() );

					endwhile;

					the_posts_pagination( array( 'mid_size' => 2 ) );

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
		  	</div>
		  	<div class="column">
		  		<?php get_sidebar();?>
		  	</div>
		</div>
	</div><!-- #primary -->

<?php

get_footer();

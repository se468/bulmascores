<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Bulmascores
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section class="hero is-primary is-fullheight error-404 not-found">
		        <div class="hero-body">
		            <div class="container">
		                <h1 class="title">404</h1>
		                <h2 class="subtitle">
		                   <?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'bulmascores' ); ?>
		                </h2>
						<div class="mb-1">
							<?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'bulmascores' ); ?>
						</div>

						<?php
							get_search_form();
						?>

		            </div>
		        </div>
		    </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

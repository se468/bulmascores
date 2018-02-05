<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bulmascores
 */

?>

	</div><!-- #content -->

	<footer class="footer">
		<div class="container">
			<div class="content has-text-centered">
				<p>
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bulmascores' ) ); ?>"><?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'bulmascores' ), 'WordPress' );
					?></a>
					<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'bulmascores' ), 'bulmascores', '<a href="https://seyongcho.com">Seyong Cho</a>' );
					?>
				</p>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

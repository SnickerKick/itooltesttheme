<?php
/**
 * The template for displaying the footer.
 *
 * @package Insight_Tools
 */
?>

		<footer id="colophon" class="site-footer" role="contentinfo">

			<div class="site-info">
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'itool' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s.', 'itool' ), 'WordPress' ); ?></a>
					<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'itool' ), 'Insight Tools', '<a href="https://github.com/SnickerKick/itooltesttheme" rel="designer">insight-tools.com</a>' ); ?>
			</div><!-- .site-info -->

			<?php
			// Prepare social media nav
			if ( has_nav_menu( 'social' ) ) : ?>
				<div id="social">
					<?php wp_nav_menu( array(
						'theme_location' => 'social',
					 	'link_before'    => '<span class="screen-reader-text">',
						'link_after'     => '</span>',
					 	'fallback_cb'    => false,
					 	'depth'          => 1,
					) );
				 	?>
				</div><!-- #social -->
			<?php endif; ?>

		</footer><!-- #colophon -->

		<?php wp_footer(); ?>

	</body>
</html>

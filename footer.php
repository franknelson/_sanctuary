<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _sanctuary
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<!-- <div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', '_sanctuary' ) ); ?>"><?php printf( __( 'Proudly powered by %s', '_sanctuary' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', '_sanctuary' ), '_sanctuary', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div> -->
        
        <button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Social Menu', '_sanctuary' ); ?></button>
        <?php wp_nav_menu( array( 'theme_location' => 'social', 'link_before' => '<span class="screen-reader-text">', 'link_after' => '</span>', ) ); ?>
        
        <div class="copyright">
            <p>
                &copy Copyright Sanctuary Eco-Retreat <?php echo date("Y") ?>
            </p>
        </div>
        
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

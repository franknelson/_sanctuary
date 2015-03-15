<?php
/**
 * The template for displaying all single posts.
 *
 * @package _sanctuary
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            
            <div class="bkd group1">
                <img src="<?php the_field('background_image'); ?>" alt="" />
            </div>
            
            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'content', 'cabin_type' ); ?>

    <!--			<?php the_post_navigation(); ?>-->



            <?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

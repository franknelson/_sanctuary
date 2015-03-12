<?php

/*
 * Template Name: Home Page
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        
            
            <div class="bkd group1">
            
                <img src="<?php the_field('bkd_img_1'); ?>" alt="" />
                <p class="line1"><?php the_field('bkd_1_text'); ?></p>
                <p class="line2"><?php the_field('bkd_1_text_2'); ?></p>
            
            </div>
            
            <div class="bkd group2">
            
                <img src="<?php the_field('bkd_img_2'); ?>" alt="" />
                <p class="line1"><?php the_field('bkd_2_text'); ?></p>
                <p class="line2"><?php the_field('bkd_2_text_2'); ?></p>
            
            </div>
            
            <div class="bkd group3">
            
                <img src="<?php the_field('bkd_img_3'); ?>" alt="" />
                <p class="line1"><?php the_field('bkd_3_text'); ?></p>
                <p class="line2"><?php the_field('bkd_3_text_2'); ?></p>
            
            </div>
            
            <div class="bkd group4">
            
                <img src="<?php the_field('bkd_img_4'); ?>" alt="" />
                <p class="line1"><?php the_field('bkd_4_text'); ?></p>
                <p class="line2"><?php the_field('bkd_4_text_2'); ?></p>
            
            </div>
            
            <div class="bkd group5">
            
                <img src="<?php the_field('bkd_img_5'); ?>" alt="" />
                <p class="line1"><?php the_field('bkd_5_text'); ?></p>
                <p class="line2"><?php the_field('bkd_5_text_2'); ?></p>
            
            </div>
            
		</main>
	</div>

<?php get_footer(); ?>

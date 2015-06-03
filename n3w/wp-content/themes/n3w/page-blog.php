<?php
/**
Template Name: Page blog
 */
 ?>



        <?php

        $wp_query = new WP_Query(); $wp_query->query('showposts=5' . '&paged='.$paged);
        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

            <h2><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>

        <?php endwhile; ?>


        <?php wp_reset_postdata(); ?>


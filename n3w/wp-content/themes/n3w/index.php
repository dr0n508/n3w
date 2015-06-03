<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php the_excerpt()?>
    <?php the_post_thumbnail('full', 'class=image-wrapper')?>
    <?php the_time('j.m.Y')?>
<?php endwhile; ?>
    <!-- post navigation -->
<?php else: ?>
    <!-- no posts found -->
<?php endif; ?>
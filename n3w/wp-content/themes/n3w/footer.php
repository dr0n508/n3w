<footer>
    <div class="container">

        <section class="footer-part1 col-lg-4">
            <div class="logo-footer"><a href="#"><?php bloginfo('name'); ?></a></div>

            <p><?php bloginfo('description'); ?></p>

            <address>
                <p class="phone">Phone: <span>182 2569 5896</span></p>
                <p class="email">e-mail: <span>info@modu.versus</span></p>
            </address>
        </section>

        <section class="footer-part2 col-lg-2">
            <h4>Company</h4>
            <ul>

                <?php wp_nav_menu(array('theme_location' => 'footer-menu'))?>

            </ul>
        </section>

        <section class="footer-part3 col-lg-2">
            <h4>Community</h4>
            <ul>
                <li><a href="">Blog</a></li>
                <li><a href="">Forum</a></li>
                <li><a href="">Support</a></li>
                <li><a href="">Newsletter</a></li>
            </ul>

        </section>

        <section class="footer-part4 col-lg-4">
            <h4>from the<span> Blog</span></h4>
            <ul>
                <li>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article class="clearfix">
                        <!-- post -->
                        <?php the_post_thumbnail('full', 'class=image-wrapper')?>
                        <div class="wrap">
                            <h6><?php the_title()?></h6>
                            <time><?php the_time('j.m.Y')?></time>
                        </div>
                </li>
                    <?php endwhile; ?>
                        <!-- post navigation -->
                    <?php else: ?>
                        <!-- no posts found -->
                        <?php endif; ?>
            </ul>
        </section>

    </div>
    <section class="copyright-social clearfix">
        <div class="container">
            <p class="copyright"><?php the_time(Y) ?>  <?php bloginfo('name'); ?></p>
            <ul>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
            </ul>
        </div>
    </section>
</footer>



<?php  wp_footer()?>

</body>
</html>
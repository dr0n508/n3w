<?php get_header() ?>

<section class="content">

    <section class="slider">
        <div id="owl-demo" class="owl-carousel owl-theme">

            <?php $news = new WP_Query( array('post_type' => 'slider', 'posts_per_page' => -1));?>


                    <?php while ( $news->have_posts() ) : $news->the_post(); ?>
            <div class="item">
                        <!-- post -->
                <h1><span><?php the_title()?></span></h1>
                <?php the_content()?>
            </div>
                    <?php endwhile; ?>
                    <!-- post navigation -->








        </div>
    </section>

    <section class="top-services">
        <div class="container">
            <section class="intro clearfix">
                <div class="wrap-header-intro">
                    <h3>Some of our top services</h3>
                    <p>Ut eleifend libero sed neque rhoncus consequat. Maecenas tincidunt, augue et rutrum condimentum, libero lectus mattis orci, ut commodo. </p>
                </div>
                <button class="view-more-btn">View more</button>
            </section>

            <section class="services">
                <ul>

                    <?php $social = new WP_Query( array('post_type' => '$services', 'posts_per_page' => -1)); ?>
                    <?php while ( $social->have_posts() ) : $social->the_post(); ?>
                        <!-- post -->

                    <li class="col-lg-3">
                        <div class="wrapper-services">

                        <?php the_post_thumbnail('full')?>
                        <h4><?php the_title()?></h4>
                        <?php the_content()?>

                        <div class="button"><a href="<?php echo (get_post_meta($post->ID, 'link', true)); ?>">read more</a></div>

                    <?php endwhile; ?>
                        </div>
                    </li>
                </ul>
            </section>
        </div>
    </section>

    <section class="about">
        <header>
            <div class="container">
                <h2>Why modus versus?</h2>
                <p>Capacitance cascading integer reflective interface data development high bus cache dithering transponder.  </p>
            </div>


            <?php $news = new WP_Query( array('post_type' => 'yourImage', 'posts_per_page' => -1));?>


            <?php while ( $news->have_posts() ) : $news->the_post(); ?>

                    <!-- post -->
                    <?php the_post_thumbnail()?>
                    <?php the_content()?>

            <?php endwhile; ?>
            <!-- post navigation -->



        </header>

        <section class="content-about clearfix">
            <div class="container">
                <section class="why-choose-us col-lg-3">

                    <?php $whyUs = new WP_Query( array('post_type' => 'whyUs', 'posts_per_page' => -1));?>
                    <?php while ( $whyUs->have_posts() ) : $whyUs->the_post(); ?>
                        <!-- post -->
                    <h4><?php the_title()?></h4>
                        <?php the_content()?>
                    <?php endwhile; ?>
                    <!-- post navigation -->
                </section>

                <section class="our-skill col-lg-6">
                    <p>Curabitur quis nisl in leo euismod venenatis eu in diam. Etiam auctor diam pellentesque lectus <a href="#">vehicula mattis.</a> Nulla ac massa at dolor condimentum eleifend vitae vitae urna.</p>
                    <ul>
                        <li>
                            <p>50</p>
                            <h5>Suspendisse</h5>
                        </li>
                        <li>
                            <p>50</p>
                            <h5>Suspendisse</h5>
                        </li>
                        <li><p>50</p>
                            <h5>Suspendisse</h5></li>
                        <li>
                            <p>50</p>
                            <h5>Suspendisse</h5>
                        </li>
                    </ul>

                </section>

                <?php if(!dynamic_sidebar('client-say')): ?>
                <?php endif; ?>
                <?php the_widget('wp_widget_text')?>


                </section>
            </div>


            <section class="our-happy-clients">
                <div class="container">
                    <h4><span>Our Happy Clients</span></h4>
                    <div id="owl-demo2" class="owl-carousel owl-theme">
                            <?php $news = new WP_Query( array('post_type' => 'clients', 'posts_per_page' => -1));?>
                            <?php while ( $news->have_posts() ) : $news->the_post(); ?>
                                <div class="item">
                                    <!-- post -->
                                  <?php the_post_thumbnail()?>
                                </div>
                            <?php endwhile; ?>
                            <!-- post navigation -->
                    </div>
                </div>
            </section>

        </section>
    </section>
</section>

<?php get_footer() ?>
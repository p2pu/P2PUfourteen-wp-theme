<?php get_header(); ?>

    <main id="inner-content" class="container clearfix">
        <?php get_template_part('heading', 'fixed'); ?>
        <div id="main" class="col-12 border-0" role="main">
            <div id="content">
                <p><a href="<?php bloginfo('url'); ?>"><i class="fas fa-sync"></i> Show all posts</a></p>

                <?php if (have_posts()) : ?>

                    <h1 class="archive-title"><span><?php _e( 'Search Results for:', 'bonestheme' ); ?></span> <?php echo esc_attr(get_search_query()); ?></h1>

                    <?php while (have_posts()) : the_post(); ?>

                       <?php get_template_part( 'content-p2pu', get_post_format() ); ?>

                <?php endwhile; ?>

                        <?php if (function_exists('bones_page_navi')) { ?>
                                <?php bones_page_navi(); ?>
                        <?php } else { ?>
                                <nav class="wp-prev-next">
                                        <ul class="clearfix">
                                            <li class="prev-link"><?php next_posts_link( __( '&laquo; Older Entries', 'bonestheme' )) ?></li>
                                            <li class="next-link"><?php previous_posts_link( __( 'Newer Entries &raquo;', 'bonestheme' )) ?></li>
                                        </ul>
                                </nav>
                        <?php } ?>

                    <?php else : ?>

                            <article id="post-not-found" class="hentry clearfix row">
                                <div class="col-md-3 col-sm-3 col-12">
                                    <img src="<?php bloginfo('template_url'); ?>/library/images/noresults.jpg"
                                         alt="Sorry but no results have been found"/>
                                </div>
                                <div class="col-md-9 col-sm-9 col-12">
                                <header class="article-header">
                                    <h1><?php _e( 'Sorry, No Results.', 'bonestheme' ); ?></h1>
                                </header>
                                <section class="entry-content">
                                    <p><?php _e( 'Try your search again.', 'bonestheme' ); ?></p>
                                </section>
                                </div>
                           </article>

                    <?php endif; ?>

            </div>

        </div>
    </main>

<?php get_footer(); ?>

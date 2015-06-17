<?php get_header(); ?>



<div id="inner-content" class="container clearfix">
        <?php get_template_part('heading', 'fixed'); ?>
        <div id="main" class="col-md-8 col-md-offset-2" role="main">

            <div id="content">

                <h1 class="archive-title h2"><?php post_type_archive_title(); ?></h1>

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">

                        <header class="article-header">

                            <h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                            <p class="byline vcard"><?php
                                printf( __( 'by <span class="author">%3$s</span> on <time class="updated" datetime="%1$s" pubdate>%2$s</time> <span class="amp">&middot;</span> <span class="comments-count" ><a href="%5$s#disqus_thread">%4$s Comments</a></span>. ', 'bonestheme' ),
                                    get_the_time( 'Y-m-j' ),
                                    get_the_time( __( 'F j, Y', 'bonestheme' ) ),
                                    bones_get_the_author_posts_link(),
                                    wp_count_comments( $id )->approved,
                                    get_permalink( $id )
                                );
                                if ( is_user_logged_in() ) {
                                    echo '<a href="' . get_edit_post_link( $id, $context ) . '"><small>[EDIT]</small></a>';
                                }
                            ?></p>

                        </header>

                        <section class="entry-content clearfix">

                            <?php the_excerpt(); ?>

                        </section>

                        <footer class="article-footer">

                        </footer>

                    </article>

                    <?php endwhile; ?>

                            <?php if ( function_exists( 'bones_page_navi' ) ) { ?>
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

                            <article id="post-not-found" class="hentry clearfix">
                                <header class="article-header">
                                    <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
                                </header>
                                <section class="entry-content">
                                    <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
                                </section>
                                <footer class="article-footer">
                                        <p><?php _e( 'This is the error message in the custom posty type archive template.', 'bonestheme' ); ?></p>
                                </footer>
                            </article>

                    <?php endif; ?>

        </div>



    </div>

</div>

<?php get_footer(); ?>

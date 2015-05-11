<?php get_header(); ?>


    <div id="inner-content" class="container clearfix">

        <?php get_template_part('heading','fixed'); ?>


        <div id="main" class="col-md-9 first" role="main">

            <div id="content">

                <a href="<?php bloginfo('url'); ?>"><i class="fa fa-refresh"></i> Show all posts</a>

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

                        <header class="article-header">

                            <h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
                            <p class="byline vcard">
                                <?php
                                printf( __( '<small><i>by <strong>%3$s</strong> on <strong><time class="updated" datetime="%1$s">%2$s</time></strong> <span class="comments-count" >in categories: <strong>%4$s</strong></i></small>', 'bonestheme' ),
                                    get_the_time( 'Y-m-j' ),
                                    get_the_time( __( 'F j, Y', 'bonestheme' ) ),
                                    bones_get_the_author_posts_link(),
                                    implode(", ", wp_get_post_categories( $id, array('fields' => 'names') )),
                                    get_permalink( $id )
                                );?>
                            </p>

                        </header>

                        <section class="entry-content clearfix" itemprop="articleBody">
                            <?php the_content(); ?>
                        </section>

                        <hr/>

                        <footer class="article-footer">
                            <p>
                                Start the discussion at <a href="http://community.p2pu.org" target="_blank"><strong>community.p2pu.org</strong></a>
                            </p>
                            <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

                        </footer>

                        <?php comments_template(); ?>

                    </article>

                <?php endwhile; ?>

                <?php else : ?>

                    <article id="post-not-found" class="hentry clearfix">
                            <header class="article-header">
                                <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
                            </header>
                            <section class="entry-content">
                                <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
                            </section>
                            <footer class="article-footer">
                                    <p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
                            </footer>
                    </article>

                <?php endif; ?>

                <br/>
                <p>
                    <a href="<?php bloginfo('url'); ?>"><i class="fa fa-refresh"></i> Show all posts</a>
                </p>

            </div>

        </div>

        <?php get_sidebar('Sidebar 1'); ?>

    </div>


<?php get_footer(); ?>

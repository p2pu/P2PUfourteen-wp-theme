<?php get_header(); ?>

    <main id="inner-content" class="bg-light clearfix pos-relative">

        <div id="main" class="container" role="main">

            <div id="content">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <div class="header-image">
                        <?php the_post_thumbnail('bones-thumb-1440'); ?>
                    </div>

                    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix card single-post'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

                        <div class="card-body p-md-5">

                            <header class="article-header mb-4">

                                <h1 class="entry-title single-title card-title" itemprop="headline"><?php the_title(); ?></h1>
                                <p class="byline vcard minicaps text-left">
                                    <?php
                                    printf( __( '<span>%3$s</span> | <time class="updated" datetime="%1$s">%2$s</time>', 'bonestheme' ),
                                        get_the_time( 'Y-m-j' ),
                                        get_the_time( __( 'F j, Y', 'bonestheme' ) ),
                                        bones_get_the_author_posts_link(),
                                        get_permalink( $id )
                                    );?>
                                </p>

                            </header>

                            <hr>

                            <section class="entry-content clearfix my-4" itemprop="articleBody">
                                <div class="card-text">
                                    <?php the_content(); ?>
                                </div>
                            </section>

                            <hr>

                            <footer class="article-footer">
                                <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> <span class="badge badge-primary p-2 mx-1">', '</span><span class="badge badge-primary p-2 mx-1"> ', '</span></p>' ); ?>

                            </footer>
                        </div>
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
                    <a href="<?php bloginfo('url'); ?>"><i class="fas fa-arrow-left mr-3"></i>Back to Blog home</a>
                </p>

            </div>
        </div>

    </main>


<?php get_footer(); ?>

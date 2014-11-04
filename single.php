<?php get_header(); ?>

    <div id="inner-content" class="container clearfix">

        <div id="main" class="col-md-8 col-md-offset-2 " role="main">

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

                            <div class="post-footer social">

                                <div class="left">
                                    <?php printf(__('If you enjoyed this article, please consider sharing it!'));?>
                                </div>
                                <div class="right">
                                    <?php
                                        $upermalink = urlencode(get_permalink());
                                        $utitle = urlencode(get_the_title());
                                    ?>

                                        <a href="http://reddit.com/submit?phase=2&amp;url=<?php echo $upermalink;?>&amp;title=<?php echo urlencode( strip_tags($utitle) );?>" title="<?php printf( __('Share on'));?> Reddit" rel="nofollow" target="_blank"><img src="<?php bloginfo ('template_url'); ?>/library/images/share_icons/reddit.png" alt="Reddit" /></a>

                                        <a href="http://www.facebook.com/sharer.php?u=<?php echo $upermalink; ?>&amp;t=<?php echo urlencode( strip_tags($utitle) );?>" title="<?php printf( __('Share on'));?> Facebook" rel="nofollow" target="_blank"><img src="<?php bloginfo ('template_url'); ?>/library/images/share_icons/facebook.png" alt="Facebook" /></a>

                                        <a href="http://twitter.com/?status=New%20post%20%40p2pu%20blog%3A%20<?php echo $utitle;?>%20<?php echo $upermalink;?>%20" title="<?php printf( __('Share on'));?> Twitter" rel="nofollow" target="_blank"><img src="<?php bloginfo ('template_url'); ?>/library/images/share_icons/twitter.png" alt="Twitter" /></a>

                                        <a href="https://plus.google.com/share?url=<?php echo $upermalink;?>" target="_blank" title="<?php printf( __('Share on'));?> Google+" rel="nofollow" ><img src="<?php bloginfo ('template_url'); ?>/library/images/share_icons/google.png" alt="Google+" ></a>

                                        <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $upermalink;?>" target="_blank" title="<?php printf( __('Share on'));?> Linkedin" rel="nofollow"><img src="<?php bloginfo ('template_url'); ?>/library/images/share_icons/linkedin.png" alt="LinkedIn" ></a>

                                        <a href="http://www.stumbleupon.com/submit?url=<?php echo $upermalink;?>&amp;title=<?php echo $utitle;?>" target="_blank" title="<?php printf( __('Share on'));?> Stumbleupon" rel="nofollow"><img src="<?php bloginfo ('template_url'); ?>/library/images/share_icons/stumbleupon.png" alt="StumbleUpon"></a>

                                        <a href="http://www.tumblr.com/share/link?url=<?php echo $upermalink; ?>&amp;name=<?php echo $utitle; ?>" title="<?php printf( __('Share on'));?> Tumblr" rel="nofollow" target="_blank"><img src="<?php bloginfo ('template_url'); ?>/library/images/share_icons/tumblr.png" alt="tumblr"></a>

                                </div>
                                <div class="clear"></div>
                            </div>
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

    </div>

<?php get_footer(); ?>

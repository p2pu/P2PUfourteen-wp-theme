<?php get_header(); ?>
	<div id="inner-content" class="container clearfix">
		<header class="page-header">
			<h1>Blog</h1>
		</header>
        <div class="header">
            <hr style="margin-bottom: 6px;">
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <div class="pull-left col-md-6">
                            <?php get_search_form(); ?>
                        </div>
                        <?php /*
                        <div id="layout-toggle" class="pull-right hidden-xs hidden-sm ">
                            <a class="grid-view on" href="javascript:void(0);" title="Grid View" data-layout="grid"> <i class="fa fa-th-large"></i> </a> <a class="feed-view" href="javascript:void(0);" title="Feed View" data-layout="feed"> <i class="fa fa-list"></i> </a>
                        </div>
                        */ ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="social-links pull-right">
                        <a href="https://twitter.com/p2pu" target="_blank">
                            <i class="fa fa-twitter" style="color: #55ACEE;"></i>
                        </a>
                        <a href="https://www.facebook.com/P2PUniversity?fref=ts" target="_blank">
                            <i class="fa fa-facebook" style="color: #45619D;"></i>
                        </a>
                        <a href="<?php get_site_url(); ?>/feed/">
                            <i class="fa fa-rss" style="color: #FF6600;"></i>
                        </a>
                    </div>
                </div>
            </div>
            <hr style="margin: 6px 0 0 0;">
        </div>
		<div id="main" class="col-md-9 first" role="main">
            <div id="content">
			<?php

                if ( have_posts() ) :

                    // Start the Loop.
                    while ( have_posts() ) : the_post();

						/*
						 * Include the post format-specific template for the content. If you want to
						 * use this in a child theme, then include a file called called content-___.php
						 * (where ___ is the post format) and that will be used instead.
						 */
						get_template_part( 'content-p2pu', get_post_format() );

					endwhile;
            ?>
            </div>
            <?php

                if ( function_exists( 'p2pu_infinite_scroll_page_navi' ) ) {
                    p2pu_infinite_scroll_page_navi();
                } else {?>
                    <nav class="wp-prev-next">
                        <ul class="clearfix">
                            <li class="prev-link"><?php next_posts_link( __( '&laquo; Older Entries', 'bonestheme' )) ?></li>
                            <li class="next-link"><?php previous_posts_link( __( 'Newer Entries &raquo;', 'bonestheme' )) ?></li>
                        </ul>
                    </nav><?php
                }

            ?>

			<?php else : ?>
                <div id="content">
					<article id="post-not-found" class="hentry clearfix">
							<header class="article-header">
								<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
						</header>
							<section class="entry-content">
								<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
						</section>
						<footer class="article-footer">
								<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
						</footer>
					</article>
                </div>
			<?php endif; ?>
		</div>
        <div class="sidebar col-md-3">
            <div id="contribute" class="widget">
                <?php get_sidebar('Sidebar 1'); ?>
            </div>
        </div>
	</div>



<?php get_footer(); ?>

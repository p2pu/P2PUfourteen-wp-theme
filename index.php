<?php get_header(); ?>
	<main id="inner-content" class="container clearfix">

        <?php get_template_part('heading', 'top'); ?>

		<div id="main" class="col-12 p-0 border-0" role="main">
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
	</main>



<?php get_footer(); ?>

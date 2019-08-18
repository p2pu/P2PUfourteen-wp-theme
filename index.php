<?php get_header(); ?>
	<main id="inner-content" class="container clearfix">

        <?php get_template_part('heading', 'top'); ?>

		<div id="main" role="main">
            <div id="content" class="row">
    		<?php

                if ( have_posts() ) :



                    // Start the Loop.
                    $postCount = 0;
                    while ( have_posts() ) :
                        $postCount++;
                        the_post();

                        if($postCount == 1) {
                            get_template_part( 'content-p2pu-featured', get_post_format() );
                        } else {
                            get_template_part( 'content-p2pu', get_post_format() );
                        }

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
                <div id="content" class="row">
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

<?php
/*
Template Name: Custom Page Example
*/
?>

<?php get_header(); ?>

			<main id="content">

				<div id="inner-content" class="wrap clearfix">
                    <?php get_template_part('heading', 'fixed'); ?>
						<div id="main" class="col-md-9 first clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

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

								<section class="entry-content row" itemprop="articleBody">
									<?php the_content(); ?>
								</section>

								<footer class="article-footer">
									<p class="clearfix"><?php the_tags( '<span class="tags">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '' ); ?></p>

								</footer>

								<?php comments_template(); ?>

							</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry clearfix">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div>

				</div>

			</main>

<?php get_footer(); ?>

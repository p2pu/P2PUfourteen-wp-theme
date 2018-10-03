<?php
/**
 * The default template for displaying content-p2pu
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage P2PU Fourteen
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">



	<section class="entry-content row">

		<?php
		if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
			?>
			<div class="col-md-3">
				<a href="<?php the_permalink() ?>" class="blog-img">
					<?php echo get_the_post_thumbnail( $id, array( 210, 210) ); ?>
				</a>
			</div>
			<?php
		} ?>
		<div class="excerpt-wraper col-md-9">
            <header class="article-header">
                <h4>
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                    &nbsp;
                    <?php if ( is_user_logged_in() ) {
                        echo '<a href="' . get_edit_post_link( $id, $context ) . '">[<i class="fa fa-pencil-square-o"></i> edit]</a>';
                    }
                    ?>
                </h4>
            </header>

			<?php the_excerpt(); ?>

            <footer class="article-footer">
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
            </footer>
        </div>
	</section>


    <hr/>

	<?php // comments_template(); // uncomment if you want to use them ?>

</article><!-- #post-## -->

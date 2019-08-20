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

<div class="entry-content col-12 my-4 featured-post">
    <article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix post-preview' ); ?> role="article">
        <div class="card">
            <div class="row">

        		<?php
        		if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
        			?>
                    <div class="col-md-8">
            			<div class="img-fluid">
                        	<a href="<?php the_permalink() ?>">
            					<?php echo get_the_post_thumbnail( $id, array(600,400) ); ?>
                            </a>
            			</div>
                    </div>
        			<?php
        		} ?>
        		<div class="col-md-4">
                    <div class="excerpt-wraper card-body">
                        <header class="article-header">
                            <h3 class="card-title">
                                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                                &nbsp;
                                <?php if ( is_user_logged_in() ) {
                                    echo '<a href="' . get_edit_post_link( $id, $context ) . '">[<i class="fa fa-pencil-square-o"></i> edit]</a>';
                                }
                                ?>
                            </h3>
                        </header>


                        <div class="card-text small">
                            <p class="byline vcard text-muted minicaps text-left">
                                <?php
                                printf( __( '<span>%3$s</span> | <time class="updated" datetime="%1$s">%2$s</time>', 'bonestheme' ),
                                    get_the_time( 'Y-m-j' ),
                                    get_the_time( __( 'F j, Y', 'bonestheme' ) ),
                                    bones_get_the_author_posts_link(),
                                    get_permalink( $id )
                                );?>
                            </p>
                			<?php the_excerpt(); ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>

	<?php // comments_template(); // uncomment if you want to use them ?>
    </article><!-- #post-## -->

</div>

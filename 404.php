<?php get_header(); ?>

<div id="inner-content" class="container clearfix">

    <div id="main" class="col-md-8 col-md-offset-2" role="main">

        <div id="content">

            <article id="post-not-found" class="hentry clearfix">

                <header class="article-header">

                    <h1><?php _e( "Oh Crumbs! Total 404!", 'bonestheme' ); ?></h1>

                </header>

                <section class="entry-content">

                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/404-error.png"
                         alt="404 Image"/>

                    <p>
                        <?php _e( "Looks like something went horribly wrong somewhere in the internet.", 'bonestheme' ); ?>
                        <?php _e( "As a result the page you requested isn't available.", 'bonestheme' ); ?>
                        <?php _e( "Or maybe it doesn't exist.", 'bonestheme' ); ?>
                        <?php _e( "Or maybe it never existed.", 'bonestheme' ); ?>
                        <?php _e( "Maybe this page is a figment of your imagination.", 'bonestheme' ); ?>
                        <?php _e( "Maybe you are a figment of your own imagination.", 'bonestheme' ); ?>
                        <?php _e( "Did we just blow your mind?", 'bonestheme' ); ?>
                    </p>

                </section>

                <section class="search">

                    <?php _e( "Search in the top search bar for the thing you are looking for or start all over from:", 'bonestheme' ); ?>



                </section>

                <footer class="article-footer">
                    <a href="<?php bloginfo('url') ?>" class="btn btn-success">Here <i class="fa fa-smile-o"></i></a>
                </footer>

            </article>

        </div>

    </div>

</div>

<?php get_footer(); ?>

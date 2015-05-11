<!doctype html>

<!--[if lt IE 7]>
<html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]>
<html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]>
<html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<?php // Google Chrome Frame for IE ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php bloginfo( 'name' ); ?></title>

	<?php // mobile meta (hooray!) ?>
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<!--[if IE]>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<![endif]-->
	<?php // or, set /favicon.ico for IE10 win ?>
	<meta name="msapplication-TileColor" content="#f01d4f">
	<meta name="msapplication-TileImage"
	      content="<?php echo get_template_directory_uri(); ?>/favicon.png">

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>

	<?php // drop Google Analytics Here ?>
	<?php // end analytics ?>

</head>

<body <?php body_class(); ?>>

<nav class="navbar navbar-default navbar-fixed-top <?php if ( is_user_logged_in() ) { echo 'logged-in'; } ?>" role="navigation" id="home">

	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<a class="navbar-toggle" data-toggle="collapse" data-target="#nav-links-collapse" href="#">
				<i class="fa fa-bars"></i>
			</a>
			<a class="navbar-logo" href="/en/">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/p2pu-logo-2x.png" alt="P2PU Logo"
					width="122" height="68">
			</a>
			<a class="p2pu-tab" href="#">
				<i class="fa fa-chevron-down p2pu-tab-icon"></i>
			</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="nav-links-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="">
					<a href="http://p2pu.org/en/our-work/">Our work</a>
				</li>
				<li class="dropdown has-subnav">
					<a href="http://p2pu.org/en/about/">About</a>
					<span class="fa fa-caret-down dropdown-toggle visible-xs-block visible-sm-block" data-toggle="dropdown"></span>
					<ul class="dropdown-menu nav navbar-nav subnav" role="menu">
						<li>
							<a href="http://p2pu.org/en/about/philosophy/">
								Philosophy
							</a>
						</li>
						<li>
							<a href="http://p2pu.org/en/about/people/">
								People
							</a>
						</li>
						<li>
							<a href="http://p2pu.org/en/about/credits/">
								Credits and thanks
							</a>
						</li>
					</ul>
				</li>
				<li class="active dropdown has-subnav">
					<a href="http://p2pu.org/en/publications/roundtables/">Publications</a>
					<span class="fa fa-caret-down dropdown-toggle visible-xs-block visible-sm-block" data-toggle="dropdown"></span>
					<ul class="dropdown-menu nav navbar-nav subnav" role="menu">
						<li>
							<a href="http://p2pu.org/en/publications/roundtables/">
								P2PU Roundtables
							</a>
						</li>
						<li>
							<a href="http://p2pu.org/en/publications/talks/">
								Presentations
							</a>
						</li>
						<li>
							<a href="http://reports.p2pu.org">
								reports
							</a>
						</li>
						<li class="active">
							<a href="<?php bloginfo('url'); ?>">
								blog
							</a>
						</li>
						<li>
							<a href="http://data.p2pu.org/" target="_blank">
								data
							</a>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="http://p2pu.org/en/connect/">Connect with us</a>
				</li>
				<li>
					<div class="donate-btn-wrap">
						<a class="donate" href="http://p2pu.org/en/donate/" data-toggle="modal" data-target="#donate-modal">Donate</a>
					</div>
				</li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container-fluid -->
    <div class="col-md-12 social-links-mobile clearfix">
        <div class="pull-right">
            <a href="https://twitter.com/p2pu" target="_blank">
                <i class="fa fa-twitter" style="color: #55ACEE;"></i>
            </a>
            <a href="https://www.facebook.com/P2PUniversity?fref=ts" target="_blank">
                <i class="fa fa-facebook" style="color: #45619D;"></i>
            </a>
            <a href="<?php bloginfo('rss2_url'); ?>">
                <i class="fa fa-rss" style="color: #FF6600;"></i>
            </a>
        </div>
    </div>
</nav>

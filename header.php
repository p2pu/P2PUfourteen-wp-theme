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

<nav class="nav-collapsed <?php if ( is_user_logged_in() ) { echo 'logged-in'; } ?>" role="navigation" id="home">

  <div class="logo dark">
    <a href="https://www.p2pu.org/en/">
	  <img src="<?php echo get_template_directory_uri(); ?>/library/images/p2pu-logo-2x.png" alt="P2PU logo">
    </a>
  </div>

  <div class="nav-items">
    <div class="account nav-item" id="nav-account"></div>

    <button class="menu nav-item" role="button">
      <i class="fa fa-bars" aria-hidden="true"></i>
      <span class="uppercase hidden-xs">Menu</span>
    </button>
  </div>

  <div id="full-page-menu" class="collapsed" aria-hidden="true" role="navigation">
    <button id="close-menu" role="button" aria-label="Close"><i class="fa fa-times"></i></button>
    <div class="content-container row">
      <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6">
        <div class="content">

          <div class="menu-section top-level">
            <div class="nav-container">
              <a href="https://www.p2pu.org/en/">
                <div class="menu-item">
                  <span class="bullet"></span>
                  <span class="text">Home</span>
                </div>
              </a>

            </div>
          </div>

          <div class="menu-section top-level">
            <div class="nav-container">
              <a href="https://www.p2pu.org/en/learning-circles/">
                <div class="menu-item">
                  <span class="bullet"></span>
                  <span class="text">Learning Circles</span>
                </div>
              </a>

            </div>
          </div>

          <div class="menu-section top-level">
            <div class="nav-container">
              <a href="https://www.p2pu.org/en/facilitate/">
                <div class="menu-item">
                  <span class="bullet"></span>
                  <span class="text">Facilitate</span>
                </div>
              </a>

              <a href="https://www.p2pu.org/en/courses/" class="dark">
                <div class="menu-item submenu">
                  <span class="bullet"></span>
                  <span class="text">Courses</span>
                </div>
              </a>

              <a href="https://learningcircles.p2pu.org/en/facilitator/" class="dark">
                <div class="menu-item submenu">
                  <span class="bullet"></span>
                  <span class="text">Dashboard</span>
                </div>
              </a>

              <a href="https://learningcircles.p2pu.org/en/studygroup/create/" class="dark">
                <div class="menu-item submenu">
                  <span class="bullet"></span>
                  <span class="text">Create a learning circle</span>
                </div>
              </a>

              <a href="https://community.p2pu.org/tags/faq/" class="dark">
                <div class="menu-item submenu">
                  <span class="bullet"></span>
                  <span class="text">FAQ</span>
                </div>
              </a>

            </div>
          </div>

          <div class="menu-section top-level">
            <div class="nav-container">
              <a href="https://community.p2pu.org/">
                <div class="menu-item">
                  <span class="bullet"></span>
                  <span class="text">Community</span>
                </div>
              </a>

            </div>
          </div>

          <div class="menu-section top-level">
            <div class="nav-container">
              <a href="https://info.p2pu.org/">
                <div class="menu-item">
                  <span class="bullet"></span>
                  <span class="text">Blog</span>
                </div>
              </a>

            </div>
          </div>

          <div class="menu-section top-level">
            <div class="nav-container">
              <a href="https://www.p2pu.org/en/about/">
                <div class="menu-item">
                  <span class="bullet"></span>
                  <span class="text">About P2PU</span>
                </div>
              </a>

              <a href="https://www.p2pu.org/en/workwithus/" class="dark">
                <div class="menu-item submenu">
                  <span class="bullet"></span>
                  <span class="text">Hire us</span>
                </div>
              </a>

              <a href="https://www.p2pu.org/en/jobs/" class="dark">
                <div class="menu-item submenu">
                  <span class="bullet"></span>
                  <span class="text">Jobs</span>
                </div>
              </a>

              <a href="https://shop.spreadshirt.com/p2pu/" class="dark">
                <div class="menu-item submenu">
                  <span class="bullet"></span>
                  <span class="text">Shop</span>
                </div>
              </a>

              <a href="https://www.p2pu.org/en/donate/" class="dark">
                <div class="menu-item submenu">
                  <span class="bullet"></span>
                  <span class="text">Donate</span>
                </div>
              </a>

              <a href="https://www.p2pu.org/en/connect/" class="dark">
                <div class="menu-item submenu">
                  <span class="bullet"></span>
                  <span class="text">Contact</span>
                </div>
              </a>

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

</nav>

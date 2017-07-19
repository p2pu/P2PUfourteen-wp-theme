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

	<span class="logo dark">
		<a href="/en/">
			<img src="<?php echo get_template_directory_uri(); ?>/library/images/p2pu-logo-2x.png" alt="P2PU logo">
		</a>
	</span>
	<span class="menu"><i class="fa fa-bars" aria-hidden="true"></i>MENU</span>

<div id="full-page-menu" class="collapsed">
  <div class="content-container">
    <div id="close-menu"><i class="fa fa-times"></i></div>
    
      <div class="menu-section full-column">
        <div class="nav-container">
          <h2>
            <a href="https://www.p2pu.org/en/">
              Home
              <i class="fa fa-arrow-right"></i>
            </a>
          </h2>
          
            <p><a href="https://www.p2pu.org/en/#search">Join a learning circle</a></p>
          
        </div>
      </div>
    
      <div class="menu-section full-column">
        <div class="nav-container">
          <h2>
            <a href="https://www.p2pu.org/en/facilitate/">
              Facilitate
              <i class="fa fa-arrow-right"></i>
            </a>
          </h2>
          
            <p><a href="https://www.p2pu.org/en/handbook/">Handbook</a></p>
          
            <p><a href="https://groups.google.com/a/p2pu.org/forum/#!forum/community">Community</a></p>
          
            <p><a href="https://learningcircles.p2pu.org/en/courses/">Courses</a></p>
          
            <p><a href="https://learningcircles.p2pu.org/en/accounts/login/">Dashboard</a></p>
          
        </div>
      </div>
    
      <div class="menu-section full-column">
        <div class="nav-container">
          <h2>
            <a href="https://www.p2pu.org/en/about/">
              About
              <i class="fa fa-arrow-right"></i>
            </a>
          </h2>
          
            <p><a href="https://www.p2pu.org/en/about/people/">People</a></p>
          
            <p><a href="https://www.p2pu.org/en/about/values/">Values</a></p>
          
            <p><a href="https://www.p2pu.org/en/jobs/">Job openings</a></p>
          
        </div>
      </div>
    
      <div class="menu-section full-column">
        <div class="nav-container">
          <h2>
            <a href="http://info.p2pu.org/">
              Stories
              <i class="fa fa-arrow-right"></i>
            </a>
          </h2>
          
            <p><a href="http://info.p2pu.org/2017/06/14/when-seekers-and-rebels-meet-or-my-experience-studying-the-learning-circles/">Seekers and Rebels</a></p>
          
            <p><a href="http://info.p2pu.org/2017/06/02/will-people-show-up/">Will People Show Up?</a></p>
          
            <p><a href="http://info.p2pu.org/2017/05/16/peer-2-peer-coast-2-coast/">Coast 2 Coast</a></p>
          
        </div>
      </div>
    
      <div class="menu-section full-column">
        <div class="nav-container">
          <h2>
            <a href="https://www.p2pu.org/en/workwithus/">
              Work with us
              <i class="fa fa-arrow-right"></i>
            </a>
          </h2>
          
            <p><a href="https://www.p2pu.org/en/donate/">Donate</a></p>
          
            <p><a href="https://www.p2pu.org/en/connect/">Connect</a></p>
          
        </div>
      </div>
    
    <div class="menu-section parent-column">
    
    </div>
  </div>
</div>
</nav>

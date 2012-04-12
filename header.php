<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Bwater
 * @since Bwater 1.0
 */
?><!DOCTYPE html>
      <html <?php language_attributes(); ?>>
         <head>
            <meta charset="<?php bloginfo( 'charset' ); ?>" />
            <meta name="viewport" content="width=device-width" />
            <meta name="author" content="La Marciana - http://www.lamarciana.com" />
            <title><?php
/*
 * Print the <title> tag based on what is being viewed.
 */
global $page, $paged;

wp_title( '|', true, 'right' );

// Add the blog name.
bloginfo( 'name' );

// Add the blog description for the home/front page.
$site_description = get_bloginfo( 'description', 'display' );
if ( $site_description && ( is_home() || is_front_page() ) )
   echo " | $site_description";

// Add a page number if necessary:
if ( $paged >= 2 || $page >= 2 )
   echo ' | ' . sprintf( __( 'Page %s', 'bwater' ), max( $paged, $page ) );

?></title>
               <link rel="profile" href="http://gmpg.org/xfn/11" />
               <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
               <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
               <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
               <!--[if lt IE 9]>
               <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
               <![endif]-->

               <?php wp_head(); ?>
            </head>

            <body <?php body_class(); ?>>
               <div id="page" class="hfeed">
                  <?php do_action( 'before' ); ?>
                  <header id="branding" role="banner">
                     <div class="skip-link screen-reader-text">
                        <p><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'bwater' ); ?>"><?php _e( 'Skip to content', 'bwater' ); ?></a></p>
                        <p><a href="#secondary" title="<?php esc_attr_e( 'Skip to navigation', 'bwater' ); ?>"><?php _e( 'Skip to navigation', 'bwater' ); ?></a></p>
                     </div>

                     <div id="hgroup_branding_wrapper">
                        <div id="hgroup_branding_subwrapper">
                           <hgroup>
                              <h1 id="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                              <h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
                           </hgroup>
                        </div>
                     </div>

                     <nav id="access" role="navigation">

                        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                     </nav><!-- #access -->
                  </header><!-- #branding -->

                  <div id="main">

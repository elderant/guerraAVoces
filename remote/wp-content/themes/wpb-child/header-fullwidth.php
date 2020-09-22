<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
	<header id="masthead" class="site-header navbar-static-top <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner">
    <div class="container-fluid">
      <nav class="row navbar navbar-expand-xl align-items-end pt-5 pl-5 pr-5 pb-0">
          <div class="navbar-brand m-0 pr-3 align-self-start">
              <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                  <a href="<?php echo esc_url( home_url( '/' )); ?>">
                      <img src="<?php echo esc_url(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                  </a>
              <?php else : ?>
                  <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
              <?php endif; ?>

          </div>
          <button class="wp-child-navbar-toggler d-block d-xl-none collapsed" type="button" data-toggle="custom-collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
              <div class="wp-child-navbar-toggler-icon"></div>
          </button>

          <?php
          wp_nav_menu(array(
          'theme_location'    => 'primary',
          'container'       => 'div',
          'container_id'    => 'main-nav',
          'container_class' => 'collapse navbar-collapse',
          'menu_id'         => false,
          'menu_class'      => 'navbar-nav flex-column flex-xl-row align-items-end justify-content-around justify-content-xl-around pr-5 pr-xl-0',
          'depth'           => 3,
          'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
          'walker'          => new wp_bootstrap_navwalker()
          ));
          ?>
          <div class="navbar-brand-alt m-0 pl-3 d-none d-xl-block">
            <a href="https://clickarte.co/tienda" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="123.41" height="112.45" viewBox="0 0 123.41 112.45">
                <path class="a" d="M11.77,5.89A5.89,5.89,0,1,1,5.89,0,5.88,5.88,0,0,1,11.77,5.89Z"/>
                <path class="a" d="M120.59,100.11H43.92A9.13,9.13,0,0,1,34.8,91v-.25A9.13,9.13,0,0,1,42,81.82l64.24-14.13a2.82,2.82,0,0,1,1.21,5.51L43.18,87.34a3.33,3.33,0,0,0-2,1.21,3.49,3.49,0,0,0-.77,2.18V91a3.45,3.45,0,0,0,1,2.46,3.49,3.49,0,0,0,2.46,1h76.67a2.83,2.83,0,0,1,0,5.65Z"/>
                <path class="a" d="M45.91,86.67a2.82,2.82,0,0,1-2.78-2.39L31.53,11.64a3.44,3.44,0,0,0-1.17-2.1,3.48,3.48,0,0,0-2.27-.84H5.89a2.82,2.82,0,1,1,0-5.64h22.2a9.12,9.12,0,0,1,9,7.69L48.7,83.39a2.83,2.83,0,0,1-2.34,3.24A2.35,2.35,0,0,1,45.91,86.67Z"/>
                <path class="a" d="M58.89,103.45a9,9,0,1,1-9-9A9,9,0,0,1,58.89,103.45Z"/>
                <path class="a" d="M54.39,103.45A4.5,4.5,0,1,1,49.9,99,4.49,4.49,0,0,1,54.39,103.45Z"/>
                <path class="a" d="M123.41,103.45a9,9,0,1,1-9-9A9,9,0,0,1,123.41,103.45Z"/>
                <path class="a" d="M118.91,103.45a4.5,4.5,0,1,1-4.5-4.49A4.5,4.5,0,0,1,118.91,103.45Z"/>
                <path class="a" d="M122.44,30.39a3.31,3.31,0,0,0-2.35-1H34.31l9.3,57.82h0l77.19-17a3.26,3.26,0,0,0,1.87-1.16,3.3,3.3,0,0,0,.74-2.07V32.73A3.34,3.34,0,0,0,122.44,30.39ZM50.13,80.21l-.33,0a2.1,2.1,0,0,1-2.08-1.76L41.11,37.31a2.1,2.1,0,1,1,4.15-.66L51.87,77.8A2.1,2.1,0,0,1,50.13,80.21Zm11-2.42a1.46,1.46,0,0,1-.29,0A2.1,2.1,0,0,1,58.73,76L53.22,37.27a2.1,2.1,0,0,1,4.15-.59l5.52,38.73A2.1,2.1,0,0,1,61.1,77.79Zm11-2.41h-.26a2.09,2.09,0,0,1-2.08-1.84L65.32,37.23a2.1,2.1,0,1,1,4.17-.51L73.9,73A2.11,2.11,0,0,1,72.07,75.38ZM83,73h-.21a2.1,2.1,0,0,1-2.09-1.9L77.42,37.18a2.1,2.1,0,0,1,4.18-.4l3.31,33.88A2.09,2.09,0,0,1,83,73Zm11-2.42h-.15a2.11,2.11,0,0,1-2.1-2l-2.2-31.47a2.1,2.1,0,0,1,4.19-.29l2.2,31.47A2.09,2.09,0,0,1,94,70.54Zm10.94-2.42h-.09a2.09,2.09,0,0,1-2.09-2l-1.11-29a2.1,2.1,0,0,1,2-2.18,2.07,2.07,0,0,1,2.17,2l1.1,29A2.09,2.09,0,0,1,104.92,68.12Zm13-4.52a2.11,2.11,0,0,1-4.21,0V37A2.11,2.11,0,0,1,118,37Z"/>
              </svg>
            </a>
          </div>
      </nav>
    </div>
	</header><!-- #masthead -->
	<div id="content" class="site-content">
		<div class="container-fluid">
			<div class="row">
                <?php endif; ?>
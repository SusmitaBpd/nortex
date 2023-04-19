<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	

	
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">

    <!-- font- link -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- main- css -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/responsive.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="main-header">
        <!-- upper header -->
        <div class="upper-header">
            <div class="upper-header-wapper">
                <ul>
                    <li>
                        <span><img src="<?php bloginfo('template_url'); ?>/img/location-icon.svg" alt=""></span>
                        <?php  dynamic_sidebar('location'); ?>
                    </li>
                    <li>
                        <span><img src="<?php bloginfo('template_url'); ?>/img/email-icon.svg" alt=""></span>
                        <a href="mailto: <?php  dynamic_sidebar('contact_email'); ?>"> <?php  dynamic_sidebar('contact_email'); ?></a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <span><img src="<?php bloginfo('template_url'); ?>/img/icon-truck.svg" alt=""></span>
                        <a href="#">Track Your Order</a>
                    </li>
                    <li>
                        <span><a href="<?php echo site_url('/cart'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/icon-cart.svg" alt=""></span>
                        Cart</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- upper header -->
        <!-- nav -->
        <nav class="main-nav">
            <div class="upper-nav-wapper">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="main-logo">
                            <a href="<?php echo home_url(); ?>">
								<?php 

									$custom_logo_id = get_theme_mod( 'custom_logo' );
									$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
									if ( has_custom_logo() ) {
										echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
									} else {
										echo '<h1>' . get_bloginfo('name') . '</h1>';
									}

								?>
							</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <form action="#" id="search_form" method="post">
                            <div class="upper-search">
                                <input required type="text"  placeholder="Search Your Order" id="upper-search" value="" name="product_name">
                                <button type="submit" name="submit" id="submit">Search</button>
                                <div id="result_msg"></div>
                                <div id="p_price"></div>
                                <div id="p_img"></div>
                                
                            
                            </div>
                        </form>
                   
                    </div>
                    <div class="col-lg-4 justify-content-lg-end d-flex">
                        <div class="nav-ul">
                            <ul>
                                <li>
                                    <span><img src="<?php bloginfo('template_url'); ?>/img/icon-call.svg" alt=""></span>
                                    <a href="tel: <?php  dynamic_sidebar('header_phone'); ?>"> <?php  dynamic_sidebar('header_phone'); ?></a>
                                </li>
                                <li>
                                    <span><img src="<?php bloginfo('template_url'); ?>/img/icon-admin.svg" alt=""></span>
                                    <a href="#">Login</a>
                                </li>
                                <li>
                                    <span><a href="<?php echo site_url('/wishlist'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/icon-fabarite.svg" alt=""></a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-page-nav">
                <?php wp_nav_menu(array("theme_location"=>"header-menu")); ?>
            </div>
        </nav>
        <!-- nav -->
    </header>


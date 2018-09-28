<?php

/* ---------------------------------------------------------------------------------------------
   THEME SETUP
   --------------------------------------------------------------------------------------------- */

if ( ! function_exists( 'Redmond_setup' ) ) {

	function Redmond_setup() {

		// Automatic feed
		add_theme_support( 'automatic-feed-links' );

		// Set content-width
		global $content_width;
		if ( ! isset( $content_width ) ) {
			$content_width = 600;
		}

		// Post thumbnails
		add_theme_support( 'post-thumbnails' );

		// Set post thumbnail size
		set_post_thumbnail_size( 870, 9999 );

		// Custom Image Sizes
		add_image_size( 'Redmond_fullscreen', 1860, 9999 );

		// Custom logo
		add_theme_support( 'custom-logo', array(
			'height'      => 300,
			'width'       => 600,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array( 'site-title', 'site-description' ),
		) );

		// Post formats
		add_theme_support( 'post-formats', array( 'gallery' ) );

		// Declare WooCommerce support
		add_theme_support( 'woocommerce' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );

		// Title tag
		add_theme_support( 'title-tag' );

		//CSS
		add_editor_style('/assets/bootstrap/css/bootstrap.css');
		add_editor_style('/assets/fonts/font-awesome/css/font-awesome.css');
		add_editor_style('/assets/plugins/magnific-popup/magnific-popup.css');
		add_editor_style('/assets/plugins/rs-plugin-5/css/settings.css');
		add_editor_style('/assets/plugins/rs-plugin-5/css/layers.css');
		add_editor_style('/assets/plugins/rs-plugin-5/css/navigation.css');
		add_editor_style('/assets/css/animations.css');
		add_editor_style('/assets/plugins/fullpage/jquery.fullpage.min.css');
		add_editor_style('/assets/plugins/slick/slick.css');
		add_editor_style('/assets/css/style.css');
		add_editor_style('/assets/css/typography-scheme-2.css');
		add_editor_style('/assets/css/skins/gold.css');
		add_editor_style('/assets/css/custom.css');

		// Add nav menu
		register_nav_menu( 'primary-menu', __( 'Primary Menu', 'Redmond' ) );
		register_nav_menu( 'mobile-menu', __( 'Mobile Menu', 'Redmond' ) );
		register_nav_menu( 'social', __( 'Social Menu', 'Redmond' ) );

		// Add excerpts to pages
		add_post_type_support( 'page', array( 'excerpt' ) );

		// HTML5 semantic markup
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

		// Make the theme translation ready
		load_theme_textdomain( 'Redmond', get_template_directory() . '/languages' );
		
		
		wp_enqueue_style( 'Redmond-style', get_template_directory_uri() . '/style.css', $dependencies );

	}
	add_action( 'after_setup_theme', 'Redmond_setup' );

} // End if().

if(isset($_POST['action']) && $_POST['action'] == 'contact_send') {

		$config = parse_ini_file("mail_config.ini");

		$name = trim($_POST['name']);
    	$email = trim($_POST['email']);
	    $message = trim($_POST['message']);

		$emailTo = $config['emailTo'];
	    
	    $subject = 'Redmond Farm Website - Enquiry';
	    $body = "Name: $name \n\nEmail: $email \n\nMessage: $message";
	    $headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

	    if(wp_mail($emailTo, $subject, $body, $headers)) {
	    	_redirect('#alert_success');
			exit; 
		} else {
			_redirect('#alert_failed');
		    exit; 
		}
	}

/** ******************************** **
 *	@REDIRECT
		#alert_success 		= email sent
		#alert_failed		= email not sent - internal server error (404 error or SMTP problem)
		#alert_mandatory	= email not sent - required fields empty
 ** ******************************** **/
	function _redirect($hash) {
		
		$HTTP_REFERER = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : null;

		if($HTTP_REFERER === null)
			die("Invalid Referer. Output Message: {$hash}");

		header("Location: {$HTTP_REFERER}{$hash}");
		exit;
	}


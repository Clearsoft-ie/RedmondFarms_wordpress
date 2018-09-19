<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link
 *
 * @package Clearsoft
 * @subpackage RedmondsFarm
 * @since 1.0
 * @version 1.0
 */

?>

<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <title>Redmond Farm | One Farm | Two Hotels | One Vision</title>
    <meta name="description" content="Redmond Farm">
    <meta name="author" content="author">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_template_directory_uri() ;?>/assets/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="<?php echo get_template_directory_uri() ;?>/assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Plugins -->
    <link href="<?php echo get_template_directory_uri() ;?>/assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ;?>/assets/plugins/rs-plugin-5/css/settings.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ;?>/assets/plugins/rs-plugin-5/css/layers.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ;?>/assets/plugins/rs-plugin-5/css/navigation.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ;?>/assets/css/animations.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ;?>/assets/plugins/fullpage/jquery.fullpage.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ;?>/assets/plugins/slick/slick.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ;?>/assets/css/style.css" rel="stylesheet" >
    <!-- The Project's Typography CSS file, includes used fonts -->
    <link href="<?php echo get_template_directory_uri() ;?>/assets/css/typography-scheme-2.css" rel="stylesheet" >
    <!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer) -->
    <link href="<?php echo get_template_directory_uri() ;?>/assets/css/skins/gold.css" rel="stylesheet">
    <!-- Custom css -->
    <link href="<?php echo get_template_directory_uri() ;?>/assets/css/custom.css" rel="stylesheet">
    
  </head>

  <!-- body classes:  -->
  <!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
  <!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
  <!-- "transparent-header": makes the header transparent and pulls the banner to top -->
  <!-- "gradient-background-header": applies gradient background to header -->
  <!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->
  <body class="transparent-header gradient-background-header front-page full-page">

    <!-- scrollToTop -->
    <!-- ================ -->
    <div class="scrollToTop circle"><i class="fa fa-angle-up"></i></div>

    <!-- page wrapper start -->
    <!-- ================ -->
    <div class="page-wrapper">
      <!-- header-container start -->
      <div class="header-container">
        <!-- header start -->
        <!-- classes:  -->
        <!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
        <!-- "dark": dark version of header e.g. class="header dark clearfix" -->
        <!-- "full-width": mandatory class for the full-width menu layout -->
        <!-- "centered": mandatory class for the centered logo layout -->
        <!-- ================ -->
        <header class="header dark fixed clearfix">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-4 col-xl-3 hidden-md-down">
                <!-- header-first start -->
                <!-- ================ -->
                <div class="header-first clearfix">

                  <!-- logo -->
                  <div id="logo" class="logo">
                    <a href="<?php echo get_home_url() ?>"><img id="logo_img" src="<?php echo get_template_directory_uri() ;?>/assets/images/logo.png" alt="Redmond Farm"></a>
                  </div>

                </div>
                <!-- header-first end -->

              </div>
              <div class="col-lg-8 col-xl-9">
          
                <!-- header-second start -->
                <!-- ================ -->
                <div class="header-second clearfix">

                  <!-- main-navigation start -->
                  <!-- classes: -->
                  <!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
                  <!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
                  <!-- ================ -->
                  <div class="main-navigation  animated">
                    <nav class="navbar navbar-expand-lg navbar-light p-0">
                      <div class="navbar-brand clearfix hidden-lg-up">

                        <!-- logo -->
                        <div id="logo-mobile" class="logo">
                          <a href="<?php echo get_home_url() ?>"><img id="logo-img-mobile" src="<?php echo get_template_directory_uri() ;?>/assets/images/logo-mobile.png" alt="Redmond Farm"></a>
                        </div>

                      </div>
                      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar-collapse-1" aria-controls="navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse scrollspy" id="navbar-collapse-1">
                        <!-- main-menu -->
                          <ul id="fullpage-menu" class="navbar-nav ml-lg-auto">
                              <?php
										if ( has_nav_menu( 'primary-menu' ) ) {
											wp_nav_menu( array(
												'container' 		=> '',
												'items_wrap' 		=> '%3$s',
												'theme_location' 	=> 'primary-menu',
											) );
										} else {
											wp_list_pages( array(
												'container' => '',
												'title_li' 	=> '',
											) );
										}
									?>        
                          </ul>
                        <!-- main-menu end -->
                      </div>
                    </nav>
                  </div>
                  <!-- main-navigation end -->

                </div>
                <!-- header-second end -->

              </div>
            </div>
          </div>
        </header>
        <!-- header end -->
      </div>
      <!-- header-container end -->

      <div class="fullpage-site-with-menu">
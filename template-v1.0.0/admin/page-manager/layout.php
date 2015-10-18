<?php

/**
 * Sesame Responsive Boilerplate Configuration
 * @version 1.1.8
 * @link http://wiki.sesamecommunications.com:8090/display/DT/Sesame+Responsive+Design+Boilerplate
 */

// If you are using an sds template, enter the template name here.  Example: sds-1
$template   = 'avalon'; // Avalon - sds7
$site_template = "avalon2";

// Automatically handled variables
$live       = (strpos($_SERVER['HTTP_HOST'], '.sesamehub.com') === false) ? true : false; // Checks whether or not the site is live.
$vendor     = 'http://srwd.sesamehub.com/assets/v2.0/'; // The global assets location (with compatible version number).
$js         = ($live) ? '.min.js' : '.js?v=0'; // Selects the appropriate extension for JS files.
$css        = ($live) ? '.min.css' : '.css?v=0'; // Selects the appropriate extension for CSS files.
$template   = ($template != false) ? trim($template, '/') . '/' : ''; // Converts the chosen template to a directory if a template is set.

define('SITEDIR', dirname(__FILE__));

// Load the custom PHP functions for RWD builds
include $_SERVER['DOCUMENT_ROOT'] . '/hub_sites/srwd/www/assets/v1.1/helpers.php';
// Generate the local IE stylesheet
generate_stylesheets(dirname(__FILE__));

/* Healthgrades widget
* to use the healthgrades widget, make sure this is in your layout where you want the icon to appear
* <nav id="healthgrades-widget"><?php echo custom_navigation(array('Healthgrades')); ?></nav>
*
* In the HUB config, setup one link as a link with the title Healthgrades
* setup multiple links within a section titled Healthgrades, and then name your links after the Dr name
*/

/**
* To target ie10, us this on your stylesheet
*     .ie10
* To target ie11, us this on your stylesheet
*     html[data-useragent*='Trident/7.0']
*/

?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js ie7 lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js ie8 lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js ie9 lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title><?php echo $page['title']; ?></title>
        <meta name="description" content="<?php echo $page['meta_description']; ?>">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width">
        <!--[if IEMobile]> <meta http-equiv="cleartype" content="on"> <![endif]--> 
         
        <?php
        if(is_blog())
        {
            # Parse the URL
            $URI = $_SERVER['REQUEST_URI'];
            $is_tag = strpos($URI,"/blog/tag/") !== false;
            $is_category = strpos($URI,"/blog/category/") !== false;
            $is_paginated_index = strpos($URI,"/blog/page/") !== false;
            $base_url = 'http://' . $_SERVER['HTTP_HOST']; # Blog won't have https enabled.

            $robots_index = $page['slug'] != 'search-results' && !$is_tag && !$is_category ? 'index,follow' : 'noindex';
            $canonical_href = $robots_index == 'index,follow' && !$is_paginated_index ? $base_url . $URI : $base_url . '/blog/';

            echo '<meta name="robots" content="'.$robots_index.'" />';
            echo '<link rel="canonical" href="'.$canonical_href.'" />';        
        }
        ?>        
        
        <!-- Standard desktop and mobile favicons -->
        <link rel="icon" type="image/ico" href="/assets/images/favicon.png">
        <link rel="shortcut icon" href="/assets/images/favicon.png">
        
        <!-- Default Font -->
        
        <link href='http://fonts.googleapis.com/css?family=Lato:400,300,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Cabin:400,500' rel='stylesheet' type='text/css'>

        <!-- CSS Stylings (Default Base Stylings and Site Specific) -->
        <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="<?php echo $vendor.$template.'global'.$css;?>">
        <link rel="stylesheet" href="/assets/css/local.css?v=<?php echo time(); ?>">
        <!--<![endif]-->
        <!--[if lte IE 8]>
            <link rel="stylesheet" href="<?php echo $vendor.$template.'global-ie'.$css;?>">
            <link rel="stylesheet" href="/assets/css/local-ie.css">
        <![endif]-->

        <!-- Javascript Libraries -->
        <script src="<?php echo  $vendor . 'vendor/modernizr.min.js' ?>"></script>        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
         <script src="/assets/template-manager/js/controllers.js"></script>
        <!-- patient care videos -->
        <script src="/sesame_scripts/scripts/jquery.flash_1.3.js" type="text/javascript"></script>


        <!-- Color Styler --> 
				 <?php 
        
        $path_to_color_styler = $_SERVER['DOCUMENT_ROOT'] . '/hub_sites/srwd/www/assets/tools/styler/includes/ColorStyler.php';	 		
        include $path_to_color_styler;
        $color_styler = new ColorStyler;  
				 
				include 'assets/template-manager/includes/TemplateManager.class.php';				
				$site_data = new templateManager('avalon1');
  
        ?>      
                
        
        
    </head>
    <body ng-app="PageData" data-ga_code="<?php echo $site['ga_code'];?>" class="<?php echo $site['layout_classes'];?>">

        <header id="hd" class="font-1">
            <div class="container row" id="sub-hd">
            	 <div id="utility-nav" class="font-2">
                    <?php echo custom_navigation(array('Patient Login', 'Doctor Login')); ?>
                </div>
                <!-- #utility-nav -->
                
                    <div class="social-icons clearfix">
                        <a class="shift" href="/"><img src="/assets/images/socialnetworking/icon_facebook.png" alt="Find Us on Facebook" /></a> 
                        <a class="shift" href="/"><img src="/assets/images/socialnetworking/icon_google.png" alt="Google" /></a> 
                        <a class="shift" href="/"><img src="/assets/images/socialnetworking/icon_twitter.png" alt="Twitter" /></a> 
                        <a class="shift" href="/"><img src="/assets/images/socialnetworking/icon_youtube.png" alt="YouTube" /></a> 
                        <a class="shift" href="/"><img src="/assets/images/socialnetworking/icon_blog.png" alt="Our Blog" /></a> 
                    </div>
                    <!-- .social-icons -->
        	</div><!-- end of container -->	
            <div class="container row">
                <div class="logo span6">
                    <a href="/home">
                        <img src="/assets/images/logo.png" alt="logo" />
                        <!--<br /><span>Dr. Sam Sesame</span>-->
                    </a>
                </div>
                <!-- .logo -->
                <div class="span3 address">
                    <div class="hd-phone"><a href="tel:877-633-5193">(877) 633-5193</a></div>
                    <a href="/downtown-location">
                        542 First Avenue South<br>
                        Seattle, WA 98104
                    </a>
                </div>
                <!-- .address -->
                <div class="span3 address">
                    <div class="hd-phone"><a href="tel:877-633-5193">(877) 633-5193</a></div>
                    <a href="/downtown-location">
                        542 First Avenue South<br>
                        Seattle, WA 98104
                    </a>
                </div>
                <!-- .address -->
                                   
            </div>
            <!-- .container -->
        </header>
        <!-- #hd -->
 
         <div id="nav-wrapper">
            <div class="container">
                <nav id="main-nav" class="horizontal clearfix aligncenter font-3">        
                    <div class="collapsible">
                        <a href="javascript:void(0)" class="trigger">Menu</a>
			<?php echo navigation($exclusions = array('Patient Login', 'Doctor Login','Healthgrades')); ?>				
                    </div>
                </nav>
                <!-- .main-nav -->
                </div>
            <!-- .container -->
            </div><!-- end of nav wrapper -->
                
        <div id="top-banner">
            <div class="container">
                <?php if (is_homepage()) { ?>
                 <div id="home-slideshow">
					<?php
                    $slides = 5; // The number of slides to generate

                    for ($i = 1; $i <= $slides; $i++) {
                        echo '<img src="/assets/images/slideshow/slide' . $i . '.jpg" alt="slide #'.$i.'" />'."\n";
                    }
                    ?>
					</div>
					<!-- .home-slideshow --> 
                <div id="tagline" class="font-2 hide-mob">
                   Providing Gentle Dental Care <span>for the Entire Family</span>
                </div>
                <!-- #tagline -->
                <?php } ?>
            </div>
            <!-- .container -->
        </div>
        <!-- #top-banner -->
 
    	<?php if (is_homepage()) { ?>
        <div id="callouts" class="aligncenter font-2">
            <div class="container row">
                <div class="callout span3">
                    <a href="/meet-the-doctor">
                        <img src="/assets/images/callout-1.png" alt="Meet the Doctor" />
                        <h4>Meet<br /><span>Dr. Sesame</span></h4>
                        <p class="subtext">Learn more about our friendly dentist!</p>
                        <span class="learn-more">Learn More</span>
                    </a>
                </div>
                <!-- .callout -->
                <div class="callout span3">
                    <a href="/appointment-request">
                        <img src="/assets/images/callout-2.png" alt="Complimentary Consultation" />
                        <h4>Schedule a<br /><span>Consultation</span></h4>
                        <p class="subtext">Start your dental journey today!</p>
                        <span class="learn-more">Learn More</span>
                    </a>
                </div>
                <!-- .callout -->
                <div class="callout span3">
                    <a href="/testimonials">
                        <img src="/assets/images/callout-3.png" alt="Office Tour" />
                        <h4>See Our<br /><span>Testimonials</span></h4>
                        <p class="subtext">Read what our other patients have to say!</p>
                        <span class="learn-more">Learn More</span>
                    </a>
                </div>
                <!-- .callout -->
                <div class="callout span3">
                    <a href="/patient-forms">
                        <img src="/assets/images/callout-4.png" alt="Patient Forms" />
                        <h4>Patient<br /><span>Forms</span></h4>
                        <p class="subtext">Bring these to your next appointment!</p>
                        <span class="learn-more">Learn More</span>
                    </a>
                </div>
                <!-- .callout -->                
            </div>
            <!-- .container -->
        </div>
        <!-- #callouts -->
        <?php } ?>
        
    	<div id="bd">
      			<div class="container row">
        		<?php if (text_sub_navigation()): ?>
                <nav id="subnav" class="aligncenter">
                        <?php echo text_sub_navigation(); ?>
                    </nav>
                    <!-- #subnav -->
                <?php endif; ?> 
            </div>          
            <div class="container row">
                
                
								
								
                <?php if (!is_homepage()) { ?>
                <?php if($page['slug'] == 'template-manager-form') {  ?>
                <link type="text/css" rel="stylesheet" href="<?php echo '../../assets/template-manager/css/local.css'; ?>" > 
                <?php  include  $_SERVER['DOCUMENT_ROOT'] . '/hub_sites/color-styler/www/assets/template-manager/includes/template-manager-form.php';
                }
							  ?>
                 <!-- .page-content -->
                <div class="sidebar span4">
                    
                    <?php if (is_blog()): ?>
                    
                    <form action="/blog/search/" method="get" id="blog_search">
                        <label for="blog_search_term">Search Blog:</label>
                        <input id="blog_search_term" type="text" name="term" />
                        <button class="button button-small box-round">Search</button>
                    </form>
                    
                    <?php else: ?>                    
                    
                    <div class="page-photo hide-mob">
                        <?php place_image('','',''); ?>
                    </div>
                    <!-- .page-photo -->
                      
                    
                    <?php endif; ?>
                    
                </div>
                <!-- .sidebar -->
                
                
                
                <div class="page-content span8 font-1">
                <header class="page-title font-1">
                <h1><?php echo $page['headline']; ?></h1>
            	</header>  <!-- .page-title -->
                    
                    <?php
                      if(
                        is_blog() &&
                        $page['slug'] != 'search-results' &&
                        $page['slug'] != 'blog' &&
                        !$is_tag &&
                        !$is_category &&
                        !$is_paginated_index
                      ):
                    ?>
                      <!-- ShareThis Widget -->
                      <script type="text/javascript">
                        var switchTo5x=true;
                      </script>
                      <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
                      <script type="text/javascript">
                        stLight.options({publisher: "ur-54ed7f81-87ee-91f2-fc4a-b5e34bf9a248", doNotHash: true, doNotCopy: true, hashAddressBar: false});
                      </script>
                      <div class="share-article-links">
                        <p class="share-text">Share Article:</p>
                        <span class='st_googleplus_large' displayText='Share on Google+'></span>
                        <span class='st_facebook_large' displayText='Share on Facebook'></span>
                        <span class='st_twitter_large' displayText='Tweet This'></span>
                        <span class='st_linkedin_large' displayText='Share on LinkedIn'></span>
                        <span class='st_pinterest_large' displayText='Share on Pinterest'></span>
                        <span class='st_fblike_large' displayText='Like This on Facebook'></span>
                        <span class='st_plusone_large' displayText='Recommend This on Google'></span>
                      </div>
                      <!-- End ShareThis Widget -->
                    <?php endif; ?>                    
                    
                    <?php echo $page['content']; ?>

                    <?php echo $page['after_content']; ?>
                      
                </div>
               
                <?php } else { ?>
                <div class="page-content font-1">
                 
                    <!-- if the practice wants a one-column homepage -->
                    <!--<header class="page-title">
                <h1 class="aligncenter"><?php /*?><?php echo $page['headline']; ?><?php */?></h1>
            	</header>-->  <!-- .page-title -->
                	<!--<div class="body-tagline"><?php /*?><?php echo $page['header']; ?><?php */?></div>
                    <div id="content">
						<?php /*?><?php echo $page['content']; ?>
						<?php echo $page['image']; ?><?php */?>
                	</div>-->
                    <!-- end if if the practice wants a one column homepage -->
                    
                    <!-- if the practice wants a two-column homepage -->
                    <header class="page-title font-1">
                <h1><?php echo $page['headline']; ?></h1>
            	</header>  <!-- .page-title -->
                	<div class="body-tagline"><?php echo $page['header']; ?></div>
                  
                    <div id="main-content">
                    
                        <div id="content-left">
                          <?php echo $page['content']; ?>
                        </div>
                      
                        <div id="content-right">
                          <?php echo $page['image']; ?>
                        </div>
                    
                    </div><!-- end of main content -->                    
                    <!-- end two-column homepage -->
                    
                </div>
                <!-- .page-content -->
                <?php } ?>
            </div>
            <!-- .container -->
  
        </div>
        <!-- #bd --> 
	

          <div id="ft-banner">
        
            <div class="container">
                <p class="back-to-top">
                    <a href="#hd" class="ir shift">
                        Back to Top
                    </a>
                </p>
                <!-- .back-to-top -->
                
                <div class="row">
                    <div class="location span6 font-2">
                        <a href="/uptown-location" class="row">
                            <div class="map span5">
                                <img src="/assets/images/map1.png" alt="Map and Directions" class="shift" />
                            </div>
                            <!-- .map -->
                            <div class="address span7">
                                <div class="location-name">Uptown</div>
                                <div class="ft-phone">(877) 633-5193</div>
                                542 1st Ave. South, Suite 300<br>
                                Seattle, WA 98104
                            </div>
                            <!-- .address -->
                        </a>
                        <!-- .location a.row -->
                    </div>
                    <!-- .location -->
                    <div class="location span6">
                        <a href="/downtown-location" class="row font-2">
                            <div class="map span5">
                                <img src="/assets/images/map2.png" alt="Map and Directions" class="shift" />
                            </div>
                            <!-- .map -->
                            <div class="address span7">
                                <div class="location-name">Downtown</div>
                                <div class="ft-phone">(877) 633-5193</div>
                                542 1st Ave. South, Suite 300<br>
                                Seattle, WA 98104
                            </div>
                            <!-- .address -->
                        </a>
                        <!-- .location a.row -->
                    </div>
                    <!-- .location -->                    
                </div>
                <!-- .row --> 
                    
                    <div id="ft-logos-banner" class="row">
                    
                    <hr />
                    
                    <ul class="ft-logos">             
                        <li><a href="/">
                        <img class="shift" src="/sesame_media/images/logos/ada-horizontal-med.png" alt="American Dental Association" /></a></li>       
                    </ul>
                    
                    </div>  <!-- // end ft-logos // -->
                                
            </div>
            <!-- .container -->
        </div>
        <!-- #ft-banner --> 
            
        <footer id="ft" class="mob-aligncenter font-1">
            <div class="container row">
                <div id="ft-nav" class="span8">
                    <h5>Browse</h5>
                    <nav>
                        <?php echo text_navigation('','',' '); ?>
                    </nav>
                </div>
                <!-- #ft-nav -->
                <div class="social-media span4">
                    <h5 class="font-2">Connect</h5>
                    <div class="social-icons clearfix">
                        <a class="shift" href="/"><img src="/assets/images/socialnetworking/icon_facebook.png" alt="Find Us on Facebook" /></a> 
                        <a class="shift" href="/"><img src="/assets/images/socialnetworking/icon_google.png" alt="Google" /></a> 
                        <a class="shift" href="/"><img src="/assets/images/socialnetworking/icon_twitter.png" alt="Twitter" /></a> 
                        <a class="shift" href="/"><img src="/assets/images/socialnetworking/icon_youtube.png" alt="YouTube" /></a> 
                        <a class="shift" href="/"><img src="/assets/images/socialnetworking/icon_blog.png" alt="Our Blog" /></a>  
                    </div>
                    <!-- .social-icons -->
                </div>
                <!-- .social-media -->
                <div class="sesame full">
                    <a href="http://www.sesamecommunications.com/24-7">
                        <img src="/assets/images/sesame.png" alt="sesame" /> Website powered by Sesame 24-7&trade;
                    </a>
                </div>
                <!-- .sesame -->
            </div>
            <!-- .container -->
        </footer>
        <!-- #ft -->
        
        <!-- Additional scripts (Mobile Helpers, Console Detector, etc) -->
        <script src="<?php echo $vendor.'helpers.js';?>"></script>
        <script src="<?php echo $vendor.'global'.$js;?>"></script>     
        
        <script src="/assets/js/local.js"></script>        
      <div id="styler-sidebar">                         
        <?php  echo $color_styler->getStyler(); ?>   
        <p><a id="launch-styler"></a></p>       
        </div>   
        <!-- Color Styler -->    
        <!-- Google Analytics: GA code set in Site Layout Configuration. -->
      

    </body>
</html>


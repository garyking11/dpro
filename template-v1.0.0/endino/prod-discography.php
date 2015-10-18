<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include 'includes/discography.class.php'; ?>

<title>Test</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><!-- important -->

<meta name="HandheldFriendly" content="True" />
<meta name="MobileOptimized" content="320" />
<meta name="viewport" content="width=device-width" />
<meta name="description" content="Test" />
<link rel="stylesheet" href="css/global.css" type="text/css" media="all" /> 
<link rel="stylesheet" href="css/local.css" type="text/css" media="all" />
<!--<link rel='stylesheet' href='http://endino.com/testJEstyle.css' type='text/css' media='all' />-->
 
 
 
 
 
 
 
<!-- Add jQuery library -->
	<script type="text/javascript" src="/endino/plugins/fancyapps-fancyBox-18d1712/lib/jquery-1.10.1.min.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="/endino/plugins/fancyapps-fancyBox-18d1712/lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="/endino/plugins/fancyapps-fancyBox-18d1712/source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="/endino/plugins/fancyapps-fancyBox-18d1712/source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="/endino/plugins/fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="/endino/plugins/fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="/endino/plugins/fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="/endino/plugins/fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="/endino/plugins/fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>



 





</head>

<body>



<div id="logo">
    <span class="site-name"><a href="http://endino.com/" title="Jack Endino">Jack Endino</a></span>
    <span class="site-description"><em>&nbsp;&nbsp;&nbsp;Producer &#8211; Engineer &#8211; Mixer &#8211; Musician &#8211; NOISEMONGER</em></span>
</div>

<div class="container discography">

	<?php echo $disc->show_albums(); ?>
     
</div><!-- end container -->
 
   
    <script type="text/javascript">
$(document).ready(function() {
	$(".band-popoup").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none',
		helpers : {
        title: {
            type: 'inside'
        }
    }
	});
});</script>

    
    
</body>
</html>


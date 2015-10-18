<!DOCTYPE HTML>

<?php $local_path = "http://localhost:8888/PhpstormProjects/dpro/"; ?>

<html data-ng-app="app"><!--ClientPageContent-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Big Buddy Music</title>

    <!--http://bigbuddybizness.com/-->
    <link type="text/css" rel="stylesheet" href="<?php echo $local_path . 'template-v1.0.0/assets/css/bootstrap-3.3.2/css/bootstrap.css'; ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo $local_path . 'template-v1.0.0/assets/css/bootstrap/css/bootstrap-responsive.css';?>">
    <link type="text/css" rel="stylesheet" href="<?php echo $local_path . 'template-v1.0.0/assets/css/local.css' ;?>">
    <link type="text/css" rel="stylesheet" href="<?php echo $local_path . 'template-v1.0.0/assets/fonts/font-awesome-4.3.0/css/font-awesome.css' ;?>">

<!--    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>-->
    <!--<script src="/assets/js/libs/angular-1.3.10/angular.js"></script>-->
   <!-- <script src="/template-v1.0.0/assets/js/libs/angular-1.3.10/angular.js"></script>
    <script src="/template-v1.0.0/assets/js/libs/angular-1.3.10/angular-route.js"></script>
    <script src="/template-v1.0.0/assets/js/libs/angular-1.3.10/angular-touch.js"></script>
    <script src="/template-v1.0.0/assets/js/libs/angular-1.3.10/angular-messages.js"></script>
    <script src="/template-v1.0.0/assets/js/libs/angular-1.3.10/angular-resource.min.js"></script>-->

</head>

<?php //require $_SERVER['DOCUMENT_ROOT'] . "/template-v1.0.0/assets/includes/header.php"; ?>
<body>

<div id="hd">


</div>
 

      
<div class="container">
       
     <div class="row-fluid page-content">


    	<div class="span12"  data-ng-view>
<br /><br />
             <h2>Index</h2>

            <h3>Not ready for prime time</h3>
        
        </div><!-- end span12-->
                      
    </div><!-- end row-fluid -->
    
</div><!-- end container -->

<!--<div id="ft" data-ng-include="'/template-v1.0.0/assets/includes/footer.php'" class="container cf">

</div>-->


</body>
</html>
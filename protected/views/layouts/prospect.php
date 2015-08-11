<?php /* @var $this Controller */ ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Jakata Salon">
		<meta name="viewport" content="width=device-width" /> <!--mobile fixed width-->
		
 <?php $this->widget('ext.widgets.googleAnalytics.EGoogleAnalyticsWidget',
		array('account'=>'UA-2487518-1','domainName'=>'jakatasalon.co.uk')
 );?>

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/fonts/fonts.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/prospect.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 640px), only screen and (min-device-width : 719px) and (max-device-width : 721px) and (-webkit-min-device-pixel-ratio : 2) and (orientation : portrait)" href="<?php echo Yii::app()->request->baseUrl; ?>/css/mobile.css" />
	
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/mootools-core.js " type="text/javascript"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/mootools-more.js " type="text/javascript"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/modernizr.js " type="text/javascript"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/selectivizr-min.js " type="text/javascript"></script>
	
	<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
	<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/scripts/mobile-nav.js'); ?>	
	

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head> 

<body>

<div class="container" id="page">

<header class="group">

	<?php echo CHtml::link('<div id="logo"></div>', array('site/index'), array('class' => 'logo')); ?>

	<h1>Jakata Salon</h1>
	<h2>Fashion Forward Hairdressing</h2>

</header>
	

	<?php echo $content; ?>

	<div class="clear group"></div>
	
<footer>

	<div id="facebook"><a href="http://www.facebook.com/JakataSalon" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/facebook_logo.png" alt="Facebook" width="35" height="36"></a>
	</div> <!--facebook-->
	<div id="twitter"><a href="https://twitter.com/JakataSalon" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/twitter_logo.png" alt="Twitter" width="43" height="36"></a>
	</div> <!--twitter-->

</footer>

</div><!-- page -->

</body>
</html>

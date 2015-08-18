<?php /* @var $this Controller */ ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="Jakata is a fashion forward, award winning hairdressing salon in Warrington. The team comprises of eight skilled stylists, each from different hairdressing backgrounds, all displaying a diverse range of skills. This mix of talent creates a dynamic salon with stylists well suited to anyone looking for a fashion forward look. You'll be blown away by how friendly and approachable each of our team members are, and the warm, welcoming environment Jakata offers.">
		<meta name="keywords" content="hairdresser, hairdressing, salon, Warrington, Cheshire, cutting, styling, stylist, straightening, Schwarzkopf, Tigi, Bedhead, GHD, fashion">
		<meta name="author" content="Jakata Salon">
		<meta name="viewport" content="width=device-width" /> <!--mobile fixed width-->
		
 <?php $this->widget('ext.widgets.googleAnalytics.EGoogleAnalyticsWidget',
		array('account'=>'UA-2487518-1','domainName'=>'jakatasalon.co.uk')
 );?>

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/fonts/fonts.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/prospect.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 640px), only screen and (min-device-width : 719px) and (max-device-width : 721px) and (-webkit-min-device-pixel-ratio : 2) and (orientation : portrait)" href="<?php echo Yii::app()->request->baseUrl; ?>/css/prosmob.css" />
	
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
	
	<section id="prospect-info">
	
	<section id="prospect-image"></section>
	
	<p><strong>Jakata is a fashion forward, award winning hairdressing salon in Warrington.</strong></p>
	<p>The team comprises of eight skilled stylists, each from different hairdressing backgrounds, all displaying a diverse range of skills.</p>
	<p>This mix of talent creates a dynamic salon with stylists well suited to anyone looking for a fashion forward look.</p>
	<p><em>You'll be blown away by how friendly and approachable each of our team members are, and the warm, welcoming environment Jakata offers.</em></p>
	<p><strong>You know you're in good hands at JAKATA.</strong></p>
	
	<section id="address_info">
	<p>90/92 Bridge Street, Warrington</p>
	<p class="big">01925 242960</p>
	</section> <!--address_info-->
	</section> <!--prospect-info-->

	<?php echo $content; ?>

	<div class="clear group"></div>
	
</div><!-- page -->

</body>
</html>

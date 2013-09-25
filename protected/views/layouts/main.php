<?php /* @var $this Controller */ ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="Jakata is a fashion forward, award winning hair salon in Warrington, Cheshire. With a team of twelve talented hairdressers looking after you, you know you're in good hands. Based on Bridge street in Warrington Town Centre the salon is located perfectly to serve Lymm, Stockton Heath, Culcheth, Great Sankey, Widnes and Runcorn. If you're looking for the most fashion forward hairdressing then look no further. Our hairdressing services will far outweigh your expectations plus you'll be blown away by our friendly, approachable staff. Jakata, 90/92 Bridge Street, Warrington, WA1 2RF, 01925 242960">
		<meta name="keywords" content="hair, hairdressers, hairdressing, hairdressers in Warrington, men's hairdresing, fashion colour, brazilian blowdry, wedding hair, Daniel Anderson, Warrington, Lymm, Stockton Heath, Culcheth, Great Sankey, Widnes and Runcorn">
		<meta name="author" content="Contra Design">
		<meta name="viewport" content="width=device-width" /> <!--mobile fixed width-->
 

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/fonts/fonts.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jakstyles.css" />
	<link rel="stylesheet" type="text/css" media="only screen and (max-width: 480px), only screen and (max-device-width: 480px)" href="<?php echo Yii::app()->request->baseUrl; ?>/css/mobile.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	
	
	
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/modernizr.js " type="text/javascript"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/selectivizr-min.js " type="text/javascript"></script>
	<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
	<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/scripts/mobile-nav.js'); ?>	
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/mootools-core.js " type="text/javascript"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/mootools-more.js " type="text/javascript"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	
	
</head>

<body>

<div class="container" id="page">

<header class="group">

	<?php echo CHtml::link('<div id="logo"></div>', array('site/index'), array('class' => 'logo')); ?>

	<h1>Jakata Salon</h1>
	<h2>Hairdressers in Warrington</h2>

	<nav class="group">
	<?php $this->widget('zii.widgets.CMenu',array(
		'items'=>array(
			array('label'=>'Home', 'url'=>array('/site/index')),
			array('label'=>'Offers', 'url'=>array('/site/page', 'view'=>'offers')),
			//array('label'=>'The Salon', 'url'=>array('/site/page', 'view'=>'salon')),
			array('label'=>'Team', 'url'=>array('/site/page', 'view'=>'team')),
			array('label'=>'News', 'url'=>array('/site/page', 'view'=>'news')),
			array('label'=>'Prices', 'url'=>array('/site/page', 'view'=>'prices')),
			//array('label'=>'Recruitment', 'url'=>array('/site/page', 'view'=>'recruitment')),
			array('label'=>'Contact', 'url'=>array('/site/page','view'=>'details')),
		),
	)); ?>
	</nav>
</header>
	

	<?php echo $content; ?>

	<div class="clear group"></div>
	
	<footer>
	
	<section id="prodlogos">
	    <ul id="prodcomps">
	    	<li>
	    		<a href="http://www.schwarzkopf-professional.com/" target="_blank" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/footer/footer-01.png" alt="Schwarzkopf - the best hairdressing products"></a>
	    	</li>
	    	<li>
	    		<a href="http://www.schwarzkopf-professional.com/" target="_blank" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/footer/footer-02.png" alt="Schwarzkopf Bonacure"></a>
	    	</li>
	    	<li>
	    		<a href="http://www.schwarzkopf-professional.com/" target="_blank" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/footer/footer-03.png" alt="Schwarzkopf Osis"></a>
	    	</li>
	    	<li>
	    		<a href="http://www.kebelo.com/" target="_blank" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/footer/footer-04.png" alt="Kebelo"></a>
	    	</li>
	    	<li>
	    		<a href="http://www.tigihaircare.com/consumer/en-UK/bedhead/" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/footer/footer-05.png" alt="Tigi Bedhead - The Hairdressers Choice"></a>
	    	</li>
	    	<li>
	    		<a href="http://www.catwalkbytigi.com/" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/footer/footer-06.png" alt="Tigi Catwalk - hair styling from the runways"></a>
	    	</li>
	    	<li>
	    		<a href="http://www.tigihaircare.com/" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/footer/footer-07.png" alt="Tigi B for Men"></a>
	    	</li>
	    	
	    	<li>
	    		<a href="http://www.ghdhair.com/" target="_blank" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/footer/footer-08.png" alt="ghd - hair styling at it's best"></a>
	    	</li>
	    	
	    </ul>
	 </section> <!--prodlogos-->
	 
	 <section id="aboutus" class="group">
	     <ul class="tinytext">
	     <li><strong>Jakata Salon</strong></li>
	     <li>Hairdressers in Warrington</li>
	     <li>Hairdressers in Cheshire</li> 
	     <li>Cutting</li> 
	     <li>Colouring</li> 
	     <li>Opti-Smooth Straightening</li> 
	     <li>Hair Extensions</li> 
	     <li>Wedding Hair</li>  
	     <li>Hairdressing Gift Vouchers</li> 
	     <li>GHD</li> 
	     <li>Daniel Anderson Hairdressing</li>
	     <li>Warrington Hairdressers</li> 
	     <li>Warrington Hairdressing</li>
	     <li>Cheshire Hairdressers</li>
	     <li>plus lots more!</li>  
	     <li>All in our Warrington Hairdressing Salon</li>
	     </ul>
	 </section> <!--aboutus-->
	 
	 </footer>
		<div id="facebook"><a href="http://www.facebook.com/JakataSalon" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/main/facebook_logo.png" alt="Facebook" width="25" height="25"></a>
		</div> <!--facebook-->
</div><!-- page -->

</body>
</html>

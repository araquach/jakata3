<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . 'Hairdressing Offers';
?>

<?php Yii::app()->facebook->ogTags['og:title'] = "Special Offers"; ?>
<?php Yii::app()->facebook->ogTags['og:description'] = "Take advantage of these great offers for new clients: Colour & Cut package for just £55 with a stylist or £75 with a senior stylist"; ?>
<?php Yii::app()->facebook->ogTags['og:image'] =  "http://www.jakatasalon.co.uk/images/offers/alex_meta.jpg" ; ?>

<section id="offers">

<h1>Special Offers</h1>

	<section id="offer1">
	  <h2>Senior Stylist Colour &amp; Cut Package</h2>
	  <p>for just &pound;75<br>with any of our Senior Stylists</p>
	    <small><time datetime="2015-06-30">extended until 30/06/15</time><br>
	    For New Clients - not with any other offer. Excludes Saturday<br>Skin test required 48hrs before any colour service</small>
	</section>
	
	<section id="offer2">
	  <h2>Stylist Colour &amp; Cut Package</h2>
	  <p>for just &pound;55<br>with any of our Stylists</p>
	    <small><time datetime="2015-06-30">extended until 30/06/15</time><br>
	    For New Clients - not with any other offer. Excludes Saturday<br>Skin test required 48hrs before any colour service</small>
	</section>
	
	<section id="offer3">
	  <h2>Graduate Stylist Colour &amp; Cut Package</h2>
	  <p>for just &pound;40<br>with any of our Graduate Stylists</p>
	    <small><time datetime="2015-06-30">extended until 30/06/15</time><br>
	    For New Clients - not with any other offer. Excludes Saturday<br>Skin test required 48hrs before any colour service</small>
	</section>
	
	<section id="offer4">
	  <h2>Men's Cut &amp; Style</h2>
	  <p>for just &pound;14 with a Stylist<br>&pound;18 with a Senior Stylist</p>
	    <small><time datetime="2015-06-30">extended until 30/06/15</time><br>
	    For New Clients - not with any other offer. Excludes Saturday</small>
	</section>
	
	<?php echo CHtml::link('<p id="book_button">Online enquiry and booking form</p>',array('site/contact')); ?>
	
	<div id="fb_like">
	<?php  $this->widget('ext.yii-facebook-opengraph.plugins.LikeButton', array(
	   'href' => 'http://www.jakatasalon.co.uk/offers', 
	   'show_faces'=>false,
	   'send' => true,
	   'width' => '250px'
	));  ?>
	</div>

</section> <!--end #offers-->

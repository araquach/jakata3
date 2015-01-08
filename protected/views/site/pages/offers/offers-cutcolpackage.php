<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . 'Hairdressing Offers';
?>

<?php Yii::app()->facebook->ogTags['og:title'] = "New Year Offers"; ?>
<?php Yii::app()->facebook->ogTags['og:description'] = ""; ?>
<?php Yii::app()->facebook->ogTags['og:image'] =  "http://www.jakatasalon.co.uk/images/offers/.jpg" ; ?>
<?php Yii::app()->facebook->ogTags['og:image'] =  "http://www.jakatasalon.co.uk/images/offers/.jpg" ; ?>

<section id="offers">

	<section id="offer1">
	  <h2>Senior Stylist Colour &amp; Cut Package</h2>
	  <p>for just &pound;75<br>with any of our Senior Stylists</p>
	    <small><time datetime="2015-01-31">until 31/01/15</time><br>
	    For New Clients - not with any other offer. Excludes Saturday<br>Skin test required 48hrs before any colour service</small>
	</section>
	
	<section id="offer2">
	  <h2>Stylist Colour &amp; Cut Package</h2>
	  <p>for just &pound;55<br>with any of our Stylists</p>
	    <small><time datetime="2015-01-31">until 31/01/15</time><br>
	    For New Clients - not with any other offer. Excludes Saturday<br>Skin test required 48hrs before any colour service</small>
	</section>
	
	<section id="offer3">
	  <h2>Men's Cut &amp; Style</h2>
	  <p>for just &pound;14 with a Stylist<br>&pound;18 with a Senior Stylist</p>
	    <small><time datetime="2015-01-31">until 31/01/15</time><br>
	    For New Clients - not with any other offer. Excludes Saturday</small>
	</section>
	
	<?php echo CHtml::link('<p id="book_button">Online enquiry and booking form</p>',array('site/contact')); ?>

</section> <!--end #offers-->

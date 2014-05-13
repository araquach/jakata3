<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . 'Hairdressing Offers';
?>

<?php Yii::app()->facebook->ogTags['og:title'] = "Offers"; ?>
<?php Yii::app()->facebook->ogTags['og:description'] = ""; ?>
<?php Yii::app()->facebook->ogTags['og:image'] =  "http://www.jakatasalon.co.uk/images/offers/.jpg" ; ?>
<?php Yii::app()->facebook->ogTags['og:image'] =  "http://www.jakatasalon.co.uk/images/offers/.jpg" ; ?>

<section id="offers">

	<section id="offer1">
	  <h2>Colour &amp; Cut Package</h2>
	  <p>for just &pound;60<br>with any of our Stylists</p>
	    <small><time datetime="2014-05-30">until 30/05/14</time><br>
	    For New Clients - not with any other offer. Excludes Saturday<br>Skin test required 48hrs before any colour service</small>
	</section>
	
	<section id="offer2">
	  <h2>30% off Men's Cut &amp; Style</h2>
	  <p>for new clients<br>throughout May</p>
	    <small><time datetime="2014-05-30">until 30/05/14</time><br>
	    For New Clients - not with any other offer. Excludes Saturday</small>
	</section>
	
	
	<?php  echo CHtml::link('<section id="offer3">
	  <h2>FREE Cut Dry &amp; Style <br>with every<br>Kebelo Advantage Treatment</h2>
	  <p>Throughout the month of May</p>
	    <small>until <time datetime="2014-05-30">30/05/14</time><br>
	    Not with any other offer. Excludes Saturday<br></small>
	</section>', array('kebelo/index')); ?>
	
	<?php echo CHtml::link('<p id="book_button">Online enquiry and booking form</p>',array('site/contact')); ?>

</section> <!--end #offers-->

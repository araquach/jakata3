<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . 'Hairdressing Offers';
?>

<?php Yii::app()->facebook->ogTags['og:title'] = "New Client Offers"; ?>
<?php Yii::app()->facebook->ogTags['og:description'] = "FREE Colour with every Cut, Dry & Style throughout the month &
30% off Men's Cut & Style (for new clients)"; ?>
<?php Yii::app()->facebook->ogTags['og:image'] =  "http://www.jakatasalon.co.uk/images/offers/retro.jpg" ; ?>


<section id="offers">

<h1>Latest Offers</h1>	
	
	<section id="offer1">
	  <h2>FREE Colour <br>with every<br>Cut, Dry &amp; Style</h2>
	  <p>For new clients<br>until the end of April</p>
	    <small><time datetime="2014-04-30">extended until 30/04/14</time><br>
	    For New Clients - not with any other offer. Excludes Saturday<br>Skin test required 48hrs before any colour service</small>
	</section>
	
	<section id="offer2">
	  <h2>30% off<br>Men's Cut &amp; Style</h2>
	  <p>For new clients<br>until the end of April</p>
	    <small><time datetime="2014-04-30">extended until 30/04/14</time><br>
	    For New Clients - not with any other offer. Excludes Saturday</small>
	</section>
	
	<?php  echo CHtml::link('<section id="offer3">
	  <h2>FREE Cut Dry &amp; Style <br>with every<br>Kebelo Advantage Treatment</h2>
	  <p>Throughout the month of April</p>
	  <p>(Click here to find out more about Kebelo)</p>
	    <small>extended until <time datetime="2014-04-30">30/04/14</time><br>
	    Not with any other offer. Excludes Saturday<br></small>
	</section>', array('kebelo/index')); ?>
	
	<?php echo CHtml::link('<p id="book_button">Online enquiry and booking form</p>',array('site/contact')); ?>

</section> <!--end #offers-->

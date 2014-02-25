<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . 'Hairdressing Offers';
?>

<?php Yii::app()->facebook->ogTags['og:title'] = "Special Offers"; ?>
<?php Yii::app()->facebook->ogTags['og:description'] = ""; ?>
<?php Yii::app()->facebook->ogTags['og:image'] =  "http://www.jakatasalon.co.uk/images/offers/men.jpg" ; ?>
<?php Yii::app()->facebook->ogTags['og:image'] =  "http://www.jakatasalon.co.uk/images/offers/glam.jpg" ; ?>


<section id="offers">
	
	<section id="offer1">
	  <h2>FREE Colour <br>with every<br>Cut, Dry &amp; Style</h2>
	  <p>For new clients<br>until the end of March</p>
	    <small><time datetime="2014-03-30">until 30/03/14</time><br>
	    For New Clients - not with any other offer. Excludes Saturday<br>Skin test required 48hrs before any colour service</small>
	</section>
	
	<?php  echo CHtml::link('<section id="offer2">
	  <h2>FREE Cut Dry &amp; Style <br>with every<br>Kebelo Advantage Treatment</h2>
	  <p>Throughout the month of March</p>
	    <small>until <time datetime="2014-03-30">30/03/14</time><br>
	    Not with any other offer. Excludes Saturday<br></small>
	</section>', array('kebelo/index')); ?>
	
	<?php echo CHtml::link('<p id="book_button">Online enquiry and booking form</p>',array('site/contact')); ?>

</section> <!--end #offers-->

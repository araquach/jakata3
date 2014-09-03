<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . 'Hairdressing Offers';
?>

<?php Yii::app()->facebook->ogTags['og:title'] = "September Special Offers"; ?>
<?php Yii::app()->facebook->ogTags['og:description'] = "Free Colour with every Cut, Dry & Style for new clients this September"; ?>
<?php Yii::app()->facebook->ogTags['og:image'] =  "http://www.jakatasalon.co.uk/images/offers/candy_dandy_meta.jpg" ; ?>


<section id="offers">
	
	<section id="offer1">
	  <h2>FREE Colour <br>with every<br>Cut, Dry &amp; Style</h2>
	  <p>For new clients<br>until the end of September</p>
	    <small><time datetime="2014-09-29">extended until 29/09/14</time><br>
	    For New Clients - not with any other offer. Excludes Saturday<br>Skin test required 48hrs before any colour service</small>
	</section>
	
	<section id="offer2">
	  <h2><span class="big">30% off</span><br>Mens Cut &amp; Style<br>For New Clients</h2>
	  <p>Throughout the month of September</p>
	    <small>extended until <time datetime="2014-09-29">29/09/14</time><br>
	    Not with any other offer. Excludes Saturday<br></small>
	</section>
	
	<?php  echo CHtml::link('<section id="offer3">
	  <h2><span class="big">30% off</span> <br>with our new stylists<br>Matthew &amp; Laura</h2>
	  <p>Throughout the month of September</p>
	  <p>Click here for more details</p>
	    <small>extended until <time datetime="2014-09-30">29/09/14</time><br>
	    Not with any other offer. Excludes Saturday<br></small>
	</section>', array('site/page', 'view'=>'newoffer')); ?>
	
	<?php echo CHtml::link('<p id="book_button">Online enquiry and booking form</p>',array('site/contact')); ?>

</section> <!--end #offers-->

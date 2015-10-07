<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . 'Hairdressing Offers';
?>

<?php Yii::app()->facebook->ogTags['og:title'] = "Special Offers"; ?>
<?php Yii::app()->facebook->ogTags['og:description'] = "Half Price Colour with every Cut, Dry & Style and 30% off Mens Cut & Style - for new clients this September"; ?>
<?php Yii::app()->facebook->ogTags['og:image'] =  "http://www.jakatasalon.co.uk/images/offers/Alice_012_meta.jpg" ; ?>


<section id="offers">
	
	<section id="offer1">
	  <h2>Half Price Colour <br>with every<br>Cut, Dry &amp; Style</h2>
	  <p>For new clients<br>Until the end of September</p>
	    <small><time datetime="2015-09-30">extended until 30/09/15</time><br>
	    For New Clients - not with any other offer. Excludes Saturday<br>Skin test required 48hrs before any colour service</small>
	</section>
	
	<section id="offer2">
	  <h2><span class="big">30% off</span><br>Mens Cut &amp; Style<br>For New Clients</h2>
	  <p>Throughout September</p>
	    <small>until <time datetime="2015-09-30">extended until 30/09/15</time><br>
	    Not with any other offer. Excludes Saturday<br></small>
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
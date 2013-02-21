<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . ' - Hairdressing Offers - Hairdressers in Cheshire';
?>

<section id="offers">


	<h1>Latest Offers</h1>

	<?php echo CHtml::link('<section id="offer1" class="group">
	<h2>Catwalk Makeover <br>Package 1</h2>
	<p>A limited edition package worth &pound;140 <br>for just &pound;70</p>
	<p><strong>Click here for more details</strong></p>
	<small>Excludes Saturday. First visit only. Not with any other offer. <br />Skin test required 48 hrs prior to service Ends 31/03/13 </small>
	(</section>', array('site/page','view'=>'catwalk')); ?>
	
	<?php echo CHtml::link('<section id="offer2" class"group">
	<h2>Catwalk Makeover <br>Package 2</h2>
	<p>25% off a Cut, Dry &amp; Style plus FREE product and Catwalk Fashion Styling</p>
	<p><strong>Click here for more details</strong></p>
	<small>Excludes Saturday. First visit only. Not with any other offer. Ends 31/03/13</small>
	
	</section>', array('site/page','view'=>'catwalk2')); ?>
	
	
	<section id="offer3" class="group">
	<h2>30% Off Selected Products</h2>
	<p>Come into the salon to see a wide selection of shampoo's, conditioners, treatments &amp; styling products</p>
	<p>All with 30% off!</p>
	<small>Subject to availability.</small>
	</section><!--end #offer3-->
	
	<?php echo CHtml::link('<p id="book_button">Online enquiry and booking form</p>',array('site/contact')); ?>


</section> <!--end #offers-->


<!--
<section id="no_offers">

<h1>Latest Offers</h1>

<p>Look out for some great offers in the New Year!</p>
<p>
	<a href="http://www.facebook.com/JakataSalon" target="_blank">Visit our Facebook page - we occasionally run ad-hoc offers </a>
</p>

</section> <!--no_offers-->
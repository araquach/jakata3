<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . ' - Hairdressing Offers - Hairdressers in Cheshire';
?>

<section id="offers">

	<h1>Latest Offers</h1>

	<section id="offer1" class="group">
	<h2>FREE Colour with every Cut, Dry &amp; Style</h2>
	<p>Have any Colour service absolutely FREE on your first visit to the salon
	when you have a Cut, Dry &amp; Style</p>
	<small>Excludes Saturday. First visit only. Not with any other offer. <br />Skin test required 48 hrs prior to service Ends 28/02/13 </small>
	</section> <!--end #offer1-->
	
	<section id="offer2">
	<h2>30% Off Selected Products</h2>
	<p>Come into the salon to see a wide selection of shampoo's, conditioners, treatments &amp; styling products</p>
	<p>All with 30% off!</p>
	<small>Subject to availability.</small>
	</section><!--end #offer2-->
	
	<!--
	<section id="offer4">
	<h2>FREE Cut, Dry &amp; Style with every<br> <?php echo CHtml::link('Kebelo Treatment',array('kebelo/index')); ?></h2>
	<p>The incredible new Brazilian blow dry treatment is only &pound;99 and includes a Cut, Dry &amp; Style plus aftercare products</p>
	<small>Excludes Saturday. Not with any other offer. Ends 30/11/12</small>
	</section><!--end #offer4-->
	
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
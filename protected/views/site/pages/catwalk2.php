<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . ' - Catwalk Package - Hairdressers in Cheshire';
?>

<section id="catwalk_bground">
	
	<section id="catwalk">
	
	<h1>New Client Offer</h1>

	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/catwalk/catwalk_logo.png" alt="Catwalk Package" width="316" height="100"/>
	
	<p class="cat_small">for a limited time only!</p>
	<p><em>Cut &amp; Style Package</em></p>
	<p class="cat_small">with a Senior Stylist:</p>
	<p class="cat_big"><strong>worth &pound;60</strong></p>
	<p>for only &pound;30</p>
	<p class="cat_small"><em>the same package <br>with a Stylist:</em></p>
	<p class="cat_med"><strong>only &pound;25</strong></p>
	<p class="cat_small">worth &pound;50!</p>
	<br>
	<div id="cat_includes">
	<p><em><strong>Package Includes:</strong></em></p>
	<p><em>Cut, Dry &amp; Style PLUS</em><br>
	<em>Catwalk Fashion Styling PLUS</em><br>
	<em>FREE Catwalk Product</em></p>
	<p class="cat_small">New clients only, not with any other offer. <br>Weekdays only. Ends 31/03/13</p>
	</div>
	
	<p class="link"><?php echo CHtml::link('Colour &amp Cut Package also available <br><strong>Click here for info</strong> ',array('site/page','view'=>'catwalk')); ?></p>
	<p class="catwalk_contact">Call 01925 242960 to book</p>

</section> <!--#catwalk-->

</section> <!--end #catwalk_bground-->


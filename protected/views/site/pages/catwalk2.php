<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . ' - Catwalk Package - Hairdressers in Cheshire';
?>

<section id="catwalk_bground">
	
	<section id="catwalk">
	
	<h1>New Client Offer</h1>

	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/catwalk/catwalk_logo.png" alt="Catwalk Package" width="316" height="100"/>
	
	<p class="cat_small">for a limited time</p>
	<p><em>Cut, Dry &amp; Style Only Package</em></p>
	<p class="cat_big"><strong>25% off</strong></p>
	<p class="cat_med">A Cut, Dry &amp; Style</p>
	<p class="cat_big">PLUS</p>
	<p>Catwalk Fashion Styling</p>
	<p><strong>PLUS</strong></p>
	<p>FREE Catwalk product of your choice</p>
	
	<p class="cat_small">New clients only, not with any other offer. <br>Weekdays only. Ends 31/03/13</p>
	
	<p class="link"><?php echo CHtml::link('Colour &amp Cut Package also available <br><strong>Click here for info</strong> ',array('site/page','view'=>'catwalk')); ?></p>
	<p class="catwalk_contact">Call 01925 242960 to book</p>

</section> <!--#catwalk-->

</section> <!--end #catwalk_bground-->


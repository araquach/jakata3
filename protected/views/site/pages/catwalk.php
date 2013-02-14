<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . ' - Catwalk Package - Hairdressers in Cheshire';
?>

<section id="catwalk_bground">
	
	<section id="catwalk">
	
	<h1>New Client Offer</h1>

	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/catwalk/catwalk_logo.png" alt="Catwalk Package" width="316" height="100"/>
	
	<p>for a limited time</p>
	<p>with a Senior Stylist</p>
	<p class="cat_big"><strong>worth &pound;140</strong></p>
	<p>for only &pound;70</p>
	<p>with a Stylist - only &pound;60</p>
	<p class="cat_small">worth &pound;120</p>
	<br>
	<p><em><strong>Package Includes:</strong></em></p>
	<p><em>Colour &amp; Cut PLUS</em><br>
	<em>Catwalk Fashion Styling</em><br>
	<em>FREE Catwalk Shampoo, Conditioner</em><br>
	<em>&amp; Styling Product Worth £40</em></p>
	<p class="cat_small">New clients only, not with any other offer</p>
	
	<?php echo CHtml::link('Cut &amp Style Package also avaialble<br>Click here for info >',array('site/page','view'=>'catwalk2')); ?>
	

</section> <!--#catwalk-->

</section> <!--end #catwalk_bground-->


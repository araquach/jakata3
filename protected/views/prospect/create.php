<?php
/* @var $this ProspectController */
/* @var $model Prospect */
?>

<section id="prospect">

<section id="prospect-info">

<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/prospect/boho.jpg" width="350" height="280" alt="Boho">

<p><strong>Jakata is a fashion forward, award winning hairdressing salon in Warrington, Cheshire. With a team of eight talented hairdressers looking after you, you know you're in good hands.</strong></p>
<p>Based on Bridge street in Warrington Town Centre the salon is located perfectly to serve the whole of Warrington and surrounding areas.</p>
<p><em>If you're looking for the most fashion forward hairdressing then look no further. Our hairdressing services will far outweigh your expectations plus you'll be blown away by our friendly, approachable staff.</em></p>

<p>The Jakata team comprises of eight skilled stylists, all from different hairdressing backgrounds, all displaying a diverse range of skills.</p>
<p>Over the years Jakata has trained and developed a number of people to exceptional standards, whilst taking on already established stylists. This mix of talent creates a dynamic team with stylists well suited to anyone with a desire for a fashion forward look.</p>

</section> <!--prospect-info-->

<section id="prospect-entry">

<section id="tohide">

<h2>Claim Your FREE Products</h2>

<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/prospect/bc.jpg" width="380" height="200" alt="Boho">

<p>How would you like to get some products tailored to your hair needs sent out to you absolutely FREE?<br>
A selection of shampoo’s, conditioners and styling products could be yours - plus a secret surprise gift!</p>

</section>

<div id="prospect_form">

<?php if(Yii::app()->user->hasFlash('entry')): ?>

<div class="prospect_success">
	<?php echo Yii::app()->user->getFlash('entry'); ?>
</div>

<?php else: ?>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

</div> <!--end #prospect_form-->

</section> <!--end prospect-entry-->

</section> <!--end #prospect-->

<?php endif ?>
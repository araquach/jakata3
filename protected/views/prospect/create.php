<?php
/* @var $this ProspectController */
/* @var $model Prospect */
?>

<section id="prospect">

<section id="prospect-info">

<h1>Welcome to Jakata</h1>
<h2>Fashion forward hairdressing</h2>

<p>Jakata is a fashion forward, award winning hairdressing salon in Warrington, Cheshire. With a team of twelve talented hairdressers looking after you, you know you're in good hands.</p>
<p>Based on Bridge street in Warrington Town Centre the salon is located perfectly to serve the whole of Warrington and surrounding areas.</p>
<p>If you're looking for the most fashion forward hairdressing then look no further. Our hairdressing services will far outweigh your expectations plus you'll be blown away by our friendly, approachable staff.</p>

<img src="" alt="big enticing image" width="500" height="200" />

<p>The Jakata team comprises of eight skilled stylists, all from different hairdressing backgrounds, all displaying a diverse range of skills.</p>
<p>Over the years Jakata has trained and developed a number of people to exceptional standards, whilst taking on already established stylists. This mix of talent creates a dynamic team with stylists well suited to anyone with a desire for a fashion forward look.</p>
<p><em>We know it's difficult to find a stylist well suited to your needs so we'll help you find a stylist most suited for your needs</em></p>


</section>

<div id="prospect_form">

<?php if(Yii::app()->user->hasFlash('entry')): ?>

<div class="prospect_success">
	<?php echo Yii::app()->user->getFlash('entry'); ?>
</div>

<?php else: ?>


<h2>Claim your FREE products today!</h2>
<p>We're giving away FREE products especially selected for your hair type - plus a secret FREE gift</p>
<p>Simply fill out the form below to claim yours!</p>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

</div> <!--end #prospect_form-->

<?php echo CHtml::link('Click here to go to our website', array('site/index')); ?>

</section> <!--end #prospect-->

<?php endif ?>
<?php
/* @var $this ProspectController */
/* @var $model Prospect */
?>

<?php
	Yii::app()->clientScript->registerCoreScript('jquery');
	Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/scripts/prospect.js');
?>

<section id="prospect">

<section id="prospect-info">

<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/prospect/boho.jpg" width="350" height="280" alt="Boho">

<p><strong>Jakata is a fashion forward, award winning hairdressing salon in Warrington.</strong></p>
<p>The team comprises of eight skilled stylists, all from different hairdressing backgrounds, all displaying a diverse range of skills.</p>
<p>This mix of talent creates a dynamic salon with stylists well suited to anyone looking for a fashion forward look.</p>
<p><em>You'll be blown away by how friendly and approachable each of our team members are, and the warm, welcoming environment Jakata offers.</em></p>
<p><strong>You know you're in good hands at JAKATA.</strong></p>

</section> <!--prospect-info-->

<section id="prospect-entry">

<section id="tohide">

<h2>Claim Your <span class="red">FREE</span> Products</h2>

<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/prospect/bc.jpg" width="380" height="200" alt="Boho">

<p><em>How would you like to get some products tailored to your hair needs sent out to you absolutely <span class="red">FREE?</span><br>
A selection of shampoo’s, conditioners and styling products could be yours - plus a secret surprise gift!</em></p>

<a href="#" class="prospect-button">Click here to claim yours ></a>

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
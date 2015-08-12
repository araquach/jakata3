<?php
/* @var $this ProspectController */
/* @var $model Prospect */
?>

<?php
	Yii::app()->clientScript->registerCoreScript('jquery');
	Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/scripts/prospect3.js');
?>

<section id="prospect">

<section id="prospect-info">

<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/prospect/boho.jpg" width="350" height="280" alt="Boho">

<p><strong>Jakata is a fashion forward, award winning hairdressing salon in Warrington.</strong></p>
<p>The team comprises of eight skilled stylists, each from different hairdressing backgrounds, all displaying a diverse range of skills.</p>
<p>This mix of talent creates a dynamic salon with stylists well suited to anyone looking for a fashion forward look.</p>
<p><em>You'll be blown away by how friendly and approachable each of our team members are, and the warm, welcoming environment Jakata offers.</em></p>
<p><strong>You know you're in good hands at JAKATA.</strong></p>
<p class="big">01925 242960</p>

</section> <!--prospect-info-->

<section id="prospect-entry">

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
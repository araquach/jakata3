<?php
/* @var $this ProspectController */
/* @var $model Prospect */
$this->pageTitle=Yii::app()->name. ' Free Products';
?>

<?php
	Yii::app()->clientScript->registerCoreScript('jquery');
	Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/scripts/prospect3.js');
?>

<section id="prospect">

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
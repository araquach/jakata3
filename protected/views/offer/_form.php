<?php
/* @var $this OfferController */
/* @var $model Offer */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'applicant-form',
	'enableAjaxValidation'=>false,
)); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'optout'); ?>
		<?php echo $form->checkBox($model,'optout'); ?>
		<?php echo $form->error($model,'optout'); ?>
	</div>
	
	<?php echo $form->errorSummary($model); ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton('GO'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
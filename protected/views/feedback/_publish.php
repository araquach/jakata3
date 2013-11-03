<?php
/* @var $this FeedbackController */
/* @var $model Feedback */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'feedback-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		<?php echo $form->hiddenField($model,'client_id'); ?>
	</div>
	
		<div class="row">
			<?php echo $form->labelEx($model,'extra'); ?>
			<?php echo $form->textArea($model,'extra',array('rows'=>10,'cols'=>55)); ?>
			<?php echo $form->error($model,'extra'); ?>
		</div>
		
		<div class="row permission">
			<?php echo $form->labelEx($model,'allow'); ?>
			<?php echo $form->checkBox($model,'allow'); ?>
			<?php echo $form->error($model,'allow'); ?>
		</div>
		
		<div class="row permission">
			<?php echo $form->labelEx($model,'publish'); ?>
			<?php echo $form->checkBox($model,'publish'); ?>
			<?php echo $form->error($model,'publish'); ?>
		</div>
		

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
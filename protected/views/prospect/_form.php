<?php
/* @var $this ProspectController */
/* @var $model Prospect */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'prospect-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	
	<div class="row">
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'first_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'second_name'); ?>
		<?php echo $form->textField($model,'second_name',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'second_name'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>22,'maxlength'=>22)); ?>
		<?php echo $form->error($model,'mobile'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'address1'); ?>
		<?php echo $form->textField($model,'address1',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'address1'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'address2'); ?>
		<?php echo $form->textField($model,'address2',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'address2'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'town'); ?>
		<?php echo $form->textField($model,'town',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'town'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'postcode'); ?>
		<?php echo $form->textField($model,'postcode',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'postcode'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'hair_texture'); ?>
		<?php echo ZHtml::enumDropDownList($model,'hair_texture',array('prompt' => 'Select Hair Texture')); ?>
		<?php echo $form->error($model,'hair_texture'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'hair_condition'); ?>
		<?php echo ZHtml::enumDropDownList($model,'hair_condition',array('prompt' => 'Select Hair Condition')); ?>
		<?php echo $form->error($model,'hair_condition'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'cut_spend'); ?>
		<?php echo ZHtml::enumDropDownList($model,'cut_spend',array('prompt' => 'Select Cut Spend')); ?>
		<?php echo $form->error($model,'cut_spend'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'colour_spend'); ?>
		<?php echo ZHtml::enumDropDownList($model,'colour_spend',array('prompt' => 'Select Colour Spend')); ?>
		<?php echo $form->error($model,'colour_spend'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'regular'); ?>
		<?php echo $form->checkBox($model,'regular'); ?>
		<?php echo $form->error($model,'regular'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Enter' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
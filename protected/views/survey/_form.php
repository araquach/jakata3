<?php
/* @var $this SurveyController */
/* @var $model Survey */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'survey-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'first_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'last_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'age'); ?>
		<?php echo $form->textField($model,'age',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'age'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>55,'maxlength'=>55)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'location'); ?>
		<?php echo $form->textField($model,'location',array('size'=>26,'maxlength'=>26)); ?>
		<?php echo $form->error($model,'location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'frequency'); ?>
		<?php echo $form->textField($model,'frequency',array('size'=>21,'maxlength'=>21)); ?>
		<?php echo $form->error($model,'frequency'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stylist'); ?>
		<?php echo $form->textField($model,'stylist'); ?>
		<?php echo $form->error($model,'stylist'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salon'); ?>
		<?php echo $form->textField($model,'salon',array('size'=>21,'maxlength'=>21)); ?>
		<?php echo $form->error($model,'salon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'other_salon'); ?>
		<?php echo $form->textField($model,'other_salon'); ?>
		<?php echo $form->error($model,'other_salon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cut_spend'); ?>
		<?php echo $form->textField($model,'cut_spend',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'cut_spend'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'colour_spend'); ?>
		<?php echo $form->textField($model,'colour_spend'); ?>
		<?php echo $form->error($model,'colour_spend'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stylist_skill'); ?>
		<?php echo $form->textField($model,'stylist_skill'); ?>
		<?php echo $form->error($model,'stylist_skill'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'friendliness'); ?>
		<?php echo $form->textField($model,'friendliness'); ?>
		<?php echo $form->error($model,'friendliness'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'customer_service'); ?>
		<?php echo $form->textField($model,'customer_service'); ?>
		<?php echo $form->error($model,'customer_service'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'environment'); ?>
		<?php echo $form->textField($model,'environment'); ?>
		<?php echo $form->error($model,'environment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'convenience'); ?>
		<?php echo $form->textField($model,'convenience'); ?>
		<?php echo $form->error($model,'convenience'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reputation'); ?>
		<?php echo $form->textField($model,'reputation'); ?>
		<?php echo $form->error($model,'reputation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'end_result'); ?>
		<?php echo $form->textField($model,'end_result'); ?>
		<?php echo $form->error($model,'end_result'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'poor_service'); ?>
		<?php echo $form->textField($model,'poor_service'); ?>
		<?php echo $form->error($model,'poor_service'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comp_offer'); ?>
		<?php echo $form->textField($model,'comp_offer'); ?>
		<?php echo $form->error($model,'comp_offer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hygiene'); ?>
		<?php echo $form->textField($model,'hygiene'); ?>
		<?php echo $form->error($model,'hygiene'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'boredom'); ?>
		<?php echo $form->textField($model,'boredom'); ?>
		<?php echo $form->error($model,'boredom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'products'); ?>
		<?php echo $form->textField($model,'products',array('size'=>19,'maxlength'=>19)); ?>
		<?php echo $form->error($model,'products'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
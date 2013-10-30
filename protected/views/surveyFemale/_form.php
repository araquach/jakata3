<?php
/* @var $this SurveyController */
/* @var $model SurveyFemale */
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
		<?php echo ZHtml::enumDropDownList($model,'age',array('prompt' => 'Select your age')); ?>
		<?php echo $form->error($model,'age'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->emailField($model,'email',array('size'=>55,'maxlength'=>55)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'location'); ?>
		<?php echo ZHtml::enumDropDownList($model,'location',array('prompt' => 'Select your location')); ?>
		<?php echo $form->error($model,'location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'frequency'); ?>
		<?php echo ZHtml::enumDropDownList($model,'frequency',array('prompt' => 'Select frequency')); ?>
		<?php echo $form->error($model,'frequency'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stylist'); ?>
		<?php echo '<p class="scale_label">Yes</p>' ?>
		<?php echo $form->radioButton($model,'stylist', array(
		'value'=>'Yes',
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">No</p>' ?>
		<?php echo $form->radioButton($model,'stylist', array(
		'value'=>'No',
		'uncheckValue'=>null)); ?>
		<?php echo $form->error($model,'stylist'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salon'); ?>
		<?php echo ZHtml::enumDropDownList($model,'salon',array('prompt' => 'Select your salon')); ?>
		<?php echo $form->error($model,'salon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'other_salon'); ?>
		<?php echo $form->textField($model,'other_salon'); ?>
		<?php echo $form->error($model,'other_salon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cut_spend'); ?>
		<?php echo $form->dropDownList($model,'cut_spend',array('prompt' => 'Select your answer')); ?>
		<?php echo $form->error($model,'cut_spend'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'colour_spend'); ?>
		<?php echo ZHtml::enumDropDownList($model,'colour_spend',array('prompt' => 'Select your answer')); ?>
		<?php echo $form->error($model,'colour_spend'); ?>
	</div>
	<p>Rate the following 1-5 as how important each item is to you:</p>
	<div class="row question">
		<?php echo $form->labelEx($model,'stylist_skill'); ?>
		<?php echo '<p class="scale_label">1</p>' ?>
		<?php echo $form->radioButton($model,'stylist_skill', array(
		'value'=>1,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">2</p>' ?>
		<?php echo $form->radioButton($model,'stylist_skill', array(
		'value'=>2,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">3</p>' ?>
		<?php echo $form->radioButton($model,'stylist_skill', array(
		'value'=>3,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">4</p>' ?>
		<?php echo $form->radioButton($model,'stylist_skill', array(
		'value'=>4,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">5</p>' ?>
		<?php echo $form->radioButton($model,'stylist_skill', array(
		'value'=>5,
		'uncheckValue'=>null)); ?>
		<?php echo $form->error($model,'stylist_skill'); ?>
	</div>
	
	<div class="row question">
		<?php echo $form->labelEx($model,'friendliness'); ?>
		<?php echo '<p class="scale_label">1</p>' ?>
		<?php echo $form->radioButton($model,'friendliness', array(
		'value'=>1,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">2</p>' ?>
		<?php echo $form->radioButton($model,'friendliness', array(
		'value'=>2,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">3</p>' ?>
		<?php echo $form->radioButton($model,'friendliness', array(
		'value'=>3,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">4</p>' ?>
		<?php echo $form->radioButton($model,'friendliness', array(
		'value'=>4,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">5</p>' ?>
		<?php echo $form->radioButton($model,'friendliness', array(
		'value'=>5,
		'uncheckValue'=>null)); ?>
		<?php echo $form->error($model,'friendliness'); ?>
	</div>
	
	<div class="row question">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo '<p class="scale_label">1</p>' ?>
		<?php echo $form->radioButton($model,'price', array(
		'value'=>1,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">2</p>' ?>
		<?php echo $form->radioButton($model,'price', array(
		'value'=>2,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">3</p>' ?>
		<?php echo $form->radioButton($model,'price', array(
		'value'=>3,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">4</p>' ?>
		<?php echo $form->radioButton($model,'price', array(
		'value'=>4,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">5</p>' ?>
		<?php echo $form->radioButton($model,'price', array(
		'value'=>5,
		'uncheckValue'=>null)); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>
	
	<div class="row question">
		<?php echo $form->labelEx($model,'customer_service'); ?>
		<?php echo '<p class="scale_label">1</p>' ?>
		<?php echo $form->radioButton($model,'customer_service', array(
		'value'=>1,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">2</p>' ?>
		<?php echo $form->radioButton($model,'customer_service', array(
		'value'=>2,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">3</p>' ?>
		<?php echo $form->radioButton($model,'customer_service', array(
		'value'=>3,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">4</p>' ?>
		<?php echo $form->radioButton($model,'customer_service', array(
		'value'=>4,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">5</p>' ?>
		<?php echo $form->radioButton($model,'customer_service', array(
		'value'=>5,
		'uncheckValue'=>null)); ?>
		<?php echo $form->error($model,'customer_service'); ?>
	</div>
	
	<div class="row question">
		<?php echo $form->labelEx($model,'environment'); ?>
		<?php echo '<p class="scale_label">1</p>' ?>
		<?php echo $form->radioButton($model,'environment', array(
		'value'=>1,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">2</p>' ?>
		<?php echo $form->radioButton($model,'environment', array(
		'value'=>2,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">3</p>' ?>
		<?php echo $form->radioButton($model,'environment', array(
		'value'=>3,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">4</p>' ?>
		<?php echo $form->radioButton($model,'environment', array(
		'value'=>4,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">5</p>' ?>
		<?php echo $form->radioButton($model,'environment', array(
		'value'=>5,
		'uncheckValue'=>null)); ?>
		<?php echo $form->error($model,'environment'); ?>
	</div>
	
	<div class="row question">
		<?php echo $form->labelEx($model,'convenience'); ?>
		<?php echo '<p class="scale_label">1</p>' ?>
		<?php echo $form->radioButton($model,'convenience', array(
		'value'=>1,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">2</p>' ?>
		<?php echo $form->radioButton($model,'convenience', array(
		'value'=>2,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">3</p>' ?>
		<?php echo $form->radioButton($model,'convenience', array(
		'value'=>3,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">4</p>' ?>
		<?php echo $form->radioButton($model,'convenience', array(
		'value'=>4,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">5</p>' ?>
		<?php echo $form->radioButton($model,'convenience', array(
		'value'=>5,
		'uncheckValue'=>null)); ?>
		<?php echo $form->error($model,'convenience'); ?>
	</div>
	
	<div class="row question">
		<?php echo $form->labelEx($model,'reputation'); ?>
		<?php echo '<p class="scale_label">1</p>' ?>
		<?php echo $form->radioButton($model,'reputation', array(
		'value'=>1,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">2</p>' ?>
		<?php echo $form->radioButton($model,'reputation', array(
		'value'=>2,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">3</p>' ?>
		<?php echo $form->radioButton($model,'reputation', array(
		'value'=>3,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">4</p>' ?>
		<?php echo $form->radioButton($model,'reputation', array(
		'value'=>4,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">5</p>' ?>
		<?php echo $form->radioButton($model,'reputation', array(
		'value'=>5,
		'uncheckValue'=>null)); ?>
		<?php echo $form->error($model,'reputation'); ?>
	</div>
		
	<div class="row question">
		<?php echo $form->labelEx($model,'end_result'); ?>
		<?php echo '<p class="scale_label">1</p>' ?>
		<?php echo $form->radioButton($model,'end_result', array(
		'value'=>1,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">2</p>' ?>
		<?php echo $form->radioButton($model,'end_result', array(
		'value'=>2,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">3</p>' ?>
		<?php echo $form->radioButton($model,'end_result', array(
		'value'=>3,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">4</p>' ?>
		<?php echo $form->radioButton($model,'end_result', array(
		'value'=>4,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">5</p>' ?>
		<?php echo $form->radioButton($model,'end_result', array(
		'value'=>5,
		'uncheckValue'=>null)); ?>
		<?php echo $form->error($model,'end_result'); ?>
	</div>
	
	<p>Rate the following factors 1-5 on which would sway you to go to another salon/hairdresser :</p>
	
	<div class="row question">
		<?php echo $form->labelEx($model,'poor_service'); ?>
		<?php echo '<p class="scale_label">1</p>' ?>
		<?php echo $form->radioButton($model,'poor_service', array(
		'value'=>1,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">2</p>' ?>
		<?php echo $form->radioButton($model,'poor_service', array(
		'value'=>2,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">3</p>' ?>
		<?php echo $form->radioButton($model,'poor_service', array(
		'value'=>3,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">4</p>' ?>
		<?php echo $form->radioButton($model,'poor_service', array(
		'value'=>4,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">5</p>' ?>
		<?php echo $form->radioButton($model,'poor_service', array(
		'value'=>5,
		'uncheckValue'=>null)); ?>
		<?php echo $form->error($model,'poor_service'); ?>
	</div>
		
	<div class="row question">
		<?php echo $form->labelEx($model,'comp_offer'); ?>
		<?php echo '<p class="scale_label">1</p>' ?>
		<?php echo $form->radioButton($model,'comp_offer', array(
		'value'=>1,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">2</p>' ?>
		<?php echo $form->radioButton($model,'comp_offer', array(
		'value'=>2,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">3</p>' ?>
		<?php echo $form->radioButton($model,'comp_offer', array(
		'value'=>3,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">4</p>' ?>
		<?php echo $form->radioButton($model,'comp_offer', array(
		'value'=>4,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">5</p>' ?>
		<?php echo $form->radioButton($model,'comp_offer', array(
		'value'=>5,
		'uncheckValue'=>null)); ?>
		<?php echo $form->error($model,'comp_offer'); ?>
	</div>
	
	<div class="row question">
		<?php echo $form->labelEx($model,'hygiene'); ?>
		<?php echo '<p class="scale_label">1</p>' ?>
		<?php echo $form->radioButton($model,'hygiene', array(
		'value'=>1,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">2</p>' ?>
		<?php echo $form->radioButton($model,'hygiene', array(
		'value'=>2,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">3</p>' ?>
		<?php echo $form->radioButton($model,'hygiene', array(
		'value'=>3,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">4</p>' ?>
		<?php echo $form->radioButton($model,'hygiene', array(
		'value'=>4,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">5</p>' ?>
		<?php echo $form->radioButton($model,'hygiene', array(
		'value'=>5,
		'uncheckValue'=>null)); ?>
		<?php echo $form->error($model,'hygiene'); ?>
	</div>
		
	<div class="row question">
		<?php echo $form->labelEx($model,'boredom'); ?>
		<?php echo '<p class="scale_label">1</p>' ?>
		<?php echo $form->radioButton($model,'boredom', array(
		'value'=>1,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">2</p>' ?>
		<?php echo $form->radioButton($model,'boredom', array(
		'value'=>2,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">3</p>' ?>
		<?php echo $form->radioButton($model,'boredom', array(
		'value'=>3,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">4</p>' ?>
		<?php echo $form->radioButton($model,'boredom', array(
		'value'=>4,
		'uncheckValue'=>null)); ?>
		<?php echo '<p class="scale_label">5</p>' ?>
		<?php echo $form->radioButton($model,'boredom', array(
		'value'=>5,
		'uncheckValue'=>null)); ?>
		<?php echo $form->error($model,'boredom'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'products'); ?>
		<?php echo ZHtml::enumDropDownList($model,'products',array('prompt' => 'Please Select')); ?>
		<?php echo $form->error($model,'products'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
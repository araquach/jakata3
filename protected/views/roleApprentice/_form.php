<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'apprentice-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
<div class="accordion">
	
	<h2 class="reveal">1. Contact Information</h2>
	<div class="elements">

	<div class="row">
		<?php echo $form->hiddenField($model,'date'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->hiddenField($model,'salon_id'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->hiddenField($model,'role_id'); ?>
	</div>

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
		<?php echo $form->labelEx($model,'address3'); ?>
		<?php echo $form->textField($model,'address3',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'address3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'postcode'); ?>
		<?php echo $form->textField($model,'postcode',array('size'=>56,'maxlength'=>56)); ?>
		<?php echo $form->error($model,'postcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->emailField($model,'email',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'mobile'); ?>
	</div>
	
	</div> <!--end elements (basic info)-->
	
	<h2 class="reveal">2. Experience</h2>
	<div class="elements">
	
	<div class="row">
		<?php echo $form->labelEx($model,'current_position'); ?>
		<?php echo $form->dropDownList($model,'current_position', $model->getPositionOptions()); ?>
		<?php echo $form->error($model,'current_position'); ?>
	</div>
	
	</div> <!--end elements (experience)-->
	
	<h2 class="reveal">3. Hairdressing Skills</h2>
	<div class="elements">
	
	<p class="application">Please rate your main interests from 1 (least) to 5 (most) for the following:</p>

	<div class="row">
		<?php echo $form->labelEx($model,'cutting_skills'); ?>
		<?php echo $form->dropDownList($model,'cutting_skills', $model->getListOptions()); ?>
		<?php echo $form->error($model,'cutting_skills'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'colour_knowledge'); ?>
		<?php echo $form->dropDownList($model,'colour_knowledge', $model->getListOptions()); ?>
		<?php echo $form->error($model,'colour_knowledge'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'colour_skills'); ?>
		<?php echo $form->dropDownList($model,'colour_skills', $model->getListOptions()); ?>
		<?php echo $form->error($model,'colour_skills'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'men'); ?>
		<?php echo $form->dropDownList($model,'men', $model->getListOptions()); ?>
		<?php echo $form->error($model,'men'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'extensions_weave'); ?>
		<?php echo $form->dropDownList($model,'extensions_weave', $model->getListOptions()); ?>
		<?php echo $form->error($model,'extensions_weave'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'extensions_other'); ?>
		<?php echo $form->dropDownList($model,'extensions_other', $model->getListOptions()); ?>
		<?php echo $form->error($model,'extensions_other'); ?>
	</div>
	

	<div class="row">
		<?php echo $form->labelEx($model,'chem_straighten'); ?>
		<?php echo $form->dropDownList($model,'chem_straighten', $model->getListOptions()); ?>
		<?php echo $form->error($model,'chem_straighten'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'braz_blow'); ?>
		<?php echo $form->dropDownList($model,'braz_blow', $model->getListOptions()); ?>
		<?php echo $form->error($model,'braz_blow'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hair_up'); ?>
		<?php echo $form->dropDownList($model,'hair_up', $model->getListOptions()); ?>
		<?php echo $form->error($model,'hair_up'); ?>
	</div>
	</div> <!--end elements (hairdressing skills)-->
	
	<h2 class="reveal">4. About you</h2>
	<div class="elements">
	
	<div class="row">
		<?php echo $form->labelEx($model,'about_you'); ?>
		<?php echo $form->textArea($model,'about_you',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'about_you'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'why_hairdressing'); ?>
		<?php echo $form->textArea($model,'why_hairdressing',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'why_hairdressing'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'why_us'); ?>
		<?php echo $form->textArea($model,'why_us',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'why_us'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Send your application' : 'Save'); ?>
	</div>
	</div> <!--end elements (about you)-->
</div><!-- end accordion-->

<?php $this->endWidget(); ?>

</div><!-- form -->
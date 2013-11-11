<?php
/* @var $this NewsController */
/* @var $model News */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'news-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array(
	        'enctype' => 'multipart/form-data',
	    ),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'anchor'); ?>
		<?php echo $form->textField($model,'anchor',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'anchor'); ?>
	</div>
	
	<div class="row">
			<?php echo $form->labelEx($model,'date'); ?>
			<?php echo $form->hiddenField($model,'date'); ?>
			<?php 
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
			    'name'=>'date',
			    'options'=>array(
			    	'dateFormat'=>'dd/mm/yy',
					'altField'=>'#'.CHtml::activeId($model, "date"),
					'altFormat'=>'yy-mm-dd',
					'yearRange'=>'-5:+5',
					'changeYear'=>'true',
					'changeMonth'=>'true',			
			    ),	
			    'value'=>$model->date ? $model->date:null,	   
			));
			?>
			<?php echo $form->error($model,'date'); ?>
	</div>	

	<div class="row">
		<?php echo $form->labelEx($model,'author'); ?>
		<?php echo $form->textField($model,'author',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'author'); ?>
	</div>
	
	<?php echo $form->hiddenField($model,'unhid_img',array('size'=>60,'maxlength'=>256)); ?>
	
	<div class="row">
	<?php echo $form->labelEx($model,'unhidden'); ?>
	<?php $this->widget('ext.editMe.widgets.ExtEditMe', array(
	    'model'=>$model,
	    'attribute'=>'unhidden',
	    'toolbar'=>array(
	    	array(
	    			'Source',
	    		),
	    	array(
	    			'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo',
	    		),
	    	array(
	    			'Bold', 'Italic', 'Underline',
	    		),
	    	array(
	    			'NumberedList', 'BulletedList', '-', 'Blockquote', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock',
	    		),
	    	array(
	    			'Link', 'Unlink', 'Anchor',
	    		),
	    ),
	)); ?>
	<?php echo $form->error($model,'unhidden'); ?>
	</div>
	
	<?php echo $form->hiddenField($model,'hidden_img',array('size'=>60,'maxlength'=>256)); ?>

	<div class="row">
	<?php echo $form->labelEx($model,'hidden'); ?>
	<?php $this->widget('ext.editMe.widgets.ExtEditMe', array(
	    'model'=>$model,
	    'attribute'=>'hidden',
	    'toolbar'=>array(
	    	array(
	    			'Source',
	    		),
	    	array(
	    			'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo',
	    		),
	    	array(
	    			'Bold', 'Italic', 'Underline',
	    		),
	    	array(
	    			'NumberedList', 'BulletedList', '-', 'Blockquote', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock',
	    		),
	    	array(
	    			'Link', 'Unlink', 'Anchor',
	    		),
	    ),    
	)); ?>
	<?php echo $form->error($model,'hidden'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'offer'); ?>
		<?php echo $form->textField($model,'offer',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'offer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'publish'); ?>
		<?php echo $form->checkBox($model,'publish'); ?>
		<?php echo $form->error($model,'publish'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
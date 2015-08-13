<?php
/* @var $this ProspectController */
/* @var $model Prospect */
?>

<div class="view">

	<p><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</p>
	<p><?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?></p>
	
	<p>
		<?php echo CHtml::encode($data->getFullName()); ?><br>
		<?php echo CHtml::encode($data->address1)?><br> 
		<?php echo CHtml::encode($data->address2)?><br>
		<?php echo CHtml::encode($data->town); ?><br>
		<?php echo CHtml::encode($data->postcode); ?>
	</p>
	
	<b><?php echo CHtml::encode('email'); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />
	
	<b><?php echo CHtml::encode('mobile'); ?>:</b>
	<?php echo CHtml::encode($data->mobile); ?>
	<br />

	<b><?php echo CHtml::encode('regular'); ?>:</b>
	<?php echo CHtml::encode($data->regular); ?>
	<br>
	<b><?php echo CHtml::encode('hair_texture'); ?>:</b>
	<?php echo CHtml::encode($data->hair_texture); ?>
	<br>
	<b><?php echo CHtml::encode('hair_condition'); ?>:</b>
	<?php echo CHtml::encode($data->hair_condition); ?>
	<br>
	<b><?php echo CHtml::encode('cut_spend'); ?>:</b>
	<?php echo CHtml::encode($data->cut_spend); ?>
	<br>
	<b><?php echo CHtml::encode('colour_spend'); ?>:</b>
	<?php echo CHtml::encode($data->colour_spend); ?>
	<br>
	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode(Yii::app()->dateFormatter->formatDateTime($data->date, "medium","")); ?>
	<br />

	
</div>

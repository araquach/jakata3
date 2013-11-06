<?php
/* @var $this NewsController */
/* @var $model News */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('author')); ?>:</b>
	<?php echo CHtml::encode($data->author); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unhidden')); ?>:</b>
	<?php echo CHtml::encode($data->unhidden); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unhid_img')); ?>:</b>
	<?php echo CHtml::encode($data->unhid_img); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hidden')); ?>:</b>
	<?php echo CHtml::encode($data->hidden); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hidden_img')); ?>:</b>
	<?php echo CHtml::encode($data->hidden_img); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('offer')); ?>:</b>
	<?php echo CHtml::encode($data->offer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('publish')); ?>:</b>
	<?php echo CHtml::encode($data->publish); ?>
	<br />

	*/ ?>

</div>
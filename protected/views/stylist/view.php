<div id="application">

<?php

$this->menu=array(
	array('label'=>'List Stylist', 'url'=>array('index')),
	array('label'=>'Update Stylist', 'url'=>array('update', 'id'=>$model->stylist_id)),
	array('label'=>'Delete Stylist', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->stylist_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Stylist', 'url'=>array('admin')),
);
?>

<h1>View Stylist #<?php echo $model->stylist_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'stylist_id',
		'date',
		'first_name',
		'second_name',
		'about_you',
		'why_hairdressing',
		'why_jakata',
	),
)); ?>

</div> <!--application-->


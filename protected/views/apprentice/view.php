
<div id="application">

<?php

$this->menu=array(
	array('label'=>'List Apprentice', 'url'=>array('index')),
	array('label'=>'Update Apprentice', 'url'=>array('update', 'id'=>$model->apprentice_id)),
	array('label'=>'Delete Apprentice', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->apprentice_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Apprentice', 'url'=>array('admin')),
);
?>

<h1>View Apprentice #<?php echo $model->apprentice_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'apprentice_id',
		'first_name',
		'second_name',
		'date',
		'age',
		'about',
		'why_hairdressing',
		'why_jakata',
	),
)); ?>

</div> <!--application-->



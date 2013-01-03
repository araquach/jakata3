
<div id="recruitBlank">

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
		'date',
		'first_name',
		'second_name',
		'age',
		'address1',
		'address2',
		'address3',
		'postcode',
		'email',
		'phone',
		'mobile',
		'current_position',
		'in_salon',
		'salon_name',
		'qualification_school',
		'qualification_hair',
		'cutting',
		'styling',
		'colouring',
		'extensions',
		'chem_straightening',
		'brazil_blow',
		'hair_up',
		'about',
		'why_hairdressing',
		'why_jakata',
	),
)); ?>

</div> <!-- #recruitBlank -->



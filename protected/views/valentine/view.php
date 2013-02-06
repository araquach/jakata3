<?php
/* @var $this ValentineController */
/* @var $model Valentine */

$this->breadcrumbs=array(
	'Valentines'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Valentine', 'url'=>array('index')),
	array('label'=>'Create Valentine', 'url'=>array('create')),
	array('label'=>'Update Valentine', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Valentine', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Valentine', 'url'=>array('admin')),
);
?>
<section id="valentine">

<h1>View Valentine #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'first_name',
		'second_name',
		'mobile',
		'email',
		'answer',
		'date_entered',
		'regular',
	),
)); ?>

</section>

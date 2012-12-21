<?php
/* @var $this BhaInputController */
/* @var $model BhaInput */

$this->breadcrumbs=array(
	'Bha Inputs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BhaInput', 'url'=>array('index')),
	array('label'=>'Create BhaInput', 'url'=>array('create')),
	array('label'=>'View BhaInput', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BhaInput', 'url'=>array('admin')),
);
?>

<h1>Update BhaInput <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
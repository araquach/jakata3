<?php
/* @var $this HelperController */
/* @var $model Helper */

$this->breadcrumbs=array(
	'Helpers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Helper', 'url'=>array('index')),
	array('label'=>'Create Helper', 'url'=>array('create')),
	array('label'=>'View Helper', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Helper', 'url'=>array('admin')),
);
?>

<h1>Update Helper <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
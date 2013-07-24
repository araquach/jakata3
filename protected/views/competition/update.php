<?php
/* @var $this ValentineController */
/* @var $model Valentine */

$this->breadcrumbs=array(
	'Valentines'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Valentine', 'url'=>array('index')),
	array('label'=>'Create Valentine', 'url'=>array('create')),
	array('label'=>'View Valentine', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Valentine', 'url'=>array('admin')),
);
?>

<section id="valentine">

<h1>Update Valentine <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

</section>
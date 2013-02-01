<?php
/* @var $this ValentineController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Valentines',
);

$this->menu=array(
	array('label'=>'Create Valentine', 'url'=>array('create')),
	array('label'=>'Manage Valentine', 'url'=>array('admin')),
);
?>

<h1>Valentines</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

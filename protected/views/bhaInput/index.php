
<?php
/* @var $this BhaInputController */
/* @var $dataProvider CActiveDataProvider */
?>

<div id="bha_back">
<?php 
$this->breadcrumbs=array(
	'Bha Inputs',
);

$this->menu=array(
	array('label'=>'Create BhaInput', 'url'=>array('create')),
	array('label'=>'Manage BhaInput', 'url'=>array('admin')),
);
?>

<h1>Bha Inputs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</div>
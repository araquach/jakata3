<?php
/* @var $this ImageController */
/* @var $dataProvider CActiveDataProvider */

$this->menu=array(
	array('label'=>'Create Image', 'url'=>array('create')),
	array('label'=>'Manage Image', 'url'=>array('admin')),
);
?>

<div id="blank">

<h1>Images</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

</div> <!--#blank-->
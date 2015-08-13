<?php
/* @var $this ProspectController */
/* @var $dataProvider CActiveDataProvider */
?>

<div id="feedbackBlank">
<?php 
$this->menu=array(
	array('label'=>'Create Feedback', 'url'=>array('create')),
	array('label'=>'Manage Feedback', 'url'=>array('admin')),
);
?>

<h1>Prospective Clients</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view'
)); ?>
</div> <!--feedbackBlank-->
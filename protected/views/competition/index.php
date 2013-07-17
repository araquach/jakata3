<div id="competitionBlank">

<?php
/* @var $this CompetitionController */
/* @var $dataProvider CActiveDataProvider */


$this->menu=array(
	array('label'=>'Create Competition', 'url'=>array('create')),
	array('label'=>'Manage Competition', 'url'=>array('admin')),
);
?>
<h1>Competition Entries</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>


</div> <!--competitionBlank-->
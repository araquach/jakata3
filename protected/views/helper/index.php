<?php
/* @var $this HelperController */
/* @var $dataProvider CActiveDataProvider */
?>

<div id="recruitBlank">

<h1>Helpers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

</div> <!--recruitBlank-->
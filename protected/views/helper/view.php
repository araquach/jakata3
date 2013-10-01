<?php
/* @var $this HelperController */
/* @var $model Helper */
?>

<div id="recruitBlank">

<h1>View Helper #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'first_name',
		'last_name',
		'age',
		'phone',
		'email',
		'hours',
		'why_jakata',
	),
)); ?>

</div> <!--recruitBlank-->

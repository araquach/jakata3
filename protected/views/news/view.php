<?php
/* @var $this NewsController */
/* @var $model News */
?>

<section id="news">

<h1>View News #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'date',
		'author',
		'unhidden',
		'unhid_img',
		'hidden',
		'hidden_img',
		'offer',
		'publish',
	),
)); ?>

</section>

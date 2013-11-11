<?php
/* @var $this NewsController */
/* @var $model News */
?>

<section id="news_admin">

<h1>View News #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'date',
		'author',
		'image.path',
		'image.width',
		'unhidden',
		'unhid_img',
		'hidden',
		'hidden_img',
		'offer',
		'publish',
	),
)); ?>

<?php  $this->widget('zii.widgets.CMenu', array(
	'items'=>array(
		array('label'=>'Delete News Item', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
		array('label'=>'Update News Item', 'url'=>array('update', 'id'=>$model->id)),
	),
	'htmlOptions'=>array('id'=>'news_menu'),
));
?>


</section>

<?php
/* @var $this ValentineController */
/* @var $model Valentine */

$this->breadcrumbs=array(
	'Valentines'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Valentine', 'url'=>array('index')),
	array('label'=>'Create Valentine', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('valentine-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<section id="valentine">
<h1>Manage Valentines</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'valentine-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'first_name',
		'second_name',
		'mobile',
		'email',
		'answer',
		/*
		'date_entered',
		'regular',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

</section>

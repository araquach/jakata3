<?php
/* @var $this BhaInputController */
/* @var $model BhaInput */

$this->breadcrumbs=array(
	'Bha Inputs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List BhaInput', 'url'=>array('index')),
	array('label'=>'Create BhaInput', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('bha-input-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Bha Inputs</h1>

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
	'id'=>'bha-input-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'client_first',
		'client_second',
		'mobile',
		'intro',
		'consultation',
		/*
		'styling_area',
		'stylist_appearance',
		'prod_advice',
		'styling_advice',
		'internal_marketing',
		'value_for_money',
		'whole_experience',
		'end_result',
		'extra',
		'stylist_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

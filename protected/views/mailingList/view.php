<div id="mailing_list">
<?php
/* @var $this MailingListController */
/* @var $model MailingList */

$this->breadcrumbs=array(
	'Mailing Lists'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MailingList', 'url'=>array('index')),
	array('label'=>'Create MailingList', 'url'=>array('create')),
	array('label'=>'Update MailingList', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MailingList', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MailingList', 'url'=>array('admin')),
);
?>

<h1>View MailingList #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'first_name',
		'last_name',
		'email',
	),
)); ?>
</div> <!--mailing_list-->
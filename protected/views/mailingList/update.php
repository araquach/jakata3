<div id="mailing_list">
	<?php
	/* @var $this MailingListController */
	/* @var $model MailingList */
	
	$this->breadcrumbs=array(
		'Mailing Lists'=>array('index'),
		$model->id=>array('view','id'=>$model->id),
		'Update',
	);
	
	$this->menu=array(
		array('label'=>'List MailingList', 'url'=>array('index')),
		array('label'=>'Create MailingList', 'url'=>array('create')),
		array('label'=>'View MailingList', 'url'=>array('view', 'id'=>$model->id)),
		array('label'=>'Manage MailingList', 'url'=>array('admin')),
	);
	?>
	
	<h1>Update MailingList <?php echo $model->id; ?></h1>
	
	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
	
</div> <!--mailing_list-->
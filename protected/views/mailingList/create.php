<div id="mailing_list">
	<?php
	/* @var $this MailingListController */
	/* @var $model MailingList */
	
	$this->breadcrumbs=array(
		'Mailing Lists'=>array('index'),
		'Create',
	);
	
	$this->menu=array(
		array('label'=>'List MailingList', 'url'=>array('index')),
		array('label'=>'Manage MailingList', 'url'=>array('admin')),
	);
	?>
	
	<h1>Create MailingList</h1>
	
	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div> <!--mailing_list-->
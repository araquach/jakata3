<div id="mailing_list">
<?php
	/* @var $this MailingListController */
	/* @var $dataProvider CActiveDataProvider */
	
	$this->breadcrumbs=array(
		'Mailing Lists',
	);
	
	$this->menu=array(
		array('label'=>'Create MailingList', 'url'=>array('create')),
		array('label'=>'Manage MailingList', 'url'=>array('admin')),
	);
	?>
	
	<h1>Mailing Lists</h1>
	
	<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
	)); ?>
</div> <!--mailing_list-->
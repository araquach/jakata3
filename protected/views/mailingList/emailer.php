<div id="mailing_list">
<?php
	/* @var $this ContactController */
	/* @var $model Contact */
	
	$this->breadcrumbs=array(
		'Contacts'=>array('index'),
		'Create',
	);
	?>
	
	<?php if(Yii::app()->user->hasFlash('emailer')): ?>
	
	<div class="flash-success">
		<?php echo Yii::app()->user->getFlash('emailer'); ?>
	</div>
	
	<?php else: ?>
	
	<h1>Email Sender</h1>
	
	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
	
	<? endif; ?>
	
</div> <!--mailing_list-->
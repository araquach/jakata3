<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

<div class="main">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->

<div class="sidebar">
	<div id="sidebar">
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
	?>
	</div><!-- #sidebar -->
</div> <!--.sidebar-->
</div> <!--.main-->
<?php $this->endContent(); ?>
<script type="text/javascript">
window.addEvent('domready', function(){
	  
	  var myAccordion = new Fx.Accordion($$('.reveal'), $$('.elements'), {
	      display: 0,
	      alwaysHide: true
	  });
	  
});
</script>

<div id="application">
<?php if(Yii::app()->user->hasFlash('stylist')): ?>

<div class="applicationSuccess">
	<?php echo Yii::app()->user->getFlash('stylist'); ?>
</div>

<?php else: ?>

<div id="application-form">
<h1>Join the team: Stylist Position</h1>
<p><?php echo CHtml::link("Click here to apply for an apprentice position", array('apprentice/create')); ?></p>
<p>Please complete ALL sections of the form before submitting your application.</p>
<p>We will contact you as soon as a position becomes available.</p>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div> <!--application-form-->
</div> <!--application-->

<?php endif; ?>
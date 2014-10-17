<?php
/* @var $this OfferController */
?>

<?php if($model->offer != 19): ?>

<div id="limited">

<?php else: ?>

<div id="limitedmale">

<?php endif; ?>

<?php if(Yii::app()->user->hasFlash('Offer')): ?>

<div class="limitedSuccess">
	<?php echo Yii::app()->user->getFlash('Offer'); ?>
</div>

<?php else: ?>
<div id="limited_copy">
<h1><strong>Special Offer for<br> <?php echo ucfirst($model->first_name) . ' ' . ucfirst($model->last_name);?></strong></h1>

<p><strong>Hi <?php echo ucfirst($model->first_name); ?>,</strong></p>

<p>To help give your hair the care and attention it needs before winter sets in we've put together a great offer for you.</p>

<?php echo $model->getOfferText(); ?>

<p>To get your offer code just click 'Go'</p>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

<p>Offer Ends: <?php echo $model->getDateText(); ?></p> 

<small>Not with any other offer, subject to availability</small>

</div> <!--#limited_copy-->
</div> <!--#limited-->

<?php endif; ?>




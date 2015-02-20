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

<p>As we've not seen you in the salon for a while we'd like to offer you 25% off the total bill of your next visit (including products)</p>

<p>To get your offer code just click 'Go'</p>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

<p>Offer Ends: <?php echo $model->getDateText(); ?></p> 

<small>Not with any other offer. Not transferable. Weekdays only</small>

</div> <!--#limited_copy-->
</div> <!--#limited-->

<?php endif; ?>




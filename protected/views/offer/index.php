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

<p>We've not seen you in the salon<br> for a while <?php echo ucfirst($model->first_name); ?>, so we'd like to offer you</p> 
<p class="big"><strong>30% off</strong><br>the total bill</p> 
<p>on your next visit (including products)</p>

<p>Just quote: <strong><?php echo $model->getOfferCodeText(); ?></strong> when booking,</p>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

<p>Offer Ends: <?php echo $model->getDateText(); ?></p> 

<small>Not with any other offer. Not transferable. Weekdays only</small>

</div> <!--#limited_copy-->
</div> <!--#limited-->

<?php endif; ?>




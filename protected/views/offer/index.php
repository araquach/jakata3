<?php
/* @var $this OfferController */
?>

<div id="limited">
<?php if(Yii::app()->user->hasFlash('Offer')): ?>

<div class="limitedSuccess">
	<?php echo Yii::app()->user->getFlash('Offer'); ?>
</div>

<?php else: ?>
<div id="limited_copy">
<h1><strong>Last minute booking offer for <?php echo ucfirst($model->first_name) . ' ' . ucfirst($model->last_name);?></strong></h1>

<p><strong>Hi <?php echo ucfirst($model->first_name); ?>,</strong></p>

<p><strong>With Christmas almost here we're almost fully booked! If you still haven't booked your appointment yet, fear not - we might still be able to get you in.</strong></p>
<p>This time of year we have a lot of last minute cancellations (which we obviously want to fill!)</p>
<p><em>If you call the salon on the day and we have availability we'll do your hair at a very special price.</em></p>
<p>We can't guarantee we'll have availability and you can't request a specific stylist, but your appointment will be with a fully qualified stylist/senior stylist&hellip;</p>
<p class="big">30% off</p>
<p class="small">all services</p>
<p><strong>Just call 01925 242960 to book and mention the offer.</strong></p>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

<small>Not with any other offer, subject to availability</small>

</div> <!--#limited_copy-->
</div> <!--#limited-->

<?php endif; ?>

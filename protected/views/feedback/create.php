<?php
/* @var $this FeedbackController */
/* @var $model Feedback */
?>



<div id="feedback_back">

<?php if(Yii::app()->user->hasFlash('Feedback')): ?>

<div class="applicationSuccess">
	<?php echo Yii::app()->user->getFlash('Feedback'); ?>
</div>

<?php else: ?>
<div id="feedback">

<div id="feedback_copy">
	<h1>FREE &pound;10 <br>Product Voucher</h1>
	<h2>We want your feedback</h2>
	<p><strong>We would love to find out how your experience was in the salon</strong></p>
	<p>We strive to offer the best possible service, plus give you a hairstyle that you're 100% happy with!</p>
	<p>Just answer the following questions and give us your honest feedback.</p>
	<p><em>You will receive a <strong>&pound;10 product voucher</strong> via text that you can use in the salon at any time <strong>PLUS</strong> you'll be entered into our quarterly prize draw for the chance to win great prizes - <strong>including GHD's
	!</strong></em></p>
	<p class="small">The voucher is delivered to your phone via text message. Each voucher has a unique reference number that is married up to your booking on the system. The voucher is not transferrable.<br>
	Your information will not be shared with anyone and is purely for us to ensure we are offering the best possible service along with looking at ways to improve our offering</p>
</div> <!--feedback_copy-->

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

</div> <!--feedback-->
</div> <!--feedback_back-->

<?php endif; ?>
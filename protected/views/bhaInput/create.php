<?php
/* @var $this BhaInputController */
/* @var $model BhaInput */
?>



<div id="bha_back">

<?php if(Yii::app()->user->hasFlash('bhaInput')): ?>

<div class="applicationSuccess">
	<?php echo Yii::app()->user->getFlash('bhaInput'); ?>
</div>

<?php else: ?>
<div id="bha">
<h1>Your Feedback is important to us!</h1>
<h2>Receive a &pound;10 Product Voucher for your help</h2>
<p><strong>As a valued Jakata customer, we would love to find out how your experience was in the salon</strong></p>
<p>We strive to offer the best possible service, plus give you a hairstyle that you're 100% happy with!</p>
<p>We would really appreciate it if you could spare a couple of minutes to answer the following questions and give us your honest feedback.</p>
<p><em>As a reward you will receive a &pound;10 gift voucher (delivered to you via text message) you can use towards any retail product in the salon.<br>
Plus entry into our Prize Draw for the chance to win some amazing prizes!</em></p>

<p class="small">Your information will not be shared with anyone and is purely for us to ensure we are offering the best possible service along with looking at ways to improve our offering</p>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

</div> <!--bha-->
</div> <!--bha_back-->

<?php endif; ?>
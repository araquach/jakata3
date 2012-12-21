<?php
/* @var $this ApplicantController */
/* @var $model Applicant */
?>

<div id="company">
<?php if(Yii::app()->user->hasFlash('application')): ?>

<div class="company_success">
	<?php echo Yii::app()->user->getFlash('application'); ?>
</div>

<?php else: ?>

<div id="company_applicant">
<h1>50% off Your First Visit</h1>
<p>Complete the form below and we'll send you a text message voucher for you to redeem 50% off your first visit! </p>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div> <!--#company_applicant-->
</div> <!--#company-->

<?php endif; ?>
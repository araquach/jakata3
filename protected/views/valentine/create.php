<?php
/* @var $this ValentineController */
/* @var $model Valentine */
?>
<section id="valentine">

<div id="competition_form">

<?php if(Yii::app()->user->hasFlash('entry')): ?>

<div class="competition_success">
	<?php echo Yii::app()->user->getFlash('entry'); ?>
</div>

<?php else: ?>

<h1>Valentines Competition</h1>
<p>For your chance to win a set of <strong>'Gold' Edition GHD's</strong> or a <strong>FREE Blow Dry</strong>, simply fill out the form and answer the following question:</p>
<p class="question">What do the letters 'GHD' stand for?</p>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div> <!--end #competition_form-->
</section> <!--end #valentine-->

<?php endif ?>
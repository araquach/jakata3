<?php
/* @var $this CompetitionController */
/* @var $model Competition */
?>

<section id="competition">
<?php if(Yii::app()->user->hasFlash('entry')): ?>

<div class="competition_success">
	<?php echo Yii::app()->user->getFlash('entry'); ?>
</div>

<?php else: ?>
<div id="competition_entry">
<h2>The competition is now closed</h2>
<p class="question">We'll be announcing the winners soon!</p>

<?php // echo $this->renderPartial('_form', array('model'=>$model)); ?>

</section> <!--#competition_entry-->
</section> <!--#competition-->

<?php endif ?>
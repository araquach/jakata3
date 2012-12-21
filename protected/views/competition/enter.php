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
<h2>Just answer this simple question</h2>
<p class="question">When is the last opportunity for you to get your gift vouchers and gift packs from Jakata before Christmas?</p>
<p class="small">(Your  details will not be passed on to anyone else)</p>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

</section> <!--#competition_entry-->
</section> <!--#competition-->

<?php endif ?>
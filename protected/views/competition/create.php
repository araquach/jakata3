<?php
/* @var $this CompetitionController */
/* @var $model Competition */
?>

<div id="overlay"></div> <!--competition closed overlay-->

<section id="competition">

<div id="competition_form">

<?php if(Yii::app()->user->hasFlash('entry')): ?>

<div class="competition_success">
	<?php echo Yii::app()->user->getFlash('entry'); ?>
</div>

<?php else: ?>

<h1>Win A Kebelo Treatment</h1>
<h2>100 Days of Frizz Free hair</h2>

<!--<p class="comp_closed">The competition is now closed - look out for more soon!</p>-->

<p>We're giving away THREE Kebelo Advantage treatments.<br>For your chance to win just answer the question below&hellip;</p>
<?php echo CHtml::link('(Click here to find out more about this amazing treatment)
', array('kebelo/advantage')); ?>

<p class="question">How many days of frizz free hair does a Kebelo give you?</p>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

<small>Closing Date: 31/08/13 - 1 entry per person</small>

</div> <!--end #competition_form-->
</section> <!--end #competition-->

<?php endif ?>
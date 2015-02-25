<?php
/* @var $this ProspectController */
/* @var $model Prospect */
?>

<section id="prospect">

<section id="prospect-info">

<h1>Welcome to Jakata</h1>
<h2>Fashion forward hairdressing</h2>

<p>Lots of interesting copy about Jakata and the team</p>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

<img src="" alt="big enticing image" width="500" height="200" />

<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>


</section>

<div id="prospect_form">

<?php if(Yii::app()->user->hasFlash('entry')): ?>

<div class="prospect_success">
	<?php echo Yii::app()->user->getFlash('entry'); ?>
</div>

<?php else: ?>


<h2>Claim your FREE products today!</h2>
<p>We're giving away FREE products especially selected for your hair type - plus a secret FREE gift</p>
<p>Simply fill out the form below to claim yours!</p>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

</div> <!--end #prospect_form-->

<?php echo CHtml::link('Click here to go to our website', array('site/index')); ?>

</section> <!--end #prospect-->

<?php endif ?>
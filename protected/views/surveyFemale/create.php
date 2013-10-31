<?php
/* @var $this SurveyController */
/* @var $model SurveyFemale */
?>
<div id="survey">
<div id="survey_img" class="survey_form"></div>
<div id="survey_copy">

<?php if(Yii::app()->user->hasFlash('survey')): ?>

<div class="applicationSuccess">
	<?php echo Yii::app()->user->getFlash('survey'); ?>
</div>

<?php else: ?>

<h1>The Great Jakata Autumn Giveaway - Entry Form</h1>

<p>To receive one of these great freebies just complete this short questionnaire and we'll let you know your prize within 2 weeks!</p>
<p><em>Don't forget to tell your friends and family to enter too! </em></p>

<small>One entry per person. Must be over 16 to enter</small>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

<?php  $this->widget('ext.yii-facebook-opengraph.plugins.LikeButton', array(
   'href' => 'http://www.jakatasalon.co.uk/giveaway', 
   'show_faces'=>true,
   'send' => true
));  ?>	

</div> <!--survey_copy-->
</div> <!--survey-->

<?php endif; ?>

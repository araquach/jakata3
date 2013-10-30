<?php
/* @var $this SurveyController */
/* @var $model SurveyMale */
?>
<div id="survey">
<div id="survey_copy">
<h1>The Great Jakata Autumn Giveaway - Entry Form</h1>

<p>To receive one of the above mentioned freebies you simply have to currently have your hair done professionally (either in a salon or by a mobile hairdresser).</p>

<p>Complete the short questionnaire and we'll let you know your prize within 2 weeks!</p>

<small>One entry per person. Must be over 16 to enter</small>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div> <!--survey_copy-->
</div> <!--survey-->

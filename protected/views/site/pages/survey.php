<?php
/* @var $this SurveyController */
/* @var $model SurveyMale */

// Remember to put OG tags in!!!!
?>

<div id="survey">
<div id="survey_copy">
<h1>The Great Jakata Autumn Giveaway</h1>

<p>This time of year we all need a bit of a pick-me-up, the cold weather is setting in fast and with Winter just around the corner it would be great to have some free pampering or maybe get some of the latest hair products handed to you for free.</p>
<p>Over the next couple of months we're going to be giving away 100's of pounds worth of hair products and services that YOU can get your hands on!</p>

<ul>
	<li>FREE Cut &amp; Styles, FREE blowdry's, FREE Colours, FREE Kebelo Treatments</li>
	<li>FREE Tigi and Schwarzkopf products</li>
	<li>FREE GHD's</li>
	<li>FREE Product &amp; Service vouchers</li>
</ul>

<?php echo CHtml::link('Click Here to enter if you\'re female',array('surveyFemale/create')); ?>

<?php echo CHtml::link('Click Here to enter if you\'re male',array('surveyMale/create')); ?>



</div> <!--survey_copy-->
</div> <!--survey-->
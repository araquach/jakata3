<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . ' - Competitions - Hairdressers in Cheshire';
?>


<section id="competition">
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/competition/valentine-logo.png" alt="Valentines" width="741" height="397"/>
<div id="competition_copy">
<h1>Competition</h1>
<p><strong>Ensure you look your very best <br>this Valentines Day &hellip;</strong></p>
<h1>WIN A SET OF GHD GOLD STYLING IRONS</h1>
<p>We’re giving away a set of the  most desirable styling irons available! (worth £120) plus 3 runners up will receive complimentary Blow Dry’s for their big Valentines night out!</p>
<?php echo CHtml::link('CLICK HERE to enter',array('valentine/create')); ?>
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/competition/ghd.jpg" alt="GHD" width="225" height="225" class="ghd"/>



</div> <!--end competition_copy-->


</section> <!--end competition-->
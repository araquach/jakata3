<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . ' - Admin Page - Hairdressers in Cheshire';
?>
<section id="admin">

<div id="admin_copy">

	<h1>Manager Admin</h1>
	
	<?php $this->widget('zii.widgets.CMenu',array(
		'items'=>array(
			array('label'=>'Feedback', 'url'=>array('feedback/index')),
			array('label'=>'Stylist Job Applicants', 'url'=>array('stylist/index')),
			array('label'=>'Apprentice Job Applicants', 'url'=>array('apprentice/index')),
			array('label'=>'Saturday Staff Job Applicants', 'url'=>array('helper/index')),
			array('label'=>'Company Offer Entries', 'url'=>array('applicant/index')),
			array('label'=>'Competition Entrants', 'url'=>array('competition/index')),		
		),
	)); ?>

</div>

</section> <!--end #admin-->


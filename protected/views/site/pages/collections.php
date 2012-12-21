<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . ' - Collections - Hairdressers in Cheshire';
?>

<?php 
Yii::app()->clientScript->registerCoreScript('jquery');
Yii::app()->clientScript->registerScriptFile('scripts/galleria/galleria-1.2.8.min.js');
Yii::app()->clientScript->registerScript('galleria',"
	Galleria.loadTheme('scripts/galleria/themes/classic/galleria.classic.min.js');
	Galleria.configure({
	    imageCrop: false,
	    transition: 'fade'
	});
	Galleria.run('#galleria');
",CClientScript::POS_READY);
?>

<section id="collections">
<h1>Autumn/Winter Collection 2012</h1>

	<div id="galleria">
	    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/collections/bha12_1.jpg" data-description="Hair: Vicky Rowland">
	    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/collections/bha12_2.jpg" data-description="Hair: Isobelle Lamb">
	    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/collections/bha12_3.jpg" data-description="Hair: Vicky Rowland">
	    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/collections/bha12_4.jpg" data-description="Hair: Natalie Doxey">
	    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/collections/bha12_5.jpg" data-description="Hair: Jimmy Sharpe">
	    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/collections/bha12_6.jpg" data-description="Hair: Jimmy Sharpe">
	    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/collections/bha12_7.jpg" data-description="Hair: Natalie Doxey">
	    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/collections/bha12_8.jpg" data-description="Hair: Jimmy Sharpe">
	</div>
</section> <!--#collections-->
      	
       
<?php
/* @var $this ProspectController */
/* @var $model Prospect */
$this->pageTitle=Yii::app()->name. ' Free Products';
?>



<?php
	Yii::app()->clientScript->registerCoreScript('jquery');
	Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/scripts/prospect3.js');
?>

<section id="prospect">

<section id="prospect-entry">

<h2>Claim Your <span class="red">FREE</span> Products</h2>

<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/prospect/bc.jpg" width="380" height="200" alt="Boho">

<p><em>How would you like to get some products tailored to your hair needs sent out to you absolutely <span class="red">FREE?</span><br>
A selection of shampoo’s, conditioners and styling products could be yours - plus a secret surprise gift!</em></p>

<?php echo CHtml::link('Click here to claim yours!',array('prospect/form_holder')); ?>

</section>  <!--prospect-entry-->

</section> <!--prospect-->

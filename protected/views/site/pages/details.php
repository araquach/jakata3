<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contact Us - hairdressers in Cheshire';
?>

<section id="details">

<div id="details_copy">

<h1>Contact Us</h1>

<h2>Address</h2>
<p class="details_text">90/92 Bridge Street<br>
Warrington<br>
Cheshire<br>
WA1 2RF</p>

<h2>Telephone</h2>
<p class="details_text"><strong>01925 242960</strong></p>

<p>Jakata is located in the centre of Warrington on Bridge Street. We're extremely close to the <em>Warrington Market multi-storey car park</em> and only a short walk from <em>Golden Square shopping centre.</em></p>
<p>If you're visiting the salon after 6.30 pm you are able to park right outside the salon.</p>

<h2>Enquiry Form</h2>
<p>If you would like to make an enquiry or make a booking, please click the link below:</p>
<?php echo CHtml::link('Online enquiry and booking form',array('site/contact'), array('class'=>'toForm')); ?>

</div> <!--details-->
</section> <!--end contact-->


<?php
/* @var $this ApplicantController */

$this->pageTitle=Yii::app()->name . ' - Company Special Offer';

?>

<section id="company">
<div id="company_offer">
<h1>An Amazing offer from our Award Winning Salon</h1>

<h2>50% OFF</h2>
<p class="discount">Your first visit</p>

<p><em>Jakata</em> is a fashion forward salon based in Warrington town centre. The 12 strong, award winning team have been producing the highest standard of work for over eight years.</p>
<p>Winners of the <em>L'Oreal Colour Trophy</em> and more recently the <em>Redken Style Innovator Award</em>, the team are on hand to offer you an amazing hairdressing experience.</p>
<p>We want <em>you</em> to experience what Jakata has to offer....</p>
<p>get <strong>50% off your first visit</strong> plus an <strong>ongoing 10% discount.</strong></p>

<?php echo CHtml::link('<strong>Click Here</strong> to claim your 50% off Voucher',array('applicant/create')); ?>

<p>voucher delivered via SMS Message</p>

</div> <!--company_applicant-->
</section> <!--end #company-->
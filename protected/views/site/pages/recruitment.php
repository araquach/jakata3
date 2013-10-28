<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . ' - Hairdressing Jobs - Hairdressers in Cheshire';
?>

<?php Yii::app()->facebook->ogTags['og:title'] = "Jakata Recruitment"; ?>
<?php Yii::app()->facebook->ogTags['og:description'] = "The ever evolving Jakata Salon is always looking for new talent to expand our already diverse team of hairdressers.
We have positions for stylists of all levels with ongoing internal and external training to help you push the boundaries in your career."; ?>
<?php // Yii::app()->facebook->ogTags['og:image'] =  "http://www.jakatasalon.co.uk/images/" ; ?>

<section id="recruitment">

<h1>Join the Team</h1>

<p>The ever evolving Jakata Salon is always looking for new talent to expand our already diverse team of hairdressers.</p>
<p>We have positions for stylists of all levels with ongoing internal and external training to help you push the boundaries in your career.</p>
<h2>Stylist Position</h2>
<p>Jakata is a hot-bed of creative talent. Our ethos is to let each stylist's individuality shine. If you're creative, ambitious and have a natural flair for hairdressing then Jakata could be the perfect environment to push your skills to the next level.</p>
<p><strong>If you're looking to push your abilities to the next level, apply now!</strong></p>
<p class="recruit_button"><?php echo CHtml::link('Click Here to apply for a stylist position',array('stylist/create')); ?></p>

<h2>Apprentice Position</h2>
<p>If you're just starting out on the road to becoming a hairdresser, choosing the right place to train and develop is one of the most important decisions you'll ever make!</p>
<p>If you've already started out and feeling you're current training provider isn't fulfilling you're needs then we can step in and accelerate you're development.</p>
<p><strong>If you have the passion to do whatever it takes to be a top stylist then apply now!</strong></em></p>
<p class="recruit_button"><?php echo CHtml::link('Click Here to apply for an apprentice position',array('apprentice/create')); ?></p>

<p class="fancy">A great hairdressing career starts here</p>

</section> <!--end #recruitment-->



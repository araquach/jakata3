<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name. ' - Home - Hairdressers in Cheshire';
?>

<div id="home">
<section id="info">
<p>Jakata is a fashion forward, award winning hairdressing salon in Warrington, Cheshire. With a team of twelve talented hairdressers looking after you, you know you're in good hands.</p>
<p>Based on Bridge street in Warrington Town Centre the salon is located perfectly to serve the whole of Warrington and surrounding areas.</p>
<p>If you're looking for the most fashion forward hairdressing then look no further. Our hairdressing services will far outweigh your expectations plus you'll be blown away by our friendly, approachable staff.</p>
</section> <!--#info-->

<div id="home_news">
	
<?php echo CHtml::link('<aside id="news2" class="home_news">
<h3 class="newsheader">Meet the team: <br>Vikki Rowland</h3>
<p class="newspara">This month we caught up with Jakata team leader Vikki to ask her some questions&hellip;</p>
<p class="newscenter"><strong>Find out here &gt;</strong></p>
</aside>',array('site/page','view'=>'news','#'=>'VikkiInterview')); ?>
	
<?php echo CHtml::link('<aside id="news1" class="home_news">
<h3 class="newsheader">The Ultimate Smoothing Treatment</h3>
<p class="newspara">Kebelo Advantage could change your hair styling routine forever!</p>
<p class="newscenter"><strong>Click here for details &gt;</strong></p>
	</aside>',array('kebelo/advantage')); ?>

<?php echo CHtml::link('<aside id="news3" class="home_news">
<h3 class="newsheader">Great career opportunities at Jakata</h3>
<p class="newspara">We\'re on the lookout for talented stylists and apprentices</p>
<p class="newscenter"><strong>Find out more here &gt;</strong></p>
</aside>',array('site/page','view'=>'recruitment')); ?>


</div> <!--news-->


</div> <!--#home-->
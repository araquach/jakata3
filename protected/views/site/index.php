<?php
/* @var $this SiteController */
/* @var $model Feedback */

$this->pageTitle=Yii::app()->name. 'Home';
?>

<?php Yii::app()->facebook->ogTags['og:image'] =  "http://www.jakatasalon.co.uk/images/main/jakata_logo_meta.jpg"; ?>

<?php
	Yii::app()->clientScript->registerCoreScript('jquery');
	Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/scripts/feedback-feed.js');
?>

<div id="home">
<h4 class="slogan">Fashion Forward Hairdressing</h4>
<section id="info">
<p>Jakata is a fashion forward, award winning hairdressing salon in Warrington, Cheshire. With a team of twelve talented hairdressers looking after you, you know you're in good hands.</p>
<p>Based on Bridge street in Warrington Town Centre the salon is located perfectly to serve the whole of Warrington and surrounding areas.</p>
<p>If you're looking for the most fashion forward hairdressing then look no further. Our hairdressing services will far outweigh your expectations plus you'll be blown away by our friendly, approachable staff.</p>
</section> <!--#info-->

<div id="home_news">
	
<?php echo CHtml::link('<aside id="news2" class="home_news">
<h3 class="newsheader">Summer Offers</h3>
<p class="newspara">Check out this months special offers for new clients&hellip;</p>
<p class="newscenter"><strong>Read more &gt;</strong></p>
	</aside>',array('site/page','view'=>'offers')); ?>

<?php echo CHtml::link('<aside id="news1" class="home_news">
<h3 class="newsheader">Try Kebelo</h3>
<p class="newspara">Smoother, more manageable hair could be yours&hellip;</p>
<p class="newscenter"><strong>Find out more &gt;</strong></p>
	</aside>',array('kebelo/index')); ?>

<?php echo CHtml::link('<aside id="news3" class="home_news">
<h3 class="newsheader">Great career opportunities at Jakata</h3>
<p class="newspara">We\'re on the lookout for talented stylists and apprentices</p>
<p class="newscenter"><strong>Find out more here &gt;</strong></p>
</aside>',array('site/page','view'=>'recruitment')); ?>

</div> <!--news-->

<div id="feedback_feed">
	<ul>
	<?php foreach ($model as $key => $value): ?>
		
		<?php echo '<li>&quot;'. $value->extra_edit . '&quot;<br>' . '<span class="client">' . ucfirst($value->FeedbackClient->first_name) . ' ' . ucfirst($value->FeedbackClient->last_name) . ' - hair by ' . strstr($value->FeedbackClient->stylist, ' ', true) . '</span></li>'?>
	
	<?php endforeach; ?>
	</ul>
	
</div> <!--#feedback_feed-->

</div> <!--#home-->
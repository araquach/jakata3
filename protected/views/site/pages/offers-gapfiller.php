<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . 'Hairdressing Offers';
?>

<?php Yii::app()->facebook->ogTags['og:title'] = "Gap Filler Offers"; ?>
<?php Yii::app()->facebook->ogTags['og:description'] = "People often have to cancel last minute this time of year - which leaves us with appointment slots that we'd love to fill! Call the salon on the day and if you can fill one of our gaps you'll get your hair done at a special price!
Emergency Blowdry: if we have a gap - only £10
Curly Blowdry - only £15 "; ?>
<?php Yii::app()->facebook->ogTags['og:image'] =  "http://www.jakatasalon.co.uk/images/offers/men.jpg" ; ?>
<?php Yii::app()->facebook->ogTags['og:image'] =  "http://www.jakatasalon.co.uk/images/offers/glam.jpg" ; ?>

<section id="offers">

	<h1>December Offers</h1>
	<section id="offer_copy">
	<p>It's Christmas party season again and the salon is already getting mad busy. <em>With most of our clients pre-booking months back, our prime time slots are nearly already gone!</em></p>
	<p>If you have a tendency to leave things a little last minute don't despair,  there's a chance we can still get you sorted. People often have to cancel last minute this time of year - which leaves us with appointment slots that we'd love to fill!</p>
	
	<h3>Gap Filler Offers</h3>
	<p><strong>Call the salon on the day and if you can fill one of our gaps you'll get your hair done at a special price.</strong> We can't guarantee we'll have availability and you're not able to specify a stylist - but you are guaranteed a fully qualified stylist or senior stylist.</p>
	</section>
	
	<section id="offer1" class="group">
	<h2>Emergency Blowdry</h2>
	<p><strong>Call on the day:<br></strong> if we have a spare 30-45 minute gap get</p>
	<p class="large">A Blow-Dry for just £10</p>
	<p class="large">A Curly Blow for just £15</p>
	<small>Subject to availability Not with any other offer. Ends <time datetime="2013-12-31">31/12/13</time></small>
	</section>
	
	<section id="offer2" class"group">
	<h2>Last Minute Men's Cut</h2>
	<p><strong>Call on the day:<br></strong> if we have availability book in for</p>
	<p class="large">A Men's Cut &amp; Style for just £12</p>
	<p class="large">A Men's Express Cut for just £8</p>
	<small>Subject to availability. Not with any other offer. Ends <time datetime="2013-12-31">31/12/13</time></small>
	</section>
	
	
	<?php echo CHtml::link('<p id="book_button">Online enquiry and booking form</p>',array('site/contact')); ?>


</section> <!--end #offers-->

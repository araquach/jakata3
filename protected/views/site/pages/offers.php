<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . ' - Hairdressing Offers - Hairdressers in Cheshire';
?>

<?php Yii::app()->facebook->ogTags['og:title'] = "Gap Filler Offers"; ?>
<?php Yii::app()->facebook->ogTags['og:description'] = "People often have to cancel last minute this time of year - which leaves us with appointment slots that we'd love to fill! Call the salon on the day and if you can fill one of our gaps you'll get your hair done at a special price!
Emergency Blowdry: if we have a gap - only £10
Last Minute Men's Cut & Style - only £12 "; ?>
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
	
	<?php /*echo CHtml::link('<section id="offer1" class="group">
	<h2>Catwalk Makeover <br>Colour &amp; Cut Package</h2>
	<p>A limited edition package worth &pound;140 <br>for just &pound;70</p>
	<p><strong>Click here for more details</strong></p>
	<small>Excludes Saturday. First visit only. Not with any other offer. <br />Skin test required 48 hrs prior to service Ends 26/04/13 </small>
	</section>', array('site/page','view'=>'catwalk')); */?>
	
	<?php /*echo CHtml::link('<section id="offer2" class"group">
	<h2>Catwalk Makeover <br>Cut &amp; Style Package</h2>
	<p>A Cut, Dry &amp; Style plus FREE product and Catwalk Fashion Styling from only &pound;25</p>
	<p><strong>Click here for more details</strong></p>
	<small>Excludes Saturday. First visit only. Not with any other offer. Ends 26/04/13</small>
	
	</section>', array('site/page','view'=>'catwalk2')); */?>
	
	
	<!--<section id="offer1">
	  <h2>FREE Colour <br>with every<br>Cut, Dry &amp; Style</h2>
	  <p>For new clients<br>until the end of August</p>
	    <small><time datetime="2013-08-30">until 30/08/13</time><br>
	    For New Clients - not with any other offer. Excludes Saturday<br>Skin test required 48hrs before any colour service</small>
	</section>-->
	
	<?php /* echo CHtml::link('<section id="offer2">
	  <h2>FREE Cut Dry &amp; Style <br>with every<br>Kebelo Advantage Treatment</h2>
	  <p>Throughout the month of August</p>
	    <small>until <time datetime="2013-08-30">30/08/13</time><br>
	    Not with any other offer. Excludes Saturday<br></small>
	</section>', array('kebelo/index'));*/ ?>
	
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
	<small>Not with any other offer. Ends <time datetime="2013-12-31">31/12/13</time></small>
	</section>
	
	
	<?php //echo CHtml::link('<p id="book_button">Online enquiry and booking form</p>',array('site/contact')); ?>


</section> <!--end #offers-->

<!--<section id="no_offers">

<h1>Latest Offers</h1>

<p>Look out for some great new offers soon!</p>
<p>
	<a href="http://www.facebook.com/JakataSalon" target="_blank">Visit our Facebook page<br> to keep up to date with the latest news and offers </a>
</p>

</section>-->
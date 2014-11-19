<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . 'Competitions';
?>

<?php Yii::app()->facebook->ogTags['og:title'] = "The Jakata Christmas Give-away"; ?>
<?php Yii::app()->facebook->ogTags['og:description'] = "Hundreds of poundsworth of prizes to be won! GHD Styling tools, meal for 4 at Grill on the Square plus Colour & Cut package with your favourite stylist!"; ?>
<?php Yii::app()->facebook->ogTags['og:image'] =  "http://www.jakatasalon.co.uk/images/competition/christmas_raffle_meta.jpg"; ?>


<section id="competition">
<div id="competition_copy">
<h2>The JAKATA Christmas Give-away</h2>
<h3><em>Hundreds of pounds worth of prizes to be won!</em></h3>
</div> <!--end competition_copy-->
<div id="prizes">
	<div class="prize">
		<h3>Top Prize</h3>
		<p>The ultimate GHD styling tool collection</p>
		<ul>
			<li>A Set of GHD Gold series Irons - worth £120</li>
			<li>A GHD Air hairdryer - worth £99</li>
			<li>A set of GHD Curve styling tongues - worth £110)</li>
			<li>Plus a selection of GHD brushes, products and other goodies</li>
		</ul>
		<p>A prize worth over £400!!</p>
	</div> <!--.prize-->
	
	<div class="prize">
		<h3>Second Prize</h3>
		<p>A meal for four at Grill on the Square</p>
		<p>Grill on the Square is one of Warrington’s finest restaurants. You can expect amazing food, great cocktails and impeccable service.</p>
		<p>The prize consists of: A 3 course meal complete with a bottle of Veuve Clicquot for a party of four people</p>
		<p>Worth over £250!!!</p>
	
	</div> <!--.prize-->
	
	<div class="prize">
		<h3>Third Prize</h3>
		<p>Colour, Cut &amp; product package</p>
		<p>A FREE Colour &amp; Cut with your chosen stylist plus a hamper of  salon professional products.</p>
		<p>Worth over £100!!</p>
	</div> <!--.prize-->

</div> <!--#prizes-->

<div id="prize_entry">
<p>To enter simply purchase prize draw tickets from salon reception. Tickets are £1 each and you can buy as many as you like!<br>
For every Christmas Gift pack purchased you will also receive a FREE prize draw ticket.</p>
<p>The winner will be drawn on Monday 22nd December - in time for you to pick up your prize before Christmas</p>
</div> <!--prize_entry-->

<div id="fb_like">
<?php  $this->widget('ext.yii-facebook-opengraph.plugins.LikeButton', array(
   'href' => 'http://www.jakatasalon.co.uk/prizedraw', 
   'show_faces'=>false,
   'send' => true,
   'width' => '250px'
));  ?>
</div>


</section> <!--end competition-->
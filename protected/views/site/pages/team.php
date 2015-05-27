<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . 'The Jakata Team';
?>

<?php Yii::app()->facebook->ogTags['og:title'] = "Jakata Team"; ?>
<?php Yii::app()->facebook->ogTags['og:description'] = "The Jakata team comprises of ten skilled stylists, all from different hairdressing backgrounds, all displaying a diverse range of skills.
Over the years Jakata has trained and developed a number of people to exceptional standards, whilst taking on already established stylists. This mix of talent creates a dynamic team with stylists well suited to anyone with a desire for a fashion forward look."; ?>
<?php Yii::app()->facebook->ogTags['og:image'] =  "http://www.jakatasalon.co.uk/images/main/jakata_logo_meta.jpg"; ?>

<?php
	Yii::app()->clientScript->registerCoreScript('jquery');
	Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/scripts/team.js');
?>

<div id="team_shot"></div>
<section id="team">
	<section id="team_overview">
    <h1>The Team</h1>
    <p>The Jakata team comprises of eight skilled stylists, all from different hairdressing backgrounds, all displaying a diverse range of skills.</p>
    <p>Over the years Jakata has trained and developed a number of people to exceptional standards, whilst taking on already established stylists. This mix of talent creates a dynamic team with stylists well suited to anyone with a desire for a fashion forward look.</p>
    <p>A year ago the team divided into two when we opened our sister salon <a href="http://www.paulkemphairdressing.com" target="_blank">Paul Kemp Hairdressing</a> due to outgrowing our Bridge Street premises. Both teams continue to grow both in number and skill.</p>
    <p><em>It's difficult to find a stylist well suited to your needs, take the time to read each staff members profile to find the right fit for you. Prices for each stylist vary dependant on a number of factors (experience, specialised skills, high demand etc.)</em></p>
    <p><strong>Please call to arrange for a complimentary consultation with any of our team members.</strong></p>
    </section> <!--team_overview-->
    
    <div id="team_members">
	<section class="team_member" id="jimmy">
	<div class="team_button"><p>About<br>Jimmy</p></div>
	<a id="Jimmy" class="anchor"></a>
	<h2>Jimmy Sharpe</h2>
	<section class="team_member_copy">
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/team/closebutton.png" width="25" height="25" alt="Jimmy Sharpe">
	<p><strong>Salon manager Jimmy joined Jakata in October 2007 as an apprentice and quickly worked his way up through the ranks.</strong></p>
	<p>His passion for hairdressing is infectious. His experimental approach ensures he's always pushing the boundaries in cutting, colouring &amp; styling hair.</p>
	<p>Jimmy is currently a member of the Schwarzkopf L.E.A.P Team</p>
	<p><strong>Favourite Style: </strong>Short hair cuts</p>
	<p><strong>Favourite Product: </strong>Schwarzkopf Flex Wax</p>
	<p class="price">Average Cut &amp; Colour <br>with Jimmy: &pound;106</p>dfggdf
	</section> <!--team_member_copy -->
	</section> <!--team member jimmy-->
	
	<section class="team_member" id="laura">
	<div class="team_button"><p>About<br>Laura C</p></div>
	<a id="Laura" class="anchor"></a>
	<h2>Laura Crumplin</h2>
	<section class="team_member_copy">
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/team/closebutton.png" width="25" height="25" alt="Laura Hall">
	<p><strong>Senior stylist Laura has been hairdressing for 9 years and joined Jakata in 2005. That makes her the longest serving team member (apart from Adam).</strong></p>
	<p>Laura loves classic styling plus technical services like Opti-Smooth and Kebelo.</p>
	<p>Laura strongly believes using the right products is the key to maintaining a new hairstyle.</p>
	<p><strong>Favourite Style: </strong>Any kind of hair-up</p>
	<p><strong>Favourite Product:</strong> Any of the Tigi Candy Fixations Range</p>
	 <p class="price">Average Cut &amp; Colour <br>with Laura: &pound;97</p>
	</section> <!--team_member_copy -->
	</section> <!--team member laura-->
	
	<section class="team_member" id="maisie">
	<div class="team_button"><p>About<br>Maisie</p></div>
	<a id="Maisie" class="anchor"></a>
	<h2>Maisie Thompson</h2>
	<section class="team_member_copy">
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/team/closebutton.png" width="25" height="25" alt="Maisie Thompson">
	<p><strong>Maisie is a well established Jakata team member. She's a senior stylist and has over 8 years experience.</strong></p>
	<p>She loves big, messy, tousled styles with loads of bounce and attitude.</p> 
	<p>Precision, creativity and a strong understanding of an individuals hair are Maisie's focus.</p>
	<p>She has an advanced diploma in Colour Correction through La Biostetique</p>
	<p><strong>Favourite Style: </strong>Big, tousled hair</p>
	<p><strong>Favourite Product: </strong>Tigi 'Totally Baked'</p> 
	<p class="price">Average Cut &amp; Colour <br>with Maisie: &pound;97</p>
	</section> <!--team_member_copy -->
	</section> <!--team member maisie-->
	
	<section class="team_member" id="vicky">
	<div class="team_button"><p>About<br>Vikki</p></div>
	<a id="Vicky" class="anchor"></a>
	<h2>Vicky Rowland</h2>
	<section class="team_member_copy">
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/team/closebutton.png" width="25" height="25" alt="Vicky Rowland">
	<p><strong>Vicky is a highly experienced stylist with a passion for all things vintage.</strong></p>
	<p>Her time with the Hair Cuttery gave her a strong customer service focus. After joining Jakata in 2011 she's worked her way up to salon team leader.</p>
	<p>Vicky's unique personal style definitely reflects in her innovative creations in the salon. </p>
	<p><strong>Favourite Style: </strong> Anything Vintage</p>
	<p><strong>Favourite Product: </strong>Catwalk Weightless Shine Spray</p>
	<p class="price">Average Cut &amp; Colour <br>with Vicky: &pound;89</p>
	</section> <!--team_member_copy -->
	</section> <!--team member vicky-->
		
	<section class="team_member" id="nat">
	<div class="team_button"><p>About<br>Nat</p></div>
	<a id="Natalie" class="anchor"></a>
	<h2>Natalie Doxey</h2>
	<section class="team_member_copy">
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/team/closebutton.png" width="25" height="25" alt="Natalie Doxey">
	<p><strong>Natalie has been with Jakata since 2007. She's an extremely talented stylist, exhibiting some incredible creative skills.</strong></p>
	<p>A key player in the winning team at the Redken NYC Awards, Natalie picked up the Style Innovator Trophy.</p> 
	<p>She loves men's hair cutting, creative colouring, extensions and hair up.</p>
	<p><strong>Favourite Style: </strong> Frankie from the Saturdays</p>
	<p><strong>Favourite Product: </strong>Session Series Dry Shampoo</p>
	<p class="price">Average Cut &amp; Colour <br>with Natalie: &pound;89</p>
	</section> <!--team_member_copy -->
	</section> <!--team member nat-->
	
	<section class="team_member" id="laura_m">
	<div class="team_button"><p>About<br>Laura M</p></div>
	<h2>Laura Minett</h2>
	<section class="team_member_copy">
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/team/closebutton.png" width="25" height="25" alt="Laura Minett">
	<p><strong>Laura has recently been promoted to stylist position. She has quickly settled into the team and exhibits loads of natural flair for hairdressing.</strong></p>
	<p>She particularly enjoys creative colouring &amp; styling whilst adding her own personal touch.</p>
	<p>She currently has a special low price for a limited time only!</p>
	<p><strong>Favourite Style: </strong>Soft &amp; Natural styles</p>
	<p><strong>Favourite Product: </strong>Totally Baked &amp; Dust It</p>
	<p class="price">Average Cut &amp; Colour <br>with Laura M: &pound;74</p>
	</section> <!--team_member_copy -->
	</section> <!--team member laura_m -->
	
	<section class="team_member" id="matt">
	<div class="team_button"><p>About<br>Matt</p></div>
	<h2>Matthew Lane</h2>
	<section class="team_member_copy">
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/team/closebutton.png" width="25" height="25" alt="Matthew Lane">
	<p><strong>Matthew Lane joined the team as a Graduate stylist in 2014 after  previously studying art.</strong></p>
	<p>He’s quickly establishing himself in the salon thanks to his passion for hairdressing and his friendly personality.</p>
	<p>His love of art shines through with his bold, expressive colour and cuts.</p>
	<p><strong>Favourite Style: </strong>Loves tailoring styles to suit the individual</p>
	<p><strong>Favourite Product: </strong>BC Moisture Kick</p>
	<p class="price">Average Cut &amp; Colour <br>with Matt: &pound;59</p>
	</section> <!--team_member_copy -->
	</section> <!--team member vicky-->
		 
</div> <!--team_members	-->	  
</section> <!--team-->
      	
       
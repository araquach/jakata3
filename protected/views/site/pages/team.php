<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . ' - The Jakata Team - Hairdressers in Cheshire';
?>

<?php
	Yii::app()->clientScript->registerCoreScript('jquery');
	Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/scripts/team.js');
?>

<div id="team_shot"></div>
<section id="team">
	<section id="team_overview">
    <h1>The Team</h1>
    <p>The Jakata team comprises of ten skilled stylists, all from different hairdressing backgrounds, all displaying a diverse range of skills.</p>
    <p>Over the years Jakata has trained and developed a number of people to exceptional standards, whilst taking on already established stylists. This mix of talent creates a dynamic team with stylists well suited to anyone with a desire for a fashion forward look.</p>
    <p>A year ago the team divided into two when we opened our sister salon <a href="http://www.paulkemphairdressing.com" target="_blank">Paul Kemp Hairdressing</a> due to outgrowing our Bridge Street premises. Both teams continue to grow both in number and skill, proving to be a formidable force in hairdressing both in Warrington and the North West. </p>
    <p><em>It's difficult to find a stylist well suited to your needs, take the time to read each staff members profile to find the right fit for you. Prices for each stylist vary dependant on a number of factors (experience, specialised skills, high demand etc.)</em></p>
    <p><strong>Please call to arrange for a complimentary consultation with any of our team members.</strong></p>
    </section> <!--team_overview-->
    
    <div id="team_members">
	<section class="team_member" id="jimmy">
	<div id="team_button"><strong><p>About<br>Jimmy</p></strong></div>
	<h2>Jimmy Sharpe</h2>
	<section class="team_member_copy">
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/team/closebutton.png" width="25" height="25">
	<p><strong>Salon manager Jimmy joined Jakata in October 2007 as an apprentice and quickly worked his way up through the ranks.</strong></p>
	<p>His passion for hairdressing is infectious. His experimental approach ensures he's always pushing the boundaries in cutting, colouring &amp; styling hair.</p>
	<p>Jimmy was recently a member of the Schwarzkopf Young Artistic Team</p>
	<p><strong>Favourite Style: </strong>Short hair cuts</p>
	<p><strong>Favourite Product: </strong>Schwarzkopf Flex Wax</p>
	<p class="price">Average Cut &amp; Colour <br>with Jimmy: &pound;90</p>
	</section> <!--team_member_copy -->
	</section> <!--team member jimmy-->
	
	<section class="team_member" id="vicky">
	<div id="team_button"><p>About<br>Vikki</p></div>
	<h2>Vicky Rowland</h2>
	<section class="team_member_copy">
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/team/closebutton.png" width="25" height="25">
	<p><strong>Team leader Vicky is a highly experienced stylist with a passion for all things vintage.</strong></p>
	<p>Her time with the Hair Cuttery gave her a strong customer service focus. After joining Jakata in 2011 she's worked her way up to salon team leader.</p>
	<p>Vicky's unique personal style definitely reflects in her innovative creations in the salon. </p>
	<p><strong>Favourite Style: </strong> Anything Vintage</p>
	<p><strong>Favourite Product: </strong>Catwalk Weightless Shine Spray</p>
	<p class="price">Average Cut &amp; Colour <br>with Vicky: &pound;90</p>
	</section> <!--team_member_copy -->
	</section> <!--team member vicky-->
	
	<!--<section class="team_member" id="michelle">
	<div id="team_button"><p>About<br>Michelle</p></div>
	<h2>Michelle Ash</h2>
	<section class="team_member_copy">
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/team/closebutton.png" width="25" height="25">
	<p><strong>Senior Stylist Michelle has been a key Jakata team member for many years.</strong></p>
	<p>With 17 years experience she's highly skilled in all aspects of hairdressing.</p>
	<p>She particularly loves technical cutting &amp; Colouring and has been a finalist in the L'Oreal Colour Trophy.</p>
	<p><strong>Favourite Style: </strong>Any kind of Bob</p>
	<p><strong>Favourite Product: </strong>Tigi 'Hard To Get'</p>
	<p class="price">Average Cut &amp; Colour <br>with Michelle: &pound;90??</p>
	</section> <!--team_member_copy --*>
	</section> <!--team member vicky--*>-->
	
	<section class="team_member" id="shelly">
	<div id="team_button"><p>About<br>Shelly</p></div>
	<h2>Michelle French</h2>
	<section class="team_member_copy">
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/team/closebutton.png" width="25" height="25">
	<p><strong>Senior Stylist Shelly has been a Jakata Team member since September 2011. She has over 10 years experience.</strong></p> 
	<p>Her hairdressing background with Tony &amp; Guy ensured a good foundation, and she is always striving to push to the next level. </p> 
	<p>Shelly says the secret to a good haircut is correct assessment of the hair type and texture, suitability and manageability.</p>
	<p><strong>Favourite Style: </strong>Classic Bob's</p>
	<p><strong>Favourite Product: </strong> Osis Shape Shifters</p>
	<p class="price">Average Cut &amp; Colour <br>with Michelle: &pound;90</p>
	</section> <!--team_member_copy -->
	</section> <!--team member shelly-->
	
	<!--<section class="team_member" id="maisie">
	<div id="team_button"><p>About<br>Maisie</p></div>
	<h2>Maisie Thompson</h2>
	<section class="team_member_copy">
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/team/closebutton.png" width="25" height="25">
	<p><strong>Maisie is Jakata's latest addition to the team. She's a senior stylist she has over 8 years experience.</strong></p>
	<p>She loves big, messy, tousled styles with loads of bounce and attitude.</p> 
	<p>Precision, creativity and a strong understanding of an individuals hair are Maisie's focus.</p>
	<p>She has an advanced diploma in Colour Correction through La Biostetique</p>
	<p><strong>Favourite Style: </strong>Big, tousled hair</p>
	<p><strong>Favourite Product: </strong>Tigi 'Totally Baked'</p> 
	<p class="price">Average Cut &amp; Colour <br>with Maisie: &pound;90</p>
	</section> <!--team_member_copy --*>
	</section> <!--team member maisie--*>-->
	
	<section class="team_member" id="laura">
	<div id="team_button"><p>About<br>Laura</p></div>
	<h2>Laura Hall</h2>
	<section class="team_member_copy">
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/team/closebutton.png" width="25" height="25">
	<p><strong>Laura has been hairdressing for 8 years and joined Jakata in 2005. That makes her the longest serving team member (apart from Adam).</strong></p>
	<p>Laura loves classic styling plus technical services like Opti-Smooth and Kebelo.</p>
	<p>Laura strongly believes using the right products is the key to maintaining a new hairstyle.</p>
	<p><strong>Favourite Style: </strong>Any kind of hair-up</p>
	<p><strong>Favourite Product:</strong> Any of the Tigi Candy Fixations Range</p>
	 <p class="price">Average Cut &amp; Colour <br>with Laura: &pound;80</p>
	</section> <!--team_member_copy --> 
	</section> <!--team member laura-->
		
	<section class="team_member" id="nat">
	<div id="team_button"><p>About<br>Nat</p></div>
	<h2>Natalie Doxey</h2>
	<section class="team_member_copy">
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/team/closebutton.png" width="25" height="25">
	<p><strong>Natalie completed her apprenticeship with Jakata in 2008. She's now a fully fledged stylist, exhibiting some incredible creative talent.</strong></p>
	<p>A key player in the winning team at the Redken NYC Awards, Natalie picked up the Style Innovator Trophy.</p> 
	<p>She loves men's hair cutting, creative colouring, extensions and hair up.</p>
	<p><strong>Favourite Style: </strong> Frankie from the Saturdays</p>
	<p><strong>Favourite Product: </strong>Session Series Dry Shampoo</p>
	<p class="price">Average Cut &amp; Colour <br>with Natalie: &pound;60</p>
	</section> <!--team_member_copy -->
	</section> <!--team member nat-->
	
	<section class="team_member" id="mikala">
	<div id="team_button"><p>About<br>Mikala</p></div>
	<h2>Mikala Sutcliffe</h2>
	<section class="team_member_copy">
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/team/closebutton.png" width="25" height="25">
	<p><strong>Graduate Stylist Mikala is the latest recruit to complete our rigorous training, and is now a qualified Graduate Stylist. </strong></p>
	<p>She has a talent for creating beautiful styles and has a great eye for the perfect finish.</p>
	<p><em>Graduate Stylists don't stay at this level for long, so take advantage of this great price before she gets promoted!!</em></p>
	<p><strong>Favourite Style: </strong>Curly Blow Dry's</p>
	<p><strong>Favourite Product: </strong>Tigi 'Mega Whip'</p>
	<p class="price">Average Cut &amp; Colour <br>with Mikala: &pound;60</p>
	</section> <!--team_member_copy -->
	</section> <!--team member mikala-->
	 
	<!--<section class="team_member" id="dan">
	<div id="team_button"><p>About<br>Dan</p></div>
	<h2>Daniel Anderson</h2>
	<section class="team_member_copy">
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/team/closebutton.png" width="25" height="25">
	<p><strong>Dan isn't officially a Jakatan, but deserves a mention! He is a law unto himself and churns out some super nice cuts and colours</strong></p>
	<p>He came on board at Jakata and has settled in like part of the furniture.</p>
	<p><strong>Favourite Style: </strong>Straight Line Graduation</p>
	<p><strong>Favourite Product: </strong>Totally Baked</p>
	<p class="price">Average Cut &amp; Colour <br>with Dan: &pound;110</p>
	</section> <!--team_member_copy --*>
	</section> <!--team member dan--*>1-->
		 
	 
</section> <!--team-->
      	
       
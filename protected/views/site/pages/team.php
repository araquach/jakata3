<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . ' - The Jakata Team - Hairdressers in Cheshire';
?>

<?php
	Yii::app()->clientScript->registerCoreScript('jquery');
    Yii::app()->clientScript->registerScript('team_animate',"
               
      $('.team_member_copy').each(function(){
      $(this).hover(function(){
      $(this).css({opacity: 0});
      $('#'+$(this).attr('rel')).fadeIn(800);
      return false;
      }, function(){
      $(this).css({opacity: 1});
      $('#'+$(this).attr('rel')).fadeOut(800);
      });
      });	
        
    ",CClientScript::POS_READY);
?>



<div id="team_shot"></div>
<section id="team">

<?php 
$this->widget('zii.widgets.jui.CJuiAccordion', array(
    'panels'=>array(
        'panel 1'=>'Welcome',
        'panel 2'=>'This is panel 2',
        // panel 3 contains the content rendered by a partial view
           ),
    // additional javascript options for the accordion plugin
    'options'=>array(
        'animated'=>'slide',
    ),
));
?>

	<!-- TEXT FOR VENUE -->
	<div id="venue" class="picsText">
	<p class="mediumtx" align="left">
	Researching for the ideal venue for your event can be one of the most 
	daunting tasks you will be faced with. Greek Concierge has the right 
	contacts to make this happen.
	</p>
	</div>
	
	<!-- TEXT FOR THEME -->
	
	<div id="theme" class="picsText">
	<p class="mediumtx" align="left">
	Getting the theme right is important to attract more guests at your 
	events. We have many ideas to choose from - all you need is to decide 
	which one is right for the moment you are trying to create. 
	</p>
	</div>
	
	<div id="pics">
	<img src="http://www.greekconcierge.com/images/events-venue.png" title="" alt="Events London Venue" rel="venue" > 
	<img src="http://www.greekconcierge.com/images/events-theme.png" title="" alt="Events London Theme" rel="theme"> 
	</div>

	

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
	<h2>Jimmy Sharpe</h2>
	</section> <!--team member jimmy-->
	<section class="team_member_copy">
	<p>Jimmy joined the team in 200? straight from college. He quickly developed his hairdressing skills but also showed a keen interest in all aspects of the salon. From maintenance to finances, literally anything! He naturally fell into his role as salon manager and is a pivotal member of the team. </p>
	<p>His hairdressing strengths are ???? and he loves ?????</p>
	<p class="price">Average Cut &amp; Colour with Jimmy: &pound;90</p>
	</section> <!--team_member_copy -->
	
	<section class="team_member" id="shelly">
	<section class="team_member_copy">
	<h2>Michelle French</h2>
	<p>Michelle has a tonne of experiance from working in salons in Warrington. She spent a large part of her career working for Toni &amp; Guy and mad the move to Jakata 3 years ago.</p>
	<p>Her skills are diverse with a passion for cutting. She says the classic bob is her all time favourte style, but her skills are strong in fashion colouring </p>
	<p class="price">Average Cut &amp; Colour with Michelle: &pound;90</p>
	</section> <!--team_member_copy -->
	</section> <!--team member shelly-->
	
	<section class="team_member" id="vicky">
	<section class="team_member_copy">
	<h2>Vicky Rowland</h2>
	<p>Vicky has many years experiance, with athe bulk of her experience from working at the Hair Cuttery. She moved to Jakata in ???</p>
	<p>Vicky's unique personal style definately has an impact on the styles she creates in the saon. She loves all things retro, but don't worry, if the retro look isn't your thing, she is adaptable!</p>
	<p class="price">Average Cut &amp; Colour with Vicky: &pound;90</p>
	</section> <!--team_member_copy -->
	</section> <!--team member vicky-->
	
	<section class="team_member" id="nat">
	<section class="team_member_copy">
	<h2>Natalie Doxey</h2>
	<p>Natalie is quickly flying through the ranks and has the passion and drive to get her to the top of her career. She lives and breathes hairdressing.</p>
	<p>She was recently part of the winning team for the 'Redken Style Innovator' award and has featured in a number if hairdressing publications - a great achievement for a relative newcomer.</p>
	<p class="price">Average Cut &amp; Colour with Natalie: &pound;70</p>
	</section> <!--team_member_copy -->
	</section> <!--team member nat-->
	
	<section class="team_member" id="adam">
	<section class="team_member_copy">
	<h2>Daniel Anderson</h2>
	<p>Dan isn't officially a Jakatan, but deserves a mention! He is a law unto himself and churns out some super nice cuts and colours</p>
	<p>He came on board at Jakata and has settled in like part of the furniture. He likes to do 90's styles.</p>
	<p class="price">Average Cut &amp; Colour with Dan: &pound;110</p>
	</section> <!--team_member_copy -->
	</section> <!--team member adam-->
	
	<section class="team_member" id="mikala">
	<section class="team_member_copy">
	<h2>Mikala Sutcliffe</h2>
	<p>Mikala is the latest recruit to compete our rigorous training and is now a fully fledged Graduate Stylist. She has a talent for creating beautiful styles and has a great eye for the perfect finish. Her colouring skills are also fantastic.</p>
	<p>Graduate Stylists don't stay at this level for long, so take advantage of this great price before she gets promoted!!</p>
	<p class="price">Average Cut &amp; Colour with Mikala: &pound;60</p>
	</section> <!--team_member_copy -->
	</section> <!--team member mikala-->
	
	<section class="team_member" id="laura">
	<section class="team_member_copy">
	 <h2>Laura Hall</h2>
	 <p>Laura joined Jakata way back in 2005 and has been a key member of the team since. Her passion is for doing all the boring shit, like chemical straightening.</p>
	 <p class="price">Average Cut &amp; Colour with Laura: &pound;80</p>
	</section> <!--team_member_copy --> 
	</section> <!--team member laura-->
	 
	<section class="team_member" id="katie">
	<section class="team_member_copy">
	<h2>Katy Littlemore</h2>
	<p>Katy was a member of the Daniel Anderson Team and joined us when he came on board. She loves cutting, colouring and styling hair but her true passion is her horses.</p>
	<p>In her spare time she trims her horses maine and tail.</p>
	<p class="price">Average Cut &amp; Colour with Katy: &pound;80</p>
	</section> <!--team_member_copy --> 
	</section> <!--team member katie-->
	</div> <!--team members-->
	 
	 
</section> <!--team-->
      	
       
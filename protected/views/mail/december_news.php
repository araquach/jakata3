<!DOCTYPE HTML>

<title>Jakata Newsletter - <?php echo date('F');?> 2012</title>

<html>
<body>

<table width="100%" cellpadding="10" cellspacing="0">

	<tr>
	<td valign="top" align="center">
	<table width="657" cellpadding="0" cellspacing="0" style="border: 1px solid #999;">
	<tr>
	<td>
	<table width="657" cellpadding="0" cellspacing="0">
	<table width="657" cellpadding="0" cellspacing="0">
	<tr>
	<a href="http://www.jakatasalon.co.uk/news.php" style="text-decoration: none; font-size: .7em; color: #999; text-align:left;">View these stories in your browser</a>
	</td>
	</tr>
	
	<!--header-->
	<tr>
	<td height="224" align="left" valign="middle" style="background-color:#FFFFFF;border-top:0px solid #333333;"><center>
	  <a href="http://www.jakatasalon.co.uk"><img src="http://www.jakatasalon.co.uk/images/newspics/news_masthead2.jpg" alt="Jakata Hair &amp; Beauty Team. 01925 242960" width="657" height="224" style="border-style: none"></a></td>
	</tr>
	</table>
	<!--end header-->
	
	<table width="657" cellpadding="20" cellspacing="0" bgcolor="#FFFFFF">
	
	<tr> <!--Intro-->
	  <td width="135" height="200" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;border-bottom: 1px dashed #999;"><p>
	  <img src="http://www.jakatasalon.co.uk/images/email/christmas.jpg" alt="Christmas" width="135" height="190"></p></td>
	  <td width="440" valign="top" bgcolor="#FFFFFF" style="text-align: left;font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms; border-bottom: 1px dashed #999; padding-right: 40px;">
	  <h1 style="font-size:20px;font-weight:bold;color:#666;font-family:arial;line-height:110%;">
	  <strong>Christmas is almost here!</strong></h1>
		<p>Hi <?php echo ucfirst($model->first_name);?>, with Christmas just around the corner we thought we'd send out our last newsletter of the year.</p>
		<p><strong>Most of the staff are getting full - especially in the prime time slots. If you haven't booked your appointment yet don't leave it any longer! The salon is open on Sundays and Mondays over the next couple of weeks too.</strong></P>
		<p>Don't forget that we're closed after Christmas until Monday 30th December (ready for New Years Eve). If you want to secure a booking then it's best to book before Christmas.</p>
		<p>If you're struggling for those last minute gift ideas we have a whole selection of Tigi Gift packs plus special edition GHD's. We also have Jakata gift vouchers available in the salon.</p>
		<p><strong>We look forward to seeing you in the salon soon!</strong></p>
	   </td>
	</tr>
	
	<?php switch ($model->offer){
	
	case 1: // for women
	echo
	 '<tr> 
	   <td width="135" height="200" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;border-bottom: 1px dashed #999;">
	   <p><img src="http://www.jakatasalon.co.uk/images/email/glam.jpg" alt="Special Offer" width="135" height="190"></p></td>
	   <td width="440" valign="top" bgcolor="#FFFFFF" style="text-align: left;font-size:14px;color:#000000;line-height:150%;font-family:trebuchet ms; border-bottom: 1px dashed #999; padding-right: 40px;">
	   <h1 style="font-size:24px;font-weight:bold;color:#666;font-family:arial;line-height:110%;">
	   <strong>Last Minute Gap Filling Offer</strong></h1>
	   <p>If you have a tendency to leave things a little last minute don\'t despair, there\'s a chance we can still get you sorted. People often have to cancel last minute this time of year - which leaves us with appointment slots that we\'d love to fill!</p>
	   <p><strong>Call the salon on the day and if you can fill one of our gaps you\'ll get your hair done at a special price.</strong> We can\'t guarantee we\'ll have availability and you\'re not able to specify a stylist - but you are guaranteed a fully qualified stylist or senior stylist.</p>
	   <p style="font-size: 22px;"><strong><span style="font-size: 34px; line-height: 1.5em;">30% OFF</span><br>your hair services</strong></p>
	   <p>Offer exclusively for <strong>'.ucfirst($model->first_name).' '.ucfirst($model->last_name).'</strong> only.<br>Not Transferable, weekdays only </p>
	   <p><strong>Call 01925 242960 to book and mention the offer</strong></p>
	   <p style="font-size: 10px;">Please present this when paying (either a printout or show it on your smart phone)<br>Offer ends: December 31st 2013</p>
	  </td>
	 </tr>';
	break;
	case 2: // second womens offer
	echo
	'<tr> 
	  <td width="135" height="200" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;border-bottom: 1px dashed #999;">
	  <p><img src="http://www.jakatasalon.co.uk/images/email/glam.jpg" alt="Special Offer" width="135" height="190"></p></td>
	  <td width="440" valign="top" bgcolor="#FFFFFF" style="text-align: left;font-size:14px;color:#000000;line-height:150%;font-family:trebuchet ms; border-bottom: 1px dashed #999; padding-right: 40px;">
	  <h1 style="font-size:24px;font-weight:bold;color:#666;font-family:arial;line-height:110%;">
	  <strong>Last Minute Gap Filling Offer</strong></h1>
	  <p>If you have a tendency to leave things a little last minute don\'t despair, there\'s a chance we can still get you sorted. People often have to cancel last minute this time of year - which leaves us with appointment slots that we\'d love to fill!</p>
	  <p><strong>Call the salon on the day and if you can fill one of our gaps you\'ll get your hair done at a special price.</strong> We can\'t guarantee we\'ll have availability and you\'re not able to specify a stylist - but you are guaranteed a fully qualified stylist or senior stylist.</p>
	  <p><strong><span style="font-size: 24px; line-height: 1.5em;">Last Minute Blowdry</p>
	  <p><strong>Call on the day:</strong><br>
	  	if we have a spare 30-45 minute gap get</p>
	  	<p style="font-size:20px;font-weight:bold; line-height:1.6em;">A Blow-Dry for just &pound;10<br>
	  	A Curly Blow for just &pound;15</p>
	  	
	  <p>Offer exclusively for <strong>'.ucfirst($model->first_name).' '.ucfirst($model->last_name).'</strong> only.<br>Not Transferable, weekdays only </p>
	  <p><strong>Call 01925 242960 to book and mention the offer</strong></p>
	  <p style="font-size: 10px;">Please present this when paying (either a printout or show it on your smart phone)<br>Offer ends: December 31st 2013</p>
	 </td>
	</tr>';
	break;
	case 3: // mens offer
	echo
	'<tr> 
	  <td width="135" height="200" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;border-bottom: 1px dashed #999;">
	  <p><img src="http://www.jakatasalon.co.uk/images/email/men.jpg" alt="Special Offer" width="135" height="190"></p></td>
	  <td width="440" valign="top" bgcolor="#FFFFFF" style="text-align: left;font-size:14px;color:#000000;line-height:150%;font-family:trebuchet ms; border-bottom: 1px dashed #999; padding-right: 40px;">
	  <h1 style="font-size:24px;font-weight:bold;color:#666;font-family:arial;line-height:110%;">
	  <strong>Last Minute Gap Filling Offer</strong></h1>
	  <p>If you have a tendency to leave things a little last minute don\'t despair, there\'s a chance we can still get you sorted. People often have to cancel last minute this time of year - which leaves us with appointment slots that we\'d love to fill!</p>
	  <p><strong>Call the salon on the day and if you can fill one of our gaps you\'ll get your hair done at a special price.</strong> We can\'t guarantee we\'ll have availability and you\'re not able to specify a stylist - but you are guaranteed a fully qualified stylist or senior stylist.</p>
	  <p><strong><span style="font-size: 24px; line-height: 1.5em;">Last Minute Men\'s Cut</p>
	  <p><strong>Call on the day:</strong><br>
	  	if we have availability book in for</p>
	  	<p style="font-size:20px;font-weight:bold; line-height:1.6em;">A Men\'s Cut & Style for just &pound;12<br>
	  	A Men\'s Express Cut for just &pound;8</p>
	  	
	  <p>Offer exclusively for <strong>'.ucfirst($model->first_name).' '.ucfirst($model->last_name).'</strong> only.<br>Not Transferable, weekdays only </p>
	  <p><strong>Call 01925 242960 to book and mention the offer</strong></p>
	  <p style="font-size: 10px;">Please present this when paying (either a printout or show it on your smart phone)<br>Offer ends: December 31st 2013</p>
	 </td>
	</tr>';
	break;
	}
	?>
	
	<tr> <!--Tigi Christnmas-->
	  <td width="135" height="200" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;border-bottom: 1px dashed #999;"><p>
	  <img src="http://www.jakatasalon.co.uk/images/email/tigi_gift2.jpg" alt="Tigi Gifts" width="135" height="190"></p></td>
	  <td width="440" valign="top" bgcolor="#FFFFFF" style="text-align: left;font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms; border-bottom: 1px dashed #999; padding-right: 40px;">
	  <h1 style="font-size:20px;font-weight:bold;color:#666;font-family:arial;line-height:110%;">
	  <strong>Tigi has Christmas wrapped up</strong></h1>
		<p><strong>With the festive season only a few weeks away, here at Jakata we have been getting all our Christmas packs ready. As usual, Tigi have a whole selection of packs to choose from.</strong></p>
		<p>Bursting with all the best TIGI has to offer, each pack contains specially selected, intermixable, versatile products for your use to give you that salon ready style at home.</p>
		<p>Also this year we have a special offer on all our other Tigi products, buy 2 get one FREE. With free gift wrapping in a stylish TIGI box.</p>
		<p><a href="http://www.jakatasalon.co.uk/news.php#tigiChristmas" target="_blank" style="color: #333;">Find out more here&gt;</a></p>
	   </td>
	</tr>
	
	<tr> <!--Giveaway -->
	  <td width="135" height="200" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;border-bottom: 1px dashed #999;"><p>
	  <img src="http://www.jakatasalon.co.uk/images/email/autumn.jpg" alt="Autumn Giveaway" width="135" height="190"></p></td>
	  <td width="440" valign="top" bgcolor="#FFFFFF" style="text-align: left;font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms; border-bottom: 1px dashed #999; padding-right: 40px;">
	  <h1 style="font-size:20px;font-weight:bold;color:#666;font-family:arial;line-height:110%;">
	  <strong>The Great Jakata Autumn Giveaway</strong></h1>
		<p><strong>This time of year we all need a bit of a pick-me-up, the cold weather is setting in fast and winter is here. Wouldn't it be great to have some free pampering or maybe get some of the latest hair products handed to you for free!</strong></p>
		<p>We've been giving away 100's of pounds worth of hair products and services over the last few weeks and YOU can get your hands on some too!</p>
		<p>Click the link below to enter.</p>
		<p><a href="http://www.jakatasalon.co.uk/giveaway" target="_blank" style="color: #333;">Enter here&gt;</a></p>
	   </td>
	</tr>
	
	<tr> <!--Meet Vikki-->
	  <td width="135" height="200" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;border-bottom: 1px dashed #999;"><p>
	  <img src="http://www.jakatasalon.co.uk/images/email/vikki.jpg" alt="Vikki Rowland" width="135" height="190"></p></td>
	  <td width="440" valign="top" bgcolor="#FFFFFF" style="text-align: left;font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms; border-bottom: 1px dashed #999; padding-right: 40px;">
	  <h1 style="font-size:20px;font-weight:bold;color:#666;font-family:arial;line-height:110%;">
	  <strong>Get to know the team: Meet Vikki</strong></h1>
		<p><strong>This month our team member focus is on Jakata team leader Vikki Rowland.</strong></p>
		<p>As ever, we threw a ton of questions at her to try and find out what makes her tick!</p>
		<p><a href="http://www.jakatasalon.co.uk/news.php#VikkiInterview" target="_blank" style="color: #333;">Read the full interview here &gt;</a></p>
	   </td>
	</tr>
	
	<tr> <!--Opti Smooth -->
	  <td width="135" height="200" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;border-bottom: 1px dashed #999;"><p>
	  <img src="http://www.jakatasalon.co.uk/images/email/opti-smooth.jpg" alt="Opti-Smooth" width="135" height="170"></p></td>
	  <td width="440" valign="top" bgcolor="#FFFFFF" style="text-align: left;font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms; border-bottom: 1px dashed #999; padding-right: 40px;">
	  <h1 style="font-size:20px;font-weight:bold;color:#666;font-family:arial;line-height:110%;">
	  <strong>Smooth, Frizz free hair is yours</strong></h1>
		<p><strong>Opti-Smooth is one of our in salon professional permanent hair chemical straighteners. It is a technologically advanced straitening system which leaves hair with remarkable shine and silkiness until it eventually grows out. This treatment is perfect for frizzy unruly, hard-to-manage hair making life a lot easier!</strong></p>
		<p>We have had amazing feedback from the Opti-Smooth treatment, some clients saying it reduces the styling time of their hair by 50%. Ideal for keeping it smooth in this damp, wet weather or simply find it a struggle to tame your hair!</p>
		<p><a href="http://www.jakatasalon.co.uk/news.php#optiSmooth" target="_blank" style="color: #333;">Find out more here&gt;</a></p>
	   </td>
	</tr>
	
	
	<!--footer-->
	
	<tr>
	  <td style="background-color: #999;border-top:10px solid #FFFFFF;" valign="top">&nbsp;</td>
	  <td style="background-color:#999;border-top:10px solid #FFFFFF;" valign="top">
	  <span style="text-align:left;font-size:10px;color:#FFFFFF;font-family:verdana;">
		Jakata Hair &amp; Beauty Team <br />
	  <br />
	  <a href="mailto:adamcarter@jakatasalon.co.uk">Unsubscribe</a>: Just Return this e-mail with 'unsubscribe' as the subject <br />
	  <p>
		Jakata Hair &amp; Beauty<br>
		90/92 Bridge Street<br>
		Warrington<br>
		WA1 2RF
	  </p>
	
		<p>Our telephone:<br />
		01925 242960</p>
	  
	   <p> Copyright (C) <?php echo date('Y');?> Jakata Hair &amp; Beauty. All rights reserved.</p>
	   </span>
	   </td>
	   		</tr>
			 </table>
		</td>
	</tr>
	</table>
	</tr>

</table>
<!--end footer-->

</body>
</html>
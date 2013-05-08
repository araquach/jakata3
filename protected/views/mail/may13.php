<!DOCTYPE HTML>

<title>Jakata Newsletter - <?php echo date('F Y');?></title>

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
	<a href="http://www.jakatasalon.co.uk/news.php" style="text-decoration: none; font-size: .7em; color: #999; text-align:left;">Read these news stories at our web site</a>
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
	
	<tr> <!-- Intro -->
	  <td width="135" height="200" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;border-bottom: 1px dashed #999;"><p>
	  <img src="http://www.jakatasalon.co.uk/images/newspics/eccentric_heritage.jpg" alt="" width="135" height="190"></p></td>
	  <td width="440" valign="top" bgcolor="#FFFFFF" style="text-align: left;font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms; border-bottom: 1px dashed #999; padding-right: 40px;">
	  <h1 style="font-size:20px;font-weight:bold;color:#666;font-family:arial;line-height:110%;">
	  <strong>Welcome to our <?php echo date('F');?> Newsletter</strong></h1>
		<p>Hi <?php echo ucfirst($model->first_name);?>, </p>
		<p>Summer is almost here after what seemed like a never ending winter! During the winter months the Jakata team kept themselves occupied by putting together a new collection of images (see story below) which we'll be publishing soon.</p>
		<p>With holiday season almost here we all need to ensure our hair is in the best possible condition. We've introduced some great new product ranges and treatments to the salon recently, plus we've launched a special offer on conditioning tretments. Find out more below&hellip;</p>
		<P><strong>See you in the salon soon!</strong></P>
		<p><a href="http://www.jakatasalon.co.uk" target="_blank" style="color: #333;">www.jakatasalon.co.uk</a></p>
	   </td>
	</tr>
	
	<?php switch ($model->offer){
	
	case 1:
	echo
	 '<tr> 
	  <td width="135" height="200" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;border-bottom: 1px dashed #999;">
	  <p><img src="http://www.jakatasalon.co.uk/images/newspics/" alt="Special Offer" width="135" height="190"></p></td>
	  <td width="440" valign="top" bgcolor="#FFFFFF" style="text-align: left;font-size:14px;color:#000000;line-height:150%;font-family:trebuchet ms; border-bottom: 1px dashed #999; padding-right: 40px;">
	  <h1 style="font-size:24px;font-weight:bold;color:#666;font-family:arial;line-height:110%;">
	  <strong>Take advantage of this great offer</strong></h1>
	  <p style="font-size: 22px;"><strong><span style="font-size: 34px; line-height: 1.5em;">40% off</span><br>all services</strong></p>
	  <p>with these selected stylists:</p>
	  <table width="300" cellpadding="0" cellspacing="0">
	  	<tr>
	  		<td align="center"><a href="http://www.jakatasalon.co.uk/team#Maisie" target="_blank"><img src="http://www.jakatasalon.co.uk/images/newspics/maisie_link.jpg" alt="Maisie" width="70" height="70"></a></td>
	  		<td align="center"><a href="http://www.jakatasalon.co.uk/team#Shelly" target="_blank"><img src="http://www.jakatasalon.co.uk/images/newspics/shelly_link.jpg" alt="Shelly" width="70" height="70"></a></td>
	  		<td align="center"><a href="http://www.jakatasalon.co.uk/team#Mikala" target="_blank"><img src="http://www.jakatasalon.co.uk/images/newspics/mikala_link.jpg" alt="Mikala" width="70" height="70"></a></td>
	  	</tr>
	  	<tr>
	  		<td valign="top" align="center" height="0"><strong>Maisie</strong></td>
	  		<td valign="top" align="center" height="0"><strong>Shelly</strong></td>
	  		<td valign="top" align="center" height="0"><strong>Mikala</strong></td>
	  	</tr>
	  </table>
	  <p>(Click an image to read the stylists profile)</p>
	  <p>Offer exclusively for <strong>'.ucfirst($model->first_name).' '.ucfirst($model->last_name).'</strong> only,<br>Not Transferable, weekdays only </p>
	  <p><strong>Call 01925 242960 to book and mention the offer</strong></p>
	  <p style="font-size: 10px;">Please present this when paying (either a printout or show it on your smart phone)<br>Offer ends: June 28th 2013</p>
	 </td>
	</tr>';
	break;
	case 2:
	echo
	'<tr> 
	  <td width="135" height="200" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;border-bottom: 1px dashed #999;">
	  <p><img src="http://www.jakatasalon.co.uk/images/newspics/" alt="Special Offer" width="135" height="190"></p></td>
	  <td width="440" valign="top" bgcolor="#FFFFFF" style="text-align: left;font-size:14px;color:#000000;line-height:150%;font-family:trebuchet ms; border-bottom: 1px dashed #999; padding-right: 40px;">
	  <h1 style="font-size:24px;font-weight:bold;color:#666;font-family:arial;line-height:110%;">
	  <strong>Take advantage of this great offer</strong></h1>
	  <p style="font-size: 22px;"><strong><span style="font-size: 34px; line-height: 1.5em;">FREE Product</span><br>with every service</strong></p>
	  <p><strong>Have a Cut, Dry &amp; Style, receive 1 FREE product<br>
	  	Have a Colur &amp; Cut receive 2 FREE products</strong></p>
	  
	  <p>Offer exclusively for '.ucfirst($model->first_name).' '.ucfirst($model->last_name).' only.<br>Not Transferable, weekdays only </p>
	  <p><strong>Call 01925 242960 to book and mention the offer</strong></p>
	  <p style="font-size: 10px;">Please present this when paying (either a printout or show it on your smart phone)<br>
	  Retail size products only, excludes Hair Reborn. Offer ends: June 28th 2013</p>
	 </td>
	</tr>';
	break;
	}
	?>
	
	<tr> <!-- Shell Update -->
	  <td width="135" height="200" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;border-bottom: 1px dashed #999;"><p>
	  <img src="http://www.jakatasalon.co.uk/images/newspics/" alt="" width="135" height="190"></p></td>
	  <td width="440" valign="top" bgcolor="#FFFFFF" style="text-align: left;font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms; border-bottom: 1px dashed #999; padding-right: 40px;">
	  <h1 style="font-size:20px;font-weight:bold;color:#666;font-family:arial;line-height:110%;">
	  <strong>Michelle back behind the chair</strong></h1>
		<p>We're happy to say that Michelle Ash is now back in the salon. She returned a few months ago after a long period out of the salon due to a blood infection.</p>
		<p>She's been easing herself in slowly, but is now ready to get back into full swing. Michelle isn't doing full time hours so if you want to book in with her we recommend calling in advance.</p>
		<p><strong>Call 01925 242960 to book your appointment with Shell</strong></p>
	   </td>
	</tr>
	
	<tr> <!-- Mens Trends -->
	  <td width="135" height="200" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;border-bottom: 1px dashed #999;"><p>
	  <img src="http://www.jakatasalon.co.uk/images/newspics/men1.jpg" alt="Men's Styles" width="135" height="148"></p></td>
	  <td width="440" valign="top" bgcolor="#FFFFFF" style="text-align: left;font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms; border-bottom: 1px dashed #999; padding-right: 40px;">
	  <h1 style="font-size:20px;font-weight:bold;color:#666;font-family:arial;line-height:110%;">
	  <strong>Men's Summer Trends</strong></h1>
		<p>Here at Jakata we have a large male clientele with most stylist's being as proficient at men's hair as women's.</p>
		<p>There have been some really strong men's looks leaving the salon recently so I asked Jakata stylist <strong>Mikala Sutcliffe</strong> to give us the lowdown on up and coming men's styles&hellip;</p>
		<p><a href="http://www.jakatasalon.co.uk/news.php#MenTrends" target="_blank" style="color: #333;">Find out more here&gt;</a></p>
		<p>If your husband/boyfriend has never been to Jakata before then <a href="">Click Here to take advantage of a great introductory offer!</a>
	   </td>
	</tr>
	
	<tr> <!-- Collection News -->
	  <td width="135" height="200" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;border-bottom: 1px dashed #999;"><p>
	  <img src="http://www.jakatasalon.co.uk/images/newspics/artistic_team.jpg" alt="Jakata Artistic Team" width="130" height="94"></p></td>
	  <td width="440" valign="top" bgcolor="#FFFFFF" style="text-align: left;font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms; border-bottom: 1px dashed #999; padding-right: 40px;">
	  <h1 style="font-size:20px;font-weight:bold;color:#666;font-family:arial;line-height:110%;">
	  <strong>Artistic team produce new collection</strong></h1>
		<p>Over the last few months the Jakata artistic team have been working extremely hard coming up with and developing ideas for their latest collection.</p>
		<p>The brief was to produce a collection of images that reflect the fashion forward, cutting edge style that Jakata represents. The images will be used for salon branding and maybe be entered into competitions.</p>
		<p><a href="http://www.jakatasalon.co.uk/news.php#CollectionNews" target="_blank" style="color: #333;">Find out more here&gt;</a></p>
	   </td>
	</tr>
	
	<tr> <!-- Hair Reborn -->
	  <td width="135" height="200" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;border-bottom: 1px dashed #999;"><p>
	  <img src="http://www.jakatasalon.co.uk/images/newspics/tigi_reborn.jpg" alt="Hair Reborn" width="130" height="183"></p></td>
	  <td width="440" valign="top" bgcolor="#FFFFFF" style="text-align: left;font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms; border-bottom: 1px dashed #999; padding-right: 40px;">
	  <h1 style="font-size:20px;font-weight:bold;color:#666;font-family:arial;line-height:110%;">
	  <strong>Introducing Tigi Hair Reborn</strong></h1>
		<p>Hair Reborn is a new hair product range by Tigi that uses concentrated raw ingredients to replace proteins and restore your hair to a more youthful state.</p>
		<p>Designed by TIGI hairdressers, the collection of shampoos, conditioners, hairsprays and styling treatments have been created to restore hair to its natural state, using 'Hyper Distillation' technology to ensure the highest and most potent pharmaceutical grade products.</p>
		<p><a href="http://www.jakatasalon.co.uk/news.php#HairReborn" target="_blank" style="color: #333;">Find out about the product range here&gt;</a></p>
	   </td>
	</tr>
	
	<tr> <!-- Maisie Interview -->
	  <td width="135" height="200" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;border-bottom: 1px dashed #999;">
	  <p><img src="http://www.jakatasalon.co.uk/images/newspics/maisie.jpg" alt="Maisie Thompson" width="135" height="180"></p></td>
	  <td width="440" valign="top" bgcolor="#FFFFFF" style="text-align: left;font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms; border-bottom: 1px dashed #999; padding-right: 40px;">
	  <h1 style="font-size:20px;font-weight:bold;color:#666;font-family:arial;line-height:110%;">
	  <strong>Get to know the team: Meet Maisie</strong></h1>
	  <p>This month we caught up with Jakata's newest stylist Maisie Thompson who joined us last October.</p>
	  <p>We bombarded her with loads of questions about her role as a Jakata stylist.</p>
	  <p><a href="http://www.jakatasalon.co.uk/news.php#MaisieInterview" target="_blank" style="color: #333;">Read the full interview plus catch up with all the other Jakata Team interviews here &gt;</a></p>
	 </td>
	</tr>
	
	<tr> <!-- Treat Your Hair this summer -->
	  <td width="135" height="200" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;border-bottom: 1px dashed #999;"><p>
	  <img src="http://www.jakatasalon.co.uk/images/newspics/glam_chic.jpg" width="135" height="190"></p></td>
	  <td width="440" valign="top" bgcolor="#FFFFFF" style="text-align: left;font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms; border-bottom: 1px dashed #999; padding-right: 40px;">
	  <h1 style="font-size:20px;font-weight:bold;color:#666;font-family:arial;line-height:110%;">
	  <strong>Treat Your Hair this summer</strong></h1>
		<p>We all know your hair needs some extra TLC from time to time, excessive use of heat styling tools plus over colouring leads to tired, hard to style hair.</p>
		<p>To get the most from your locks we recommend an in-salon intensive treatment every month or two. the &pound;5 - &pound;10 cost is well worth the results - no more bad hair days for at least a month!</p>
		<p>Here at Jakata we have a diverse range of treatments suited to every hair type with the aim to solve a whole host of hair issues.
		Jakata senior stylist <strong>Maisie Thompson</strong> has compiled information on all the treatments we have to offer.</p>
		<p><a href="http://www.jakatasalon.co.uk/news.php#ConditioningTreatments" target="_blank" style="color: #333;">Find out more here&gt;</a></p>
	   </td>
	</tr>
	
	<!--footer-->
	
	<tr>
	  <td style="background-color: #999;border-top:10px solid #FFFFFF;" valign="top">&nbsp;</td>
	  <td style="background-color:#999;border-top:10px solid #FFFFFF;" valign="top">
	  <span style="text-align:left;font-size:10px;color:#FFFFFF;font-family:verdana;">
		Jakata Hair &amp; Beauty Team <br />
	  <br />
	  <a href="mailto:enquiries@jakatasalon.co.uk">Unsubscribe</a>: Just Return this e-mail with 'unsubscribe' as the subject <br />
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
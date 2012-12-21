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
	<a href="http://www.jakatasalon.co.uk/news.php" style="text-decoration: none; font-size: .7em; color: #999; text-align:left;">View this e-mail in your browser</a>
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
	  <img src="http://www.jakatasalon.co.uk/images/newspics/CoolHunter.jpg" alt="Cool Hunter" width="135" height="190"></p></td>
	  <td width="440" valign="top" bgcolor="#FFFFFF" style="text-align: left;font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms; border-bottom: 1px dashed #999; padding-right: 40px;">
	  <h1 style="font-size:20px;font-weight:bold;color:#666;font-family:arial;line-height:110%;">
	  <strong>Welcome to our <?php echo date('F');?> Newsletter</strong></h1>
		<p>Hi <?php echo ucfirst($model->first_name);?>, thank's for keeping up to date with the latest news from Jakata. We've had loads going on over the last few months, plus a few new additions to the team! With Autumn well and truly here and Christmas fast on it's way, we've compiled some seasonal info for you!</p>
		<p>Please take a look at our newly re-designed website to keep up to date with all the latest Jakata News</p>
		<P><strong>Thanks again, and see you in the salon soon!</strong></P>
		<p><a href="http://www.jakatasalon.co.uk" target="_blank" style="color: #333;">www.jakatasalon.co.uk</a></p>
	   </td>
	</tr>
	
	<tr> <!--Autumn Trends-->
	  <td width="135" height="200" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;border-bottom: 1px dashed #999;"><p>
	  <img src="http://www.jakatasalon.co.uk/images/newspics/colour_trend2.jpg" alt="Autumn Hair" width="135" height="190"></p></td>
	  <td width="440" valign="top" bgcolor="#FFFFFF" style="text-align: left;font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms; border-bottom: 1px dashed #999; padding-right: 40px;">
	  <h1 style="font-size:20px;font-weight:bold;color:#666;font-family:arial;line-height:110%;">
	  <strong>Autumn Colour Trends</strong></h1>
		<p>Autumn is setting in fast, and with the change of season comes a change of wardrobe! The key to ensuring your looking your best this season is to ensure your hair is working in sync with the rest of your style.</p>
		<p>Jakata hairdressers Natalie and Mikala have compiled their  insights into this seasons tips for choosing the right colour &hellip;</p>
		<p><a href="http://www.jakatasalon.co.uk/news.php#AutumnColour" target="_blank" style="color: #333;">Find out more here&gt;</a></p>
	   </td>
	</tr>
	
	<?php switch ($model->offer){
	
	case 1:
	echo
	 '<tr> 
	  <td width="135" height="200" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;border-bottom: 1px dashed #999;">
	  <p><img src="http://www.jakatasalon.co.uk/images/newspics/essential_look.jpg" alt="Special Offer" width="135" height="190"></p></td>
	  <td width="440" valign="top" bgcolor="#FFFFFF" style="text-align: left;font-size:14px;color:#000000;line-height:150%;font-family:trebuchet ms; border-bottom: 1px dashed #999; padding-right: 40px;">
	  <h1 style="font-size:24px;font-weight:bold;color:#666;font-family:arial;line-height:110%;">
	  <strong>Special Offer for you '.ucfirst($model->first_name).'</strong></h1>
	  <p>Colour & Cut Package for just £50 with any of our talented stylists!</p>
	  <p>Simply print this out to redeem your offer</p>
	  <p>Offer exclusively for '.ucfirst($model->first_name).' '.ucfirst($model->last_name).' only,<br>Not Transferable </p>
	  <p><strong></strong></p>
	 </td>
	</tr>';
	break;
	case 2:
	echo
	'<tr> 
	  <td width="135" height="200" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;border-bottom: 1px dashed #999;">
	  <p><img src="http://www.jakatasalon.co.uk/images/newspics/essential_look.jpg" alt="Special Offer" width="135" height="190"></p></td>
	  <td width="440" valign="top" bgcolor="#FFFFFF" style="text-align: left;font-size:14px;color:#000000;line-height:150%;font-family:trebuchet ms; border-bottom: 1px dashed #999; padding-right: 40px;">
	  <h1 style="font-size:24px;font-weight:bold;color:#666;font-family:arial;line-height:110%;">
	  <strong>Special Offer for you '.ucfirst($model->first_name).'</strong></h1>
	  <p>£40 Cut & Colour available until 30th November (add £10 for Senior Stylists)</p>
	  <p>Simply print this out to redeem your offer</p>
	  <p>Offer exclusively for '.ucfirst($model->first_name).' '.ucfirst($model->last_name).' only.<br>Not Transferable </p>
	  <p><strong></strong></p>
	 </td>
	</tr>';
	break;
	case 3:
	echo
	'<tr> 
	  <td width="135" height="200" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;border-bottom: 1px dashed #999;">
	  <p><img src="http://www.jakatasalon.co.uk/images/newspics/essential_look.jpg" alt="Special Offer" width="135" height="190"></p></td>
	  <td width="440" valign="top" bgcolor="#FFFFFF" style="text-align: left;font-size:14px;color:#000000;line-height:150%;font-family:trebuchet ms; border-bottom: 1px dashed #999; padding-right: 40px;">
	  <h1 style="font-size:24px;font-weight:bold;color:#666;font-family:arial;line-height:110%;">
	  <strong>Special Offer for you '.ucfirst($model->first_name).'</strong></h1>
	  <p>For a limited time have a Colour plus Cut, Dry & Style for just £30, or just a Cut, Dry & Style for £15 with Mikala. Don\'t miss out - offer ends 30th November, not with any other offer.</p>
	  <p>Simply print this out to redeem your offer</p>
	  <p>Offer exclusively for '.ucfirst($model->first_name).' '.ucfirst($model->last_name).' only.<br>Not Transferable </p>
	  <p><strong>Call 01925 242960 to book</strong></p>
	 </td>
	</tr>';
	break;
	case 5:
	echo
	'<tr> 
	  <td width="135" height="200" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;border-bottom: 1px dashed #999;">
	  <p><img src="http://www.jakatasalon.co.uk/images/newspics/men_pic.jpg" alt="Special Offer" width="135" height="190"></p></td>
	  <td width="440" valign="top" bgcolor="#FFFFFF" style="text-align: left;font-size:14px;color:#000000;line-height:150%;font-family:trebuchet ms; border-bottom: 1px dashed #999; padding-right: 40px;">
	  <h1 style="font-size:24px;font-weight:bold;color:#666;font-family:arial;line-height:110%;">
	  <strong>Special Offer for you '.ucfirst($model->first_name).'</strong></h1>
	  <p>FREE product worth over £10 with your next Cut & Style before the end of November!</p>
	  <p>Simply print this out to redeem your offer</p>
	  <p>Offer exclusively for '.ucfirst($model->first_name).' '.ucfirst($model->last_name).' only.<br>Not Transferable </p>
	  <p><strong>Call 01925 242960 to book</strong></p>
	 </td>
	</tr>';
	break;
	}
	?>
	
	<tr> <!--Maisie-->
	  <td width="135" height="200" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;border-bottom: 1px dashed #999;"><p>
	  <img src="http://www.jakatasalon.co.uk/images/newspics/maisie2.jpg" alt="Maisie Thompson" width="135" height="190"></p></td>
	  <td width="440" valign="top" bgcolor="#FFFFFF" style="text-align: left;font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms; border-bottom: 1px dashed #999; padding-right: 40px;">
	  <h1 style="font-size:20px;font-weight:bold;color:#666;font-family:arial;line-height:110%;">
	  <strong>New Senior Stylist Joins the team</strong></h1>
		<p>We recently welcomed <strong>Maisie Thompson</strong> to the team. We've been on the look out for experienced stylists to compliment our existing team, someone with a natural flair and passion.</p>
		<p>Maisie came along and fit the bill perfectly!</p>
		<p><a href="http://www.jakatasalon.co.uk/news.php#Maisie" target="_blank" style="color: #333;">Find out more here&gt;</a></p>
	   </td>
	</tr>
	
	<tr> <!--Michelle update-->
	  <td width="135" height="200" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;border-bottom: 1px dashed #999;"><p>
	  <img src="http://www.jakatasalon.co.uk/images/newspics/shell.jpg" alt="Michelle Ash" width="135" height="160"></p></td>
	  <td width="440" valign="top" bgcolor="#FFFFFF" style="text-align: left;font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms; border-bottom: 1px dashed #999; padding-right: 40px;">
	  <h1 style="font-size:20px;font-weight:bold;color:#666;font-family:arial;line-height:110%;">
	  <strong>Michelle Ash Update...</strong></h1>
		<p>We ran a story in our last newsletter on Jakata senior stylist Michelle who was seriously ill for a while.</p>
		<p>The great news is she has improved dramatically over the last few months and is now back home on the mend.</p>
		<p>We're still unsure as to when she'll be back in the salon, we'll hopefully have a better idea soon and will be sure to keep you posted...</p>
		<p></p>
	   </td>
	</tr>
	
	<tr> <!--Christmas Gift Packs-->
	  <td width="135" height="200" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;border-bottom: 1px dashed #999;">
	  <p><img src="http://www.jakatasalon.co.uk/images/newspics/tigi_christmas.jpg" alt="Christmas Gifts" width="135" height="106"></p></td>
	  <td width="440" valign="top" bgcolor="#FFFFFF" style="text-align: left;font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms; border-bottom: 1px dashed #999; padding-right: 40px;">
	  <h1 style="font-size:20px;font-weight:bold;color:#666;font-family:arial;line-height:110%;">
	  <strong>Christmas Has Come Early!</strong></h1>
		<p>It seems way too early to be talking about Christmas, but it is creeping up fast! The bookings are already flowing in, and we recently took arrival of this years Christmas Gift sets.</p>
		<p>This year we've got some great packs from our main suppliers, they're already flying off the shelves!</p>
		<p><a href="http://www.jakatasalon.co.uk/news.php#ChristmasGifts" target="_blank" style="color: #333;">Find out more here&gt;</a></p> 
	  </td>
	</tr>
	
	
	
	<tr> <!--Christmas Bookings-->
	  <td width="135" height="200" valign="top" bgcolor="#FFFFFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;border-bottom: 1px dashed #999;">
	  <p><img src="http://www.jakatasalon.co.uk/images/newspics/merry-christmas.jpg" alt="Christmas Bookings" width="135" height="160"></p></td>
	  <td width="440" valign="top" bgcolor="#FFFFFF" style="text-align: left;font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms; border-bottom: 1px dashed #999; padding-right: 40px;">
	  <h1 style="font-size:20px;font-weight:bold;color:#666;font-family:arial;line-height:110%;">
	  <strong>Christmas Bookings</strong></h1>
	  <p>We're anticipating a seriously busy Christmas period this year, we started taking bookings back in September! The salon is open longer hours throughout December, with Sunday/Monday opening in the two weeks before Christmas.</p>
	  <p>We highly recommend getting your appointment booked soon to avoid disappointment - some of the weekends are already nearly booked up!</p>
	  <p><strong>Call 01925 242960 to book yours now</strong></p>
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
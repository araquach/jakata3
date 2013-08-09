<!DOCTYPE HTML>

<title>Jakata Offer - <?php echo date('F Y');?></title>

<html>
<body>

<table width="100%" cellpadding="0" cellspacing="0">	

	<tr>
	<td valign="top" align="center">
	<table width="660" cellpadding="0" cellspacing="0" style="border: 1px solid #999;">
	<tr>
	<td>
	<table width="660" cellpadding="0" cellspacing="0">
	<table width="660" cellpadding="0" cellspacing="0">
	<tr>
	<a href="http://www.jakatasalon.co.uk" style="text-decoration: none; font-size: .7em; color: #999; text-align:left;">Visit our website</a>
	</td>
	</tr>

	
	<table width="660" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	
	<tr>
	<!--left column-->
	  <td width="330" valign="top" bgcolor="#FFF" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms">
		<!--inner offer text-->
		<table width="100%" cellpadding="20" cellspacing="0"> 
			<tr>
				<td style="color: #666666; font-size: 1.2em;">
					<img src="http://www.jakatasalon.co.uk/images/email/jakata_logo.gif" alt="Jakata" width="200" height="48"/>
					<h1 style="margin-top: .7em;"><strong>Special Offer</strong></h1>
					<p style="margin-bottom: 0; font-family: times; font-size: 1.2em; line-height: 1.3em;">Dear <?php echo ucfirst($model->first_name) ?>,<br>As a valued customer of the salon<br>
					for a limited time receive</p>
					<p style="font-size: 4em; margin-top: .6em; margin-bottom: .6em;"><strong>
					
					<?php switch ($model->offer){
					
					case 1:
					echo '20% off';
					break;
					case 2:
					echo '30% off';
					break;
					case 3:
					echo '40% off';
					break;
					}
					?>
					
					</strong></p>
					<p style="font-family: times; margin-top: .5em; font-size: 1.6em;">your next visit</p>
					<p>Offer for <strong><?php echo ucfirst($model->first_name).' '.ucfirst($model->last_name); ?></strong> only</p>
					<p>Just mention when booking &amp; present this when paying. <strong>Call 01925 242960</strong></p>
					<p style="font-size: .7em; margin-top: 1.8em;">Offer not transferable. Not with any other offer. <br>Valid until 20/09/13. <br>Excludes Saturdays.</p>
					<p style="font-family: times; "><em>We look forward to seeing you in the salon soon!</em></p>
				</td>
			</tr>
		
		</table> <!--end offer copy table-->
	  </td>
	<!--right column-->
	  <td width="330" valign="bottom" bgcolor="#FFFFFF">
	  	<img src="http://www.jakatasalon.co.uk/images/email/white_angles.jpg" alt="White Angles" width="330" height="488">
	  </td>
	</tr>
	</table>
					
	<!--footer-->
	<table width="660" cellpadding="0" cellspacing="0" bgcolor="#CDD6DD">
	<tr>
	  <td style="background-color:#CDD6DD;" valign="top">
	  <span style="text-align:left;font-size:10px;color:#FFFFFF;font-family:verdana; padding-left: 20px;">
	  <br />
	  <a href="mailto:enquiries@jakatasalon.co.uk" style="padding-left: 20px;">Unsubscribe:</a>
	  <p style="padding-left: 20px;">Just Return this e-mail with 'unsubscribe' as the subject</p>
	  <p style="padding-left: 20px;">
		Jakata Salon<br>
		90/92 Bridge Street<br>
		Warrington<br>
		WA1 2RF
	  </p>
	  <p style="padding-left: 20px;">01925 242960</p>
	  
	   <p style="padding-left: 20px;"> Copyright (C) <?php echo date('Y');?> Jakata Salon. All rights reserved.</p>
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
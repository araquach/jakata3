<!DOCTYPE HTML>

<title>Jakata Autumn Giveaway - <?php echo date('F');?> 2013</title>

<html>
<body>
<table width="100%" cellpadding="0" cellspacing="0" > <!--container-->
<tr>
<td valign="top" align="center">
	<table width="600" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="border: 3px solid #333"> <!--main-->
	<tr>
	<td valign="top" bgcolor="#FFF" style="color:#444; font-size: 1em; line-height: 1.3em;">
		<table width="300" cellpadding="30" cellspacing="0"> <!--column 1-->
		<tr>
		<td>
		<img src="http://jakatasalon.co.uk/images/email/jakata_logo.gif" alt="Jakata Salon" />
		<p>Hi <?php echo ucfirst($model->first_name)  ?>,</p>
		<p><strong>Thank's for entering our Jakata Autumn Giveaway!</strong> We appreciate you taking the time to fill out our questionnaire - your feedback was really helpful.</p>
		<p style="font-size: 1.2em; margin: 0px">As promised you have won a prize&hellip;</p>
		
		<?php echo $model->getPrizeText(); ?>
		<?php echo $model->getOfferText(); ?> 
		
		<p style="font-size: 1.5em;"><strong>Prize Code: <?php echo CHtml::encode($model->gift); ?></strong></p>
		<p style="font-size: .7em;">(please quote code when claiming your reward)</p>
		 		
		<p>Call into the salon to pick up your prize (our opening hours are here: <a href="http://www.jakatasalon.co.uk/details.php">www.jakatasalon.co.uk/details</a>)</p>
		<p>If you have any problems picking up your prize then just call 01925 242960 within our opening hours.</p>
		<p><em>We look forward to seeing you in the salon soon!</em></p>
		</td>
		</tr>
		</table> <!--column 1 table-->
	</td> <!--column 1-->
	<td valign="top" align="right">
		<table width="300" cellpadding="0" cellspacing="0"> <!--column 2-->
		<tr>
		<td>
		<img src="http://jakatasalon.co.uk/images/email/autumn_survey.jpg" width="300" height="600" alt="Autumn Giveaway" />
		</td>
		</tr>
		</table> <!--column 2 table-->
	</td> <!--column 2-->
	</tr>
	<tr>
	
		<td style="padding-left: 30px">
		</td>
		<td align="right" style="padding-right: 30px; font-family: Arial, Helvetica, Geneva, sans-serif; font-size: .8em">
		
		<img src="http://jakatasalon.co.uk/images/email/jakata_logo_small.gif" width="100" height="24" alt="Jakata" /><br>
		<a style="color: #29255c;"href="http://jakatasalon.co.uk">jakatasalon.co.uk</a>
		
		</td>
		
	</tr>
	
	</table> <!--end main table-->
</td>
</tr>
</table> <!--container table-->	

</body>
</html>
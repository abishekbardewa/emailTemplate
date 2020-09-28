<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link
	href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap"
	rel="stylesheet">
<title>Email Template</title>

<style>
.btn {
	cursor: pointer;
	padding: 15px 10px;
	background: #f79420;
	color: #ffff;
	font-size: 15px;
	font-weight: 700;
	border: solid #f79420 1px !important;
	border-radius: 5px;
	text-decoration: none;
}

.btn:hover {
	background-color: #ffffff !important;
	border: solid #f79420 1px !important;
	color: #f79420 !important;
}

tr, td {
	border: none;
	
}

small {
	color: #888;
	    vertical-align: initial;
}

body {
	font-family: 'Nunito', sans-serif;
}
</style>
</head>

<body style="background: #f0f1f5; margin: 0; padding: 0;">
	<table align="center" border="1" cellpadding="0" cellspacing="0"
		width="100%"
		style="border: 21px solid #f0f1f5; background: #ffffff; border-radius: 13px; border-collapse: collapse;">
		<tr style="border-bottom: 4px solid #ffe8d2;">
			<td style="padding: 20px;"><img
				src="<?php echo $logo?>"
				width="120px" style="display: block;"></td>
			<td align="right" style="padding: 20px; font-size: 14px"><small><?php echo $companyWebsite ?></small><br>
				<small><?php echo $companyEmail ?></small></td>
		</tr>

		
		
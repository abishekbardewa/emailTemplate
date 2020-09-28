<?php include 'template/header.php' ?>


<tr>
	<td align="left" colspan="2" style="padding: 40px 20px 0px 20px;">
        Hi <?php echo $fName ."<small> (".$email.")</small>"?>,<br>
		<p>You have requested to reset your Shopmarg login details. Please
			note that this will change your current password.</p>
		<p>
			To confirm this action, please use the following link:<br> <a
				href="<?php echo $forgotPasswordLink?>" target="_blank"><?php echo $forgotPasswordLink?></a>
		</p>

	</td>

</tr>

<tr>
	<td align="left" colspan="2" style="padding: 20px;">Happy Shopping,<br>
		Shopmarg Team
	</td>
</tr>


<?php include 'template/footer.php' ?>
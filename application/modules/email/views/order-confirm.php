
<?php include 'template/header.php' ?>

<tr align="center" style="padding: 20px">

	<td colspan="2" style="padding: 40px 20px 20px 20px;"><img src="<?php echo base_url('assets/confirm.png') ?>">
	<br>
	<h3>ORDER CONFIRMATION</h3><h3>Yay! Your Order Has Been Confirmed!</h3>
	</td>
</tr>
<tr>
	<td align="center" colspan="2"
		style="padding: 0px 20px 20px 20px; font-size: 20px;color:#f79420">
        Hi <?php echo $fName ."<small> (".$email.")</small>"?>,
      </td>

</tr>

<tr>
	<td align="center" colspan="2" style="padding: 0px 10px">Thanks
		for confirming the order! We're all set to begin! Please find the
		complete details of your purchase below.</td>
</tr>
<tr style="border-bottom: 1px solid #f0f1f5">
	<td align="right" style="padding: 40px 20px 10px 20px;"><strong>Product Details</strong></td>
	<td align="center" style="padding: 40px 20px 10px 20px;">Order Id: <strong> #5545</strong></td>
</tr>
<tr style="border-bottom: 1px solid #f0f1f5;">
	<td align="right" style="padding: 20px 20px 10px 20px;"><img
		src="<?php echo base_url('assets/book.jpg')?>" width="100px"></td>
	<td align="left" style="padding: 20px 20px 10px 20px;"><strong>Electrical
			Technology by Samar....</strong><br>
	<strong>Qty:</strong> 1<br> <strong>Price: </strong>Rs.189/-</td>
</tr>
<tr style="border-bottom: 1px solid #f0f1f5;">
	<td align="right" colspan="2" style="padding: 20px 100px 10px 20px;"><strong>Grand
			Total: </strong> Rs.189/-</td>
</tr>
<tr>
	<td align="center" colspan="2" style="padding: 40px"><a
		class="btn" href="<?php echo $companyWebsite?>" target="_blank" style="padding: 10px 20px;">View Order</a></td>
</tr>

<?php include 'template/footer.php' ?>

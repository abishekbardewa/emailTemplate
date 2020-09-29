<?php include 'template/header.php' ?>


<tr >
<td align="center" colspan="2" style="padding: 20px">
<img
		src="<?php echo base_url($img)?>">
</td>
</tr>

<tr>
<td align="center" colspan="2">
<h3><?php echo $msg?></h3>
<h4 style="color:#f79420">Hi <?php echo $fName ."<small> (".$email.")</small>"?>,</h4>
<h4><?php echo $txt?></h4>
</td>
</tr>
<tr>
	<td align="center" colspan="2" style="padding: 20px 0px 40px 0px"><a
		class="btn" href="<?php echo $companyWebsite?>" target="_blank" style="padding: 10px 20px;">View Order</a></td>
</tr>
<?php include 'template/footer.php' ?>
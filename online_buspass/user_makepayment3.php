<?php include 'userheader.php';
	$uid=$_SESSION['user_id'];
extract($_GET);

if (isset($_POST['payment'])) {
	extract($_GET);

	$q="insert into payment values(null,'$uid','$bid','booking',curdate(),'pending'";
	insert($q);
	alert('  Successfully');

}


 ?>
<section id="pageintro" class="hoc clear">
  <div>
<center>
	<h1>Make Payment</h1>
	<form method="post">
		<table class="table" style="width: 500px">
			<tr>
				<th>card Nunber</th>
				<td style="color: black"><input type="text" required="" class="form-control" name="card"></td>
			</tr>
			<tr>
				<th>Cvv</th>
				<td style="color: black"><input type="text" required="" class="form-control" name="cv"></td>
			</tr>
			<tr>
				<th>Expire date</th>
				<td style="color: black"><input type="date" required="" class="form-control" name="cv"></td>
			</tr>
			<tr>
				<th>Amount</th>
				<td style="color: black"><input type="text" required="" value="<?php echo $aid ?>" class="form-control" name="am"></td>
			</tr>
			<th align="center" colspan="2"><input type="submit" name="payment" value="submit" class="btn btn-success"></th>
		</table>
	</form>
</center>
</div></section>

<?php include 'footer.php' ?>
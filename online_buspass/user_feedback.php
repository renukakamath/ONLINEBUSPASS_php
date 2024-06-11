<?php include 'userheader.php';
$uid=$_SESSION['user_id'];
extract($_GET);
if (isset($_POST['feedback'])) {
	extract($_POST);

	$q="insert into feedback values(null,'$uid','$fee',curdate())";
	insert($q);
	alert('  Successfully');
  return redirect('user_feedback.php');
}




 ?>
  <section id="pageintro" class="hoc clear">
    <div>
<center>
	<h1>Send Feedbacks</h1>
	<form method="post">
		
		<table class="table" style="width: 500px">
			<tr>
				<th>Feedback</th>
				<td style="color: black"><input type="text" required="" class="form-control" name="fee" ></td>
			</tr>
		

			<tr>
				<th align="center" colspan="2"><input type="submit" name="feedback" value="submit" class="btn btn-success"></th>
			</tr>
		</table>
	</form>
</center>
</div></section></div>
<center>
	<h1>View reply</h1>
	<table class="table" style="width: 500px;color: black">
		<tr>
			<th>Slno</th>
			
			<th>Feedback</th>
			<th>Date Time</th>
		</tr>
		<?php 
		$q="select * from feedback inner join users using (user_id) where user_id='$uid'";
		$res=select($q);
		$slno=1;
		foreach ($res as $row) {
			?>
			<tr>
				<td><?php echo $slno++ ?></td>
				<td><?php echo $row['feedback_desc'] ?></td>
				<td><?php echo $row['date_time'] ?></td>

			</tr>
		<?php 
	}

		 ?>
	</table>
</center>
<?php include 'footer.php' ?>
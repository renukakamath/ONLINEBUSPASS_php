<?php include 'userheader.php';
extract($_GET);
if (isset($_POST['cancel'])) {
	extract($_POST);
	$q="insert into cancellation values(null,'$bid','$re',curdate(),'canceled')";
	insert($q);
	alert('  Successfully');
  // return redirect('user_cancelticket.php');
}




 ?>
 <section id="pageintro" class="hoc clear">
    <div>
    

	<center>
  <h1>Cancellation</h1>
		<form method="post">
			<table class="table" style="width: 500px">
				
				<tr>
					<th>Reason For Cancel</th>
					<td style="color: black"><input type="text" required="" class="form-control" name="re"></td>
				</tr>
				
				<tr>
					<th align="center" colspan="2"><input type="submit" name="cancel" value="submit" class="btn btn-success"></th>
				</tr>
			</table>
		</form>
	</center>
	</div></section></div></div>
	
	<center>
		<h1>View Cancel Ticket</h1>
		<table class="table" style="width: 500px;color: black">
			<tr>
				<th>Sino</th>
				<th>Reason For Cancellaion</th>
				<th>Date & Time</th>
				<th>Status</th>
			</tr>
			<?php 

            $q="select * from cancellation inner join booking_child using(booking_child_id) where booking_child_id='$bid'";
            $res=select($q);
            $sino=1;
            foreach ($res as $row) {
            	?>
            	<tr>
            		<td><?php echo $sino++; ?></td>
            		<td><?php echo $row['reason_for_cancellation'] ?></td>
            		<td><?php echo $row['cancel_datetime'] ?></td>
            		<td><?php echo $row['cancellation_status'] ?></td>
            	</tr>
           <?php 
            }





			 ?>
		</table>
	</center>
<?php include 'footer.php' ?>
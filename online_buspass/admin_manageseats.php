<?php include 'adminheader.php' ;
extract($_GET);
if (isset($_POST['mseat'])) {
	extract($_POST);
	$q1="select * from seats where seat_number='$seat' and bus_id='$bid'";
	$res=select($q1);
 if (sizeof($res)>0) {
 	alert('already exist');
 }else{
	echo$q="insert into seats values(null,'$bid','$seat','pending')";
	insert($q);
	alert('  Successfully');
  return redirect("admin_manageseats.php?bid=$bid");
}
}
if (isset($_GET['did'])) {
	extract($_GET);
	$q="delete from seats where seat_id='$did'";
	delete($q);
	alert('  Successfully');
  return redirect("admin_manageseats.php?bid=$bid");
}
if (isset($_GET['uid'])) {
	extract($_GET);
	$q="select * from seats where seat_id='$uid'";
	$res=select($q);
}
if (isset($_POST['update'])) {
	extract($_POST);
    $q="update seats set seat_number='$seat' where seat_id='$uid'";
	update($q);
	alert('  Successfully');
  return redirect("admin_manageseats.php?bid=$bid");

}



?>
 <section id="pageintro" class="hoc clear">
    <div>
<center>
	<h1>Manage Seats</h1>
	<form  method="post">
		<?php if (isset($_GET['uid'])) { ?>
		<table class="table" style="width: 500px">
			<tr>
				<th>Seat Number</th>
				<td style="color: black"><input type="text" class="form-control" required="" name="seat" value="<?php echo $res[0]['seat_number'] ?>"></td>
			</tr>

			<tr>
				<th align="center" colspan="2"><input type="submit" name="update" value="submit" class="btn btn-success"></th>
			</tr>
		</table>
	<?php }else{ ?>
		<table class="table" style="width: 500px">
			<tr>
				<th>Seat Number</th>
				<td style="color: black"><input type="text" class="form-control" required="" name="seat"></td>
			</tr>
			<tr>
				<th align="center" colspan="2"><input type="submit" name="mseat" value="submit" class="btn btn-success"></th>
			</tr>
		</table>
	<?php } ?>
	</form>
</center>
</div></section></div>
<center>
	<h1>View Seats</h1>
	<table class="table" style="width: 500px;color: black">
		<tr>
			<th>Si NO:</th>
			<th>Bus</th>
			<th>Seats</th>
			<th>Seat Status</th>
		</tr>
		<?php 
         $q="select * from seats inner join bus using(bus_id) where bus_id='$bid'";
         $res=select($q);
         $sino=1;
         foreach ($res as $row) {
         	?>
         	<tr>
         		<td><?php echo $sino++; ?></td>
         		<td><?php echo $row['bus_registration'] ?></td>
         		<td><?php echo $row['seat_number'] ?></td>
         		<td><?php echo $row['seat_status'] ?></td>
         		<td><a class="btn btn-success" href="?uid=<?php echo $row['seat_id'] ?>&bid=<?php echo $row['bus_id'] ?>">update</a></td>
         		<td><a class="btn btn-success" href="?did=<?php echo $row['seat_id'] ?>&bid=<?php echo $row['bus_id'] ?>">delete</a></td>
         	</tr>
         <?php
     }



		 ?>
	</table>
</center>
<?php include 'footer.php' ?>
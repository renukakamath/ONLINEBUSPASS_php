<?php include 'adminheader.php' ;

if (isset($_POST['place'])) {
	extract($_POST);
	$r="select * from place where place_name='$pla'";
	$re=select($r);
	if (sizeof($re)>0) {
		alert('already exist');
	}else{
	$q="insert into place values(null,'$pla')";
	insert($q);
	alert('  Successfully');
  return redirect('admin_manageplace.php');
}
}
if (isset($_GET['did'])) {
	extract($_GET);
	$q="delete from place where place_id='$did'";
	delete($q);
	alert('  Successfully');
  return redirect('admin_manageplace.php');
}
if (isset($_GET['uid'])) {
	extract($_GET);
	$q="select * from place where place_id='$uid'";
	$res=select($q);
}
if (isset($_POST['update'])) {
	extract($_POST);
	$q="update place set place_name='$pla' where place_id='$uid'";
	update($q);
	alert('  Successfully');
  return redirect('admin_manageplace.php');

}



?>
 <section id="pageintro" class="hoc clear">
    <div> 
<center>
	<h1>Manage Place</h1>
	<form  method="post">
		<?php if (isset($_GET['uid'])) { ?>
		<table class="table" style="width: 500px">
			<tr>
				<th>Place Name</th>
				<td style="color: black"><input type="text" name="pla" required="" class="form-control" value="<?php echo $res[0]['place_name'] ?>"></td>
			</tr>
			<tr>
				<th align="center"colspan="2"><input type="submit" name="update" value="place" class="btn btn-success"></th>
			</tr>
		</table>
	<?php }else{ ?>
		<table class="table" style="width: 500px">
			<tr>
				<th>Place Name</th>
				<td style="color: black"><input type="text" required="" class="form-control" name="pla"></td>
			</tr>
			<tr>
				<th align="center" colspan="2"><input type="submit" name="place" value="submit" class="btn btn-success"></th>
			</tr>
		</table>
	<?php } ?>
	</form>
</center>
</div></section></div>
<br><br><br>
<center>
	<h1>View Place</h1>
	<table class="table" style="width: 500px;color: black">
		<tr>
			<th>Sl NO:</th>
			<th>Place Name</th>
		</tr>
		<?php 
         $q="select * from place";
         $res=select($q);
         $slno=1;
         foreach ($res as $row) {
         	?>
         	<tr>
         		<td><?php echo $slno++; ?></td>
         		<td><?php echo $row['place_name'] ?></td>
         		<td><a class="btn btn-success" href="?uid=<?php echo $row['place_id'] ?>">update</a></td>
         		<td><a class="btn btn-success" href="?did=<?php echo $row['place_id'] ?>">delete</a></td>
         	</tr>
         <?php
     }



		 ?>
	</table>
</center>
<?php include 'footer.php' ?>
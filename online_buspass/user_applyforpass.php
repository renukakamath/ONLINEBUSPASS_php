<?php include 'userheader.php' ;
$uid=$_SESSION['user_id'];
extract($_GET);

if (isset($_POST['passreq'])) {
	extract($_POST);

	echo$q="insert into pass_request values(null,'$uid','$fare',now(),'pending')";
	insert($q);
	alert(' Successfully');
  return redirect('user_applyforpass.php');

}





?>
 <section id="pageintro" class="hoc clear">
    <div>
<center>
	<h1>Apply For Pass</h1>
	<form method="post">
		<table class="table" style="width: 500px">
			<tr>
				<th>Fares</th>
				<td style="color: black">
					<select name="fare" class="form-control" required="">
						<option>select</option>
						<?php 

                       $q="select * from fares";
                       $res=select($q);
                       foreach ($res as $row) {?>
                       	<option value="<?php echo $row['fare_id'] ?>"><?php echo $row['pass_amount'] ?></option>
                      <?php }


						 ?>
					</select>
				</td>
			</tr>
			
			<tr>
				<th align="center" colspan="2"><input type="submit" name="passreq" value="submit" class="btn btn-success"></th>
			</tr>
		</table>
	</form>
</center>
</div></section></div>
<center>
	<h1>View Pass Request</h1>
	<table class="table" style="width: 500px;color: black">
		<tr>
			<th>Sl NO:</th>
			<th>Users</th>
			<th>Fare</th>
			<th>Date & Time</th>
		    <th>Status</th>
         
			
		</tr>
		<?php 
         $q="select * from pass_request inner join users using(user_id) inner join fares using(fare_id) where user_id='$uid' ";
         $res=select($q);
         $sino=1;
         foreach ($res as $row) {
         	?>
         	<tr>
         		<td><?php echo $sino++; ?></td>
         		<td><?php echo $row['first_name'] ?></td>
         		<td><?php echo $row['pass_amount'] ?></td>
               <td><?php echo $row['date_time'] ?></td>
              <?php 

               if ($row['status']=="accept") {
               	?>
                <td><a class="btn btn-success" href="user_payment1.php?rid=<?php echo $row['request_id'] ?>&amo=<?php echo $row['amount_per_seat'] ?>">Make Payment</a></td>
             <?php 
               }else{

               ?>
            
         		 <td><?php echo $row['status'] ?></td>
         		
         	</tr>
         <?php
     }
}


		 ?>
	</table>
</center>
<?php include 'footer.php' ?>
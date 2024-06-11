<?php include 'userheader.php';
	$uid=$_SESSION['user_id'];
	extract($_POST);
if (isset($_POST['booking'])) {
	extract($_POST);
     $q="select * from booking_child where seat_id=$seat";
     $res=select($q);
     if (sizeof($res)>0) {
     	alert('already booked seat');
     }else{


	$q1="insert into booking_child values(null,'$seat','$fplace','$tplace','$amount')";
	insert($q1);
	alert('successfully');

}
}
 ?>
 

</script> 
 <section id="pageintro" class="hoc clear">
    <div>

<center>
	<h1>Booking</h1>
	<form method="post">
		<table>
			
			
			<tr>
				<th>From Place</th>
				<td style="color: black"><select name="fplace"  required="" class="form-control">
					<option>Select</option>
					<?php 

                    $q="select * from place";
                    $res=select($q);
                    foreach ($res as $row) {
                    	?>
                    <option value="<?php echo $row['place_id'] ?>"><?php echo $row['place_name'] ?></option>
                 <?php  
                  }


					 ?>
				</select></td>
			</tr>
			<tr>
				<th>To Place</th>
				<td style="color: black"><select name="tplace"  required="" class="form-control">
					<option>Select</option>
					<?php 

                   $q="select * from place";
                   $res=select($q);
                   foreach ($res as $row) {
                   	?>
                  <option value="<?php echo $row['place_id'] ?>"><?php echo $row['place_name'] ?></option>
                 <?php 
                  }

					 ?>
				</select></td>
			</tr>
		<tr>
			<th>amount</th>
			<td style="color: black"><input type="text"  id="p_amount" value="<?php echo $aid ?>"   readonly name="amount" class="form-control"></td>
		</tr>
			<tr>
				<th>Number Of Person</th>
				<td style="color: black"><input type="text" name="number" value="1" class="form-control"></td>
			</tr>
	    
		
			<tr>
				<td align="center" colspan="2"><input type="submit" class="btn btn-success" name="booking" value="submit"></td>
			</tr>
		</table>
	</form>
</center>
</div>
</section>
<center>
	<h1>View Bookings</h1>
	<table class="table" style="width: 500px;color: black">
		<tr>
			<th>Slno</th>
			
			<th>Seat No</th>
			<th>From Place</th>
			<th>To Place</th>
			<th>Amount</th>
			<th>Status</th>
		</tr>
		<?php 



          $q="SELECT *,p1.`place_name` AS fp,p2.`place_name` AS tp FROM `booking_child` b,`place` p1,place p2,`seats` s  WHERE b.`from_place_id`=p1.`place_id` AND b.`to_place_id`=p2.`place_id` AND s.`seat_id`=b.`seat_id`";
          $res=select($q);
          $slno=1;
          foreach ($res as $row) {
          	?>
         <tr>
         	<td><?php echo $slno++; ?></td>
         
         	<td><?php echo $row['seat_number'] ?></td>
         	<td><?php echo $row['fp'] ?></td>
         	<td><?php echo $row['tp'] ?></td>
         	<td><?php echo $row['amount'] ?></td>
         	<?php 
           if ($row['status']="accept") {?>
          <td><a class="btn btn-success" href="user_makepayment3.php?bid=<?php echo $row['booking_child_id'] ?>&aid=<?php echo $row['amount'] ?>">Make Payment</a></td>
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
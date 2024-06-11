<?php include 'adminheader.php'
 ?>
<section id="pageintro" class="hoc clear">
    <div>
        </div></section></div>
<center>

	<h1>View My Bookings</h1>
 
	<table class="table" style="width: 500px;color: black">
		<tr>
			<th>Slno</th>
		<th>From Place</th>
      <th>To Place</th>
			<th>Seat No</th>
	 	<th>amount</th>
		</tr>
		<?php 

           $q="SELECT *,p1.`place_name` AS fp,p2.`place_name` AS tp FROM `booking_child` b,`place` p1,place p2,`seats` s  WHERE b.`from_place_id`=p1.`place_id` AND b.`to_place_id`=p2.`place_id` AND s.`seat_id`=b.`seat_id`";

                
                $res=select($q);
                $_SESSION['res']=$res;
                $r=$_SESSION['res'];
          $slno=1;
          foreach ($res as $row) {
          	?>
         <tr>
         	<td><?php echo $slno++; ?></td>
       <td><?php echo $row['fp'] ?></td>
          <td><?php echo $row['tp'] ?></td>
         	<td><?php echo $row['seat_number'] ?></td>
       
         	<td><?php echo $row['amount'] ?></td>

         
         
         </tr>
      <?php 
         }



		 ?>
		
	</table>
</center>
<?php include 'footer.php' ?>

<?php include 'userheader.php' ?>
<section id="pageintro" class="hoc clear">
    <div>
        </div></section></div>
<center>
	<h1>View Seats</h1>
	<table class="table" style="width: 500px;color: black">
		<tr>
			<th>Sl NO:</th>
			<th>Bus</th>
			<th>Seats</th>
			<th>Seat Status</th>
		</tr>
		<?php 
         $q="SELECT * FROM seats INNER JOIN bus USING(bus_id) INNER JOIN route USING (route_id) INNER JOIN stops USING(route_id) INNER JOIN fares ON stops.stop_id=fares.`starting_stop_id` where bus_id='$bid' GROUP BY seat_id";
         $res=select($q);
         $sino=1;
         foreach ($res as $row) {
         	?>
         	<tr>
         		<td><?php echo $sino++; ?></td>
         		<td><?php echo $row['bus_registration'] ?></td>
         		<td><?php echo $row['seat_number'] ?></td>
         		
                <?php 

                if ($row['seat_status']=="accept") {
                    ?>
                 <td><a class="btn btn-success" href="user_bookingchild.php?bid=<?php echo $row['bus_id'] ?>&seat=<?php echo $row['seat_id'] ?>&aid=<?php echo $row['amount_per_seat'] ?>">Booking Seat</a></td>
      
              <?php 
               }else{

                 ?>
               <td><?php echo $row['seat_status'] ?></td>
         	</tr>
         <?php
     }

}

		 ?>
	</table>
</center>
<?php include 'footer.php' ?>
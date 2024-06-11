<?php include 'connection.php' ;
extract($_GET);

?>

<script> 
		function printDiv() { 
			var divContents = document.getElementById("div_print").innerHTML; 
			var a = window.open('', '', 'height=500, width=500'); 
			a.document.write(divContents); 
			a.document.close(); 
			a.print(); 
		} 
	</script> 
<body onload="printDiv()">
	<div id="div_print" >
<center>
	
<h1 style="padding-top: 30px;font-size: 60px">Ticket</h1>

<table class="table" style="width: 1000px;color: black;font-style: italic;font-family: monospace;font-size: 22px" border="5">
	
		<tr>
			<th>Slno</th>
			
			<th>Seat No</th>
			<th>From Place</th>
			<th>To Place</th>
			<th>Amount</th>
			
		</tr>
		<?php 

          $q="SELECT *,p1.`place_name` AS fp,p2.`place_name` AS tp FROM `booking_child` b,`place` p1,place p2,`seats` s  WHERE b.`from_place_id`=p1.`place_id` AND b.`to_place_id`=p2.`place_id` AND s.`seat_id`=b.`seat_id` and booking_child_id='$bid' ";
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
         	
         
         
         </tr>
      <?php 
         }



		 ?>
		
	</table>
</center>
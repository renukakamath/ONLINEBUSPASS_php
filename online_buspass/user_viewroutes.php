<?php include 'userheader.php' ?>
<section id="pageintro" class="hoc clear">
    <div>
        </div></section></div>
<center>
	<h1>View Routes</h1>
	<table class="table" style="width: 500px;color: black">
		<tr>
			<th>Sl NO:</th>
			<th>Starting Place</th>
			<th>Ending Place</th>
			<th>Route Name</th>
			
		</tr>
		<?php 
         $q="SELECT *,p1.place_name as sp,p2.place_name as ep FROM route r,`place` p1,place p2 WHERE r.`starting_place_id`=p1.`place_id` AND r.`ending_place_id`=p2.`place_id` ";
         $res=select($q);
         $sino=1;
         foreach ($res as $row) {
         	?>
         	<tr>
         		<td><?php echo $sino++; ?></td>
         		<td><?php echo $row['sp'] ?></td>
         		<td><?php echo $row['ep'] ?></td>
         		<td><?php echo $row['route_name'] ?></td>
          </tr>
         <?php
     }



		 ?>
	</table>
</center>
<?php include 'footer.php' ?>
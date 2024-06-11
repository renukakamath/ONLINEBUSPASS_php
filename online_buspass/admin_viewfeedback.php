<?php include 'adminheader.php' ?>
 <section id="pageintro" class="hoc clear">
    <div>
    </div></section></div>
<center>
	<h1>View Feedbacks </h1>
	<table class="table" style="width: 500px;color: black">
		<tr>
			<th>Sl NO:</th>
			<th>Users</th>
			<th>Feedbacks</th>
			<th>Date & Time</th>
		   
         
			
		</tr>
		<?php 
         $q="select * from feedback inner join users using (user_id)";
         $res=select($q);
         $sino=1;
         foreach ($res as $row) {
         	?>
         	<tr>
         		<td><?php echo $sino++; ?></td>
         		<td><?php echo $row['first_name'] ?></td>
         		<td><?php echo $row['feedback_desc'] ?></td>
               <td><?php echo $row['date_time'] ?></td>
               
             
         		
         		
         	</tr>
         <?php
     }



		 ?>
	</table>
</center>

<?php include 'footer.php' ?>
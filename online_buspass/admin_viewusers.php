<?php include 'adminheader.php' ?>
<section id="pageintro" class="hoc clear">
    <div>
    </div></section></div>
<center>
	<h1>View Users</h1>
	<table class="table" style="width: 500px;color: black">
		<tr>
			<th>Sl NO:</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Gender</th>
		    <th>Date Of Birth </th>
          <th>Address</th>
          <th>Place</th>
          <th>Pincode </th>
          <th>Phone</th>
          <th>Email</th>
			
		</tr>
		<?php 
         $q="select * from users ";
         $res=select($q);
         $sino=1;
         foreach ($res as $row) {
         	?>
         	<tr>
         		<td><?php echo $sino++; ?></td>
         		<td><?php echo $row['first_name'] ?></td>
         		<td><?php echo $row['last_name'] ?></td>
               <td><?php echo $row['gender'] ?></td>
               <td><?php echo $row['dob'] ?></td>
               <td><?php echo $row['address'] ?></td>
               <td><?php echo $row['place'] ?></td>
               <td><?php echo $row['pincode'] ?></td>
         		<td><?php echo $row['phone'] ?></td>
         		<td><?php echo $row['email'] ?></td>

         		
         		
         	</tr>
         <?php
     }



		 ?>
	</table>
</center>
<?php include 'footer.php' ?>
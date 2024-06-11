<?php include 'adminheader.php';

if (isset($_GET['aid'])) {
  extract($_GET);
 
  $q="update pass_request set status='accept' where request_id='$aid'";
  update($q);
}
if (isset($_GET['rid'])) {
  extract($_GET);
  $q1="update pass_request set status='reject' where request_id='$rid'";
  update($q1);
  }






 ?>
 <section id="pageintro" class="hoc clear">
    <div>
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
         $q="select * from pass_request inner join users using(user_id) inner join fares using(fare_id) ";
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
                  if ($row['status']=="pending") {
                    ?>
                     <td ><a class="btn btn-success" href="?aid=<?php echo $row['request_id'] ?>">accept</a></td>
                     <td><a class="btn btn-success" href="?rid=<?php echo $row['request_id'] ?>">reject</a></td>
                 <?php
                   }
                 if ($row['status']=="accept") {
                  ?>
                   <td><a class="btn btn-success" href="admin_addpasses.php?rid=<?php echo $row['request_id'] ?>">Add Issue date</a></td>
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
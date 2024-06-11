<?php include 'adminheader.php' ;

if (isset($_GET['aid'])) {
  extract($_GET);
  $q="update renewal_request set status='accept' where renewal_id='$aid'";
  update($q);
}
if (isset($_GET['rid'])) {
  extract($_GET);
  $q1="update renewal_request set status='booked' where renewal_id='$rid'";
  update($q1);
  }





?>
<section id="pageintro" class="hoc clear">
    <div>
    </div></section></div>
<center>
	<h1>View Renewal Pass </h1>
	<table class="table" style="width: 500px;color: black">
		<tr>
			<th>Sl NO:</th>
			<th>Issue Date</th>
			<th>Expiring On</th>
			<th>Date & Time</th>
		    <th>Status</th>
         
			
		</tr>
		<?php 
         $q="select * from renewal_request inner join passes using (pass_id)";
         $res=select($q);
         $sino=1;
         foreach ($res as $row) {
         	?>
         	<tr>
         		<td><?php echo $sino++; ?></td>
         		<td><?php echo $row['issue_date'] ?></td>
         		<td><?php echo $row['expiring_on'] ?></td>
               <td><?php echo $row['date_time'] ?></td>
               <?php 
   
                   if ($row['status']=="pending") {
                     ?>
                     <td><a class="btn btn-success" href="?aid=<?php echo $row['renewal_id'] ?>">accept</a></td>
                     <td><a class="btn btn-success" href="?rid=<?php echo $row['renewal_id'] ?>">reject</a></td>
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
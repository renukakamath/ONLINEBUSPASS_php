<?php include 'userheader.php';
$uid=$_SESSION['user_id'];
extract($_GET);

if (isset($_POST['renreq'])) {
	extract($_POST);
	$q="insert into renewal_request values(null,'$pass','$ex',now(),'pending')";
	insert($q);
	alert('  Successfully');
  return redirect('user_renewpass.php');
}




 ?>
 <section id="pageintro" class="hoc clear">
    <div>

	<h1>View Renewal Pass </h1>
	<table class="table" style="width: 500px;color: black">
		<tr>
			<th>Sl NO:</th>
			<th>Issue Date</th>
			<th>Expiring date</th>
			
			<th>status</th>
		    
         
			
		</tr>
		<?php 
         $q="select * from renewal_request inner join passes using (pass_id) INNER JOIN  pass_request  USING (request_id) INNER JOIN fares USING (fare_id) where user_id='$uid'";
         $res=select($q);
         $sino=1;
         foreach ($res as $row) {
         	?>
         	<tr>
         		<td><?php echo $sino++; ?></td>
         		<td><?php echo $row['issue_date'] ?></td>
         		<td><?php echo $row['expiring_on'] ?></td>
              
               

                  <?php 

                     if ($row['status']=="accept") {
                     
                  

                       $month=$row['expiring_on'];
                       $date_now=date("Y-m-d");
                     if ($month<$date_now) {
                     	?>
                     <td><a class="btn btn-success" href="user_payment2.php?rid=<?php echo $row['request_id'] ?>&amo=<?php echo $row['amount_per_seat'] ?>">payment</a></td>


                    <?php
                      }
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
<?php include 'userheader.php' ?>
 <section id="pageintro" class="hoc clear">
    <div>

<center>
<h1>Search Bus</h1>
<form method="post">
	<table class="table" style="width: 500px;color: white">
		<tr>
			<th>Route</th>
			<td style="color: black"><input type="text"  required="" name="fn" class="form-control"></td>
		</tr>
		<tr ><th align="center" colspan="2"><input type="submit" name="bus" value="submit" class="btn btn-success"></th></tr>
	</table>
</form>
</center></div></section></div>
<center>
    <br><br>
<h1>View Bus</h1>
<form method="post">
	<table class="table" style="width: 500px;color: black">
		  <tr>
            <th>Sl No:</th>
            <th>route</th>
            <th>Bus Registration</th>
            <th>Driver Name</th>
            <th>Phone No</th>
            
            <th>Model</th>
        </tr>
		<?php 
    if (isset($_POST['bus'])) {
        extract($_POST);


  $q="SELECT * FROM bus inner join route using(route_id) WHERE route_name  LIKE '$fn%'";
}
    else{
    $q="select * from bus inner join route using(route_id)";}
    $res=select($q);
     $sino=1;
    foreach ($res as $row) {
    	?>
    	<tr>
                <td><?php echo $sino++; ?></td>
                <td><?php echo $row['route_name'] ?></td>
                <td><?php echo $row['bus_registration'] ?></td>
                <td><?php echo $row['driver_name'] ?></td>
                <td><?php echo $row['phone_no'] ?></td>
                
                <td><?php echo $row['model'] ?></td>
               <td><a class="btn btn-success" href="user_viewseats.php?bid=<?php echo $row['bus_id'] ?>">View Seats</a></td>
            </tr>
    	
   <?php
}


		 ?>
	</table>
</form>
<?php include 'footer.php' ?>
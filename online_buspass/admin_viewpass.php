<?php include 'adminheader.php' ?>
<section id="pageintro" class="hoc clear">
    <div>
    </div></section></div>
<center>
	<h1>View Pass </h1>
	<table class="table" style="width: 500px;color: black">
		<tr>
			<th>Sl NO:</th>
			
			
			<th>Issue Date</th>
		    <th>Valid Till</th>
         
			
		</tr>
		<?php 
         $q="select * from passes ";
         $res=select($q);
         $sino=1;
         foreach ($res as $row) {
         	?>
         	<tr>
         		<td><?php echo $sino++; ?></td>
         		
         		<td><?php echo $row['issue_date'] ?></td>
              
               <td><?php echo $row['valid_till'] ?></td>
             
         		
         		
         	</tr>
         <?php
     }



		 ?>
	</table>
</center>
<?php include 'footer.php' ?>
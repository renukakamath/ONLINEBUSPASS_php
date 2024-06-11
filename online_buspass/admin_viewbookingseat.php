<?php include 'adminheader.php';

if (isset($_GET['uid'])) {
  extract($_GET);
 $q="update seats set seat_status='accept' where seat_id='$uid'";
  update($q);
}
if (isset($_GET['did'])) {
 extract($_GET);
 $q="update seats set seat_status='reject' where seat_id='$did'";
 update($q);
}




 ?>


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
         $q="select * from seats inner join bus using(bus_id)";
         $res=select($q);
         $sino=1;
         foreach ($res as $row) {
          ?>
          <tr>
            <td><?php echo $sino++; ?></td>
            <td><?php echo $row['bus_registration'] ?></td>
            <td><?php echo $row['seat_number'] ?></td>
            
                <?php 

                if ($row['seat_status']=="pending") {
                    ?>
               <td><a class="btn btn-success" href="?uid=<?php echo $row['seat_id'] ?>">Accept</a></td>
               <td><a class="btn btn-success" href="?did=<?php echo $row['seat_id'] ?>">Reject</a></td>
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
<?php include 'publicheader.php' ;

if (isset($_POST['registration'])) {
	extract($_POST);
	$r="select * from registration where username='$uname' and password='$pwd'";
	$re=select($r);
     if (sizeof($re)>0) {
     	alert('already exist');
     }else{
	echo $q1="insert into login values(null,'$uname','$pwd','Users')";
	$id=insert($q1);
	echo$q2="insert into users values(null,'$id','$fname','$lname','$gender','$date','$address','$place','$pincode','$number','$email')";
	insert($q2);
  alert('  Successfully');
  return redirect('user_registration.php');

}

}

?>
 <section id="pageintro" class="hoc clear">
    <div> 
<center>
<h1>User Registration</h1>
	<form method="post">
		<table class="table" style="width: 400px" >
			<tr>
				<th>First Name</th>
				<td style="color: black"><input type="text"  required="" class="form-control" name="fname"></td>
			</tr>
			<tr>
				<th>Last Name</th>
				<td style="color: black"><input type="text" required="" class="form-control" name="lname"></td>
			</tr>
			<tr>
				<th>Gender</th>
				<td style="color: black"><input type="radio" required="" name="gender" class="form-control" value="male">Male
			    <input type="radio" name="gender" class="form-control" value="female">Female</td>
			</tr>
			<tr>
				<th>Date Of Birth</th>
				<td style="color: black"><input type="date" required="" class="form-control" name="date"></td>
			</tr>
			<tr>
				<th>Address</th>
				<td style="color: black"><textarea name="address" required="" class="form-control"></textarea></td>
			</tr>
			<tr>
				<th>Place</th>
				<td style="color: black"><input type="place" required="" class="form-control" name="place"></td>
			</tr>
			<tr>
				<th>Pincode</th>
				<td style="color: black"><input type="text" required="" pattern="[0-9]{6}" class="form-control" name="pincode"></td>
			</tr>
			<tr>
				<th>Phone No:</th>
				<td style="color: black"><input type="text" required="" pattern="[0-9]{10}" class="form-control" name="number"></td>
			</tr>
			<tr>
				<th>Email</th>
				<td  style="color: black"><input type="email"  class="form-control" required="" name="email"></td>
			</tr>
			<tr>
				<th>User Name</th>
				<td style="color: black"><input type="text" required="" class="form-control" name="uname"></td>
			</tr>
			<tr>
				<th>Password</th>
				<td style="color: black"><input type="Password" required="" class="form-control" name="pwd"></td>
			</tr>
			
			<tr>
				<th align="center" colspan="2"><input type="submit" name="registration" value="submit" class="btn btn-success" class="btn btn-success"></th>
			</tr>
		</table>
	</form>
</center>
</div></section>
<?php include 'footer.php' ?>
<?php include 'publicheader.php' ;
if (isset($_POST['login'])) {
	extract($_POST);
	$q="select * from login where username='$uname' and password='$pwd'";
	$res=select($q);
	if (sizeof($res)>0) 
	{
		$_SESSION['login_id']=$res[0]['login_id'];
		$lid=$_SESSION['login_id'];

		if ($res[0]['usertype']=="admin")
		 {
			return redirect('admin_home.php');
		}
		elseif($res[0]['usertype']=="Users")
		{
             $q="select * from users where login_id='$lid'";
             $res=select($q);
             if ($res>0)
              {
             	$_SESSION['user_id']=$res[0]['user_id'];
             	$uid=$_SESSION['user_id'];
             }

			return redirect('user_home.php');
		}
	}
	
else{
			alert('incorrect username and password');
		}
}

?>
  <section id="pageintro" class="hoc clear">
    <div> 
   <center>
	<h1>Login</h1>
	<form method="post">
		<table class="table" style="width: 500px">
			<tr>
				<th>User Name</th>
				<td style="color: black"><input type="text" required=""  class="form-control" name="uname"></td>
			</tr>
			<tr>
				<th>Password</th> 
				<td style="color: black"><input type="Password" required="" lass="form-control" name="pwd"></td>
			</tr>
			<tr>
				<th align="center" colspan="2"><input type="submit" name="login" value="submit" class="btn btn-success"></th>
			</tr>
		</table>
	</form>
</center> 
   
    </div>
  </section>

<?php include 'footer.php' ?>
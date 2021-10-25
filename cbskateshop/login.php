<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">

<!------ Include the above in your HEAD tag ---------->
<div class="login_box">
  <form method = "post" action="">
    <table align="left" width="70%">
      <tr align="left">
        <td colspan="4"><h2>Login.</h2>
          <br />
          <span> Don't have account? <a href="register.php">Register Here</a><br />
          <br />
          </span></td>
      </tr>
      <tr>
        <td width="15%"><b>UserName:</b></td>
        <td colspan="3"><input type="text" name="username" required placeholder="username" /></td>
      </tr>
      <tr>
        <td width="15%"><b>Password:</b></td>
        <td colspan="3"><input type="password" name="password" required placeholder="Password" /></td>
      </tr>
      <tr align="left">
        <td></td>
        <td colspan="4"><input type="submit" name="login" value="Login" /></td>
      </tr>x
  </form> 
</div>

<?php
	$connect = mysqli_connect('localhost','root','','cbskateshop');
	if(!$connect){
echo "<script>alert('Fallen')</script>";	}
	if(isset($_POST['login']))
	{
		$username =$_POST['username'];
		$password = $_POST['password'];
		// Lựa từ bảng User cột username = username nhập từ form và password = password nhập từ form
		$sql = "SELECT * FROM user WHERE username = '$username' AND password ='$password'";
		// Thực thi truy vấn từ database
		$result = mysqli_query($connect, $sql);

		$check_login = mysqli_num_rows($result);

		if ($check_login==0) {
			echo "<script>alert('Password or username is incorrect, please try again!')</script>";
			exit();
		}
		else{
			 echo "<script>alert('You have logged in successfully !')</script>";
			 echo "<script>window.open('index.html','_self')</script>";
		}


	}
?>
</body>
</html>
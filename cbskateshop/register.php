<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
 <div class="register_box">
  <form method = "post" enctype="multipart/form-data">
    <table align="left" width="70%">
      <tr align="left">
        <td colspan="4"><h2>Register.</h2>
          <br />
          <span> Already have account? <a href="login.php">Login Now.</a><br />
            <br />
          </span></td>
        </tr>

        <tr>
          <td width="15%"><b>UserName:</b></td>
          <td colspan="3"><input type="text" name="username" placeholder="UserName" /></td>
        </tr>
        <tr>
          <td width="15%"><b>Password:</b></td>
          <td colspan="3"><input type="password" name="password" placeholder="Password" /></td>
        </tr>     
        <tr>
          <td width="15%"><b>FullName:</b></td>
          <td colspan="3"><input type="text" name="fullname" placeholder="FullName" /></td>
        </tr>   
           
        <tr align="left">
          <td></td>
          <td colspan="4"><input type="submit" name="register" value="Register" /></td>
        </tr>
      </table>
    </form>
  </div>
  <?php  
  if (isset($_POST['register'])) { 
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fullname=$_POST['fullname'];
    $sql="insert into users values (NULL,'$username','$password','$fullname')";
    $result = mysqli_query($connect,$sql);
    if ($result) {
      echo "<script>alert('Account has been created successfully!')</script>";
     echo "<script>window.open('login.php','_self')</script>";
    }
    else{
      echo"<script>alert('Error')</script>";
    }  
  }
  ?>
</div>
</html>
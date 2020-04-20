<!DOCTYPE HTML>
<html lang ="en">
    <head> 
        <meta charset = "UTF-8">
        <meta name ="viewport content="width=device-width", intial-scale="1.0">
        <title>Login Form</title>
    </head>

<body>
<form method="POST">
<div class="content">
  <div class="title">Admin Login Panel</div>
  <input type="text" name="id" placeholder="Name"/>
  <input type="password" name="pw" placeholder="Password"/>
  <button type="submit" name = "b1">Submit</button>
</div>
</form>
</html>


<?php
    include 'connection.php';
    session_start();

    if(isset($_POST['b1']))
    {
        $id = $_POST['id'];
        $pw=$_POST['pw'];
        $query="SELECT * FROM admin where id='$id'&& pass='$pw'";
        $data = mysqli_query($conn,$query);
        $totRec=mysqli_num_rows($data);
        if($totRec==1)
        {
            
          $_SESSION['user_name']=$id;
          $_SESSION['last_login']=time();
          header('location:profile.php');

        }
        else
        {
            echo "Login Failed";
        }

    }

?>

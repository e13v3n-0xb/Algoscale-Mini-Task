<?php
  include_once "connection.php";
?>

<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
<form method="POST">
<div class="content">
  <div class="title">Admin Signup Panel</div>
  <input type="text" name="id" placeholder="username/ID"/>
  <input type="text" name="name" placeholder="Name"/>
  <input type="password" name="pw" placeholder="Password"/>
  <button type="submit" name = "b1">Submit</button>
</div>
</form>
</body>
</html>

<?php
    include_once 'connection.php';
    if(isset($_POST['b1']))
    {
        $id = $_POST['id'];
        $name=$_POST['name'];
        $pass=$_POST['pw'];
         if($id!="" and $pass!="" and $name!="")
        {
            
            $query = "insert into admin values('$id','$name','$pass')";
            $data = mysqli_query($conn,$query);

            if($data)
            {
                header('location:login.php');

            }
        }
        else
        {
          echo "All fields are required";
        }
        
      }
?>

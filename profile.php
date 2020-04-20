<?php 
include_once 'connection.php'
?>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
<form method="POST" action="delete.php">
<?php
session_start();
include 'connection.php';
$username = $_SESSION['user_name'];  
 if(isset($_SESSION['user_name']))  
 {  
   if(time()-$_SESSION['last_login']>50)  
   {  
     header('location:logout.php');  
   }  
   else  
   {  
     $_SESSION['last_login'] = time();  
   }  
 }  
 else  
 {  
   header('location:login.php');  
 }

    $result = $conn->query("select id, name from admin");
    echo "<select name='dropdown'><option>Select</option>";

    while ($row = $result->fetch_assoc()) 
    {
                  unset($id, $name);
                  $id = $row['id'];
                  $name = $row['name']; 
                  echo '<option value="'.$id.'">'.$id.'</option>';
                 
    }

    echo "</select>";
?>

<input name="delete" type="submit"  value="Delete">
</form>
<a href="logout.php">Logout</a> 
</body>
</html>


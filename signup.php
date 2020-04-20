<?php
  include_once "connection.php";
?>

<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
     <style>
            *{
                margin: 0px;
                padding: 0px;
                
            }
            body{
                background-size: cover;
                font-family: sans-serif;
            }
            .box{
                position: absolute;
                left: 50%;
                top: 50%;
                
                transform: translate(-50%,-50%);
                background: rgba(0,0,0,.8);
                width: 400px;
                padding: 40px;
                
                box-sizing: border-box;
                border-radius: 10px;
                
                box-shadow: 0 15px 15px rgba(0,0,0,.5);
            }
            h2
            {
                text-align: center;
                margin: 0 0 30px;
                padding: 0px;
                color: white;
            }
            
            .box .inputbox
            {
                position: relative;
            }
            
            .box .inputbox input
            {
                width: 100%;
                padding: 10px 0;
                font-size: 16px;
                color: white;
                margin-bottom: 10px;
                border: none;
                outline: none;
                background: transparent;
                border-bottom: 1px solid white;
            }
            
            .box .inputbox label
            {
                position: absolute;
                top:0;
                left: 0;
                padding: 10px 0;
                font-size: 16px;
                color: white;
                pointer-events: none;
                transition: .5s;
            }
            
            .box .inputbox input:focus~label,
            .box .inputbox input:valid~label{
                top: -20px;
                left: 0;
                color: deepskyblue;
                font-size: 12px;
            }
            
            .box input[type="submit"]
            {
                margin-top: 10px;
                background: transparent;
                border: none;
                outline: none;
                color: white;
                background: deepskyblue;
                padding: 10px 40px;
                border-radius: 5px;
                cursor: pointer;
            }
            
        </style>
</head>
<body style="background-image: url('images/banner2.jpg');">
        <div class="box" >
            <h2>Admin SignUP Panel</h2>
            
            <form method ="POST">
                <div class="inputbox">
                    <input type="text" name="id" required>
                    <label>Username/ID</label>
                </div>
                <div class="inputbox">
                    <input type="text" name="name" required>
                    <label>Name</label>
                </div>
                <div class="inputbox">
                    <input type="password" name ="pw" required>
                    <label>Password</label>
                </div>
                <input type="submit" name="b1" value="Submit">
              
                
            </form>
        </div>
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

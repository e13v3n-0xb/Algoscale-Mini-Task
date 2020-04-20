<?php
include_once 'connection.php';
if(isset($_POST['dropdown'])) {
    $dropdownlist1 = $_POST['dropdown'];
    $query="DELETE FROM admin WHERE id = '$dropdownlist1' ";
    $data=mysqli_query($conn,$query);
    if($data)
            {
                header('location:profile.php');

            }
            else
            {
                echo "oopsies";
            }

}
?>

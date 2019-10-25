<?php
if(isset($_POST['register'])){
    include 'dbconfig.php';
    $username = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "INSERT INTO `tbl_user`(`username`, `passwd`) VALUES ('$username','$pass')";
    if($conn->query($sql)){
        echo "<h6 class='q1'>User Successfully Created!</h6>";
    }else{
        echo "<h6 id='s1'>Fail to create this user</h6>";
    }
} 
?>
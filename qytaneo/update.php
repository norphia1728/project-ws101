<?php
if (isset($_POST['edit'])) {
    $id=mysqli_real_escape_string($conn,$_POST['id']);
    $uname=mysqli_real_escape_string($conn,$_POST['uname']);
    $pwd=mysqli_real_escape_string($conn,$_POST['passwd']);
    $query = mysqli_query($conn,"UPDATE `tbl_user` SET username = '$uname', passwd = '$pwd' WHERE id = '$id' ");
    if (!$query) {
        echo "Update Failed!";
    }else {
        echo "Update Successful!";
      
        
    }
}
?>
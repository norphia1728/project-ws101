<?php 
    if (isset($_POST['delyes'])) {
        $id=$_POST['del'];
        $query = mysqli_query($conn,"DELETE FROM tbl_user WHERE id = '$id'");
        if (!$query) {
            echo 'Deletion Failed!';
        }else {
            echo 'Successfully Deleted!';
        }
    }
?>
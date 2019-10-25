<?php
require("dbconfig.php");

if(isset($_GET['cb_id'])){
	$id = $_GET['cb_id'];
mysqli_query($conn,"DELETE FROM comments WHERE cb_id='$id'");
header("location: blog.php");
}
mysqli_close($conn);
?>
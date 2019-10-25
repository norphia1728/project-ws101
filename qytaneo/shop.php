
<?php 
session_start();
include 'dbconfig.php';
include 'objects.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Little Bambino's Shop</title>
    <link rel="stylesheet" href="./assets/css/materializecss.min.css">
    <link rel='stylesheet' href='assets/css/style.css' type='text/css' media='all' />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="./assets/icon/flUhRq6tzZclQEJ-Vdg-IuiaDsNc.woff2">
    <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
    <style>
    body{
        background-image: url("./assets/img/bg6.jpg");
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
    }#p3{
        color: white;

    }#s3{
        color: white;
        text-align: center;
    }#wq{
        float: right; 
        margin-top: 10px;
        background-color: transparent;        
        margin-right: 10px;
    }
    </style>
</head>
<body>
<header>
        <nav>
            <div class="nav-wrapper  red accent-3">
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="left hide-on-med-and-down">
                        <li><a href="index.php"><i class="material-icons">home</i></a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="shop.php">Shop</a></li>     
                </ul>
                <?php                
                    if (!isset($_SESSION['username'])) {
                        echo "<a class='btn' href='login.php' style='float: right;  margin-top: 10px;background-color: transparent;margin-right: 10px;' >Login</a>";
                    }else {
                        echo "<a class='btn' href='database.php' style='float: right;  margin-top: 10px;background-color: transparent;margin-right: 10px;'>User's Data</a>";
                    }
                ?>
                <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="#!">one</a></li>
                    <li><a href="#!">two</a></li>
                    <li class="divider" tabindex="-1"></li>
                    <li><a href="#!">three</a></li>
                    <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
                    <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
                  </ul>
            </div>
        </nav>
        <ul class="sidenav" id="mobile-demo">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </header>
    <main>
        <h2 style="text-align: center;font-family:cursive;font-size:300%;color:whitesmoke;">Little Bambino's Shop</h2><br>
        <body>
            
        <div class ="container" align="center">
            
        <div class ="container" style = "background-color:rgba(76, 175, 80, 0.1)">
<div style="width:700px; margin:50 auto;">

<h2></h2>   

<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>

<div class="cart_div">
<a href="cart.php"><img src="assets/img/cart-icon.png" /> Cart<span><?php echo $cart_count; ?></span></a>
</div>
<center>
<?php
}

$result = mysqli_query($conn,"SELECT * FROM `tbl_shop`");
while($row = mysqli_fetch_assoc($result)){
    
        echo "<div class ='container'><div class ='container'>
        <div class='card-panel teal lighten-2'>
			  <form method='post' action=''>
			  <input type='hidden' name='code' value=".$row['prod_code']." />
			  <div class='image'><img src='".$row['img_url']."'style='height: 200px;width: 200px;'  /></div>
			  <div class='name'>".$row['name']."</div>
		   	  <div class='price'>P ".$row['price']."</div>
			  <button type='submit' class='waves-effect waves-light btn'>Buy Now</button>
			  </form>
                 </div></div></div>
                ";
                 
        }
mysqli_close($conn);
?>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>
    
</div>
</center>
<br /><br />

    </div>

</div>
    </main>
    <footer class="page-footer" style="background-color:#4e342e;">            
        <div class="footer-copyright">
            <div class="container">
                <center>All Rights Reserved 2019 © WS101</center>
            </div>
        </div>        
    </footer>
    <script src="./assets/js/materialize-css.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems);
    });
    </script>
    
</body>
</html>
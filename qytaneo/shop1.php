<?php 
include 'dbconfig.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop</title>
    <link rel="stylesheet" href="./assets/css/materializecss.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
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
                <a class='dropdown-trigger btn' href='login.php' data-target='dropdown1' id="wq">Login</a>
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
    <div>
        <h2 style="text-align: center;font-family:cursive;font-size:300%;color:whitesmoke;">Little Bambino's Shop</h2><br>
        <?php
    $query = mysqli_query($conn,"SELECT * FROM tbl_shop");
    while($row = mysqli_fetch_assoc($query)){
    ?>
        <center><div style="color:pink;">
            <span><img src="<?php echo $row['img_url'];?>" alt="Buy Me" style="height: 200px;width: 200px;"></span>
            <label>Item Code: </label>
            <span><?php echo $row['prod_code'];?></span>
            <label>Price: Php </label>
            <span><?php echo $row['price'];?></span>
            <button>Add To Cart</button></div></center>
        <?php
    }
    ?>
    </div>
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
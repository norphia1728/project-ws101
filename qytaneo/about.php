<?php 
include 'dbconfig.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
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
    }#s4{
        color: white;

    }#s2{
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
            <div class="nav-wrapper red accent-3">
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
    <main>
    <?php
    $query = mysqli_query($conn,"SELECT * FROM tbl_profile");
    while($row = mysqli_fetch_assoc($query)){
    ?>
    <p style="text-align:center;color:whitesmoke;font-family:cursive;font-size:160%;font-style:italic;">
                <span style="background-color:black;color:white;"><?php echo $row['name'];?></span></p><hr/>
            <p style="text-align:center;color:rgba(236, 236, 28, 0.767);font-family:'Verdana';font-size:100%;">
                <?php echo $row['address'];?><br>
                Contact No.: <?php echo $row['contact'];?><br>
                E-mail Ad: <?php echo $row['email'];?><br>
            </p>
    <div style="margin-top:90px;">
        <img src="<?php echo $row['img'];?>" width="400" height="450" style="float:right;border-radius: 50%;margin-right:100px;margin-top:-70px;margin-bottom:15px;"></img>
    </div>
    <div style="font-family:'Courier';background-color:coral;color:black;font-size:115%;float:left;margin-left:100px;">
    Sex: Female<br>
    Age: 27 years old<br>
    Date of Birth: February 2, 1992<br>
    Place of Birth: Gingoog City, Misamis Oriental<br>
    Citizenship: Filipino<br>
    Civil Status: Single<br>
    Religion: Roman Catholic<br>
    Language: Cebuano, Tagalog, English<br>
    Father's Name: Elias D. Taneo<br>
    Occupation: Fireman<br>
    Mother's Name: Jacqueline P. Taneo<br>
    Occupation: Pharmacist<br>
    Hobbies & Interest: Baking, Movies, Nature, News, Culture
    </div>
    <?php
    }
    ?>
    </main>

    <footer class="page-footer"  style="background-color:#4e342e;">            
        <div class="footer-copyright">
            <div class="container">
                <center>All Rights Reserved 2019 © WS101</center>
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
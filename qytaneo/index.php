<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="./assets/css/materializecss.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>  
    <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
    <style>
    body{
            background-image: url("./assets/img/bg6.jpg");
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
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
    <div style="margin-top:45px;">
        <marquee scrollamount="13" direction="left" behavior="scroll"><p><center><img src="assets\img\105.jpg" width="150" height="200"><img src="assets\img\106.jpg" width="130" height="200"><img src="assets\img\108.jpg" width="145" height="200"><img src="assets\img\107.jpg" width="120" height="200"><img src="assets\img\102.jpg" width="200" height="200" style="transform:rotate(-90deg);"><br></marquee>
        <marquee scrollamount="10" direction="right" behavior="scroll"><img src="assets\img\103.jpg" width="280" height="200"><img src="assets\img\101.jpg" width="200" height="200" style="transform:rotate(-90deg);"><img src="assets\img\104.jpg" width="200" height="200" style="transform:rotate(-90deg);"></center></p></marquee> 
    </div>
    </main>
    <footer class="page-footer" style="background-color:#4e342e;">            
        <div class="footer-copyright">
            <div class="container">
                <center>All Rights Reserved To Yasel as of 2019 © WS101</center>
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
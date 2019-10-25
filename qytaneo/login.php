
<?php 
include 'dbconfig.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
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
        }#p2{
            color: white;
        }#wq{
            float: right; 
            margin-top: 10px;
            background-color: transparent;        
            margin-right: 10px;
        }
        #s1{
            color: red;
        }
        .q1{
            color: white;
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
    
    <div class="container" style="margin-top:120px;">
        <div class="container">
            <div class="container" style="background-color:white;background: rgba(255, 0, 0, 0.3);border-radius:25px;">
            <br>
            <h4 style="text-align:center;color:whitesmoke;">Login To Your Account</h4>
                <div class="container">
                    <div class="container">
                    
                        <form action="" method="post">
                            <p>
                                <input placeholder="Username" type="text" id="user" name="uname" class="q1">
                            </p>
                            <p>
                                <input placeholder="Password" type="password" id="passwd" name="pwd" class="q1">
                            </p>
                            <p>
                                <button type="submit" name="login" class="waves-effect waves-light btn">Log In</button>
                                <button class="waves-effect waves-light btn modal-trigger" href="#modal1" onclick = "func()" style="float:right;">Register</button>
                            </p>
                        </form>
                        <?php
                            include 'add_user.php';
                            if(isset($_POST['login'])){
                                $sname = $_POST['uname'];
                                $passwd = $_POST['pwd'];
                                $query = mysqli_query($conn,"SELECT username, passwd FROM tbl_user WHERE username ='$sname' AND passwd = '$passwd'");
                                if ($query->num_rows>0) {
                                    session_start();
                                    $_SESSION['uname']=$sname;
                                    $_SESSION['login']=true;
                                    header("location: welcome.php");
                                }else {
                                    echo "<h6 id='s1'>Invalid Username/Password</h6>";
                                }
                            }
                        ?>
                        <br><br>
                    </div>
                </div>    
            </div>
        </div>
    </div>
   <br>
    <div id="modal1" class="modal">
    <div class="modal-content">
    <form class="col s12" method="post" action="login.php">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="username" id="first_name" type="text" class="validate" name="username">
          <label for="first_name">Username</label>
        </div>
        <div class="input-field col s6">
          <input id="password" type="password" class="validate" name="password">
          <label for="last_name">Password</label>
        </div>
    </div>
    
    </div>
    <div class="modal-footer">
      <button class="waves-effect waves-green btn-flat" type="submit" name="register">Save</button>
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
    </form>
  </div>
  <br><br>
    <footer class="page-footer" style="background-color:#4e342e;margin-top:65px;">            
        <div class="footer-copyright">
            <div class="container">
                <center>All Rights Reserved 2019 © WS101</center>
                <?php
                    if ($conn->connect_error) {
                        die(" Not connected to". $conn->connect_error);
                    }else {
                        echo " Connected to ". $db ;
                    }
                ?>
            </div>
        </div>
    </footer>
    <script src="./assets/js/materialize-css.min.js"></script>
    <!-- <script src="./assets/js/scrip.js"></script> -->
    <script >
       
        function func(){
            var elems = document.querySelectorAll('.modal');
            var instances = M.Modal.init(elems, open());
        }
        // document.addEventListener('DOMContentLoaded', function() {
        // var elems = document.querySelectorAll('.sidenav');
        // var instances = M.Sidenav.init(elems);
        // });

        // M.toast({html: 'I am a toast!'})    
        // document.addEventListener('DOMContentLoaded', function() {
        // var elems = document.querySelectorAll('.modal');
        // var instances = M.Modal.init(elems, options);
        // });
    </script>
</body>
</html>


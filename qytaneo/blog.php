<?php 
include 'dbconfig.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="./assets/css/reset.css" rel="stylesheet" type="text/css">
    <link href="styles.css" rel="stylesheet" type="text/css">
    <title>Blog</title>
    <link rel="stylesheet" href="./assets/css/materializecss.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="./assets/icon/flUhRq6tzZclQEJ-Vdg-IuiaDsNc.woff2">
    <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
    <script src=".assets/js/jquery.min.js"></script>
    <script>
        function commentSubmit(){
            if(form1.name.value == '' && form1.comments.value == ''){ //exit if one of the field is blank
                alert('Enter your message !');
            return;
            }
            var name = form1.name.value;
            var comments = form1.comments.value;
            var xmlhttp = new XMLHttpRequest(); //http request instance
    
            xmlhttp.onreadystatechange = function(){ //display the content of insert.php once successfully loaded
            if(xmlhttp.readyState==4&&xmlhttp.status==200){
                document.getElementById('comment_logs').innerHTML = xmlhttp.responseText; //the chatlogs from the db will be displayed inside the div section
            }
        }
        xmlhttp.open('GET', 'ins.php?name='+name+'&comments='+comments, true); //open and send http request
        xmlhttp.send();
    }

    $(document).ready(function(e) {
        $.ajaxSetup({cache:false});
        setInterval(function() {$('#comment_logs').load('logs.php');}, 2000);
    });
    
</script>
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
    <div style="margin-top:45px;margin-bottom:30px;margin-left:80px;">
        <span style="font-family: Impact;background-color:tomato;color:papayawhip;font-size:120%;">Sometimes, God breaks our heart to make us whole.<br>
            He sends us pain so we can be stronger.<br>
            He sends us failure so we can be humble.<br>
            He sends us illness so we can take care of ourselves.<br>
            He takes everything away from us so we can learn the value of everything we have.
        </span>
    </div>
    <div style="margin-top:30px;margin-bottom:30px;margin-left:170px;">
        <span  style="font-family: Arial;font-style:oblique;background-color:palegreen;color:blue;font-size:115%">
            No such thing as the "perfect" man or woman.<br>
            Just find one who tries hard enough to make you<br>
            happy and wants to grow with you.
        </span>
    </div>
    <div style="margin-top:30px;margin-bottom:30px;margin-left:260px;">
        <span style="font-family: Comic Sans MS;background-color:powderblue;font-size:120%">
            Be strong, but not rude. Be kind, but not weak.<br>
            Be humble, but not timid. Be proud, but not arrogant.
        </span>
    </div>
    <div style="margin-top:30px;margin-bottom:30px;margin-left:350px;">
        <span style="font-family: Courier;background-color:crimson;color:white;font-size:125%">
            Don't depend too much on anyone in this world.<br>
            Because even your own shadow leaves you<br>
            when you are in darkness.
        </span>
    </div>
</main>

<div class="container">
<div class="container">
<div class="container"  style="background-color:#FFF;width:50%;padding:10px;margin:20px;margin-left:auto;margin-right:auto;">
    <div class="page_content">
    	<center>Comment</center>
    </div>	
        <div id="comment_input">
            <form name="form1">
        	    <span style="color:black;"><input type="text" name="name" placeholder="Name..."/></span><br><br>
                <textarea name="comments"  style="color:black;" placeholder="Leave Comments Here..." style="width:610px; height:100px;"></textarea><br><br>
                <a href="#" onClick="commentSubmit()" class="button">Post Comment</a><br>
            </form>
        </div>
        <div id="comment_logs" style="margin-top:15px;">
    	    <i>Loading comments...</i>
        </div>
    </div>
</div></div>
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
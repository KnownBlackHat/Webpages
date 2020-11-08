<?php
if($_POST["usr"]){
if ($_POST["usr"]==file_exists(".".$_POST["usr"].".txt")){
    if("Username: ".$_POST["usr"]."\nPassword: ".$_POST["pwd"]==file_get_contents(".".$_POST["usr"].".txt")){
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>TECH TEJAS</title>
        <link rel="icon" href="ss.png"/>
        <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    body{
        margin:5px;padding: 0px;
    color: white;
        font-family: cursive;
        background: url(hacker.webp);
        transition: 1s;
    }
        nav{position: sticky;
        top: 0px;}
    #header{
        font-size: 2em;
        display:flex;
        flex-direction: row;
        justify-content: space-between;
    }
    #dm{
        font-size:1.5em;
        background: black;
        border-radius: 30px;
        text-overflow: none;
    }
    #main{
        text-align: center;
        font-size: 2em;
    }
    li{
        text-align: center;
        font-size: 2em;
    }
    @media (max-width: 600px){
        .right{text-align:none;}
    nav #header{font-size: 1.1em;}
    .menu button{font-size:0.5em;}
    #main{font-size:1em;}
    #dm{font-size: 1em;}
    }
    
    .left{
        text-align: center;
        /* display: inline-block;
        position: absolute;
        left: 1em; */
        padding-top: 3px;
    }
    .mid{
        text-align: center;
        margin: auto;
        width: 25%;
        background: black;
        border-radius: 30px;
        padding-top: 3px;
    }
    .right{
        text-align: center;
        background: black;
        border-radius: 30px;
        margin-top: auto;
        margin-bottom: auto;
        width:4em;
        padding-top: 3px;
    }
    #logo{
        height: 3em;width: 3em;
        border-radius: 50px;border: 2px solid black;
        display: inline;
        animation-name: logo;
        animation-duration: 1s;
        animation-iteration-count: 5;
    }
    @keyframes logo {
        from{
            transform: rotate(0deg);
        }
        to{
            transform: rotate(360deg);
        }
    }
    #main a{
        text-decoration:none;
        color:Yellow;
    }
    
.menu button{background-color:black;border-radius:30px;border:none;color:white;font-family: 'Indie Flower', cursive;font-size:1em;background-color:black;}
.sidenav {
  height: 100%; /* 100% Full-height */
  width: 0%; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 1; /* Stay on top */
  top: 0; /* Stay at the top */
  left: 0;
  background-color: black; /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
}

/* The navigation menu links */
.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 1.5em;
  color: grey;
  display: block;
  transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
  color: #f1f1f1;
}

/* Position and style the close button (top right corner) */
.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 1.5em;
  margin-left: 50px;
}

/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
  transition: margin-left .5s;
  padding: 20px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 1em;}
}
.downl{
    transition: 0.5s;
}
    </style>
    </head>
<body id="od">
    <nav>
        <header id="header">
    <div class="left">
                <img onclick="opensidenav()"src="ss.png" alt="LOGO" id="logo"/>
                <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closesidenav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>
           </div> 
    <div class="mid"><?php
    if ($_POST["usr"]==NULL){
    echo "TECH TEJAS";}
    else{
        echo $_POST["usr"];
    }
    
    ?>
            </div>
    <div class="right">
        <a href="" class="menu">
        <button><i class="fa fa-sign-out"></i></button>
        </a>
        </div>
    </div>
        </header>
    </nav>
    <marquee  scroll-amount=1 id="dm"><font id="amam">The Password of all the files are "hello world"(with spaces)!</font></marquee>
    <p id="main">Click On The Desired File And You Will Be Able To Download It <br><br>
    <a  onclick="return auth()" class="downl" href="GTA_V(ONLINE).zip">GTA_V(Online)</a><br><br><a onclick="return auth()" class="downl"href="J.A.R.V.I.S.zip">J.A.R.V.I.S</a></p><script src="js/index.js"></script>
</body>
</html>
<?php
}
else{
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="ss.png"/>
        <title>LOGIN</title>
        <meta http-equiv="content-type" content="text/html" charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/index.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js/index.js"></script>
            <style>
                    @media (max-width:600px){
            #midcontainer { 
                width: 80%;
            }
        }
        #shpw{
            background:black;
            border: none;
        }
        .fa-eye{
            color:green;
            font-size: 1.5em;
        }
        .fa-eye-slash{
            color:red;
            font-size: 1.5em;
        }
                </style>
    </head>
    <body>
        <header>
            <div class="topcontainer" id="left">
                <img id="logo" src="ss.png"/>
            </div>
            <button class="topcontainer" id="right">
                <a href="#">Create Account</a>
            </button>
        </header>
            <div id="midcontainer">
                <h1><i class="fa fa-fw fa-user"></i>Login</h1><hr><br><form method="post">
                    
                    <input type="text" name="usr" placeholder="User Name" autocomplete="off"id="usrn" class="inpbox" required /><br><font class="error">!!!Incorrect Username Or Password!!!</font><br>
                    <input type="password" name="pwd" placeholder="Password" id="pwdn" class="inpbox"  required/><br><input type="submit" id="subm" class="sub"/><i onclick="spwd()" id='shpw'><i id="hi" class="fa fa-eye-slash"></i></i>
                    <input type="reset" id="rese" class="sub"/><br><br></form>
            </div>
    </body>
</html>
<?php  
}}
else{
    ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="ss.png"/>
        <title>LOGIN</title>
        <meta http-equiv="content-type" content="text/html" charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/index.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js/index.js"></script>
        <style>
        @media (max-width:600px){
            #midcontainer { 
                width: 80%;
            }
        }#shpw{
            background:black;
            border: none;
        }
        .fa-eye{
            color:green;
            font-size: 1.5em;
        }
        .fa-eye-slash{
            color:red;
            font-size: 1.5em;
        }
            </style>
    </head>
    <body>
        <header>
            <div class="topcontainer" id="left">
                <img id="logo" src="ss.png"/>
            </div>
            <button class="topcontainer" id="right">
                <a href="#">Create Account</a>
            </button>
        </header>
            <div id="midcontainer">
                <h1><i class="fa fa-fw fa-user"></i>Login</h1><hr><br><form method="post">
                    
                    <input type="text" name="usr" autocomplete="off" placeholder="User Name" id="usrn" class="inpbox" required /><br><font class="error">!!!Incorrect Username Or Password!!!</font><br>
                    <input type="password" name="pwd" placeholder="Password" id="pwdn" class="inpbox"  required/><br><input type="submit" value="Submit" id="subm" class="sub"/><i onclick="spwd()" id='shpw'><i id="hi" class="fa fa-eye-slash"></i></i>
                    <input type="reset" id="rese" class="sub"/><br><br></form>
            </div>
    </body>
</html>
<?php
}}
else{
    ?>
<!DOCTYPE html>
<html>
    <head>
            <script>
                document.onreadystatechange = function() { 
                if (document.readyState !== "complete") { 
                    document.querySelector("body").style.visibility = "hidden"; 
                    document.querySelector("#loader").style.visibility = "visible"; 
                } else { 
                    document.querySelector("body").style.visibility = "visible"; 
                    document.querySelector("#loader").style.display = "none"; 
                } 
            }</script>
        <link rel="icon" href="ss.png"/>
        <title>LOGIN</title>
        <meta http-equiv="content-type" content="text/html" charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/index.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js/index.js"></script>
    <style>
        @media (max-width:600px){
            #midcontainer { 
                width: 80%;
            }
        }
        #shpw{
            background:black;
            border: none;
        }
        .fa-eye{
            color:green;
            font-size: 1.5em;
        }
        .fa-eye-slash{
            color:red;
            font-size: 1.5em;
        }
        

        #loader{
            background-color: black;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            display: block;
            overflow: hidden;
        }
        #l{
           margin: auto;
           display: block;
           /*position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;*/
        }
    </style>
    </head>
    <body scroll="no" id="body">
        <div id="loader" scroll="no"><img id="l"src="Loading.gif"/></div>
        <header>
            <div class="topcontainer" id="left">
                <img id="logo" src="ss.png"/>
            </div>
            <button class="topcontainer" id="right">
                <a href="#this">Create Account</a>
            </button>
        </header>
            <div id="midcontainer">
                <h1><i class="fa fa-fw fa-user"></i>Login</h1><hr><br><form method="post">
                    
                    <input type="text" name="usr" autocomplete="off" placeholder="User Name" id="usrn" class="inpbox" required /><br><br>
                    <input type="password" name="pwd" placeholder="Password" id="pwdn" class="inpbox"  required/><br><input type="submit" id="subm" class="sub" value="Submit"/><i onclick="spwd()" id='shpw'><i id="hi" class="fa fa-eye-slash"></i></i>
                    <input type="reset" id="rese" class="sub"/><br><br></form>
                    
                    
                    
            </div>
    </body>
</html>
<?php
}?>
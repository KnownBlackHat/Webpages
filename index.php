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
    <style>
    body{background-image: url('hacker.jpg');
        margin:5px;padding: 0px;
    color: white;
        font-family: 'Indie Flower', cursive;
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
    #dm{
        font-size:1em;
    }
    #main{font-size:1em;}
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
    }
    #main a{
        text-decoration:none;
        color:Yellow;
    }
.menu button{background-color:black;border-radius:30px;border:none;color:white;font-family: 'Indie Flower', cursive;font-size:1em;background-color:black;}
    </style>
    </head>
<body>
    <nav>
        <header id="header">
    <div class="left">
                <img src="ss.png" alt="LOGO" id="logo"/>
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
        <button>LOGOUT</button>
        </a>
        </div>
    </div>
        </header>
    </nav>
    <marquee scroll-amount=1 id="dm">The Password of all the files are "hello world"(with spaces)!</marquee>
    <p id="main">Click On The Desired File And You Will Be Able To Download It <br><br><a onclick="return auth()" href="GTA_V(ONLINE).zip">GTA_V(Online)</a><br><br><a onclick="return auth()" href="J.A.R.V.I.S.zip">J.A.R.V.I.S</a></p><script src="js/index.js"></script>
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
            <style>
                    @media (min-width:600px){
            #midcontainer { 
                width: 40%;
            }
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
                <h1>Login</h1><hr><br><form method="post">
                    
                    <input type="text" name="usr" placeholder="User Name" autocomplete="off"id="usrn" class="inpbox" required /><br><font class="error">!!!Incorrect Username Or Password!!!</font><br>
                    <input type="password" name="pwd" placeholder="Password" id="pwdn" class="inpbox" required /><br><br>
                    <input type="submit" class="sub" id="subm"/><input type="reset" id="rese" class="sub"/><br><br>
                </form>
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
        <style>
        @media (min-width:600px){
            #midcontainer { 
                width: 40%;
            }
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
                <h1>Login</h1><hr><br><form method="post">
                    
                    <input type="text" name="usr" autocomplete="off" placeholder="User Name" id="usrn" class="inpbox" required /><br><font class="error">!!!Incorrect Username Or Password!!!</font><br>
                    <input type="password" name="pwd" placeholder="Password" id="pwdn" class="inpbox" required /><br><br>
                    <input type="submit" id="subm" class="sub"/><input type="reset" id="rese" class="sub"/><br><br>
                </form>
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
    <style>
        @media (min-width:600px){
            #midcontainer { 
                width: 40%;
            }
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
                <h1>Login</h1><hr><br><form method="post">
                    
                    <input type="text" name="usr" autocomplete="off" placeholder="User Name" id="usrn" class="inpbox" required /><br><br>
                    <input type="password" name="pwd" placeholder="Password" id="pwdn" class="inpbox" required /><br><br>
                    <input type="submit" id="subm" class="sub"/><input type="reset" id="rese" class="sub"/><br><br>
                </form>
            </div>
    </body>
</html>
<?php
}?>
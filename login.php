<?php

$usererror = $passerror = "";


if ($_SERVER['REQUEST_METHOD']=="POST"){    
    if (empty($_POST["username"])){           
        $usererror="Name is Required";        
    }

    if (empty($_POST["email"])){           
        $emailerror="Email is Required";        
    }

    if(strlen($_POST["pass"]) <= 8){
        $passerror = "Password must be 8 characters long.";
    }
    if($usererror == "" and $passerror == ""){
        $servername = "localhost";
        $usname = "root";
        $pwd = "";
        $database = "db_vit_20bci7085";


$conn = mysqli_connect($servername, $usname, $pwd, $database);

if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

$username = $_POST["username"];
$pass = $_POST["pass"];

$sql = "SELECT * FROM 20bci7085_users WHERE uname = '$username' AND password = '$pass' ";
$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);

    if($count > 0){
        
        header(
            'Location:mainpage.php'
        );
    }else{
        echo "Login unsuccessful. Username/Password is incorrect.";
    }

    }
}


?>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>20BCI7085</title>
    <style>
        body{
            background:url('braille2.jpg');
            background-size: 1550px 800px;
            background-attachment: fixed;
            background-position: center center;
            opacity:95%;
        }
        #box{
            height:200px;;
            border:none;
            padding:40px;
            width:30%;
            position:absolute;
            top:50%;
            left:50%;
            margin-top:-150px;  
            margin-left:-800px; 
            padding-top:20px;
            text-align:center;
            color:purple;
        }
        #error{
            color:black;
        }
        #txtb{
            background-color:black;
            font-size:20px;
            padding:20px;
            width:70%;
            height:30px;
            opacity:60%;
            color:white;
            border-radius:10px;
        }
        
        #submit{
            background-color:white;
            border:none;
            text-align:center;
            width:70%;
            height:30px;
            opacity:60%;
            border-radius:10px;
            font-size:20px;
        }
        #submit:hover{
            background-color:grey;
            opacity:60%;
            color:white;
        }

    </style>
    </head>
    <body>
        <div id="box">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                <input type="textbox" name="username" id="txtb" placeholder="Username" ><span id="error"><?php echo $usererror; ?></span><br><br>
                <input type="textbox" name="pass" id="txtb" placeholder="Password" ><span id="error"><?php echo $passerror; ?></span><br><br>
                <button type="submit" name="submit" id="submit">Sign-in</button>
            </form>
        </div>
    </body>
</html>